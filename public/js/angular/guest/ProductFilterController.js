var ProductFilterController = LogicCartController.extend({
    pageNo: 1,
    perPage: 16,
    pageCount: 1,
    sort: "",
    category: "",
    key_word : "",

    initialize : function($super,service, $rootScope, $scope) {
        var self = this;
        $super(service);
        self.getCategory();
        self.getKeyWord();
        self.getTitle();
        this.$rootScope = $rootScope;
        this.filterProduct();
        self.getCart();
        $scope.$on('loadingCart', function (event, args) {
            self.getCart();
        });
    },

    getCart: function () {
        var self = this;
        self.service.getCart()
            .success(function (response) {
                var listVariants = response.data;
                self.quantityProduct = _.allKeys(listVariants).length;
            })
            .error(function (error) {

            });
    },

    filterProduct: function(){
        var self = this;
        var data = {
            key_word: this.key_word,
            page_no : this.pageNo,
            per_page: this.perPage,
            category: this.category,
            sort_name: this.sort
        };
        this.service.filterProduct(data)
            .success(function (data) {
                var data = data.data;
                self.rows = data.products;
                _.each(self.rows, function (item) {
                    item.product.images = item.product.images.split(",");
                });
                console.log(self.rows)
            })
            .error(this.onError.bind(this));
    },

    getCategory: function () {
        var url = window.location.href;
        if(url.includes('category'))
            this.category = /category=([^&]+)/.exec(url)[1];
    },

    getKeyWord: function () {
        var url = window.location.href;
        if(url.includes('query'))
            this.key_word = /query=([^&]+)/.exec(url)[1];
    },

    showProductPreview: function (product) {
        var self = this;
        this.service.getProductByID(product.id)
            .success(function (response) {
                var data = response.data;
                data.product.images = data.product.images.split(",");
                self.$rootScope.$broadcast('showProductPreview', {data: data});
            })
            .error(this.onError.bind(this));
    },

    isNull: function (data) {
        return data == "" || data == null;
    },

    sortProducts: function () {
        this.pageNo = 1;
        this.filterProduct();
    },

    getTitle: function () {
        if(!this.isNull(this.key_word)){
            switch (this.key_word){
                case "iphone":
                    this._title = "Iphone";
                    break;
                case "samsung":
                    this._title = "Samsung";
                    break;
                case "oppo":
                    this._title = "Oppo";
                    break;
                case "huawei":
                    this._title = "Huawei";
                    break;
                case "asus":
                    this._title = "Asus";
                    break;
                case "acer":
                    this._title = "Acer";
                    break;
                case "sony":
                    this._title = "Sony";
                    break;
                case "khac":
                    this._title = "Khác";
                    break;
            }
        }else if(!this.isNull(this.category)) {
            switch (this.category){
                case "dien-thoai":
                    this._title = "ĐIỆN THOẠI";
                    break;
                case "may-tinh-bang":
                    this._title = "MÁY TÍNH BẢNG";
                    break;
                case "laptop":
                    this._title = "LAPTOP";
                    break;
                case "may-cu":
                    this._title = "MÁY CŨ";
                    break;
                case "phu-kien":
                    this._title = "PHỤ KIỆN";
                    break;
                case "sac-du-phong":
                    this._title = "SẠC DỰ PHÒNG";
                    break;
                default:
                    this._title = "KHÁC"
            }
        }else {
            this._title = "KHÁC"
        }
    }

}, ['CartService', "$scope", "$rootScope"]);
myApp.controller('ProductFilterController', ProductFilterController);