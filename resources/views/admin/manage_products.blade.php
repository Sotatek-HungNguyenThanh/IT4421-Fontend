@extends('admin.layout')


@section('title')
    Manage Products
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" id="theme" href="/css/admin/manage-product.css"/>
@endsection

@section('script')
    <script type="text/javascript" src="/js/plugins/datatables/jquery.dataTables.min.js"></script>
@endsection

@section('page_content')
    <div class="row" ng-controller="ManageProductController as controller">
        <div class="col-md-12">
            <div class="manage-product">
                <div class="container-header">
                    <div class="col-md-12">
                        <div class="row" style="position: fixed;z-index: 2; width: calc(100% - 240px); height: 70px; border-bottom: 1px solid #dfe6e8; background-color: white; top: 51px; left: 230px">
                            <div class="col-md-9" style="padding: 15px;font-size: 16px;">
                               Danh sách sản phẩm
                            </div>
                            <div class="col-md-3">
                                <div class="block" style="margin-bottom: 0px;">
                                    <a style="text-decoration: none; color: white" href="/admin/add-product">
                                        <button type="button" class="btn btn-warning">Thêm sản phẩm</button>
                                    </a>
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
                    <table class="table-product" style="margin-top: 55px;">
                        <thead>
                        <tr>
                            <th class="first-column">No.</th>
                            <th class="second-column">Tên</th>
                            <th class="thirth-column">Mã sản phẩm</th>
                            <th class="fourth-column">Nhà cung cấp</th>
                            <th class="fifth-column">Trạng thái</th>
                            <th class="sixth-column"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="row in controller.rows" ng-cloak>
                            <td class="first-column">@{{ controller.pageNo * controller.perPage + $index - 1}}</td>
                            <td class="second-column">@{{ row.product.title }}</td>
                            <td class="thirth-column">@{{ "SP" + row.product.id }}</td>
                            <td class="fourth-column">@{{ row.supplier.name }}</td>
                            <td class="fifth-column">@{{ row.product.status | is_active }}</td>
                            <td class="sixth-column">
                                <a href="/admin/product/product-details/@{{ row.product.id }}" style="text-decoration: none; color: black">
                                    <button type="button" class="button-product">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>
                                </a>
                                <button type="button" ng-show="controller.isActive(row.product.status)" class="button-product" ng-click="controller.removeProduct(row.product)"><i class="fa fa-unlock-alt" aria-hidden="true"></i></button>
                                <button type="button" class="button-product" ng-show="controller.isDestroy(row.product.status)" ng-click="controller.removeProduct(row.product)"><i class="fa fa-lock" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                        <tr ng-if="controller.rowNull > 0" ng-repeat="n in controller.rowNull | range">
                            <td class="first-column"><div style="min-height: 34px"></div></td>
                            <td class="second-column"></td>
                            <td class="thirth-column"></td>
                            <td class="fourth-column"></td>
                            <td class="fifth-column"></td>
                            <td class="sixth-column"></td>
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
@endsection