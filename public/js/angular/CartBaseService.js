angular.module('CartBaseService', [])
    .factory('CartBaseService', function ($http, BaseService) {

        var CartBaseService = {

        };
        return angular.extend(BaseService, CartBaseService);
    })
;