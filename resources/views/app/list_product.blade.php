@extends('app.layout')

@section('title')
    Home
@endsection

@section('script')

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
    <section id="collection" class="collection">
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
                                            <a href="/khuyen-mai" title="Khuyến mãi">

                                                <span class="catalog__icon"><img
                                                            src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-sale.png?1493953410461"
                                                            alt="Khuyến mãi"></span><span>Khuyến mãi</span>

                                            </a>
                                        </li>


                                        <li class="catalog__item">
                                            <a href="/dien-thoai" title="Điện thoại">


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
                                                    <a href="/iphone" class="catalog-sub__link">iPhone</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/samsung" class="catalog-sub__link">Samsung</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/oppo" class="catalog-sub__link">Oppo</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/huawei" class="catalog-sub__link">Huawei</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/asus" class="catalog-sub__link">Asus</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/acer" class="catalog-sub__link">Acer</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/sony" class="catalog-sub__link">Sony</a>
                                                </li>


                                                <li class="catalog-sub__item">
                                                    <a href="/khac" class="catalog-sub__link">Khác</a>
                                                </li>


                                            </ul>
                                        </li>


                                        <li class="catalog__item">
                                            <a href="/may-tinh-bang" title="Máy tính bảng">


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
                                            <a href="/laptop" title="Laptop">


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
                                            <a href="/may-cu" title="Máy cũ">


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
                                            <a href="/phu-kien" title="Phụ kiện">


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
                                            <a href="/sac-du-phong" title="Sạc dự phòng">


                                                <span class="catalog__icon">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-7.png?1493953410461"
                                                         alt="Sạc dự phòng" class="icon-old">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-hover7.png?1493953410461"
                                                         alt="Sạc dự phòng" class="icon-even">
                                                </span>

                                                <span>Sạc dự phòng</span>

                                            </a>
                                        </li>


                                        <li class="catalog__item" style="display: none">
                                            <a href="/smartwatch" title="SmartWatch" style="border-bottom: none">


                                                <span class="catalog__icon">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-8.png?1493953410461"
                                                         alt="SmartWatch" class="icon-old">
                                                    <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cate-hover8.png?1493953410461"
                                                         alt="SmartWatch" class="icon-even">
                                                </span>

                                                <span>SmartWatch</span>

                                            </a>
                                        </li>


                                        <li class="catalog-more">
                                            <a href="javascript:;"><span class="catalog__icon"><i
                                                            class="fa fa-plus-square"
                                                            aria-hidden="true"></i></span><span>Xem thêm</span></a>
                                        </li>

                                        <script type="text/javascript">
                                            $(document).ready(function () {
                                                $('.catalog-more').on('click', function () {
                                                    $('.catalog__list .catalog__item').each(function () {
                                                        if ($(this).is(":hidden")) {
                                                            $(this).show();
                                                        }
                                                    });
                                                    $(this).hide();
                                                });
                                                $('.catalog__list .catalog__item').on('mouseenter', function () {
                                                    if ($(this).find('.catalog-sub').length > 0) {
                                                        $('.catalog__list').css('overflow', 'hidden');
                                                    }
                                                });
                                                $('.catalog__list .catalog__item').on('mouseleave', function () {
                                                    $('.catalog__list').css('overflow', 'overlay');
                                                });
                                            });
                                        </script>
                                    </ul>
                                </div>
                            </div>

                            <div id="collection-filters-container"><span class="cf-label cf-title">Giá</span><select
                                        class="cf-select" name="cf-select-0">
                                    <option value="">Tất cả</option>
                                    <option value="{&quot;typeSelect&quot;:&quot;select&quot;,&quot;type&quot;:&quot;0&quot;,&quot;name&quot;:&quot;Giá&quot;,&quot;values&quot;:&quot;2000000,>&quot;}">
                                        Giá từ 2.000.000₫ trở lên
                                    </option>
                                </select><span class="cf-label cf-title">Loại</span><span
                                        class="cf-options-container"><label><input name="cf-radios-1" class="cf-radio"
                                                                                   type="radio"
                                                                                   value="{&quot;typeSelect&quot;:&quot;radio&quot;,&quot;type&quot;:&quot;0&quot;,&quot;name&quot;:&quot;Loại&quot;,&quot;values&quot;:&quot;Điện thoại&quot;}"> <span>Điện thoại</span></label><label><input
                                                name="cf-radios-1" class="cf-radio" type="radio"
                                                value="{&quot;typeSelect&quot;:&quot;radio&quot;,&quot;type&quot;:&quot;0&quot;,&quot;name&quot;:&quot;Loại&quot;,&quot;values&quot;:&quot;Máy tính bảng&quot;}"> <span>Máy tính bảng</span></label></span><span
                                        class="cf-label cf-title">Nhà cung cấp</span><span class="cf-options-container"><label><input
                                                name="cf-radios-2" class="cf-radio" type="radio"
                                                value="{&quot;typeSelect&quot;:&quot;radio&quot;,&quot;type&quot;:&quot;0&quot;,&quot;name&quot;:&quot;Nhà cung cấp&quot;,&quot;values&quot;:&quot;Acer&quot;}"> <span>Acer</span></label><label><input
                                                name="cf-radios-2" class="cf-radio" type="radio"
                                                value="{&quot;typeSelect&quot;:&quot;radio&quot;,&quot;type&quot;:&quot;0&quot;,&quot;name&quot;:&quot;Nhà cung cấp&quot;,&quot;values&quot;:&quot;Apple&quot;}"> <span>Apple</span></label><label><input
                                                name="cf-radios-2" class="cf-radio" type="radio"
                                                value="{&quot;typeSelect&quot;:&quot;radio&quot;,&quot;type&quot;:&quot;0&quot;,&quot;name&quot;:&quot;Nhà cung cấp&quot;,&quot;values&quot;:&quot;BlackBerry&quot;}"> <span>BlackBerry</span></label><label><input
                                                name="cf-radios-2" class="cf-radio" type="radio"
                                                value="{&quot;typeSelect&quot;:&quot;radio&quot;,&quot;type&quot;:&quot;0&quot;,&quot;name&quot;:&quot;Nhà cung cấp&quot;,&quot;values&quot;:&quot;HTC&quot;}"> <span>HTC</span></label><label><input
                                                name="cf-radios-2" class="cf-radio" type="radio"
                                                value="{&quot;typeSelect&quot;:&quot;radio&quot;,&quot;type&quot;:&quot;0&quot;,&quot;name&quot;:&quot;Nhà cung cấp&quot;,&quot;values&quot;:&quot;Lenovo&quot;}"> <span>Lenovo</span></label><label><input
                                                name="cf-radios-2" class="cf-radio" type="radio"
                                                value="{&quot;typeSelect&quot;:&quot;radio&quot;,&quot;type&quot;:&quot;0&quot;,&quot;name&quot;:&quot;Nhà cung cấp&quot;,&quot;values&quot;:&quot;LG&quot;}"> <span>LG</span></label><label><input
                                                name="cf-radios-2" class="cf-radio" type="radio"
                                                value="{&quot;typeSelect&quot;:&quot;radio&quot;,&quot;type&quot;:&quot;0&quot;,&quot;name&quot;:&quot;Nhà cung cấp&quot;,&quot;values&quot;:&quot;Nokia&quot;}"> <span>Nokia</span></label><label><input
                                                name="cf-radios-2" class="cf-radio" type="radio"
                                                value="{&quot;typeSelect&quot;:&quot;radio&quot;,&quot;type&quot;:&quot;0&quot;,&quot;name&quot;:&quot;Nhà cung cấp&quot;,&quot;values&quot;:&quot;Oppo&quot;}"> <span>Oppo</span></label><label><input
                                                name="cf-radios-2" class="cf-radio" type="radio"
                                                value="{&quot;typeSelect&quot;:&quot;radio&quot;,&quot;type&quot;:&quot;0&quot;,&quot;name&quot;:&quot;Nhà cung cấp&quot;,&quot;values&quot;:&quot;Sony&quot;}"> <span>Sony</span></label></span><span
                                        class="cf-label cf-title">Màu sắc</span><span
                                        class="cf-options-container"><label><input class="cf-checkbox" type="checkbox"
                                                                                   value="{&quot;typeSelect&quot;:&quot;checkbox&quot;,&quot;type&quot;:&quot;1&quot;,&quot;name&quot;:&quot;Màu sắc&quot;,&quot;values&quot;:&quot;Màu sắc_Bạc&quot;}"> <span>Bạc</span></label><label><input
                                                class="cf-checkbox" type="checkbox"
                                                value="{&quot;typeSelect&quot;:&quot;checkbox&quot;,&quot;type&quot;:&quot;1&quot;,&quot;name&quot;:&quot;Màu sắc&quot;,&quot;values&quot;:&quot;Màu sắc_Đen&quot;}"> <span>Đen</span></label><label><input
                                                class="cf-checkbox" type="checkbox"
                                                value="{&quot;typeSelect&quot;:&quot;checkbox&quot;,&quot;type&quot;:&quot;1&quot;,&quot;name&quot;:&quot;Màu sắc&quot;,&quot;values&quot;:&quot;Màu sắc_Vàng Đồng&quot;}"> <span>Vàng Đồng</span></label></span>
                                <style> #collection-filters-container {
                                        width: 100%
                                    }

                                    .well {
                                        background-color: #f5f5f5 !important;
                                        border: 1px solid #e3e3e3 !important;
                                    }

                                    .slider-label {
                                        color: #333333 !important;
                                    }

                                    .ui-widget-header {
                                        background: #e9e9e9 !important;
                                    }

                                    .ui-widget-content {
                                        border: 1px solid #c5c5c5 !important;
                                    }

                                    .ui-widget-content .ui-state-active {
                                        border: 1px solid #007fff !important;
                                        background: #007fff !important;
                                    }

                                    #collection-filters-container .cf-title {
                                        color: #cc1111;
                                        font-size: 15px;
                                    } </style>
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
                <script src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/sticky-plugin.js?1493953410461"
                        type="text/javascript"></script>
                <script>
                    $(window).load(function () {
                        if ($(window).width() > 991) {
                            $(".sidebar-collection").sticky({
                                topSpacing: 30,
                                bottomSpacing: $('.footer').outerHeight() + $('.home-policy').outerHeight()
                            });
                        }
                    });
                </script>

                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="collection__title">
                        <h1><span>Điện thoại</span></h1>
                        <div id="sort-by" class="hidden-xs">
                            <label class="left hidden-xs" for="sort-select">Sắp xếp theo: </label>
                            <form class="form-inline form-viewpro">
                                <div class="form-group">
                                    <select class="sort-by-script" id="sort-select">
                                        <option value="default">Mặc định</option>
                                        <option value="price-asc">Giá tăng dần</option>
                                        <option value="price-desc">Giá giảm dần</option>
                                        <option value="alpha-asc">Từ A-Z</option>
                                        <option value="alpha-desc">Từ Z-A</option>
                                    </select>
                                    <script>
                                        $(document).ready(function () {
                                            Bizweb.queryParams = {};
                                            if (location.search.length) {
                                                for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                                                    aKeyValue = aCouples[i].split('=');
                                                    if (aKeyValue.length > 1) {
                                                        Bizweb.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                                                    }
                                                }
                                            }
                                            $('.sort-by-script')
                                                .val('created-desc')
                                                .bind('change', function () {
                                                    Bizweb.queryParams.sortby = jQuery(this).val();
                                                    location.search = jQuery.param(Bizweb.queryParams).replace(/\+/g, '%20');
                                                });
                                        });
                                    </script>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="collection-filter">
                        <div class="category-products clearfix">
                            <div class="products-grid clearfix">


                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dien-thoai-iphone-7-32gb">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                     alt="Điện thoại iPhone 7 32GB">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dien-thoai-iphone-7-32gb"
                                                        class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4738132" enctype="multipart/form-data">


                                                    <button class="button btn-cart" title="Chọn sản phẩm"
                                                            aria-label="Chọn sản phẩm" type="button"
                                                            onclick="window.location.href='/dien-thoai-iphone-7-32gb'">
                                                        <span>Chọn</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                    thoại iPhone 7 32GB</a></h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__old"><span>20.000.000₫</span><span
                                                            class="sale-flag">-11%</span></p>
                                                <p class="product-item__price__special">17.790.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/iphone-4-16gb">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/appleiphone4s2.png?v=1479141442657"
                                                     alt="iPhone 4 16GB">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="iphone-4-16gb" class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726088" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637612">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/iphone-4-16gb">iPhone 4 16GB</a>
                                            </h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__old"><span>6.000.000₫</span><span
                                                            class="sale-flag">-0%</span></p>
                                                <p class="product-item__price__special">5.990.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/lg-l70">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/big52005lggpad.png?v=1479141705710"
                                                     alt="LG L70">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="lg-l70" class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726084" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637608">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/lg-l70">LG L70</a></h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__old"><span>5.200.000₫</span><span
                                                            class="sale-flag">-4%</span></p>
                                                <p class="product-item__price__special">5.000.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/lg-g-pro-lite-dual">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/5341643lggprolitedual011.png?v=1479141824977"
                                                     alt="LG G Pro Lite Dual">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="lg-g-pro-lite-dual" class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726083" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637607">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/lg-g-pro-lite-dual">LG G Pro Lite
                                                    Dual</a></h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__old"><span>6.300.000₫</span><span
                                                            class="sale-flag">-3%</span></p>
                                                <p class="product-item__price__special">6.100.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/nokia-x6-8gb">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/0010687nokiax68gb1.png?v=1479141860967"
                                                     alt="Nokia X6 8GB">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="nokia-x6-8gb" class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726082" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637606">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/nokia-x6-8gb">Nokia X6 8GB</a>
                                            </h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__old"><span>6.600.000₫</span><span
                                                            class="sale-flag">-2%</span></p>
                                                <p class="product-item__price__special">6.490.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/iphone-4s-32-gb">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/54115944s1.png?v=1479141894390"
                                                     alt="iPhone 4s 32GB">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="iphone-4s-32-gb" class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726081" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637605">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/iphone-4s-32-gb">iPhone 4s
                                                    32GB</a></h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__old"><span>10.000.000₫</span><span
                                                            class="sale-flag">-2%</span></p>
                                                <p class="product-item__price__special">9.790.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/ip-5s-64g">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/1.png?v=1479141982703"
                                                     alt="Ip 5 64G">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="ip-5s-64g" class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726080" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637604">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/ip-5s-64g">Ip 5 64G</a></h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__old"><span>14.800.000₫</span><span
                                                            class="sale-flag">-5%</span></p>
                                                <p class="product-item__price__special">14.000.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/blackberry-passport">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/blackberrypassportblack15.png?v=1479142099757"
                                                     alt="BlackBerry Passport">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="blackberry-passport" class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726077" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637601">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/blackberry-passport">BlackBerry
                                                    Passport</a></h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__regular">11.980.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/oppo-neo-5">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/135237opponeo51201white1.png?v=1479142113290"
                                                     alt="Oppo Neo 5">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="oppo-neo-5" class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726076" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637600">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/oppo-neo-5">Oppo Neo 5</a></h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__regular">3.189.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/htc-one-m9">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/13090htconem9goldonsilver.jpg?v=1479172304403"
                                                     alt="HTC One M9">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="htc-one-m9" class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726075" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637599">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/htc-one-m9">HTC One M9</a></h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__regular">10.990.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/acer-iconia-a1">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/big99327acericoniaa1841g2cws.png?v=1479172374840"
                                                     alt="Acer Iconia A1">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="acer-iconia-a1" class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726070" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637594">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/acer-iconia-a1">Acer Iconia A1</a>
                                            </h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__old"><span>4.499.000₫</span><span
                                                            class="sale-flag">-22%</span></p>
                                                <p class="product-item__price__special">3.499.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/acer-iconia-w1">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/big114867acericoniaw1810uma2cw.png?v=1479172399280"
                                                     alt="Acer Iconia W1">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="acer-iconia-w1" class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726069" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637593">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/acer-iconia-w1">Acer Iconia W1</a>
                                            </h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__old"><span>3.999.000₫</span><span
                                                            class="sale-flag">-25%</span></p>
                                                <p class="product-item__price__special">2.999.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/lenovo-s8">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/big97572lenovos850lcz3745.png?v=1479172450703"
                                                     alt="Lenovo S8">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="lenovo-s8" class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726067" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637591">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/lenovo-s8">Lenovo S8</a></h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__regular">4.639.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/lg-tablet-v500">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/big52005lggpad-8f2688aa-6f78-43a6-beb7-096e3e56a751.png?v=1479172473587"
                                                     alt="LG Tablet V500">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="lg-tablet-v500" class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726066" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637590">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/lg-tablet-v500">LG Tablet V500</a>
                                            </h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__regular">7.990.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dien-thoai-sony-xperia-z5-dual">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/sony-xperia-x-1-400x460.png?v=1479172676383"
                                                     alt="Điện thoại Sony Xperia Z5 Dual">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dien-thoai-sony-xperia-z5-dual"
                                                        class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4726021" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="9876594">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dien-thoai-sony-xperia-z5-dual">Điện
                                                    thoại Sony Xperia Z5 Dual</a></h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__old"><span>13.990.000₫</span><span
                                                            class="sale-flag">-14%</span></p>
                                                <p class="product-item__price__special">11.990.000₫</p>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="item col-md-3 col-sm-3 col-xs-6">


                                    <div class="product-item__grid">
                                        <div class="product-item__thumb">
                                            <a href="/dien-thoai-sony-xperia-x">
                                                <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/sony-xperia-z5-dual-400x460.png?v=1479141392427"
                                                     alt="Điện thoại Sony Xperia X">
                                            </a>
                                            <div class="product-item__actions hidden-xs">
                                                <button data-handle="dien-thoai-sony-xperia-x"
                                                        class="button quick-view">
                                                    Xem nhanh
                                                </button>

                                                <form action="/cart/add" method="post" class="variants"
                                                      id="product-actions-4725962" enctype="multipart/form-data">


                                                    <input type="hidden" name="variantId" value="7637417">
                                                    <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                            title="Mua hàng"><span>Mua hàng</span></button>

                                                </form>

                                            </div>
                                        </div>
                                        <div class="product-item__content">
                                            <h3 class="product-item__title"><a href="/dien-thoai-sony-xperia-x">Điện
                                                    thoại Sony Xperia X</a></h3>


                                            <div class="product-item__price">

                                                <p class="product-item__price__old"><span>10.990.000₫</span><span
                                                            class="sale-flag">-9%</span></p>
                                                <p class="product-item__price__special">9.990.000₫</p>

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
@endsection