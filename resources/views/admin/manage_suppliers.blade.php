@extends('admin.layout')


@section('title')
    Manage Suppliers
@endsection

@section('script')
	<script type="text/javascript" src="/js/angular/admin/SupplierController.js"></script>
    <style>
        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: right;
            padding: 4px 10px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
            margin: 0 4px;
        }

        .pagination a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }
        .modal-content{
            border-width: 0px;
            border-radius: 5px;
            height: 460px;
        }

        .pagination a:hover:not(.active) {background-color: #ddd;}
    </style>
@endsection

@section('page_content')
    <div class="row" ng-controller="SupplierController as controller">
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
                                    <button type="button" class="btn btn-warning"
                                            data-toggle="modal" data-target="#create-supplier"
                                            data-backdrop="static">Add a supplier</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 20px; margin-top: 40px;">
                    <div class="dataTables_filter">
                        <label>Search:
                            <input type="search" class="form-control"
                                   ng-model="controller.key_word"
                                   ng-keypress="($event.which === 13)?controller.search():0"placeholder="">
                        </label>
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name Supplier</th>
                            <th>Code Supplier</th>
                            <th>Address</th>
                            <th>Phone Number</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="row in controller.rows" ng-cloak>
                            <td>@{{ controller.pageNo * controller.perPage + $index - 1}}</td>
                            <td>@{{ row.name }}</td>
                            <td>@{{ "NCC" + row.id }}</td>
                            <td>@{{ row.address }}</td>
                            <td>@{{ row.phone_number }}</td>
                            <td>@{{ row.description }}</td>
                            <td>@{{ row.status | is_active}}</td>
                            <td>
                                <button type="button" class="btn btn-warning"
                                        data-toggle="modal" data-target="#update-supplier"
                                        data-backdrop="static" ng-click="controller.showPopupUpdateSupplier(row.id)">Update</button>
                                <button type="button" ng-show="controller.isActive(row.status)" class="btn btn-danger" ng-click="controller.removeSupplier(row.id)">Block</button>
                                <button type="button" ng-show="controller.isDestroy(row.status)" class="btn btn-danger" ng-click="controller.removeSupplier(row.id)">Active</button>
                            </td>
                        </tr>
                        <tr ng-if="controller.rowNull > 0" ng-repeat="n in controller.rowNull | range">
                            <td><div style="min-height: 34px"></div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="pagination" ng-cloak>
                        <a href="javascript:void(0)"
                           ng-click="controller.goToPage(controller.pageNo + 1);">&raquo;</a>
                        <a href="javascript:void(0)"
                           ng-hide="!controller.isValidPage(controller.pageNo + 5)"
                           ng-click="controller.goToPage(controller.pageNo + 5);">@{{ controller.pageNo + 5 }}</a>
                        <a href="javascript:void(0)"
                           ng-hide="!controller.isValidPage(controller.pageNo + 4)"
                           ng-click="controller.goToPage(controller.pageNo + 4);">@{{ controller.pageNo + 4 }}</a>
                        <a href="javascript:void(0)"
                           ng-hide="!controller.isValidPage(controller.pageNo + 3)"
                           ng-click="controller.goToPage(controller.pageNo + 3);">@{{ controller.pageNo + 3 }}</a>
                        <a href="javascript:void(0)"
                           ng-hide="!controller.isValidPage(controller.pageNo + 2)"
                           ng-click="controller.goToPage(controller.pageNo + 2);">@{{ controller.pageNo + 2 }}</a>
                        <a href="javascript:void(0)"
                           ng-hide="!controller.isValidPage(controller.pageNo + 1)"
                           ng-click="controller.goToPage(controller.pageNo + 1);">@{{ controller.pageNo + 1 }}</a>
                        <a href="javascript:void(0)"
                           class="active">@{{controller.pageNo}}</a>
                        <a href="javascript:void(0)"
                           ng-hide="!controller.isValidPage(controller.pageNo - 1)"
                           ng-click="controller.goToPage(controller.pageNo - 1);">@{{ controller.pageNo - 1 }}</a>
                        <a href="javascript:void(0)"
                           ng-hide="!controller.isValidPage(controller.pageNo - 2)"
                           ng-click="controller.goToPage(controller.pageNo - 2);">@{{ controller.pageNo - 2 }}</a>
                        <a href="javascript:void(0)"
                           ng-hide="!controller.isValidPage(controller.pageNo - 3)"
                           ng-click="controller.goToPage(controller.pageNo - 3);">@{{ controller.pageNo - 3 }}</a>
                        <a href="javascript:void(0)"
                           ng-hide="!controller.isValidPage(controller.pageNo - 4)"
                           ng-click="controller.goToPage(controller.pageNo - 4);">@{{ controller.pageNo - 4 }}</a>
                        <a href="javascript:void(0)"
                           ng-hide="!controller.isValidPage(controller.pageNo - 5)"
                           ng-click="controller.goToPage(controller.pageNo - 5);">@{{ controller.pageNo - 5 }}</a>
                        <a href="javascript:void(0)"
                           ng-click="controller.goToPage(controller.pageNo - 1);">&laquo;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.create_supplier')
    @include('admin.update_supplier')
@endsection