var ProductController = BaseController.extend({

    initialize : function($super, service) {
        $super(service);
    },


}, ['BaseService']);
adminApp.controller('ProductController', ProductController);