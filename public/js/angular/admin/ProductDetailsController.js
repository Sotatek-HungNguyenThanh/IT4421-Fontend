var ProductDetailsController = BaseController.extend({

    initialize : function($super, service, $rootScope, $scope) {
        $super(service);
        this.getProduct(window.location.href);
        this.getListSupplier();
        this.imagesNewVariants = [];

    },

    getProduct: function (url) {
        var self = this;
        this.service.getProduct(url)
            .success(function (response) {
                var data = JSON.parse(response.data);
                self.product = data.product;
                self.supplier = JSON.stringify(data.supplier);
                self.variants = data.variants;
                self.listImages = self.product.images.split(",");
                self.description = self.product.description;
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
                var listSupplier = JSON.parse(data.data)
                self.listSupplier = listSupplier.suppliers;
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
        var self = this;
        this.statusCreateProduct = true;
        this.isUpdateImages = (this.listImages.length == 0 && ((listImages.length == 0 )) && this.statusCreateProduct);
        if(this.isNull(this.title) ||
            this.isNull(this.description) ||
            (this.listImages.length == 0 &&
            listImages.length == 0 ) ||
            this.isNull(this.supplier)
        ){
            return;
        }
        _.each(this.variants, function (variant) {
            variant.original_price = ("" + variant.original_price).replace(/,/g, "");
            variant.selling_price = ("" + variant.selling_price).replace(/,/g, "");
        });

        var data = {
            id: this.product.id,
            title: this.title,
            description: this.description,
            images: listImages,
            images_old: this.listImages,
            supplier: this.supplier,
            variants: JSON.stringify(this.variants),
            imagesNewVariants: this.imagesNewVariants

        };
        this.loading(true);
        this.service.updateProduct(data)
            .success(function (data) {
                self.loading(false);
                var response = JSON.parse(data.data);
                console.log(response);
            })
            .error(function () {

            });
    },

    chooseImageVariant: function (variant, img) {
        var self = this;
        this.imageID = img;
        this._variantID = variant.id;
        $("#imageVariant").click();
        $("#imageVariant").change(function(){
            self.loadImageVariant(this);
        });
    },

    loadImageVariant: function (input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var self = this;
            reader.onload = function (e) {
                $("#" + self.imageID).attr("src", e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
           this.imagesNewVariants.push({id: this._variantID, file: input.files[0]});
        }
    }


}, ['AdminService', '$rootScope', '$scope']);
adminApp.controller('ProductDetailsController', ProductDetailsController);