var ManageProductController = BaseController.extend({
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

    list: function (page) {
        this.loading(true);
        this.service.list(this.url, page, this.perPage, this.key_word)
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
        this.rows = data.data;
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
        console.log(id);
        this.$rootScope.$broadcast('showProductDetails', {id : id});
    },

    search: function () {
        this.loading(true);
        this.service.list(this.url, null, null, this.key_word)
            .success(this.onReceiveData.bind(this))
            .error(this.onError.bind(this));
    }
}, ['AdminService', "$rootScope", "$scope"]);
adminApp.controller('ManageProductController', ManageProductController);