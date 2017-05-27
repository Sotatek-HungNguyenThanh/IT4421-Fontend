var CartController = LogicCartController.extend({

    initialize : function($super,service, $scope, $rootScope) {
        var self = this;
        $super(service);
        this.getCart();
        this.$rootScope = $rootScope;
        $scope.$on('loadingCart', function (event, args) {
            self.getCart();
        });
    },

}, ['CartService', "$scope", "$rootScope"]);
myApp.controller('CartController', CartController);