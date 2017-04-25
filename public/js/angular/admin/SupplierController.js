var SupplierController = BaseController.extend({

	initialize : function($super, service) {
        $super(service);
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
        this.service.removeSupplier(supplierID)
            .success(function (data) {
                location.reload();
            })
            .error(this.onError.bind(this));
    }
    
}, ['BaseService']);
adminApp.controller('SupplierController', SupplierController);