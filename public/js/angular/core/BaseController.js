var BaseController = BaseClass.extend({

    initialize : function(service) {
        this.service = service;
    },

    onError: function(data) {
        this.loading(false);
    },
    isNull: function (data) {
        return data == ''
            || data == null;
    },

    loading: function (status) {
        if(status){
            $('.area-loading').show();
        }else {
            $('.area-loading').hide();
        }
    }
});