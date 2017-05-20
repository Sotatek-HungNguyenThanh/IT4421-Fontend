var SearchController = CartBaseController.extend({

    initialize : function($super,service, $scope, $rootScope) {
        var self = this;
        $super(service);
        this.$rootScope = $rootScope;
        this.search(window.location.href)
    },

    search: function (url) {
        var self = this;
        this.service.search(url)
            .success(function (response) {
                var data = response.data;
                self.query = data.query;
                self.listVariants = data.products;
                _.each(self.listVariants, function (product) {
                    product.images = product.images.split(",");
                });
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

}, ['CartBaseService', "$scope", "$rootScope"]);
myApp.controller('SearchController', SearchController);