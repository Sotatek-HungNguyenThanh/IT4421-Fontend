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
        if(!this.$scope.formCheckout.$valid){
            return;
        }
        var data = {
            customer : this.customer,
            variants : this.listVariants,
            total : this.totalPriceOrder
        };

        this.service.createOrder(data)
            .success(function (response) {
                console.log(response.data);
            })
            .error(this.onError.bind(this));
    }

}, ['CartBaseService', "$scope", "$rootScope"]);
myApp.controller('CheckoutController', CheckoutController);