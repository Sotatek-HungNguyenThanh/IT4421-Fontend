var OrderController = PaginationController.extend({
    isUpdateStartDate: 1,
    isUpdateEndDate: 0,
    url: '/admin/get-all-order',
    pageNo: 1,
    perPage: 10,
    pageCount: 1,
    rowNull: 0,
    initialize : function($super, service, $rootScope, $scope) {
        $super(service);
        this.rows = [];
        this.daterange = "";
        this.customer_id = null;
        this.$rootScope = $rootScope;
        this.setDurationMonths();
        this.list(this.pageNo);
    },

    list: function (page) {
        this.loading(true);
        this.service.getAllOrder(page, this.perPage, this.daterange, this.customer_id)
            .success(this.onReceiveData.bind(this))
            .error(this.onError.bind(this));
    },


    onReceiveData: function ($super, response) {
        $super(response);
        var data = response.data;
        this.rows = data.orders;
    },

    isDestroy: function (status) {
        return status == "Deleted";
    },

    isActive: function (status) {
        return status == "Active";
    },

    search: function () {
        this.loading(true);
        this.service.list(this.url, null, null, this.key_word)
            .success(this.onReceiveData.bind(this))
            .error(this.onError.bind(this));
    },

    onPikadaySelect: function (pikaday, type) {
        if(type == this.isUpdateStartDate){
            this.startDate = pikaday.toString();
            this.updateStartDate();
            this.updateEndDate();
        }else {
            this.endDate = pikaday.toString();
            this.updateStartDate();
            this.updateEndDate();
        }
        this.daterange = this._formatDate(this.startDate) + "-" + this._formatDate(this.endDate);
        this.list(1);
    },

    updateStartDate: function() {
        var startDateTmp = new Date(this.startDate);
        this.startPicker.setStartRange(startDateTmp);
        this.endPicker.setStartRange(startDateTmp);
        this.endPicker.setMinDate(startDateTmp);
    },
    updateEndDate: function() {
        var endDateTmp = new Date(this.endDate);
        this.startPicker.setEndRange(endDateTmp);
        this.startPicker.setMaxDate(endDateTmp);
        this.endPicker.setEndRange(endDateTmp);
    },

    setDurationMonths: function() {
        var endDate = new Date();
        var startDate = new Date(endDate);
        startDate.setDate(1);
        // eg: duration 6 months, 2016/08/30 -> 2016/02/30
        // js will convert 2016/02/30 to 2016/03/01
        // correct date is the end of Feb 2016/02/29
        // if (startDate.getDate() < endDate.getDate()) {
        //     startDate.setDate(0);
        // }
        this.startDate = this.formatDate(startDate);
        this.endDate = this.formatDate(endDate);
        this.daterange = this._formatDate(this.startDate) + "-" + this._formatDate(this.endDate);
    },

    formatDate: function(date) {
        return date.getFullYear() + '/' + (date.getMonth() + 1) + '/' + date.getDate();
    },

    updateStatusOrder: function (row) {
        var self = this;
        this.service.updateStatusOrder(row.id, row.status)
            .success(function (response) {

            })
            .error(function (err) {

            })
    },

    _formatDate: function(time) {
        var date = new Date(time);
        return ((date.getMonth() + 1) < 10 ? "0" +(date.getMonth() + 1) : (date.getMonth() + 1)) + "/" + (date.getDate() < 10 ? "0" + date.getDate() : date.getDate()) + "/"+  date.getFullYear();
    },
}, ['AdminService', "$rootScope", "$scope"]);
adminApp.controller('OrderController', OrderController);