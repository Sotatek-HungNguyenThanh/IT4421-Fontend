angular.module('Service', [])

    .factory('Service', function ($http) {

        return {
            getAccountInfo : function () {
                return $http({
                    method: 'POST',
                    url: '/get-account-info',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                });
            },

            getListOrder: function (pageNo, perPage, daterange) {
                var data = {
                    "page_no" : pageNo,
                    "per_page" : perPage,
                    "daterange" : daterange,
                };
                return $http({
                    method: 'POST',
                    url: "/get-list-order",
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            }
        }
    });