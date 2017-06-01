var HomeController = Controller.extend({
    quantityNewProduct: 12,

    initialize : function($super,service, $rootScope, $scope) {
        var self = this;
        $super(service);
        this.$rootScope = $rootScope;
        this.getListNewProduct(this.quantityNewProduct);
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

    getListNewProduct: function(quantity){
        var self = this;
        this.service.getListNewProduct(quantity)
            .success(function (data) {
                self.newProducts = data.data;
                _.each(self.newProducts, function (item) {
                    item.product.images = item.product.images.split(",");
                });
                self.fourNewProducts = _.first(self.newProducts, 4);
            })
            .error(this.onError.bind(this));
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


}, ['CartService', "$rootScope", "$scope"]);
myApp.controller('HomeController', HomeController);