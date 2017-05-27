@extends('customer.index')

@section('css-account')
    <link rel="stylesheet" type="text/css" id="theme" href="/css/admin/list-order.css"/>
    <link href="/css/pikaday.css" rel="stylesheet">
    <link href="/css/triangle.css" rel="stylesheet">
    <style>
        .table-product {
            width: 1000px;
            min-width: 800px;
            overflow: hidden;
        }
        .table-product th,
        .table-product tbody {
            text-align: center;
        }

        .table-product thead{
            display: table-caption;
        }

        .table-product th {
            background: #00b0f0;
            font-size: 15px;
            font-weight: normal;
            color: white;
            height: 40px;
            border: 1px solid white;
        }

        .table-product td {
            height: 40px;
            text-align: center;
            background-color: #fff;
            border: 0px solid #c4c4c4;
            color: black;
            font-size: 13px;
        }

        .first-column {
            width: 60px;
            min-width: 60px;
            max-width: 120px;
            overflow: hidden;
        }

        .second-column {
            width: 150px;
            min-width: 150px;
            max-width: 150px;
            overflow: hidden;
        }

        .thirth-column {
            width: 100px;
            min-width: 100px;
            max-width: 100px;
            overflow: hidden;
        }

        .fourth-column {
            width: 800px;
            max-width: 800px;
            overflow: hidden;
        }

        .fifth-column{
            width: 250px;
            max-width: 250px;
            overflow: hidden;
        }

        .page-container.page-navigation-toggled .page-content-admin {
            margin-left: 50px;
        }
        .page-container .page-content .page-content-wrap {
            float: left;
            width: 100%;
            background: white;
        }
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

        table tbody tr:nth-child(even) td {
            background: #FFFFFF !important;
        }

        table tbody tr:nth-child(odd) td {
            background: #f2f2f2 !important;
        }

        tbody{
            border: 1px solid #f2f2f2;
        }

    </style>
@endsection

@section('content-view-account')
    <section class="main-content account col-md-9 col-sm-8 col-xs-12">
        <form method="post" action="{{url('update-account-info')}}" id="formAccountInfo">
            {{ csrf_field() }}
            <div id="Home_ContentPlaceHolder_UACMaster_ControlPlaceHolder_actionEdit">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="title-block" style="padding: 5px 0 !important">LỊCH SỬ ĐẶT HÀNG</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">

                    </div>
                </div>
                <div class="row">
                    <div style="padding: 20px; margin-top: 40px;">
                        <div class="dataTables_filter">
                            <label>Khoảng thời gian:
                                <div class="_range_time">
                                    <input type="text" pikaday="controller.startPicker"
                                           default-date="@{{ controller.startDate }}"
                                           on-select="controller.onPikadaySelect(pikaday, controller.isUpdateStartDate)"
                                           id="hospital_date_from1"
                                           set-default-date="true">
                                    ~
                                    <input type="text" pikaday="controller.endPicker"
                                           default-date="@{{  controller.endDate }}"
                                           on-select="controller.onPikadaySelect(pikaday, controller.isUpdateEndDate)"
                                           id="hospital_date_to2"
                                           set-default-date="true">
                                </div>
                            </label>
                        </div>
                        <table class="table-product" style="margin-top: 55px;">
                            <thead>
                            <tr>
                                <th class="first-column">No.</th>
                                <th class="second-column">Ngày</th>
                                <th class="thirth-column">Số lượng SP</th>
                                <th class="fourth-column">Đơn hàng</th>
                                <th class="fifth-column">Tổng tiền</th>
                            </tr>
                            </thead>
                            <tbody style="display: inline-grid;">
                            <tr ng-repeat="row in controller.rows" ng-cloak>
                                <td class="first-column" ng-cloak>@{{ (controller.pageNo - 1) * controller.perPage + $index + 1}}</td>
                                <td class="second-column">@{{ row.date }}</td>
                                <td class="thirth-column">@{{ row.order_variants.length}}</td>
                                <td class="fourth-column" style="text-align: left">
                                    <div class="item" ng-repeat="variant in row.order_variants track by index">
                                        <p>Tên sản phẩm : @{{ variant.product.title }}</p>
                                        <p>Biến thể
                                            <span ng-repeat="item in variant.properties">
                                                    <span ng-if="!$last">@{{ item.name }} : @{{  item.value  }},</span>
                                                    <span ng-if="$last">@{{ item.name}} : @{{  item.value  }}</span>
                                            </span>
                                        </p>
                                    </div>
                                </td>
                                <td class="fifth-column">@{{ row.total_price | number }}</td>
                            </tr>
                            <tr ng-if="controller.rowNull > 0" ng-repeat="n in controller.rowNull | range">
                                <td class="first-column"><div style="min-height: 34px"></div></td>
                                <td class="second-column"></td>
                                <td class="thirth-column"></td>
                                <td class="fourth-column"></td>
                                <td class="fifth-column"></td>
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
        </form>
    </section>
@endsection