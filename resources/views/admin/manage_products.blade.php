@extends('admin.layout')


@section('title')
    Manage Products
@endsection

@section('page_title')
    Manage Products
@endsection

@section('script')
	<script type="text/javascript" src="/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/js/angular/admin/ProductController.js"></script>
@endsection

@section('page_content')
    <div class="panel panel-default" ng-controller="ProductController as controller">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="panel-title"></h3>
                </div>
                <div class="col-md-2">
                    <div class="block">
                        <button type="button" class="btn btn-warning"
                                data-toggle="modal" data-target="#create-supplier"
                                data-backdrop="static">Add a product</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Supplier</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection