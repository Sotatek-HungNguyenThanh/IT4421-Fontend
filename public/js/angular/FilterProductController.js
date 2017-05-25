var FilterProductController = CartBaseController.extend({
    pageNo: 1,
    perPage: 16,
    pageCount: 1,
    sort: "",
    category: "",
    key_word : "",

    initialize : function($super,service, $rootScope, $scope) {
        var self = this;
        $super(service);
        self.getCategory();
        this.$rootScope = $rootScope;
        this.filterProduct();
        self.getCart();
        $scope.$on('loadingCart', function (event, args) {
            self.getCart();
        });
    },

    getCart: function () {
        var self = this;
        self.service.getCart()
            .success(function (response) {
                var listVariants = response.data;
                self.quantityProduct = _.allKeys(listVariants).length;
            })
            .error(function (error) {

            });
    },

    filterProduct: function(){
        var self = this;
        var data = {
            key_word: this.key_word,
            page_no : this.pageNo,
            per_page: this.perPage,
            category: this.category
        };
        this.service.filterProduct(data)
            .success(function (data) {
                var data = data.data;
                self.rows = data.products;
                _.each(self.rows, function (item) {
                    item.product.images = item.product.images.split(",");
                });
                console.log(self.rows)
            })
            .error(this.onError.bind(this));
    },

    getCategory: function () {
        var url = window.location.href.split("/");
        this.category = url[url.length - 1];
    },

    showProductPreview: function (product) {
        var self = this;
        this.service.getProductByID(product.id)
            .success(function (response) {
                var data = response.data;
                data.product.images = data.product.images.split(",");
                self.$rootScope.$broadcast('showProductPreview', {data: data});
            })
            .error(this.onError.bind(this));
    },

}, ['CartBaseService', "$scope", "$rootScope"]);
myApp.controller('FilterProductController', FilterProductController);