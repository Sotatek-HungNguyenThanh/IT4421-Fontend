var CheckoutController = LogicCartController.extend({

    initialize : function($super,service, $scope, $rootScope) {
        var self = this;
        $super(service);
        this.$rootScope = $rootScope;
        this.$scope = $scope;
        self.getCart();
        if($("#user-info").val() == "1")
            self.getAccount();
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

    getAccount: function () {
        var self = this;
        this.service.getAccountInfo()
            .success(function (data) {
                self.customer = {
                    email: data.email,
                    fullname: data.fullname,
                    phone_number: data.phone_number,
                    address: data.address
                }
            })
            .error(this.onError.bind(this));
    }

}, ['CartService', "$scope", "$rootScope"]);
myApp.controller('CheckoutController', CheckoutController);