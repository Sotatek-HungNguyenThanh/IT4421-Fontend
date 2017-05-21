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

        var data = {
            customer : this.customer,
            variants : this.listVariants,
            total : this.totalPriceOrder
        };

        this.service.createOrder(data)
            .success(function (response) {
                if(!response.data) {
                    self.notification(false, "Số hàng trong kho không đủ :((");
                }else {
                    self.$rootScope.$broadcast('loadingCart');
                    self.isCheckout = false;
                }
            })
            .error(this.onError.bind(this));
    },

}, ['CartBaseService', "$scope", "$rootScope"]);
myApp.controller('CheckoutController', CheckoutController);