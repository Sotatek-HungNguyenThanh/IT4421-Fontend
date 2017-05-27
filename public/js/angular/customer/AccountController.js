var AccountController = Controller.extend({
    isUpdateStartDate: 1,
    isUpdateEndDate: 0,
    url: '/get-list-order',
    pageNo: 1,
    perPage: 10,
    pageCount: 1,
    rowNull: 0,
    initialize : function($super,service) {
        $super(service);
        this.getAccountInfo();
        this.rows = [];
        this.daterange = "";
        this.setDurationMonths(1);
        this.list(this.pageNo);
    },

    getAccountInfo: function () {
        this.service.getAccountInfo()
            .success(this.onReceiveData.bind(this))
            .error(this.onError.bind(this));
    },

    onReceiveData: function (data) {
        this.email = data.email;
        this.fullname = data.fullname;
        this.phone_number = data.phone_number;
        this.address = data.address;
    },

    list: function (page) {
        this.loading(true);
        this.service.getListOrder(page, this.perPage, this.daterange)
            .success(this.onReceiveDataList.bind(this))
            .error(this.onError.bind(this));
    },

    onReceiveDataList: function (response) {
        this.loading(false);
        var data = response.data;
        if(!data){
            this.rowNull = this.perPage;
            return;
        }
        this.pageCount = Math.ceil(data.total / this.perPage);
        this.row = [];
        this.rows = data.orders;
        console.log(this.rows);
        this.rowNull = this.rows.length ? this.perPage - this.rows.length : this.perPage;
    },

    goToPage : function(page) {
        if(page > 0 && page <= this.pageCount) {
            this.pageNo = page;
            this.list(this.paBaseControllergeNo);
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
        this.startDate = this.formatDate(startDate);
        this.endDate = this.formatDate(endDate);
        this.daterange = this._formatDate(this.startDate) + "-" + this._formatDate(this.endDate)

    },

    formatDate: function(date) {
        return date.getFullYear() + '/' + (date.getMonth() + 1) + '/' + date.getDate();
    },

    _formatDate: function(time) {
        var date = new Date(time)
        return ((date.getMonth() + 1) < 10 ? "0" +(date.getMonth() + 1) : (date.getMonth() + 1)) + "/" + (date.getDate() < 10 ? "0" + date.getDate() : date.getDate()) + "/"+  date.getFullYear();
    },


}, ['BaseService']);
myApp.controller('AccountController', AccountController);