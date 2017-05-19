angular.module('BaseFilter', [])
    .filter('transaction_date', function() {
        return function(date) {
            if(!date) {
                return '';
            }
            return Date.parse(moment(date));
        };
    })
    .filter('range', function(){
        return function(n) {
            var res = [];
            for (var i = 0; i < n; i++) {
                res.push(i);
            }
            return res;
        };
    })
    .filter('inventory', function(){
        return function(inventory) {
            if(inventory > 0)
                return "Còn hàng";
            return "Hết hàng";
        };
    })

;
