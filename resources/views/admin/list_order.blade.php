@extends('admin.layout')


@section('title')
    Manage Order
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" id="theme" href="/css/admin/list-order.css"/>
    <link href="/css/pikaday.css" rel="stylesheet">
    <link href="/css/triangle.css" rel="stylesheet">
    <style>
        @media screen and (max-width: 950px) {
            .content-header-title{
                width: 100%;
                left: 0 !important;
            }
        }
        .page-container-wide .content-header-title{
            width: 100% !important;
            left: 53px !important;
            webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }
    </style>
@endsection

@section('script')
    <script type="text/javascript" src="/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/js/angular/admin/ManageOrderController.js"></script>
@endsection

@section('page_content')
    <div class="row" ng-controller="ManageOrderController as controller" ng-cloak>
        <div class="col-md-12">
            <div class="manage-product">
                <div class="container-header">
                    <div class="col-md-12">
                        <div class="row content-header-title" style="position: fixed;z-index: 2; width: calc(100% - 240px); height: 70px; border-bottom: 1px solid #dfe6e8; background-color: white; top: 51px; left: 230px">
                            <div class="col-md-12" style="padding: 15px;font-size: 16px;">
                                Danh sách đơn hàng
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 20px; margin-top: 40px;">
                    <div class="dataTables_filter">
                        <label>Search:
                            <div class="_range_time">
                            <input type="text" pikaday="controller.startPicker"
                                   default-date="@{{ controller.startDate }}"
                                   on-select="controller.onPikadaySelect(pikaday, controller.isUpdateStartDate)"
                                   id="hospital_date_from"
                                   set-default-date="true">
                            ~
                            <input type="text" pikaday="controller.endPicker"
                                   default-date="@{{  controller.endDate }}"
                                   on-select="controller.onPikadaySelect(pikaday, controller.isUpdateEndDate)"
                                   id="hospital_date_to"
                                   set-default-date="true">
                        </div>
                        </label>
                    </div>
                    <table class="table-product" style="margin-top: 55px;">
                        <thead>
                        <tr>
                            <th class="first-column">No.</th>
                            <th class="second-column">Ngày</th>
                            <th class="thirth-column">Tên</th>
                            <th class="fourth-column">Email</th>
                            <th class="fifth-column">Địa chỉ</th>
                            <th class="sixth-column">Số điện thoại</th>
                            <th class="seventh-column">Số lượng SP</th>
                            <th class="eighth-column">Tổng tiền</th>
                            <th class="ninth-column"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat="row in controller.rows" ng-cloak>
                            <td class="first-column" ng-cloak>@{{ (controller.pageNo - 1) * controller.perPage + $index + 1}}</td>
                            <td class="second-column">@{{ row.customer.fullname }}</td>
                            <td class="thirth-column">@{{ row.customer.fullname}}</td>
                            <td class="fourth-column">@{{ row.customer.email }}</td>
                            <td class="fifth-column">@{{ row.customer.address }}</td>
                            <td class="sixth-column">@{{ row.customer.phone_number}}</td>
                            <td class="seventh-column">@{{ row.order_variants.length}}</td>
                            <td class="eighth-column">@{{ row.total_price | number}}</td>
                            <td class="ninth-column">
                                <select name="" id="" ng-model="row.status" class="status_order" ng-change="controller.updateStatusOrder(row)">
                                    <option value="active">Active</option>
                                    <option value="done">Done</option>
                                    <option value="canceled">Canceled</option>
                                </select>
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