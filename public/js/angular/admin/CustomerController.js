var CustomerController = PaginationController.extend({
    url: '/admin/get-list-customer',
    pageNo: 1,
    perPage: 10,
    pageCount: 1,
    rowNull: 0,
    initialize : function($super, service, $rootScope, $scope) {
        $super(service);
        this.rows = [];
        this.key_word = "";
        this.$rootScope = $rootScope;
        this.list(this.pageNo);
    },

    onReceiveData: function ($super, response) {
        $super(response);
        var data = response.data;
        this.rows = data.customers;
    },

    isDestroy: function (status) {
        return status == "Deleted";
    },

    isActive: function (status) {
        return status == "Active";
    },

    removeCustomer: function (row) {
        var self = this;
        this.loading(true);
        this.service.removeCustomer(row.id)
            .success(function (data) {
                self.loading(false);
                row.status = row.status == "Deleted" ? "Active" : "Deleted";
            })
            .error(this.onError.bind(this));
    },

    search: function () {
        this.loading(true);
        this.service.list(this.url, null, null, this.key_word)
            .success(this.onReceiveData.bind(this))
            .error(this.onError.bind(this));
    }
}, ['AdminService', "$rootScope", "$scope"]);
adminApp.controller('CustomerController', CustomerController);