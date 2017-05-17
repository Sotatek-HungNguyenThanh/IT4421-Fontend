var CartController = BaseController.extend({

    initialize : function($super,service) {
        $super(service);
    },

}, ['BaseService']);
myApp.controller('CartController', CartController);