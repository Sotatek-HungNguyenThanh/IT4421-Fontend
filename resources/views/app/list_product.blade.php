@extends('app.layout')

@section('title')
    Home
@endsection

@section('script')
    <script src="/js/angular/FilterProductController.js" type="text/javascript"></script>
    <script src="/js/angular/ProductPreviewController.js"></script>
@endsection
@section('css')
    <style>
        .sidebar-collection {
            z-index: 9 !important;
        }

        .sidebar .catalog {
            margin-bottom: 28px;
        }

        .catalog__title {
            background: #ff5c01;
        }

        .catalog__title h2 {
            padding: 17px 30px 16px;
            color: #fff;
            font-family: "RobotoCondensed";
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .catalog__bg {
            position: relative;
        }

        .catalog__list {
            font-size: 0;
            background: #f1f6f8;
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            max-height: 360px;
            height: 360px;
            overflow: auto;
        }

        .catalog__item a {
            padding: 12px 40px 13px 27px;
            max-height: 45px;
            display: block;
            vertical-align: middle;
            font-size: 14px;
            color: #464646;
            font-family: Arial;
            border-bottom: 1px dashed #c2c2c2;
            position: relative;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .catalog__icon {
            width: 25px;
            text-align: center;
            margin-right: 10px;
            font-size: 0;
            display: inline-block;
        }

        .catalog__item a span {
            line-height: normal;
            vertical-align: middle;
        }

        .catalog__icon img {
            max-width: 25px;
            max-height: 18px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        #collection-filters-container {
            text-align: left;
            margin: 0;
        }

        #collection-filters-container {
            width: 100%;
        }

        #collection-filters-container .cf-title {
            display: block;
            background: #ff5c01;
            padding: 17px 30px 16px;
            color: #fff !important;
            font-family: "RobotoCondensed";
            font-size: 18px !important;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 19px;
        }

        .cf-options-container, .cf-select {
            margin-bottom: 15px;
            display: block;
            border: 1px solid #ebebeb;
            border-top: none;
            padding: 10px;
        }

        .cf-select {
            font-weight: normal;
            word-wrap: break-word;
            font-size: 14px;
            color: #6f6f6f;
            line-height: 30px;
            vertical-align: middle;
            outline: none;
        }

        #collection-filters-container .cf-select, #collection-filters-container #sort-by {
            display: inline-block;
            width: 100%;
            float: none;
        }

        .cf-options-container, .cf-select {
            margin-bottom: 15px;
            display: block;
            border: 1px solid #ebebeb;
            border-top: none;
            padding: 10px;
        }

        #collection-filters-container label {
            display: block;
            margin: 0;
            cursor: pointer;
            font-weight: normal;
        }

        .cf-options-container .cf-radio {
            display: none;
        }

        #collection-filters-container label span {
            font-weight: normal;
            word-wrap: break-word;
            font-size: 14px;
            color: #6f6f6f;
            line-height: 30px;
            vertical-align: middle;
        }

        .collection__title {
            background: #f1f6f8;
            border: 1px solid #ebebeb;
            padding: 0 15px;
            position: relative;
            z-index: 1;
        }

        .collection__title h1 {
            font-size: 18px;
            font-weight: bold;
            font-family: "RobotoCondensed";
            color: #252525;
            display: inline-block;
            text-transform: uppercase;
            line-height: normal;
            padding: 14px 0px;
            border-bottom: 3px solid #ff5c01;
            margin-bottom: -2px;
            position: relative;
        }

        .collection .category-products {
            border: 1px solid #ebebeb;
            border-top: none;
            margin-bottom: 28px;
        }

        .product-item__grid {
            position: relative;
            padding: 15px;
            border-bottom: 1px solid #ebebeb;
            border-right: 1px solid #ddd;
            background: #fff;
        }

        .product-item__grid .product-item__thumb {
            max-width: 100%;
            background: #f8f9f9;
            margin-bottom: 10px;
            position: relative;
            overflow: hidden;
        }

        .product-item__grid .product-item__thumb a {
            display: block;
        }

        .product-item__grid .product-item__thumb a img {
            max-width: 100%;
            width: 100%;
        }

        .product-item__grid .product-item__actions {
            text-align: center;
            position: absolute;
            top: 0%;
            left: 0;
            right: 0;
            margin-top: -38px;
            visibility: hidden;
            opacity: 0;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            z-index: 9;
        }

        .product-item__actions .btn-cart, .product-item__actions .quick-view {
            border: 1px solid #ff5c01;
            font-size: 12px;
            font-weight: bold;
            color: #ff5c01;
            font-family: Arial;
            background: #fff;
            text-align: center;
            text-transform: uppercase;
            padding: 10px;
            line-height: normal;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            outline: none;
            max-height: 36px;
            min-width: 89px;
        }

        .product-item__actions .quick-view {
            padding: 10px 6px 10px 5px;
            margin-bottom: 5px;
            clear: both;
        }

        .product-item__grid .product-item__title {
            font-size: 14px;
            color: #252525;
            font-family: Arial;
            line-height: normal;
            height: 34px;
            overflow: hidden;
            margin-bottom: 5px;
            font-weight: 400;
        }

        .product-item__grid .product-item__title a {
            font-size: 14px;
            color: #252525;
        }

        .product-item__grid .product-item__price {
            height: 36px;
            overflow: hidden;
        }

        .product-item__price__old span {
            font-size: 14px;
            color: #959595;
            font-family: Arial;
            text-decoration: line-through;
            line-height: 20px;
        }

        .product-item__price__old span.sale-flag {
            font-size: 12px;
            color: #fff;
            font-family: Arial;
            text-decoration: none;
            background: #46a748;
            margin-left: 5px;
            padding: 2px 3px;
            vertical-align: top;
        }

        .product-item__price__regular, .product-item__price__special {
            font-size: 14px;
            color: #ed1c24;
            font-family: Arial;
            line-height: normal;
            font-weight: bold;
            line-height: 16px;
        }

        .product-item__price__special {
            font-weight: bold;
        }

        #sort-by {
            float: right;
            padding: 11px 15px;
        }

        #sort-by label {
            font-size: 14px;
            color: #464646;
            font-family: Arial;
            font-weight: normal;
            display: inline-block;
            vertical-align: middle;
        }

        #sort-by .form-inline {
            display: inline-block;
        }

        #sort-by .form-inline .sort-by-script {
            border: 1px solid #ebebeb;
            height: 30px;
            line-height: 30px;
            font-size: 14px;
            color: #959595;
            padding: 5px;
            font-family: Arial;
        }
    </style>
