var ManageOrderController = BaseController.extend({
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
        this.setDurationMonths(1);
        this.list(this.pageNo);
    },

    list: function (page) {
        this.loading(true);
        this.service.getAllOrder(page, this.perPage, this.daterange, this.customer_id)
            .success(this.onReceiveData.bind(this))
            .error(this.onError.bind(this));
    },

    onReceiveData: function (response) {
        this.loading(false);
        var data = response.data;
        if(!data){
            this.rowNull = this.perPage;
            return;
        }
        this.pageCount = Math.ceil(data.total / this.perPage);
        this.row = [];
        this.rows = data.orders;
        this.rowNull = this.rows.length ? this.perPage - this.rows.length : this.perPage;
    },

    goToPage : function(page) {
        if(page > 0 && page <= this.pageCount) {
            this.pageNo = page;
            this.list(this.pageNo);
        }
    },

    isValidPage: function(page) {
        var maxPage = 5;
        if(page > 0 && page <= this.pageCount){
            if(this.pageNo > 3){
                var left = this.pageNo - 2;
                var right = this.pageNo + 2;
                if(right > this.pageCount)
                {
                    right = this.pageCount;
                    left = this.pageCount - 4;
                }
                if(left <= page && page <= right)
                {
                    return true;
                }
                return false;
            }
            if (page > maxPage)
            {
                return false;
            }
            return true;
        }
        return false;
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
        console.log(this.startDate);
        console.log(moment(this.startDate, "DD/MM/YYYY"))
        this.daterange = moment(this.startDate, "DD/MM/YYYY") + "-" + moment(this.endDate, "DD/MM/YYYY");
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

    setDurationMonths: function(month) {
        var endDate = new Date();
        var startDate = new Date(endDate);
        startDate.setDate(1);
        // eg: duration 6 months, 2016/08/30 -> 2016/02/30
        // js will convert 2016/02/30 to 2016/03/01
        // correct date is the end of Feb 2016/02/29
        // if (startDate.getDate() < endDate.getDate()) {
        //     startDate.setDate(0);
        // }

        this.daterange = moment(this.startDate, "DD/MM/YYYY") + "-" + moment(this.endDate, "DD/MM/YYYY");
        this.startDate = this.formatDate(startDate);
        this.endDate = this.formatDate(endDate);
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
    }
}, ['AdminService', "$rootScope", "$scope"]);
adminApp.controller('ManageOrderController', ManageOrderController);