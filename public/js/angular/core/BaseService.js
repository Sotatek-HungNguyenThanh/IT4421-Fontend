angular.module('BaseService', [])

    .factory('BaseService', function ($http) {

        return {
            getAccountInfo : function () {
                return $http({
                    method: 'POST',
                    url: '/get-account-info',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                });
            },

            createSupplier: function (params) {
                var data = {
                    "data" : params
                };
                return $http({
                    method: 'POST',
                    url: '/admin/create-supplier',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            updateSupplier: function (params) {
                var data = {
                    "data" : params
                };
                return $http({
                    method: 'POST',
                    url: '/admin/update-supplier',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            removeSupplier: function (supplierID) {
                var data = {
                    "supplierID" : supplierID
                };
                return $http({
                    method: 'POST',
                    url: '/admin/delete-supplier',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            getSupplierByID: function (supplierID) {
                var data = {
                    "supplierID" : supplierID
                };
                return $http({
                    method: 'POST',
                    url: '/admin/get-supplier',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

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
                    url: 'cart/get-cart',
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
            }
        }
    });