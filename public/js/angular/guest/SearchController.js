var SearchController = LogicCartController.extend({

    initialize : function($super,service, $scope, $rootScope) {
        var self = this;
        $super(service);
        self.$rootScope = $rootScope;
        self.search(window.location.href)
    },

    search: function (url) {
        var self = this;
        this.service.search(url)
            .success(function (response) {
                var data = response.data;
                self.query = data.query;
                self.listVariants = data.products;
                _.each(self.listVariants, function (item) {
                    item.product.images = item.product.images.split(",");
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

}, ['CartService', "$scope", "$rootScope"]);
myApp.controller('SearchController', SearchController);