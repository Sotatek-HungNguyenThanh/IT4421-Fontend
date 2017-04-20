angular.module('supplierService', [])

.factory('SupplierService', function($http) {

    return {
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
        }
    }

});