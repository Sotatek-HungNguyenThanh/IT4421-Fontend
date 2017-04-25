var BaseController = BaseClass.extend({

    initialize : function(service) {
        this.service = service;
    },

    onError: function(data) {

    },
    isNull: function (data) {
        return data == ''
            || data == null;
    }
});