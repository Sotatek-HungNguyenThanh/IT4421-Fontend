var CartBaseController = BaseController.extend({

    initialize : function($super, service) {
        $super(service);
    },

    getCart: function () {
        this.service.getCart()
            .success(this.onReceiveDataCart.bind(this))
            .error(this.onError.bind(this));
    },

    onReceiveDataCart: function(response){
        this.listVariants = response.data;
        this.getTotalOrder();
        this.getQuantityProduct();
    },

    getTotalOrder: function () {
        this.totalPriceOrder = _.reduce(this.listVariants, function (memo, variant) {
            return memo + parseInt(variant.total);
        }, 0);
        return this.totalPriceOrder;
    },

    getQuantityProduct: function () {
        this.quantityProduct = _.allKeys(this.listVariants).length;
    },

    plusVariant: function(variant){
        variant.quantity = parseInt(variant.quantity) + 1;
        this.updateVariant(variant);
    },

    minusVariant: function(variant){
        if(parseInt(variant.quantity) > 1) {
            variant.quantity = parseInt(variant.quantity) - 1;
            this.updateVariant(variant);
        }
    },

    updateVariant: function (variant) {
        var data = {
            product: variant.product,
            quantity: variant.quantity,
            variant_id: variant.variant_id,
            total: variant.quantity * variant.price,
        };
        var self = this;
        this.service.updateVariant(data)
            .success(function (response) {
                self.$rootScope.$broadcast('loadingCart');
            })
            .error(this.onError.bind(this));
    },

    removeVariant: function (variant) {
        var data = {
            product: variant.product,
            quantity: variant.quantity,
            variant_id: variant.variant_id,
            total: variant.quantity * variant.price,
        };
        var self = this;
        this.service.removeVariant(data)
            .success(function (response) {
                self.listVariants = _.without(self.listVariants, variant);
                self.$rootScope.$broadcast('loadingCart');
            })
            .error(this.onError.bind(this));
    },
}, ['CartBaseService']);
myApp.controller('CartBaseController', CartBaseController);