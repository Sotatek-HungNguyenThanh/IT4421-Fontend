var ProductController = BaseController.extend({

    initialize : function($super, service) {
        $super(service);
        this.addVariant = false;
    },
    cancelAddVariants : function(){

    },
    addVariants : function(){
    	this.addVariant = true;
    },

    saveProduct:function(){

    },
    addAnotherOption : function(){

    }
}, ['BaseService']);
adminApp.controller('ProductController', ProductController);