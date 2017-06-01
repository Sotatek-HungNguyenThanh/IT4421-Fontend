@extends('admin.layout')

@section('title')
    Thêm nhà cung cấp mới
@endsection

@section('script')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="{{url('js/angular/admin/DashboardController.js')}}"></script>
    <style>
        ._header-content{
            position: fixed;
            z-index: 2;
            width: calc(100% - 240px);
            border-bottom: 1px solid #dfe6e8;
            background-color: white;
            top: 51px;
            left: 230px
        }
        @media screen and (max-width: 950px) {
            ._header-content{
                width: 100%;
                left: 0
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
    <script>

    </script>
@endsection

@section('page_content')
    <div class="row" ng-controller="DashboardController as controller">
        <div class="col-md-12">
            <div class="container-content">
                <div class="container-header">
                    <div class="col-md-12">
                        <div class="row _header-content content-header-title">
                            <div class="col-md-7" style="padding: 15px;font-size: 16px;">
                                Dashboard
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 20px; margin-top: 40px;">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- START WIDGET SLIDER -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-money"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-title">Tổng doanh thu</div>
                                    <div class="widget-subtitle">@{{ controller.date }}</div>
                                    <div class="">@{{ controller.total_revenues | number }}</div>
                                </div>
                            </div>
                            <!-- END WIDGET SLIDER -->

                        </div>
                        <div class="col-md-3">

                            <!-- START WIDGET MESSAGES -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-shopping-cart"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">@{{ controller.order_need_complete | number }}</div>
                                    <div class="widget-title">Số lượng đơn hàng</div>
                                    <div class="widget-subtitle">CHƯA XỬ LÝ</div>
                                </div>
                            </div>
                            <!-- END WIDGET MESSAGES -->

                        </div>
                        <div class="col-md-3">

                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-bitbucket"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">@{{ controller.total_items | number }}</div>
                                    <div class="widget-title">Số lượng sản phẩm</div>
                                    <div class="widget-subtitle">TRÊN WEBSITE</div>
                                </div>
                            </div>
                            <!-- END WIDGET REGISTRED -->

                        </div>
                        <div class="col-md-3">

                            <!-- START WIDGET REGISTRED -->
                            <div class="widget widget-default widget-item-icon">
                                <div class="widget-item-left">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="widget-data">
                                    <div class="widget-int num-count">@{{ controller.total_customer | number }}</div>
                                    <div class="widget-title">Số lượng người dùng</div>
                                    <div class="widget-subtitle">TRÊN WEBSITE</div>
                                </div>
                            </div>
                            <!-- END WIDGET REGISTRED -->

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="height: 40px; font-size: 16px">Sản phẩm bán chạy nhất</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" style="cursor: default" ng-repeat="row in controller.top_3_products track by $index">
                            <a href="/admin/product/@{{ row.id }}">
                                <div class="widget widget-default widget-item-icon">
                                    <div class="widget-item-left">
                                        <img ng-src="@{{ row.images[0]}}" width="65px">
                                    </div>
                                    <div class="widget-data">
                                        <div class="widget-title">@{{ row.title }}</div>
                                        <div class="widget-subtitle">@{{ row.description }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-body padding-0">
                                <div id="curve_chart" style="width: 99%; height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection