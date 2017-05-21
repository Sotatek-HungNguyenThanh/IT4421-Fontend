@extends('app.layout')

@section('title')
    Home
@endsection

@section('script')
    <script src="/js/angular/HomeController.js"></script>
    <script src="/js/angular/ProductPreviewController.js"></script>
    <script>
        $(document).scroll(function() {
            var y = $(this).scrollTop();
            if (y > 222) {
                $('.bottomCart').show();
            } else {
                $('.bottomCart').hide();
            }
        });
    </script>
@endsection

@section('include_banner')
    @include('app.header_banner')
@endsection
@section('content')
    <div ng-controller="HomeController as controller" ng-cloak>
        @include('app.three_module_header')

        @include('app.three_banner_advertisement')

        <div>
            <section class="product-hot" id="product-hot">
                <div class="container">
                    <div class="home__title product-hot__title">
                        <h2>Sản phẩm nổi bật</h2>

                        <ul class="cate-list hidden-xs">

                            <li class="cate-list__item">
                                <a href="/dien-thoai" class="cate-list__link">Điện thoại</a>
                            </li>

                            <li class="cate-list__item">
                                <a href="/may-tinh-bang" class="cate-list__link">Máy tính bảng</a>
                            </li>

                            <li class="cate-list__item">
                                <a href="/laptop" class="cate-list__link">Laptop</a>
                            </li>

                            <li class="cate-list__item">
                                <a href="/may-cu" class="cate-list__link">Máy cũ</a>
                            </li>

                            <li class="cate-list__item">
                                <a href="/phu-kien" class="cate-list__link">Phụ kiện</a>
                            </li>

                        </ul>

                    </div>
                    <div class="product-home__slide">
                        <div class="slider-product-list owl-carousel owl-theme" style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 100%; left: 0px; display: inline-block;">
                                    <div class="owl-item" ng-repeat="item in controller.newProducts track by $index">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="javascript:void(0)">
                                                        <img ng-src="@{{ item.product.images[0]}}"
                                                             alt="@{{ item.product.title}}">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button class="button quick-view"
                                                                data-toggle="modal"
                                                                data-target="#productPreview"
                                                                ng-click="controller.showProductPreview(item.product)">
                                                            Xem nhanh
                                                        </button>
                                                        <button class="button btn-cart"
                                                                type="button">
                                                            <a href="/product/@{{ item.product }}"><span>Chọn</span></a>
                                                        </button>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title">
                                                        <a href="javascript:void(0)">
                                                            @{{ item.product.title}}
                                                        </a>
                                                    </h3>

                                                    <div class="product-item__price">
                                                        <p class="product-item__price__special">@{{ item.product.min_price | number }}₫</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div>
            <section class="banner-large hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="/">
                                <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/home-banner-center.jpg?1493953410461"
                                     alt="Samsung Galaxy j7 Prime">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{--@include('app.news')--}}
        @include('app.preview')
        @include('app.cart_model')
        <div class="bottomCart" style="">
            <div class="menu__cart">
                <a href="/cart">
                    <span class="hidden-xs hidden-sm">Giỏ hàng</span>
                    <span><span class="count">@{{ controller.quantityProduct }}</span> <span class="hidden-xs  hidden-sm">sản phẩm</span></span>
                </a>
            </div>
        </div>
        <style>
            .bottomCart{
                position: fixed;
                right: 0px;
                bottom: 0px;
                margin-bottom: 50px;
                display: none;
                z-index: 3;
            }
            .bottomCart .menu__cart{
                display: block;
                background: url(//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cart.png?1490007774344) no-repeat 20px center #231f20;
                padding: 11px 24px 11px 60px;
                color: #fff !important;
                max-height: 50px;
                font-size: 12px;
                font-family: Arial;
                line-height: normal;
            }
            .bottomCart .menu__cart a{
                color: white;
            }
            .bottomCart .menu__cart>a>span:first-child {
                text-transform: uppercase;
            }
            .bottomCart .menu__cart>a>span {
                display: block;
            }
        </style>
    </div>
@endsection


