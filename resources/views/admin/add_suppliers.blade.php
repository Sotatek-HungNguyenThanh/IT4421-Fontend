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
@endsection

@section('page_title')
    Add new suppliers
@endsection

@section('page_content')
    <div class="row">
        <div class="col-md-12">            
            <form class="form-horizontal">
				<div class="panel panel-default">
					<div class="panel-heading">
	                    <h3 class="panel-title">Form add a new supplier</h3>
	                </div>
					<div class="panel-body">                           
				        <div class="form-group">
				            <label class="col-md-3 col-xs-12 control-label">Name</label>
				            <div class="col-md-6 col-xs-12">                                      
				                <div class="input-group">
				                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
				                    <input type="text" class="form-control" placeholder="Supplier's name" />
				                </div>
				            </div>
				        </div>
				        <div class="form-group">                                        
				            <label class="col-md-3 col-xs-12 control-label">Address</label>
				            <div class="col-md-6 col-xs-12">
				                <div class="input-group">
				                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
				                    <input type="text" class="form-control" placeholder="Supplier's address" />
				                </div>
				            </div>
				        </div>
				        <div class="form-group">                                        
				            <label class="col-md-3 col-xs-12 control-label">Phone Number</label>
				            <div class="col-md-6 col-xs-12">
				                <div class="input-group">
				                    <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
				                    <input type="text" class="form-control" placeholder="Supplier's phone number" />
				                </div>
				            </div>
				        </div>
				        <div class="form-group">
				            <label class="col-md-3 col-xs-12 control-label">Status</label>
				            <div class="col-md-6 col-xs-12">                                        
				                <select class="form-control select">
				                    <option value="active">Active</option>
				                    <option value="inactive">Inactive</option>
				                </select>
				            </div>
				        </div>					        
				        <div class="form-group">
				            <label class="col-md-3 col-xs-12 control-label">Discription</label>
				            <div class="col-md-6 col-xs-12">                                      
				                <textarea class="form-control" rows="5" placeholder="Add Supplier's discription"></textarea>
				            </div>
				        </div>
				    </div>
				    <div class="panel-footer">
				        <button class="btn btn-default">Clear Form</button>                         
				        <button class="btn btn-primary pull-right">Submit</button>
				    </div>
				</div>
			</form>
		</div>
	</div>
@endsection