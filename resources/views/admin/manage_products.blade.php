@extends('admin.layout')


@section('title')
    Manage Products
@endsection

@section('script')
    <script type="text/javascript" src="/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/js/angular/admin/ProductController.js"></script>
@endsection

@section('page_content')
    <div class="row" ng-controller="ProductController as controller">
        <div class="col-md-12">
            <div class="container-content">
                <div class="container-header">
                    <div class="col-md-12">
                        <div class="row" style="position: fixed;z-index: 2; width: calc(100% - 240px); height: 70px; border-bottom: 1px solid #dfe6e8; background-color: white; top: 51px; left: 230px">
                            <div class="col-md-10" style="padding: 15px;font-size: 16px;">
                                Quản lý nhà cung cấp
                            </div>
                            <div class="col-md-2">
                                <div class="block" style="margin-bottom: 0px;">
                                    <a style="text-decoration: none; color: white" href="/admin/add-product">
                                    <button type="button" class="btn btn-warning">Add Product</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 20px; margin-top: 40px;">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th><input type="checkbox"></th>
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
            </div>
        </div>
    </div>
@endsection