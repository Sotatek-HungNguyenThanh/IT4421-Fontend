var CartController = BaseController.extend({

    initialize : function($super,service) {
        $super(service);
        this.getCart();

    },

    getCart: function () {
        var self = this;
        this.service.getCart()
            .success(function (response) {
                self.listVariants = response.data;
                self.getTotalOrder();
            })
            .error(function (error) {

            });
    },

    getTotalOrder: function () {
        this.totalPriceOrder = _.reduce(this.listVariants, function (memo, variant) {
            return memo + parseInt(variant.total);
        }, 0);
        return this.totalPriceOrder;
    }

}, ['BaseService']);
myApp.controller('CartController', CartController);