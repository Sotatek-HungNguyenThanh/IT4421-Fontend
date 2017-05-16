var HomeController = BaseController.extend({

    initialize : function($super,service) {
        $super(service);

    },

}, ['BaseService']);
myApp.controller('HomeController', HomeController);