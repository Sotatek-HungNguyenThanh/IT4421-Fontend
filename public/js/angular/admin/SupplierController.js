var SupplierController = BaseController.extend({

	initialize : function($super, service) {
        $super(service);
         this.getListSuppliers();
    },

    addSupplier:function () {
        var url = '/admin/create-supplier';
        if(this.name !=='' && this.address !=='' && this.phone !=='' && this.discription !==''
        && this.name === 'undefined' && this.address === 'undefined' && this.phone === 'undefined' && this.discription === 'undefined') {
	        this.service.addSupplier(url, this.name, this.address, this.phone, this.status, this.discription)
	            .success(this.addSupplier.bind(this))
	            .error(this.onError.bind(this));
	    }
    },

    getListSuppliers: function () {
		var self = this;
		this.service.getListSuppliers()
            .success(function (data) {
            	if(self.isNull(data))
            		return;
				self.listSuppliers = JSON.parse(data);
            })
            .error(this.onError.bind(this));
    },

    clearForm: function() {
    	if(this.name !=='' || this.address !=='' || this.phone !=='' || this.discription !=='') {
    		this.name = '';
    		this.address = '';
    		this.phone = '';
    		this.discription = '';
    	}
    }
    
}, ['BaseService']);
adminApp.controller('SupplierController', SupplierController);