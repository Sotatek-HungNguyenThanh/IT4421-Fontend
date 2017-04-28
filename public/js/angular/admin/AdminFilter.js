angular.module('AdminFilter', [])
    .filter('is_active', function() {
        return function(status) {
            if(status == "active") {
                return 'Đang hoạt động';
            }
            return "Ngừng hoạt động";
        };
    })

;
