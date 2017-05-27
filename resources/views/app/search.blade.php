@extends('app.layout')

@section('title')
    Home
@endsection

@section('script')
    <script src="/js/angular/SearchController.js"></script>
    <script src="/js/angular/ProductPreviewController.js"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/cart.css">
@endsection

@section('content')
    <div ng-controller="SearchController as controller">
        <div class="breadcrumbs">
            <div class="container">
                <div class="inner">
                    <a title="Quay lại trang chủ" href="/">Trang chủ</a><i class="fa fa-angle-right" aria-hidden="true"></i>Tìm kiếm
                </div>
            </div>
        </div>
        <section id="search" class="search">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="general__title">
                            <h1>Kết quả</h1>
                        </div>
                        <div class="search-box">
                            <form action="/search" method="get">
                                <label class="hidden" for="text-search">Tìm kiếm</label>
                                <input type="text" placeholder="Nhập nội dung tìm kiếm" id="text-search"
                                       maxlength="70" class="input input__search" name="query" ng-model="controller.query">
                                <button class="button" type="submit" aria-label="Tìm kiếm">Tìm kiếm</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="category-products clearfix">
                    <div class="products-grid clearfix">

                        <div class="item col-md-2 col-sm-3 col-xs-6" ng-repeat="item in controller.listVariants">
                            <div class="product-item__grid">
                                <div class="product-item__thumb">
                                    <a href="javascript:void(0)">
                                        <img ng-src="@{{item.product.images[0]}}">
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
                                            <a href="/product/@{{ item.product.id }}"><span>Chọn</span></a>
                                        </button>

                                    </div>
                                </div>
                                <div class="product-item__content">
                                    <h3 class="product-item__title"><a href="/product/@{{ item.product.id }}">@{{ item.product.title }}</a></h3>
                                    <div class="product-item__price">
                                        <p class="product-item__price__special">@{{ item.product.min_price | number }}₫</p>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('app.product_model')
    @include('app.cart_model')
@endsection