var SupplierController = BaseController.extend({
    status: 'active',

    addSupplier:function () {
        var url = '/admin/add-new-supplier';
        if(this.name !=='' && this.address !=='' && this.phone !=='' && this.discription !==''
        && this.name === 'undefined' && this.address === 'undefined' && this.phone === 'undefined' && this.discription === 'undefined') {
	        this.service.addSupplier(url, this.name, this.address, this.phone, this.status, this.discription)
	            .success(this.addSupplier.bind(this))
	            .error(this.onError.bind(this));
	    }
    },

    clearForm: function() {
        console.log(this.name);
    	if(this.name !=='' || this.address !=='' || this.phone !=='' || this.discription !=='') {
    		this.name = '';
    		this.address = '';
    		this.phone = '';
    		this.discription = '';
    	}
    }
    
}, ['BaseService'], '$scope');
adminApp.controller('SupplierController', SupplierController);