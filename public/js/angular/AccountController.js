var AccountController = BaseController.extend({

    initialize : function($super,service) {
        $super(service);
        this.getAccountInfo();
    },

    getAccountInfo: function () {
        this.service.getAccountInfo()
            .success(this.onReceiveData.bind(this))
            .error(this.onError.bind(this));
    },

    onReceiveData: function (data) {
        this.email = data.email;
        this.fullname = data.fullname;
        this.phone_number = data.phone_number;
        this.address = data.address;
    }

}, ['BaseService']);
myApp.controller('AccountController', AccountController);