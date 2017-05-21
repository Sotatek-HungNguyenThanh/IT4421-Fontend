angular.module('CartBaseService', [])
    .factory('CartBaseService', function ($http, BaseService) {

        var CartBaseService = {

            getListNewProduct: function (quantity) {
                var data = {
                    "quantity" : quantity
                };
                return $http({
                    method: 'POST',
                    url: '/get-list-new-product',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            getProductByID: function (id) {
                var data = {
                    "id" : id
                };
                return $http({
                    method: 'POST',
                    url: '/get-product-by-id',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            addCart: function (item) {
                var data = {
                    "item" : item
                };
                return $http({
                    method: 'POST',
                    url: '/cart/add',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            getCart: function () {
                return $http({
                    method: 'POST',
                    url: '/cart/get-cart',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                });
            },

            updateVariant: function (item) {
                var data = {
                    "item" : item
                };
                return $http({
                    method: 'POST',
                    url: '/cart/update',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            removeVariant: function (item) {
                var data = {
                    "item" : item
                };
                return $http({
                    method: 'POST',
                    url: '/cart/remove',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            createOrder: function (order) {
                var data = {
                    "order" : order
                };
                return $http({
                    method: 'POST',
                    url: '/cart/create-order',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            search: function (url) {
                return $http({
                    method: 'POST',
                    url: url,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                });
            },

            getProductByUrl: function (url) {
                return $http({
                    method: 'POST',
                    url: url,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                });
            }
        };
        return angular.extend(BaseService, CartBaseService);
    })
;