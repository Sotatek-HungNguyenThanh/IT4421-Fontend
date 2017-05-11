var ProductDetailsController = BaseController.extend({

    initialize : function($super, service, $rootScope, $scope) {
        $super(service);

        $scope.$on('showProductDetails', function (event, args) {
            console.log("Aaaaaaaaaaaaa");
            this.getProductByID(this.args.id);
        });


    },

    getProductByID: function (id) {
        this.service.getProductByID(id)
            .success(function (response) {
                console.log(response);
            })
            .error(function () {

            });
    }
}, ['AdminService', '$rootScope', '$scope']);
adminApp.controller('ProductDetailsController', ProductDetailsController);