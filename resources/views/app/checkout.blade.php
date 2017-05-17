@extends('app.layout')

@section('title')
    Home
@endsection

@section('script')

@endsection
@section('css')
    <link rel="stylesheet" href="/css/product_details.css">
@endsection

@section('content')
    <div class="main container">
        <div class="wrap clearfix">
            <div class="row">
                <div class="col-md-7 col-sm-12 customer-info">
                    <div class="form-group m0">
                        <h2>
                            <label class="control-label">Thông tin mua hàng</label>
                        </h2>
                    </div>

                    <div class="form-group">
                        <a href="/account/register">Đăng ký tài khoản mua hàng</a>
                        <span style="padding: 0 5px;">/</span>
                        <a href="/account/login?returnUrl=/checkout">Đăng nhập </a>
                    </div>

                    <hr class="divider">


                    <div class="form-group" bind-class="{'has-error' : invalidEmail}">
                        <input data-error="Vui lòng nhập email đúng định dạng" required="" name="Email" value="" type="email" class="form-control" placeholder="Email" pattern="^([a-zA-Z0-9_\-\.\+]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$">
                        <div class="help-block with-errors">
                        </div>
                    </div>

                    <div class="billing">
                        <div class="form-group">
                            <a class="underline-none open" bind-event-click="billing_expand = !billing_expand" bind-class="{expandable: otherAddress, open: billing_expand}" href="javascript:void(0)">
                                <span bind-show="!otherAddress">Thông tin thanh toán và nhận hàng</span>
                                <span bind-show="otherAddress" class="hide">Thông tin thanh toán</span>
                            </a>
                        </div>
                        <div bind-show="billing_expand || !otherAddress">
                            <div class="form-group">
                                <input data-error="Vui lòng nhập họ tên" required="" bind="billing_address.full_name" name="BillingAddress.LastName" class="form-control" placeholder="Họ và tên">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input bind="billing_address.phone" name="BillingAddress.Phone" class="form-control" placeholder="Số điện thoại" data-error="Vui lòng nhập số điện thoại">
                                <div class="help-block with-errors"></div>
                            </div>


                            <div class="form-group">
                                <input bind="billing_address.address1" name="BillingAddress.Address1" class="form-control" placeholder="Địa chỉ">
                                <div class="help-block with-errors"></div>
                            </div>


                            <hr class="divider">
                        </div>
                    </div>
                    <div bind-show="otherAddress" define="{shipping_address: {}, shipping_expand:true,show_district:  true ,show_country:  true }" class="shipping  hide">
                        <div class="form-group">
                            <a class="underline-none expandable open" bind-event-click="shipping_expand = !shipping_expand" bind-class="{open: shipping_expand}" href="javascript:void(0)">
                                Thông tin nhận hàng
                            </a>
                        </div>
                        <div bind-show="shipping_expand || !otherAddress">
                            <div class="form-group">
                                <input data-error="Vui lòng nhập họ tên" required="" bind="shipping_address.full_name" name="ShippingAddress.LastName" class="form-control" placeholder="Họ và tên">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <input bind="shipping_address.phone" name="ShippingAddress.Phone" class="form-control" placeholder="Số điện thoại">
                                <div class="help-block with-errors"></div>
                            </div>


                            <div class="form-group">
                                <input bind="shipping_address.address1" name="ShippingAddress.Address1" class="form-control" placeholder="Địa chỉ">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="note" value="" rows="5" class="form-control" placeholder="Ghi chú"></textarea>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 order-info" define="{order_expand: false}">
                    <div class="order-summary order-summary--custom-background-color ">
                        <div class="order-summary-header summary-header--thin summary-header--border">
                            <h2>
                                <label class="control-label">Đơn hàng</label>
                                <label class="control-label">(11)</label>
                            </h2>
                        </div>
                        <div class="order-items mobile--is-collapsed" bind-class="{'mobile--is-collapsed': !order_expand}">
                            <div class="summary-body summary-section summary-product">
                                <div class="summary-product-list">
                                    <ul class="product-list">

                                        <li class="product product-has-image clearfix">
                                            <div class="product-thumbnail pull-left">
                                                <div class="product-thumbnail__wrapper">

                                                    <img src="//bizweb.dktcdn.net/thumb/thumb/100/141/731/products/blackberrypassportblack15.png?v=1479142099757" alt="BlackBerry Passport" class="product-thumbnail__image">

                                                </div>
                                                <span class="product-thumbnail__quantity" aria-hidden="true">1</span>
                                            </div>
                                            <div class="product-info pull-left">
                                                            <span class="product-info-name">

                                                                <strong>BlackBerry Passport</strong>
                                                            </span>


                                            </div>
                                            <strong class="product-price pull-right">
                                                11.980.000₫
                                            </strong>
                                        </li>

                                        <li class="product product-has-image clearfix">
                                            <div class="product-thumbnail pull-left">
                                                <div class="product-thumbnail__wrapper">

                                                    <img src="//bizweb.dktcdn.net/thumb/thumb/100/141/731/products/135237opponeo51201white1.png?v=1479142113290" alt="Oppo Neo 5" class="product-thumbnail__image">

                                                </div>
                                                <span class="product-thumbnail__quantity" aria-hidden="true">2</span>
                                            </div>
                                            <div class="product-info pull-left">
                                                            <span class="product-info-name">

                                                                <strong>Oppo Neo 5</strong>
                                                            </span>


                                            </div>
                                            <strong class="product-price pull-right">
                                                6.378.000₫
                                            </strong>
                                        </li>

                                        <li class="product product-has-image clearfix">
                                            <div class="product-thumbnail pull-left">
                                                <div class="product-thumbnail__wrapper">

                                                    <img src="//bizweb.dktcdn.net/thumb/thumb/100/141/731/products/sony-xperia-x-1-400x460.png?v=1479172676383" alt="Điện thoại Sony Xperia Z5 Dual" class="product-thumbnail__image">

                                                </div>
                                                <span class="product-thumbnail__quantity" aria-hidden="true">4</span>
                                            </div>
                                            <div class="product-info pull-left">
                                                            <span class="product-info-name">

                                                                <strong>Điện thoại Sony Xperia Z5 Dual</strong>
                                                            </span>


                                            </div>
                                            <strong class="product-price pull-right">
                                                47.960.000₫
                                            </strong>
                                        </li>

                                        <li class="product product-has-image clearfix">
                                            <div class="product-thumbnail pull-left">
                                                <div class="product-thumbnail__wrapper">

                                                    <img src="//bizweb.dktcdn.net/thumb/thumb/100/141/731/products/13090htconem9goldonsilver.jpg?v=1479172304403" alt="HTC One M9" class="product-thumbnail__image">

                                                </div>
                                                <span class="product-thumbnail__quantity" aria-hidden="true">1</span>
                                            </div>
                                            <div class="product-info pull-left">
                                                            <span class="product-info-name">

                                                                <strong>HTC One M9</strong>
                                                            </span>


                                            </div>
                                            <strong class="product-price pull-right">
                                                10.990.000₫
                                            </strong>
                                        </li>

                                        <li class="product product-has-image clearfix">
                                            <div class="product-thumbnail pull-left">
                                                <div class="product-thumbnail__wrapper">

                                                    <img src="//bizweb.dktcdn.net/thumb/thumb/100/141/731/products/54115944s1.png?v=1479141894390" alt="iPhone 4s 32GB" class="product-thumbnail__image">

                                                </div>
                                                <span class="product-thumbnail__quantity" aria-hidden="true">1</span>
                                            </div>
                                            <div class="product-info pull-left">
                                                            <span class="product-info-name">

                                                                <strong>iPhone 4s 32GB</strong>
                                                            </span>


                                            </div>
                                            <strong class="product-price pull-right">
                                                9.790.000₫
                                            </strong>
                                        </li>

                                        <li class="product product-has-image clearfix">
                                            <div class="product-thumbnail pull-left">
                                                <div class="product-thumbnail__wrapper">

                                                    <img src="//bizweb.dktcdn.net/thumb/thumb/100/141/731/products/0010687nokiax68gb1.png?v=1479141860967" alt="Nokia X6 8GB" class="product-thumbnail__image">

                                                </div>
                                                <span class="product-thumbnail__quantity" aria-hidden="true">1</span>
                                            </div>
                                            <div class="product-info pull-left">
                                                            <span class="product-info-name">

                                                                <strong>Nokia X6 8GB</strong>
                                                            </span>


                                            </div>
                                            <strong class="product-price pull-right">
                                                6.490.000₫
                                            </strong>
                                        </li>

                                        <li class="product product-has-image clearfix">
                                            <div class="product-thumbnail pull-left">
                                                <div class="product-thumbnail__wrapper">

                                                    <img src="//bizweb.dktcdn.net/thumb/thumb/100/141/731/products/big52005lggpad.png?v=1479141705710" alt="LG L70" class="product-thumbnail__image">

                                                </div>
                                                <span class="product-thumbnail__quantity" aria-hidden="true">1</span>
                                            </div>
                                            <div class="product-info pull-left">
                                                            <span class="product-info-name">

                                                                <strong>LG L70</strong>
                                                            </span>


                                            </div>
                                            <strong class="product-price pull-right">
                                                5.000.000₫
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
                                <span class="total-line-price pull-right">98.588.000₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix">
                        <input class="btn btn-primary col-md-12 mt10 btn-checkout" type="button" bind-event-click="paymentCheckout('AIzaSyDWReBlPxFt-i145Gsd502wOqRS0KXFHW4;AIzaSyAbtwApDToQWn7snVio3Y9PWFbcpdnOWdk;AIzaSyA5rJOu8wci0li24bnZ1WogMEH93p-DGlM')" value="ĐẶT HÀNG">
                    </div>
                    <div class="form-group has-error">
                        <div class="help-block ">
                            <ul class="list-unstyled">

                            </ul>
                        </div>
                    </div>
                </div>
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
    </style>
@endsection