var CartModelController = CartBaseController.extend({

    initialize : function($super,service, $scope, $rootScope) {
        var self = this;
        $super(service);
        this.$rootScope = $rootScope;
        $scope.$on('loadingCart', function (event, args) {
            self.getCart();
        });
        $scope.$on('addVariant', function (event, args) {
            self.newVariant = args.name;
        });

    },

}, ['CartBaseService', "$scope", "$rootScope"]);
myApp.controller('CartModelController', CartModelController);