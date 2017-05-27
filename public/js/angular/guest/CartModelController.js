var CartModelController = LogicCartController.extend({

    initialize : function($super,service, $scope, $rootScope) {
        var self = this;
        $super(service);
        this.$rootScope = $rootScope;
        this.isJustUpdate = false;
        $scope.$on('loadingCart', function (event, args) {
            self.getCart();
        });
        $scope.$on('addNameVariant', function (event, args) {
            self.newVariant = args.name;
            self.isJustUpdate = true;
        });

    },

    hideMessageJustUpdate: function (time) {
        this.isJustUpdate = false;
    }

}, ['CartService', "$scope", "$rootScope"]);
myApp.controller('CartModelController', CartModelController);