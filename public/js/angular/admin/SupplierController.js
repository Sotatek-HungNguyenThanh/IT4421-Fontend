var SupplierController = BaseController.extend({
status: 'Active',

    addSupplier:function () {
        var url = '/admin/add-new-supplier';
        if(this.name !=='' && this.address !=='' && this.phone !=='' && this.discription !=='') {
	        this.service.addSupplier(url, this.name, this.address, this.phone, this.status, this.discription)
	            .success(this.addSupplier.bind(this))
	            .error(this.onError.bind(this));
	    }
    },

    clearForm: function() {
    	if(this.name !=='' || this.address !=='' || this.phone !=='' || this.discription !=='') {
    		this.name = '';
    		this.address = '';
    		this.phone = '';
    		this.discription = '';
    	}
    }
    
}, ['SupplierService'], '$scope');
adminApp.controller('SupplierController', SupplierController);