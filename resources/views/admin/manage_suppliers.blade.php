@extends('admin.layout')


@section('title')
    Manage Suppliers
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" id="theme" href="/css/admin/manage-suppliers.css"/>
@endsection

@section('script')
	<script type="text/javascript" src="/js/angular/admin/SupplierController.js"></script>
@endsection

@section('page_content')
    <div class="row" ng-controller="SupplierController as controller">
        <div class="col-md-12">
            <div class="container-content">
                <div class="container-header">
                    <div class="col-md-12">
                        <div class="row content-header-title">
                            <div class="col-md-10 title">
                                Danh sách nhà cung cấp
                            </div>
                            <div class="col-md-2">
                                <div class="block btn-add">
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
                    <table class="table-supplier">
                        <thead>
                        <tr>
                            <th class="first-column">No.</th>
                            <th class="second-column">Name Supplier</th>
                            <th class="third-column">Code Supplier</th>
                            <th class="fourth-column">Address</th>
                            <th class="fifth-column">Phone Number</th>
                            <th class="sixth-column">Description</th>
                            <th class="seventh-column">Status</th>
                            <th class="eighth-column">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="row in controller.rows" ng-cloak>
                            <td class="first-column">@{{ controller.pageNo * controller.perPage + $index - 1}}</td>
                            <td class="second-column">@{{ row.name }}</td>
                            <td class="third-column">@{{ "NCC" + row.id }}</td>
                            <td class="fourth-column">@{{ row.address }}</td>
                            <td class="fifht-column">@{{ row.phone_number }}</td>
                            <td class="sixth-column">@{{ row.description }}</td>
                            <td class="seventh-column">@{{ row.status | is_active}}</td>
                            <td>
                                <button type="button" class="button-supplier"
                                        data-toggle="modal" data-target="#update-supplier"
                                        data-backdrop="static" ng-click="controller.showPopupUpdateSupplier(row.id)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                <button type="button" ng-show="controller.isActive(row.status)" class="button-supplier" ng-click="controller.removeSupplier(row.id)"><i class="fa fa-lock" aria-hidden="true"></i></button>
                                <button type="button" ng-show="controller.isDestroy(row.status)" class="button-supplier" ng-click="controller.removeSupplier(row.id)"><i class="fa fa-unlock" aria-hidden></i></button>
                            </td>
                        </tr>
                        <tr ng-if="controller.rowNull > 0" ng-repeat="n in controller.rowNull | range">
                            <td class="first-column"><div style="min-height: 34px"></div></td>
                            <td class="second-column"></td>
                            <td class="third-column"></td>
                            <td class="fourth-column"></td>
                            <td class="fifth-column"></td>
                            <td class="sixth-column"></td>
                            <td class="seventh-column"></td>
                            <td class="eight-column"></td>
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
        @include('admin.create_supplier')
        @include('admin.update_supplier')
    </div>
@endsection