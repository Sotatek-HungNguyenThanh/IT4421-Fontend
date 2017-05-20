@extends('app.layout')

@section('title')
    Home
@endsection

@section('script')
    <script src="/js/angular/CheckoutController.js"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/product_details.css">
@endsection

@section('content')
    <div class="main container" ng-controller="CheckoutController as controller">
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
    <style>
        .main {
            padding: 5px;
            margin-top: 30px;
        }
        .order-summary {
            background: #fafafa;
            border-top: 1px solid #e1e1e1;
            color: #777;
            border: 1px solid #dadada;
        }
        .form-group {
            margin-bottom: 15px;
            margin-top: 10px;
        }
        .form-group.has-error {
            margin-top: 10px;
        }
        .checkout .order-summary-header {
            position: relative;
            padding: 7px 15px;
            border-bottom: 1px solid #e1e1e1;
        }
        h2 {
            color: #333;
            font-size: 18px;
        }
        .control-label {
             font-weight: normal;
         }
        .expandable--pull-right {
            position: absolute;
            top: 3px;
            right: 15px;
        }
        .order-items {
            position: relative;
        }
        .order-summary .summary-section {
            padding: 12px 20px;
        }
        .summary-section:first-of-type {
            border-top: 0;
        }
        .order-summary .summary-section.summary-product {
            padding: 5px 20px 0 20px;
        }
        .summary-product {
            overflow-y: auto;
            overflow-x: hidden;
        }
        ol, ul {
            list-style: outside none none;
            margin: 0;
            padding: 0;
        }
        .product-list .product:first-of-type {
            border-top: none;
        }
        .summary-product .product-list .product {
            padding: 8px 0;
        }
        .product-thumbnail {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            background: #fff;
            position: relative;
        }
        .product-list .product .product-thumbnail {
            display: inline-block;
            margin-right: 15px;
        }
        .product-info {
            max-width: 50%;
            overflow: hidden;
        }
        .order-summary strong {
            font-weight: 500;
            color: #555;
        }
        .pull-right {
            float: right !important;
        }
        .total-line-total {
            border-top: 1px solid #e7e7e7;
            padding-top: 12px;
            margin-bottom: 0;
        }
        .pull-left {
            float: left !important;
        }
        .total-line-price {
            color: #369ad6;
            font-size: 20px;
        }
        .pull-right {
            float: right !important;
        }
        @media (min-width: 992px){
            .summary-product {
                max-height: 295px;
            }
            .order-info {
                float: right;
            }
        }
        .customer-info {
            padding-top: 7px;
        }
        hr.divider {
            margin-bottom: 10px;
            margin-top: 10px;
        }
        .hide {
            display: none !important;
        }
        .order-summary-header {
            padding: 15px;
            border-top: none;
        }
        .summary-product::-webkit-scrollbar {
            width: 8px;
            background-color: #F5F5F5;
        }
        .summary-product::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 4px rgba(0,0,0,.3);
            background-color: #AFABAC;
        }
        .summary-product::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 4px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-primary:active:hover, .btn-primary.active:hover, .open>.dropdown-toggle.btn-primary:hover, .btn-primary:active:focus, .btn-primary.active:focus, .open>.dropdown-toggle.btn-primary:focus, .btn-primary:active.focus, .btn-primary.active.focus, .open>.dropdown-toggle.btn-primary.focus {
            color: #fff;
            background-color: #204d74;
            border-color: #122b40;
        }
        .product-list .product .product-thumbnail {
            display: inline-block;
            margin-right: 15px;
        }
        .product-thumbnail {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            background: #fff;
            position: relative;
        }
        .product-thumbnail__wrapper {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        .product-thumbnail__quantity {
            font-size: 0.8em;
            white-space: nowrap;
            padding: 0.05em 0.45em;
            border-radius: 2em;
            background-color: #5a96c8;
            color: #fff;
            position: absolute;
            right: -0.7em;
            top: -0.55em;
            z-index: 3;
        }
        .product-thumbnail__image {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            max-width: 100%;
            max-height: 100%;
            margin: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .order-summary-header {
            position: relative;
            padding: 7px 15px;
            border-bottom: 1px solid #e1e1e1;
        }
        .formCheckout .btn-checkout {
            padding: 8px 12px;
            font-size: 16px;
            font-weight: bold;
        }

        .list-type-variant .item-variant{
            font-size: 9px;
        }
    </style>
@endsection