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
        }
    });