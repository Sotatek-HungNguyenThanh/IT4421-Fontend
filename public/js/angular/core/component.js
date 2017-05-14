var myApp = angular.module('myApp', ['BaseService','BaseFilter']);
var adminApp = angular.module('adminApp', ['BaseService', 'AdminService', 'AdminFilter','BaseFilter']);
adminApp.directive('inputNumber', ['$filter', function ($filter) {
    return {
        require: 'ngModel',
        restrict: 'A',
        scope: {
            model: '=ngModel'
        },
        link: function (scope, element, attrs, ngModel) {
            scope.$watch('model', function (newNumber, oldNumber) {
                if (newNumber) {
                    if (newNumber.length > 22) {
                        ngModel.$viewValue = $filter('number')(formatInputNumber(oldNumber));
                    } else {
                        newNumber = formatInputNumber(newNumber);
                        if ((/^\d*$/.test(newNumber))) {
                            ngModel.$viewValue = $filter('number')(Number(newNumber));
                        } else {
                            oldNumber = formatInputNumber(oldNumber);
                            if (Number(oldNumber)) {
                                ngModel.$viewValue = $filter('number')(oldNumber);
                            } else {
                                ngModel.$viewValue = "0";
                            }
                        }
                    }
                }
                ngModel.$render();
                function formatInputNumber(number) {
                    number = "" + number;
                    number = number.split(",").join("");
                    return number;
                }
            });
        }
    };
}])
;
