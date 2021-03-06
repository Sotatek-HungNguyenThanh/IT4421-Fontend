angular.module('AdminFilter', [])
    .filter('is_active', function() {
        return function(status) {
            if(status == "active") {
                return 'Đang hoạt động';
            }
            return "Ngừng hoạt động";
        };
    })
    .filter('status_product', function() {
        return function(status) {
            if(status == "active") {
                return 'Còn kinh doanh';
            }
            return "Ngừng kinh doanh";
        };
    })
    .filter('status_customer', function() {
        return function(status) {
            if(status == "Active") {
                return 'Đang hoạt động';
            }
            return "Ngừng hoạt động";
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

;
