var ProductController = PaginationController.extend({
    url: '/admin/get-list-product',
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
        this.rows = data.products;
    },

    isDestroy: function (status) {
        return status == "deleted";
    },

    isActive: function (status) {
        return status == "active";
    },

    removeProduct: function (product) {
        var self = this;
        this.loading(true);
        this.service.removeProduct(product.id)
            .success(function (data) {
                self.loading(false);
                product.status = product.status == "deleted" ? "active" : "deleted";
            })
            .error(this.onError.bind(this));
    },

    showProductDetails: function (id) {
        this.$rootScope.$broadcast('showProductDetails', {id : id});
    },

    search: function () {
        this.loading(true);
        this.service.list(this.url, null, null, this.key_word)
            .success(this.onReceiveData.bind(this))
            .error(this.onError.bind(this));
    }
}, ['AdminService', "$rootScope", "$scope"]);
adminApp.controller('ProductController', ProductController);