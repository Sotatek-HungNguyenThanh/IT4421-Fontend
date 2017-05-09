var ProductController = BaseController.extend({

    initialize : function($super, service) {
        $super(service);
        this.options = [];
        this.listOptionpAproved = [];
        this._variants = [];
        this.variants = [];
    },
    cancelAddVariants : function(){
        this.visibilityFormAddVariants = false;
    },
    showFromAddVariants: function () {
        this.visibilityFormAddVariants = true;
        this.options.push({
            name: "",
            variants : [

            ],
            input_variant: "",
        });
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

    saveProduct:function(){
        this.createVariants();
    },

    createVariants: function () {
        var self = this;
        self.variants = [];
        var options = self.getValidOption();
        if(options.length == 1){
            _.each(options[0].variants, function (variant) {
                self.variants.push({
                    name: variant.name
                });
            });
        }else {
            _.each(options, function (option) {
                if (!self.isNull(option.name)) {
                    self.getOtherVariantOption(option.name);
                    _.each(option.variants, function (variant) {
                        _.each(self._variants, function (_variant) {
                            self.variants.push({
                                name: variant.name + " x " + _variant,
                            })
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
                self._variants = self._variants.concat(_.pluck(otherOption.variants, 'name'));
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
        this.options = _.without(this.options, option);
    },
}, ['BaseService']);
adminApp.controller('ProductController', ProductController);