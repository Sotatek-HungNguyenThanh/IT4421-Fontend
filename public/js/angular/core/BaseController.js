var BaseController = BaseClass.extend({

    initialize : function(service) {
        this.service = service;
    },

    onError: function(data) {
        this.loading(false);
    },
    isNull: function (data) {
        return data == ''
            || data == null
            || (typeof data == undefined);
    },

    loading: function (status) {
        if(status){
            $('.area-loading').show();
        }else {
            $('.area-loading').hide();
        }
    },

    notification: function (type, message) {
        if(type == true) {
            $("#message_success").html(message || "Success!");
            $("#notification_success").modal();
            setTimeout(function () {
                $("#notification_success").modal("hide");
            }, 1000);
        }else {
            $("#message_error").html(message || "Error!");
            $("#notification_error").modal();
            setTimeout(function(){
                $("#notification_error").modal("hide");
            }, 1000);
        }
    }
});