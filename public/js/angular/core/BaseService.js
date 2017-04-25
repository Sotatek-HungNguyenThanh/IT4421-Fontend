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

            addSupplier: function (url, name, address, phone, status, discription) {
                var postData = {
                    'name': name,
                    'address': address,
                    'phone': phone,
                    'status': status,
                    'discription': discription
                };
                return $http({
                    method: 'POST',
                    url: url,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(postData)
                });
            },

            getListSuppliers: function () {
                return $http({
                    method: 'POST',
                    url: '/admin/get-list-suppliers',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                });
            }
        }
    });