@extends('admin.layout')


@section('title')
    Manage Suppliers
@endsection

@section('page_title')
    Manage Suppliers
@endsection

@section('script')
	<script type="text/javascript" src="/js/plugins/datatables/jquery.dataTables.min.js"></script> 
	<script type="text/javascript" src="/js/angular/admin/SupplierController.js"></script>
@endsection

@section('page_content') 
<div class="panel panel-default" ng-controller="SupplierController as controller">
    <div class="panel-heading">
        <div class="row">
          <div class="col-md-10">
              <h3 class="panel-title"></h3>
          </div>
          <div class="col-md-2">
              <div class="block">
                    <button type="button" class="btn btn-warning"
                            data-toggle="modal" data-target="#create-supplier"
                            data-backdrop="static">Add a supplier</button>
                </div>
          </div>
        </div>
    </div>
    <div class="panel-body">
        <table class="table datatable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($listSuppliers as $supplier)
                <tr>
                    <td>{{$supplier->name }}</td>
                    <td>{{ $supplier->address }}</td>
                    <td>{{ $supplier->phone_number }}</td>
                    <td>{{ $supplier->description }}</td>
                    <td>{{ $supplier->status }}</td>
                    <td>
                        <button type="button" class="btn btn-warning"
                                data-toggle="modal" data-target="#update-supplier"
                                data-backdrop="static" ng-click="controller.showPopupUpdateSupplier({{$supplier->id}})">Update</button>
                        <button type="button" class="btn btn-danger" ng-click="controller.removeSupplier({{$supplier->id}})">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('admin.create_supplier')
    @include('admin.update_supplier')
</div>
@endsection