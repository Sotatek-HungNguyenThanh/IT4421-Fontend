var AddProductController = BaseController.extend({

    initialize : function($super, service) {
        $super(service);
        this.options = [];
        this.listOptionpAproved = [];
        this._variants = [];
        this.variants = [];
        this.visibilityFormAddVariants = false;
        this.listOption = [];

        this.options.push({
            name: "",
            variants: [],
            input_variant: "",
        });

        this.getListSupplier();
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
    cancelAddVariants : function(){
        this.visibilityFormAddVariants = false;
    },

    addVariant: function (option) {
        var self = this;
        if(this.isNull(option.input_variant)){
            return;
        }
        if(_.find(option.variants, function(variant){
            return variant.name == option.input_variant
        })){
            option.input_variant = "";
            return;
        };

        option.variants.push({
            name : option.input_variant
        });
        option.input_variant = "";
    },

    removeVariant: function (option, variant) {
        option.variants = _.without(option.variants, variant);
    },

    addRowOption: function () {
        this.options.push({
            name: "",
            variants : [

            ],
            input_variant: "",
        });
    },

    createProduct:function(){
        this.description = $('.note-editable').html();
        this.statusCreateProduct = true;

        this.isUpdateImages = !((listImages.length != 0 ) && this.statusCreateProduct);

        this.createVariants();

        var optionsValid = this.getValidOption();
        var data = {
            title: this.title,
            description: $(".note-editable").html(),
            images: listImages,
            supplier: this.supplier,
            listOption: _.pluck(optionsValid, 'name'),
            variants: JSON.stringify(this.variants),
            originalPrice: this.originalPrice.replace(/,/g, ""),
            sellingPrice: this.sellingPrice.replace(/,/g, ""),
            options: JSON.stringify(optionsValid)
        };
        this.service.createProduct(data)
            .success(function (data) {
                console.log(data)
            })
            .error(function () {

            });
    },

    createVariants: function () {
        var self = this;
        self.variants = [];
        var options = self.getValidOption();
        if(options.length == 1){
            _.each(options[0].variants, function (variant) {
                self.variants.push([{
                    name: options[0].name,
                    value: variant.name,
                }]);
            });
        }else {
            _.each(options, function (option) {
                if (!self.isNull(option.name)) {
                    self.getOtherVariantOption(option.name);
                    _.each(option.variants, function (variant) {
                        _.each(self._variants, function (_variant) {
                            self.variants.push([
                                {
                                    name: option.name,
                                    value: variant.name,
                                },
                                {
                                    name: _variant.name_option,
                                    value: _variant.name_variant,
                                }
                            ])
                        });
                    });
                }
                self._variants = [];
            });
        }
    },

    getOtherVariantOption: function(name){
        var self = this;
        if(self.isNull(name)){
            return;
        }

        self.listOptionpAproved.push({name : name});
        var options = self.getValidOption();
        var otherOptions = _.reject(options, function(option){
            return ((option.name == name) || self.isNull(option.name));
        });

        _.each(otherOptions, function (otherOption) {
            if(!_.find(self.listOptionpAproved, function(optionAproved){
                return optionAproved.name == otherOption.name;
            })){
                var _variants = _.pluck(otherOption.variants, 'name');
                _.each(_variants, function (variant) {
                    self._variants.push({name_option: otherOption.name, name_variant: variant})
                });
            }
        });
    },


    getValidOption: function () {
        var self = this;
        return _.filter(self.options, function(option){
            return (!self.isNull(option.name)) && (option.variants.length > 0);
        });
    },

    removeOption: function (option) {
        if(this.visibilityFormAddVariants && this.options.length > 1)
            this.options = _.without(this.options, option);
    },

    visibilityAddVariants: function () {
        if(this.visibilityFormAddVariants){
            this.options.push({
                name: "",
                variants : [

                ],
                input_variant: "",
            });
        }else {
            var tmp = _.first(this.options);
            this.options = [];
            this.options.push(tmp);
        }
    },

}, ['AdminService']);
adminApp.controller('AddProductController', AddProductController);