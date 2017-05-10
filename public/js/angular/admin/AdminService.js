angular.module('AdminService', [])

    .factory('AdminService', function ($http) {

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

            list: function (url, pageNo, perPage, search) {
                var data = {
                    "page_no" : pageNo,
                    "per_page" : perPage,
                    "key_word" : search
                };
                return $http({
                    method: 'POST',
                    url: url,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            }
        }
    });