@extends('admin.layout')

@section('title')
    Add New Suppliers
@endsection

@section('script')
	<script type="text/javascript" src="{{url('/js/plugins/icheck/icheck.min.js')}}"></script>
	<script type="text/javascript" src="{{url('/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>
	<script type="text/javascript" src="{{url('/js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
	<script type="text/javascript" src="{{url('/js/plugins/bootstrap/bootstrap-select.js')}}"></script>
	<script type="text/javascript" src="{{url('/js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/angular/core/BaseClass.js')}}"></script>
	<script type="text/javascript" src="{{url('js/angular/core/BaseController.js')}}"></script>
    <script type="text/javascript" src="{{url('js/angular/admin/SupplierController.js')}}"></script>
@endsection

@section('page_title')
    Add new suppliers
@endsection

@section('page_content')
	<div ng-controller="SupplierController as supplier">
	    <div class="row">
	        <div class="col-md-12">        
	            <form class="form-horizontal">
					<div class="panel panel-default">
						<div class="panel-heading">
		                    <h3 class="panel-title">Form add a new supplier</h3>
		                </div>
		                @if(Session::has('alert-success'))
                                <div class="alert alert-success">
                                    <strong>Success!</strong> {{Session::get('alert-success')}}
                                </div>
                            @endif
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
						<div class="panel-body">                           
					        <div class="form-group">
					            <label class="col-md-3 col-xs-12 control-label">Name</label>
					            <div class="col-md-6 col-xs-12">                                      
					                <div class="input-group">
					                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
					                    <input type="text" name="name" ng-model="supplier.name" class="form-control" placeholder="Supplier's name" required/>
					                </div>
					            </div>
					        </div>
					        <div class="form-group">                                        
					            <label class="col-md-3 col-xs-12 control-label">Address</label>
					            <div class="col-md-6 col-xs-12">
					                <div class="input-group">
					                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
					                    <input type="text" name="address" ng-model="supplier.address" class="form-control" placeholder="Supplier's address" required />
					                </div>
					            </div>
					        </div>
					        <div class="form-group">                                        
					            <label class="col-md-3 col-xs-12 control-label">Phone Number</label>
					            <div class="col-md-6 col-xs-12">
					                <div class="input-group">
					                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
					                    <input type="text" name="phone" ng-model="supplier.phone" class="form-control" placeholder="Supplier's phone number" required />
					                </div>
					            </div>
					        </div>
					        <div class="form-group">
					            <label class="col-md-3 col-xs-12 control-label">Status</label>
					            <div class="col-md-6 col-xs-12">                                        
					                <select class="form-control select" ng-model="supplier.status">
					                    <option value="active">Active</option>
					                    <option value="inactive">Inactive</option>
					                </select>
					            </div>
					        </div>					        
					        <div class="form-group">
					            <label class="col-md-3 col-xs-12 control-label">Discription</label>
					            <div class="col-md-6 col-xs-12">                                      
					                <textarea class="form-control" name="discription" rows="5" placeholder="Add Supplier's discription" ng-model="supplier.discription" required></textarea>
					            </div>
					        </div>
					    </div>
					    <div class="panel-footer">
					        <button class="btn btn-default" ng-click="supplier.clearForm()">Clear Form</button>               
					        <button class="btn btn-primary pull-right" id="Home_ContentPlaceHolder_bt_Submit" ng-click="supplier.addSupplier()">Submit</button>
					    </div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection