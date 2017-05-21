var ProductDetailController = ProductPreviewController.extend({
    initialize : function(service, $scope, $rootScope) {
        this.service = service;
        this.$scope = $scope;
        this.$rootScope = $rootScope;
        var self = this;
        self.getProductByUrl(window.location.href);
    },

    getProductByUrl: function (url) {
        var self = this;

        this.service.getProductByUrl(url)
            .success(function (response) {
                var data = response.data;
                self.product = data.product;
                self.variants = data.variants;
                self.product.images = data.product.images.split(",");
                self.listOptions = [];
                var listOptions = self.product.options.split(",");
                _.each(listOptions, function (option) {
                    var variant = self.getVariantDefault(option);
                    self.listOptions.push({name: option, value: variant.value});
                });
                self.getPriceProduct();
                self.quantity = 1;
            })
            .error(this.onError.bind(this));
    }
}, ['BaseService', "$scope", "$rootScope"]);
myApp.controller('ProductDetailController', ProductDetailController);