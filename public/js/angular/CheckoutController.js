var CheckoutController = CartBaseController.extend({

    initialize : function($super,service, $scope, $rootScope) {
        var self = this;
        $super(service);
        this.$rootScope = $rootScope;
        this.$scope = $scope;
        self.getCart();
        $scope.$on('loadingCart', function (event, args) {
            self.getCart();
        });
    },

    createOrder: function () {
        var self = this;
        if(!this.$scope.formCheckout.$valid){
            return;
        }
        if(this.listVariants.length == 0){
            return;
        }
        var data = {
            customer : this.customer,
            variants : this.listVariants,
            total : this.totalPriceOrder
        };

        this.service.createOrder(data)
            .success(function (response) {
                self.$rootScope.$broadcast('loadingCart');
                self.customer = undefined;
            })
            .error(this.onError.bind(this));
    }

}, ['CartBaseService', "$scope", "$rootScope"]);
myApp.controller('CheckoutController', CheckoutController);