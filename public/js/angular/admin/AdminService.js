angular.module('AdminService', [])

    .factory('AdminService', function ($http) {

        return {
            getAccountInfo : function () {
                return $http({
                    method: 'POST',
                    url: '/get-account-info',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                });
            },

            createSupplier: function (params) {
                var data = {
                    "data" : params
                };
                return $http({
                    method: 'POST',
                    url: '/admin/create-supplier',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            updateSupplier: function (params) {
                var data = {
                    "data" : params
                };
                return $http({
                    method: 'POST',
                    url: '/admin/update-supplier',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            removeSupplier: function (supplierID) {
                var data = {
                    "supplierID" : supplierID
                };
                return $http({
                    method: 'POST',
                    url: '/admin/delete-supplier',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            getSupplierByID: function (supplierID) {
                var data = {
                    "supplierID" : supplierID
                };
                return $http({
                    method: 'POST',
                    url: '/admin/get-supplier',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            list: function (url, pageNo, perPage, search) {
                var data = {
                    "page_no" : pageNo,
                    "per_page" : perPage,
                    "key_word" : search
                };
                return $http({
                    method: 'POST',
                    url: url,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            createProduct: function (data) {
                var formData = new FormData();
                formData.append('title', data.title);
                formData.append('description', data.description);
                _.each(data.images, function (images) {
                    formData.append('images[]',images.file);
                });
                formData.append('supplier', data.supplier);
                formData.append('listOption', data.listOption);
                formData.append('variants', data.variants);
                formData.append('originalPrice', data.originalPrice);
                formData.append('sellingPrice', data.sellingPrice);
                formData.append('options', data.options);

                return $http({
                    method: 'POST',
                    url: '/admin/create-product',
                    headers: {'Content-Type': undefined},
                    data: formData,
                });
            },

            removeProduct: function (productID) {
                var data = {
                    "productID" : productID
                };
                return $http({
                    method: 'POST',
                    url: '/admin/delete-product',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            getProduct: function (url) {
                return $http({
                    method: 'POST',
                    url: url,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                });
            },

            removeVariant: function (variant) {
                var data = {
                    "variant" : variant,
                };
                return $http({
                    method: 'POST',
                    url: "/admin/remove-variant",
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            updateProduct: function (data) {
                var formData = new FormData();
                formData.append('id', data.id);
                formData.append('title', data.title);
                formData.append('description', data.description);
                _.each(data.images, function (images) {
                    formData.append('images[]',images.file);
                });
                formData.append('images_old',data.images_old);
                formData.append('supplier', data.supplier);
                formData.append('listOption', data.listOption);
                formData.append('variants', data.variants);
                _.each(data.imagesNewVariants, function (image) {
                    formData.append('imagesNewVariants['+ image.id +']',image.file);
                });

                return $http({
                    method: 'POST',
                    url: '/admin/update-product',
                    headers: {'Content-Type': undefined},
                    data: formData,
                });
            },
        }
    });