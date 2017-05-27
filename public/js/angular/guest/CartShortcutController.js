var CartShortcutController = LogicCartController.extend({

    initialize : function($super,service, $scope, $rootScope) {
        var self = this;
        $super(service);
        self.getCart();
        this.$rootScope = $rootScope;
        $scope.$on('loadingCart', function (event, args) {
            self.getCart();
        });

    },

}, ['CartService', "$scope", "$rootScope"]);
myApp.controller('CartShortcutController', CartShortcutController);