@endsection

@section('content')
    <section id="collection" class="collection" ng-controller="FilterProductController as controller">
        <div class="container">
            <div class="row" style="display: initial;">
                <div class="col-lg-3 col-md-4 sidebar hidden-sm hidden-xs">
                    <div id="sticky-wrapper" class="sticky-wrapper" style="height: 2071px;">
                        <div class="sidebar-collection" style="">
                            <div class="catalog">
                                <div class="catalog__title">
                                    <h2><i class="fa fa-bars" aria-hidden="true"></i> Danh mục sản phẩm</h2>
                                </div>
                                <div class="catalog__bg">
                                    <ul class="catalog__list" style="overflow: overlay;">

                                        <li class="catalog__item">
                                            <a href="/category/dien-thoai" title="Điện thoại">


                                                    <span class="catalog__icon">
                                                        <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-2.png?1493953410461"
                                                             alt="Điện thoại" class="icon-old">
                                                        <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-hover2.png?1493953410461"
                                                             alt="Điện thoại" class="icon-even">
                                                    </span>

                                                <span>Điện thoại</span>

                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                            </a>
                                            <ul class="catalog-sub">


                                                <li class="catalog-sub__item">
                                                    <a href="/category/iphone" class="catalog-sub__link">iPhone</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/category/samsung" class="catalog-sub__link">Samsung</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/category/oppo" class="catalog-sub__link">Oppo</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/category/huawei" class="catalog-sub__link">Huawei</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/category/asus" class="catalog-sub__link">Asus</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/category/acer" class="catalog-sub__link">Acer</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/category/sony" class="catalog-sub__link">Sony</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/category/khac" class="catalog-sub__link">Khác</a>
                                                </li>


                                            </ul>
                                        </li>


                                        <li class="catalog__item">
                                            <a href="/category/may-tinh-bang" title="Máy tính bảng">


                                                <span class="catalog__icon">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-3.png?1493953410461"
                                                         alt="Máy tính bảng" class="icon-old">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-hover3.png?1493953410461"
                                                         alt="Máy tính bảng" class="icon-even">
                                                </span>

                                                <span>Máy tính bảng</span>

                                            </a>
                                        </li>


                                        <li class="catalog__item">
                                            <a href="/category/laptop" title="Laptop">


                                                <span class="catalog__icon">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-4.png?1493953410461"
                                                         alt="Laptop" class="icon-old">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-hover4.png?1493953410461"
                                                         alt="Laptop" class="icon-even">
                                                </span>

                                                <span>Laptop</span>

                                            </a>
                                        </li>


                                        <li class="catalog__item">
                                            <a href="/category/may-cu" title="Máy cũ">


                                                <span class="catalog__icon">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-5.png?1493953410461"
                                                         alt="Máy cũ" class="icon-old">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-hover5.png?1493953410461"
                                                         alt="Máy cũ" class="icon-even">
                                                </span>

                                                <span>Máy cũ</span>

                                            </a>
                                        </li>


                                        <li class="catalog__item">
                                            <a href="/category/phu-kien" title="Phụ kiện">


                                                <span class="catalog__icon">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-6.png?1493953410461"
                                                         alt="Phụ kiện" class="icon-old">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-hover6.png?1493953410461"
                                                         alt="Phụ kiện" class="icon-even">
                                                </span>

                                                <span>Phụ kiện</span>

                                            </a>
                                        </li>


                                        <li class="catalog__item">
                                            <a href="/category/sac-du-phong" title="Sạc dự phòng">


                                                <span class="catalog__icon">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-7.png?1493953410461"
                                                         alt="Sạc dự phòng" class="icon-old">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-hover7.png?1493953410461"
                                                         alt="Sạc dự phòng" class="icon-even">
                                                </span>

                                                <span>Sạc dự phòng</span>

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar__module sidebar-adv">
                                <a href="/">
                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/sidebar-adv-1.jpg?1493953410461"
                                         alt="Amobile">
                                </a>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="collection__title">
                        <h1><span>Điện thoại</span></h1>
                        <div id="sort-by" class="hidden-xs">
                            <label class="left hidden-xs" for="sort-select">Sắp xếp theo: </label>
                            <form class="form-inline form-viewpro">
                                <div class="form-group">
                                    <select class="sort-by-script" id="sort-select">
                                        <option value="default">Mặc định</option>
                                        <option value="asc">Từ A-Z</option>
                                        <option value="desc">Từ Z-A</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="collection-filter">
                        <div class="category-products clearfix">
                            <div class="products-grid clearfix">
                                <div class="item col-md-3 col-sm-3 col-xs-6" ng-repeat="item in controller.rows track by $index">
                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dien-thoai-iphone-7-32gb">
                                                <img ng-src="@{{ item.product.images[0]}}">
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
                                                <a href="javascript:void(0)">@{{ item.product.title}}</a>
                                            </h3>


                                            <div class="product-item__price">
                                                <p class="product-item__price__special" ng-show="item.product.min_price == item.product.max_price">@{{ item.product.min_price | number }}₫</p>
                                                <p class="product-item__price__special" ng-show="item.product.min_price != item.product.max_price">@{{ item.product.min_price | number }}-@{{ item.product.max_price | number }}₫</p>

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
        @include('app.preview')
        @include('app.cart_model')
    </section>
@endsection