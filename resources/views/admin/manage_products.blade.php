@extends('admin.layout')


@section('title')
    Manage Products
@endsection

@section('script')
    <script type="text/javascript" src="/js/plugins/datatables/jquery.dataTables.min.js"></script>
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

        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
        .table-product{
            width: 1015px;
            max-width: 1015px;
            overflow: hidden;
        }
        .table-product th, 
        .table-product tbody{
            text-align: center;
        }
        .table-product th{
            background: #00b0f0;
            font-size: 20px;
            color: white;
        }
        .table-product td{
            height: 40px;
            text-align: center;
            background-color: #fff;
            border: 0px solid #c4c4c4;
            color: black;
            font-size: 18px;
        }
        .first-column {
            width: 90px;
            max-width: 90px;
            overflow: hidden;
        }
        .second-column {
            width: 195px;
            max-width: 195px;
            overflow: hidden;
        }
        .thirth-column {
            width: 190px;
            max-width: 190px;
            overflow: hidden;
        }
        .fourth-column {
            width: 195px;
            max-width: 195px;
            overflow: hidden;
        }
        .fifth-column {
            width: 245px;
            max-width: 245px;
            overflow: hidden;
        }
        .six-column {
            width: 100px;
            max-width: 100px;
            overflow: hidden;
        }
    </style>
@endsection

@section('page_content')
    <div class="row" ng-controller="ManageProductController as controller">
        <div class="col-md-12">
            <div class="manage-product">
                <div class="container-header">
                    <div class="col-md-12">
                        <div class="row" style="position: fixed;z-index: 2; width: calc(100% - 240px); height: 70px; border-bottom: 1px solid #dfe6e8; background-color: white; top: 51px; left: 230px">
                            <div class="col-md-10" style="padding: 15px;font-size: 16px;">
                               Danh sách sản phẩm
                            </div>
                            <div class="col-md-2">
                                <div class="block" style="margin-bottom: 0px;">
                                    <a style="text-decoration: none; color: white" href="/admin/add-product">
                                        <button type="button" class="btn btn-warning">Add Product</i></button>
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
                            <th class="sixth-column">Action</th>
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
                                <a href="/admin/product/product-details/@{{ row.product.id }}">
                                <button type="button"><i class="fa fa-pencil-square-o" class="button-product" aria-hidden="true"></i></button>
                                </a>
                                <button type="button" ng-show="controller.isActive(row.product.status)" class="button-product" ng-click="controller.removeProduct(row.product.id)"><i class="fa fa-lock" aria-hidden="true"></i></button>
                                <button type="button" class="button-product" ng-show="controller.isDestroy(row.product.status)" ng-click="controller.removeProduct(row.product.id)"><i class="fa fa-unlock-alt" aria-hidden="true"></i></button>
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