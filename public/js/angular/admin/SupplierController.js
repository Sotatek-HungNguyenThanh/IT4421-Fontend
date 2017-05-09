var SupplierController = BaseController.extend({
    url: '/admin/get-list-suppliers',
    pageNo: 1,
    perPage: 2,
    pageCount: 1,
    rowNull: 0,

	initialize : function($super, service) {
        $super(service);
        this.rows = [];
        this.key_word = "";
        this.list(this.pageNo);
    },

    list: function (page) {
        this.loading(true);
        this.service.list(this.url, page, this.perPage, this.key_word)
            .success(this.onReceiveData.bind(this))
            .error(this.onError.bind(this));
    },

    onReceiveData: function (response) {
        this.loading(false);
        var data = response.data;
        if(!data){
            this.rowNull = this.perPage;
            return;
        }
        this.pageCount = Math.ceil(response.total_suppliers / this.perPage);
        this.row = [];
        this.rows = data;
        this.rowNull = this.rows.length ? this.perPage - this.rows.length : this.perPage;
    },

    showPopupUpdateSupplier: function (supplierID) {
        this.getSupplierByID(supplierID);
    },

    getSupplierByID: function (supplierID) {
	    this.supplierID = supplierID;
		var self = this;
		this.service.getSupplierByID(supplierID)
            .success(function (data) {
            	if(self.isNull(data))
            		return;
				self.name = data.name;
				self.phone_number = data.phone_number;
				self.address = data.address;
				self.description = data.description;
            })
            .error(this.onError.bind(this));
    },

    createSupplier: function () {
        if(this.isNull(this.name)){
            return;
        }
        if(!/^[0-9]{10,11}$/.test(this.phone_number)){
            return;
        }
        if(this.isNull(this.address)){
            return;
        }
        if(this.isNull(this.description)){
            return;
        }
        var params = JSON.stringify({
			"name" : this.name,
			"phone_number" : this.phone_number,
			"address" : this.address,
			"description" : this.description,
		});
        this.loading(true);
        this.service.createSupplier(params)
            .success(function (data) {
                location.reload();
            })
            .error(this.onError.bind(this));
    },

    updateSupplier: function () {
        if(this.isNull(this.name)){
            return;
        }
        if(!/^[0-9]{10,11}$/.test(this.phone_number)){
            return;
        }
        if(this.isNull(this.address)){
            return;
        }
        if(this.isNull(this.description)){
            return;
        }
        var params = JSON.stringify({
            "supplierID" : this.supplierID,
            "name" : this.name,
            "phone_number" : this.phone_number,
            "address" : this.address,
            "description" : this.description,
        });
        this.loading(true);
        this.service.updateSupplier(params)
            .success(function (data) {
               location.reload();
            })
            .error(this.onError.bind(this));
    },

    cancelCreateSupplier: function () {
		this.name = "";
		this.phone_number = "";
		this.address = "";
		this.description = "";
    },

    removeSupplier: function (supplierID) {
        this.loading(true);
        this.service.removeSupplier(supplierID)
            .success(function (data) {
                location.reload();
            })
            .error(this.onError.bind(this));
    },

    goToPage : function(page) {
        if(page > 0 && page <= this.pageCount) {
            this.pageNo = page;
            this.list(this.pageNo);
        }
    },

    isValidPage: function(page) {
        var maxPage = 5;
        if(page > 0 && page <= this.pageCount){
            if(this.pageNo > 3){
                var left = this.pageNo - 2;
                var right = this.pageNo + 2;
                if(right > this.pageCount)
                {
                    right = this.pageCount;
                    left = this.pageCount - 4;
                }
                if(left <= page && page <= right)
                {
                    return true;
                }
                return false;
            }
            if (page > maxPage)
            {
                return false;
            }
            return true;
        }
        return false;
    },

    isDestroy: function (status) {
        return status == "deleted";
    },

    isActive: function (status) {
        return status == "active";
    },

    search: function () {
        this.loading(true);
        this.service.list(this.url, null, null, this.key_word)
            .success(this.onReceiveData.bind(this))
            .error(this.onError.bind(this));
    },
    
}, ['AdminService']);
adminApp.controller('SupplierController', SupplierController);