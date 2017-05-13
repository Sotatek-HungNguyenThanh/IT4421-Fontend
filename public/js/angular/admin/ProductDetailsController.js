var ProductDetailsController = BaseController.extend({

    initialize : function($super, service, $rootScope, $scope) {
        $super(service);
        this.getProduct(window.location.href);
        this.getListSupplier();

    },

    getProduct: function (url) {
        var self = this;
        this.service.getProduct(url)
            .success(function (response) {
                var data = JSON.parse(response.data);
                console.log(data);
                self.product = data.product;
                self.supplier = JSON.stringify(data.supplier);
                self.variants = data.variants;
                console.log(JSON.stringify(self.variants));
                self.listImages = self.product.images.split(",");
                $(".note-editable").append(self.product.description);
                self.title = self.product.title;
                self.originalPrice = self.product.originalPrice;
                self.sellingPrice = self.product.sellingPrice;
            })
            .error(function () {

            });
    },
    getListSupplier: function () {
        var self = this;
        this.service.list('/admin/get-list-suppliers', null, null, null)
            .success(function (data) {
                self.listSupplier = data.data;
            })
            .error(function () {

            });
    },

    removeImage: function (image) {
        this.listImages = _.without(this.listImages, image);
    },

    removeVariant: function (variant) {
        var self = this;
        this.service.removeVariant(variant)
            .success(function () {
                self.getProduct(window.location.href);
                self.getListSupplier();
            })
            .error(function (err) {

            })
    },

    isDestroy: function (status) {
        return status == "deleted";
    },

    isActive: function (status) {
        return status == "active";
    },

    updateProduct: function () {
        this.description = $('.note-editable').html();
        this.statusCreateProduct = true;

        this.isUpdateImages = !((listImages.length != 0 ) && this.statusCreateProduct);

        _.each(this.variants, function (variant) {
            variant.original_price = ("" + variant.original_price).replace(/,/g, "");
            variant.selling_price = ("" + variant.selling_price).replace(/,/g, "");
        });

        var data = {
            id: this.product.id,
            title: this.title,
            description: $(".note-editable").html(),
            images: listImages,
            images_old: this.listImages,
            supplier: this.supplier,
            variants: JSON.stringify(this.variants)
        };
        this.service.updateProduct(data)
            .success(function (data) {
                var response = JSON.parse(data.data);
                console.log(response);
            })
            .error(function () {

            });
    }


}, ['AdminService', '$rootScope', '$scope']);
adminApp.controller('ProductDetailsController', ProductDetailsController);