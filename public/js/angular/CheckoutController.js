var CheckoutController = CartBaseController.extend({

    initialize : function($super,service, $scope, $rootScope) {
        var self = this;
        $super(service);
        this.$rootScope = $rootScope;
        this.$scope = $scope;
        self.getCart();
        self.isCheckout = true;
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
                console.log(response);
                self.$rootScope.$broadcast('loadingCart');
                self.isCheckout = false;
            })
            .error(this.onError.bind(this));
    }

}, ['CartBaseService', "$scope", "$rootScope"]);
myApp.controller('CheckoutController', CheckoutController);