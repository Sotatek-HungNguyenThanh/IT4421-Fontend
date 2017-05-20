@extends('app.layout')

@section('title')
    Home
@endsection

@section('script')
    <script src="/js/angular/CheckoutController.js"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/product_details.css">
    <link rel="stylesheet" href="/css/checkout.css">
@endsection

@section('content')
    <div class="main container" ng-controller="CheckoutController as controller">
        <div ng-show="controller.isCheckout">
            <div class="wrap clearfix">
            <div class="row">
                <form name="formCheckout">
                    <div class="col-md-7 col-sm-12 customer-info">
                        <div class="form-group m0">
                            <h2>
                                <label class="control-label">Thông tin mua hàng</label>
                            </h2>
                        </div>

                        <hr class="divider">

                        <div class="form-group">
                            <input required name="Email" ng-model="controller.customer.email" type="email"
                                   class="form-control" placeholder="Email" pattern="^([a-zA-Z0-9_\-\.\+]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
                            <div class="help-block with-errors">
                            </div>
                        </div>

                        <div class="billing">
                            <div class="form-group">
                                <a class="underline-none open">
                                    <span >Thông tin thanh toán và nhận hàng</span>
                                    <span class="hide">Thông tin thanh toán</span>
                                </a>
                            </div>
                            <div>
                                <div class="form-group">
                                    <input type="text" name="fullname" required class="form-control" placeholder="Họ và tên"
                                           ng-model="controller.customer.fullname">
                                </div>

                                <div class="form-group">
                                    <input name="phone_number"  class="form-control"  type="text"
                                           placeholder="Số điện thoại" ng-model="controller.customer.phone_number" pattern="^\d{10,11}$" required>
                                </div>


                                <div class="form-group">
                                    <input name="address" type="text" class="form-control" placeholder="Địa chỉ" ng-model="controller.customer.address" required>
                                </div>


                                <hr class="divider">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 order-info">
                    <div class="order-summary order-summary--custom-background-color ">
                        <div class="order-summary-header summary-header--thin summary-header--border">
                            <h2>
                                <label class="control-label">Đơn hàng</label>
                                <label class="control-label">(@{{ controller.quantityProduct }})</label>
                            </h2>
                        </div>
                        <div class="order-items mobile--is-collapsed">
                            <div class="summary-body summary-section summary-product">
                                <div class="summary-product-list">
                                    <ul class="product-list">
                                        <li class="product product-has-image clearfix" ng-repeat="variant in controller.listVariants">
                                            <div class="product-thumbnail pull-left">
                                                <div class="product-thumbnail__wrapper">
                                                    <img ng-src="@{{ variant.image }}" class="product-thumbnail__image">
                                                </div>
                                                <span class="product-thumbnail__quantity" aria-hidden="true">@{{ variant.quantity }}</span>
                                            </div>
                                            <div class="product-info pull-left">
                                                <span class="product-info-name">
                                                    <strong>@{{ variant.product.title }}</strong>
                                                </span>
                                                <div class="list-type-variant">
                                                    <span class="variant-title" ng-repeat="type in variant.properties">
                                                        @{{ type.name }} : @{{ type.value }}
                                                    </span>
                                                </div>
                                            </div>
                                            <strong class="product-price pull-right">
                                                @{{ variant.total | number}}₫
                                            </strong>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="summary-section border-top-none--mobile">
                            <div class="total-line total-line-total clearfix">
                                <span class="total-line-name pull-left">
                                    Tổng cộng
                                </span>
                                <span class="total-line-price pull-right">@{{ controller.totalPriceOrder | number }}₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <input class="btn btn-primary col-md-12 mt10 btn-checkout" type="submit" value="ĐẶT HÀNG" ng-click="controller.createOrder()">
                    </div>
                    <div class="form-group has-error">
                        <div class="help-block ">
                            <ul class="list-unstyled">

                            </ul>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        <div ng-hide="controller.isCheckout">
            <div class="main">
                <div class="wrap clearfix">
                    <div class="row thankyou-infos">
                        <div class="col-md-7 thankyou-message">
                            <div class="thankyou-message-icon unprint">
                                <div class="icon icon--order-success svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                                        <g fill="none" stroke="#8EC343" stroke-width="2">
                                            <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                            <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="thankyou-message-text">
                                <h3>Cảm ơn bạn đã đặt hàng</h3>
                                <p>

                                    {{--Một email xác nhận đã được gửi tới a@gmail.com. Xin vui lòng kiểm tra email của bạn--}}

                                </p>
                                <div style="font-style: italic;">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 order-info">
                            <div class="order-summary order-summary--custom-background-color ">
                                <div class="order-summary-header summary-header--thin summary-header--border">
                                    <h2>
                                        <label class="control-label">Đơn hàng</label>
                                        #1020
                                        <label class="control-label unprint">(1)</label>
                                    </h2>
                                    <a class="underline-none expandable expandable--pull-right mobile unprint">
                                        Xem chi tiết
                                    </a>
                                </div>
                                <div class="order-items mobile--is-collapsed">
                                    <div class="summary-body summary-section summary-product">
                                        <div class="summary-product-list">
                                            <ul class="product-list">

                                                <li class="product product-has-image clearfix">
                                                    <div class="product-thumbnail pull-left">
                                                        <div class="product-thumbnail__wrapper">

                                                            <img src="//bizweb.dktcdn.net/thumb/thumb/100/141/731/products/iphone-78-400x460.png?v=1479171358803" alt="Điện thoại iPhone 7 32GB Bạc" class="product-thumbnail__image">

                                                        </div>
                                                        <span class="product-thumbnail__quantity unprint" aria-hidden="true">1</span>
                                                    </div>
                                                    <div class="product-info pull-left">
                                                        <span class="product-info-name">
                                                            <strong>Điện thoại iPhone 7 32GB</strong>
                                                            <label class="print">x1</label>
                                                        </span>
                                                        <span class="product-info-description">
                                                        Bạc
                                                        </span>
                                                    </div>
                                                    <strong class="product-price pull-right">
                                                        18.790.000₫
                                                    </strong>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="summary-section  border-top-none--mobile ">
                                    <div class="total-line total-line-subtotal clearfix">
                                    <span class="total-line-name pull-left">
                                        Tạm tính
                                    </span>
                                        <span class="total-line-subprice pull-right">
                                        18.790.000₫
                                    </span>
                                    </div>
                                </div>
                                <div class="summary-section">
                                    <div class="total-line total-line-total clearfix">
                                    <span class="total-line-name total-line-name--bold pull-left">
                                        Tổng cộng
                                    </span>
                                        <span class="total-line-price pull-right">
                                        18.790.000₫
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 customer-info">

                            <div class="shipping-info">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="order-summary order-summary--white no-border no-padding-top">
                                            <div class="order-summary-header">
                                                <h2>
                                                    <label class="control-label">Thông tin nhận hàng</label>
                                                </h2>
                                            </div>
                                            <div class="summary-section no-border no-padding-top">
                                                <p class="email">
                                                    Email : @{{ controller.customer.email }}
                                                </p>
                                                <p class="name">
                                                    Tên : @{{ controller.customer.fullname }}
                                                </p>
                                                <p class="telephone">
                                                   Số điện thoại : @{{ controller.customer.phone_number }}
                                                </p>

                                                <p class="address">
                                                    Địa chỉ :  @{{ controller.customer.address }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-success unprint">
                                <a href="/" class="btn btn-primary">
                                    Tiếp tục mua hàng
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_footer footer unprint">

                    <div class="mt10"></div>
                </div>
            </div>
        </div>
    </div>
    <style>

    </style>
@endsection