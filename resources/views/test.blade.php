<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="{{url('css/app.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    @yield("css")
    <script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    @yield("script")
    <style>
        body {
            background-color: white;
        }

        html .theme--bg--sliver {
            background-color: #e8e8e8;
        }

        .topbar__left__message {
            font-family: Arial;
            color: #898989;
            line-height: 27px;
        }

        html a {
            text-decoration: none;
            color: #ff5c01;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .topbar__left__message a {
            color: #ff5c01;
        }

        .topbar__right__menu .menu {
            font-size: 0;
            color: #464646;
            text-align: right;
            line-height: 17px;
        }

        .topbar__right__menu .menu__lv1 {
            display: inline-block;
            font-size: 12px;
            position: relative;
            padding: 4px 0;
        }

        .topbar__right__menu .menu__lv1 a {
            color: #464646;
            display: block;
            line-height: 19px;
            border-left: 1px solid #c2c2c2;
            padding: 0px 8px 0px 6px;
        }

        .topbar__right__menu .menu__child {
            position: absolute;
            top: 100%;
            right: 0;
            background: #f5f5f5;
            width: 110px;
            text-align: left;
            display: none;
            z-index: 9;
        }

        .topbar__right__menu .menu__lv1 i.icon {
            margin-right: 3px;
            color: #ff5c01;
        }

        .topbar__right__menu .menu__lv1 i {
            vertical-align: middle;
            color: #898989;
            width: 14px;
            text-align: center;
            line-height: 19px;
        }

        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
    <style>
        .header__logo {
            margin: 25px 0;
        }

        html a {
            text-decoration: none;
            color: #ff5c01;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .header__hotline {
            float: right;
        }

        .header__hotline--bg {
            background: url(//bizweb.dktcdn.net/100/141/731/themes/183776/assets/header-icon-support.png?1490007774344) no-repeat left center;
            padding-left: 60px;
            height: 42px;
            margin-top: 35px;
            margin-bottom: 35px;
            color: #252525;
            font-size: 14px;
        }

        .header__hotline--phone {
            font-size: 18px;
            color: #ed1c24;
            font-weight: bold;
        }

        .header__hotline--phone strong {
            font-weight: normal;
            color: #252525;
            font-size: 14px;
        }

        .header__hotline--phone a {
            color: #ed1c24;
        }

        .header__hotline--email {
            font-size: 14px;
            color: #898989;
            font-style: italic;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .header__hotline--email strong {
            font-weight: normal;
            color: #252525;
            font-size: 14px;
            font-style: normal;
        }

        .header__hotline--email a {
            color: #898989;
        }

        .header__search {
            margin-top: 33px;
            margin-bottom: 8px;
        }

        .header__search form {
            position: relative;
        }

        .header__search .input {
            border: 1px solid #ff5c01;
            height: 45px;
            width: 100%;
            padding: 10px 15px;
            padding-right: 108px;
            font-size: 14px;
            color: #898989;
            outline: none;
        }

        .header__search .button {
            background: #ff5c01;
            border: none;
            outline: none;
            position: absolute;
            top: 0;
            right: 0;
            padding: 0;
            font-size: 14px;
            text-transform: uppercase;
            color: #fff;
            font-weight: bold;
            width: 108px;
            height: 45px;
        }

        .header__search--suggest {
            padding: 10px 0;
            font-size: 0;
        }

        .header__search--suggest li {
            display: inline-block;
            font-size: 14px;
        }

        .header__search--suggest li:first-child a {
            padding-left: 0;
        }

        .header__search--suggest li a {
            color: #898989;
            padding: 0 10px;
            line-height: 17px;
            position: relative;
            display: block;
        }
    </style>
    <style>
        #nav {
            background: #ff5c01;
            height: 50px;
        }

        #nav .menu__list {
            font-size: 0;
            float: left;
        }

        #nav .menu__item {
            display: inline-block;
            position: relative;
            font-size: 14px;
            transition: none;
        }

        #nav .menu__link {
            padding: 15px 20px 16px;
            max-height: 50px;
            font-size: 14px;
            display: block;
            color: #fff;
            transition: none;
        }

        html a {
            text-decoration: none;
            color: #ff5c01;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            text-decoration: none;
        }

        #nav .menu__cart {
            float: right;
            position: relative;
            max-height: 50px;
            height: 50px;
        }

        #nav .menu__cart > a {
            display: block;
            background: url(//bizweb.dktcdn.net/100/141/731/themes/183776/assets/icon-cart.png?1490007774344) no-repeat 20px center #231f20;
            padding: 18px 24px 11px 60px;
            color: #fff;
            max-height: 50px;
            font-size: 12px;
            font-family: Arial;
            line-height: normal;
            height: 50px;
        }

        #nav .menu__item:hover,
        #nav .menu__item:hover > a {
            background: #f1f6f8;
            color: #252525;
            transition: none;
        }

        #nav .menu-sub {
            position: absolute;
            width: 220px;
            top: 100%;
            left: 0;
            background: #f1f6f8;
            border: 1px solid #ebebeb;
            z-index: 1000;
            display: none;
            padding-left: 0px;
        }

        #nav .menu-sub__item {
            display: block;
            font-size: 14px;
            border-bottom: 1px dashed #c2c2c2;
            transition: none;
        }

        #nav .menu-sub__link {
            color: #252525;
            font-size: 14px;
            display: block;
            padding: 12px 20px 13px 15px;
            transition: none;
            position: relative;
        }

        .cart-droplist__content {
            display: none;
            width: 300px;
            position: absolute;
            top: 100%;
            right: 0;
            background: #fff;
            padding: 0;
            text-align: left;
            box-shadow: 0 0 15px -5px rgba(0, 0, 0, 0.4);
            z-index: 999;
            color: #333333;
        }

        .cart-droplist__status {
            color: #333;
            overflow: hidden;
            padding: 15px;
            text-align: left;
            font-size: 14px;
            background: #f5f5f5;
            text-transform: none;
            font-weight: normal;
            border-bottom: 1px #ddd solid;
        }

        #nav .menu__link {
            padding: 15px 20px 16px;
            max-height: 50px;
            font-size: 14px;
            display: block;
            color: #fff;
            transition: none;
        }

        #nav .menu_parent:hover .menu-sub {
            display: block;
        }

        #nav .menu-sub__link i {
            position: absolute;
            right: 10px;
            top: 15px;
        }

        #nav .menu--sub {
            position: absolute;
            width: 220px;
            top: -1px;
            left: 100%;
            background: #fff;
            border: 1px solid #ebebeb;
            z-index: 1000;
            bottom: -1px;
            overflow: auto;
            display: none;
            padding-left: 0px;
        }

        #nav .menu--sub__item {
            display: block;
            font-size: 14px;
            border-bottom: 1px dashed #c2c2c2;
            transition: none;
        }

        #nav .menu-sub__item:hover .menu--sub {
            display: block;
        }

        #nav .menu--sub__link {
            color: #252525;
            font-size: 14px;
            display: block;
            padding: 12px 15px 13px;
            transition: none;
        }
    </style>
    <style>
        .slider {
            padding: 20px 0px 30px;
        }

        .nivoSlider {
            position: relative;
            width: 100%;
            height: auto;
            overflow: hidden;
        }

        .nivoSlider a.nivo-imageLink {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            border: 0;
            padding: 0;
            margin: 0;
            z-index: 6;
            display: none;
            background: white;
            filter: alpha(opacity=0);
            opacity: 0;
        }

        .nivoSlider img {
            position: absolute;
            top: 0px;
            left: 0px;
            max-width: none;
        }

        .theme-default a.nivo-prevNav {
            left: 15px;
        }

        .theme-default .nivo-directionNav a {
            display: block;
            width: 30px;
            height: 30px;
            background: url(//bizweb.dktcdn.net/100/141/731/themes/183776/assets/arrows.png?1488600587191) no-repeat;
            text-indent: -9999px;
            border: 0;
            opacity: 0;
            -webkit-transition: all 200ms ease-in-out;
            -moz-transition: all 200ms ease-in-out;
            -o-transition: all 200ms ease-in-out;
            transition: all 200ms ease-in-out;
        }

        .theme-default a.nivo-nextNav {
            background-position: -30px 0;
            right: 15px;
        }

        .theme-default .nivo-directionNav a {
            display: block;
            width: 30px;
            height: 30px;
            background: url(//bizweb.dktcdn.net/100/141/731/themes/183776/assets/arrows.png?1488600587191) no-repeat;
            text-indent: -9999px;
            border: 0;
            opacity: 0;
            -webkit-transition: all 200ms ease-in-out;
            -moz-transition: all 200ms ease-in-out;
            -o-transition: all 200ms ease-in-out;
            transition: all 200ms ease-in-out;
        }

        .nivo-directionNav a {
            position: absolute;
            top: 45%;
            z-index: 9;
            cursor: pointer;
        }

        #slider {
            height: 400px;
            overflow: hidden;
        }
    </style>
    <style>
        .three-module {
            padding-bottom: 30px;
        }

        .catalog__title {
            background: #ff5c01;
        }

        .catalog__title h2 {
            padding: 17px 30px 16px;
            color: #fff;
            font-family: "RobotoCondensed";
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .catalog__bg {
            position: relative;
            top: -10px;
        }

        .catalog__list {
            font-size: 0;
            background: #f1f6f8;
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            max-height: 365px;
            height: 365px;
            overflow: auto;
            padding-left: 0px;
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

        .catalog-sub {
            width: 200px;
            position: absolute;
            left: calc(100% - 1px);
            height: calc(100% + 1px);
            background: #fff;
            z-index: 9;
            top: -1px;
            border-bottom: 1px solid #ddd;
            border-top: 1px solid #ddd;
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
            display: none;
        }

        .catalog-sub__item a {
            padding: 12px 20px 13px 20px;
            max-height: none;
        }

        .catalog__item a {
            padding: 12px 40px 13px 27px;
            max-height: 51px;
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

        .catalog__item a span {
            line-height: normal;
            vertical-align: middle;
        }

        .catalog__icon {
            width: 25px;
            text-align: center;
            margin-right: 10px;
            font-size: 0;
            display: inline-block;
        }

        .catalog__icon img {
            max-width: 25px;
            max-height: 18px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .catalog__item:hover .icon-even, .catalog__item:active .icon-even, .catalog__item:focus .icon-even {
            display: initial;
        }

        .catalog__icon .icon-even {
            display: none;
        }

        .catalog__item:hover .icon-old, .catalog__item:active .icon-old, .catalog__item:focus .icon-old {
            display: none;
        }

        .product-topseller {
            margin: 0 -30px;
        }

        .home__title {
            background: #f1f6f8;
            border: 1px solid #ebebeb;
            padding: 0 15px;
            position: relative;
            z-index: 1;
        }

        .home__title h2 {
            font-size: 18px;
            font-weight: bold;
            font-family: "RobotoCondensed";
            color: #252525;
            display: inline-block;
            text-transform: uppercase;
            line-height: normal;
            border-bottom: 3px solid #ff5c01;
            margin-bottom: -2px;
            position: relative;
        }

        .owl-carousel {
            display: none;
            position: relative;
            width: 100%;
            -ms-touch-action: pan-y;
        }

        .product-topseller .slider-product-list {
            border-bottom: 1px solid #ededed;
            border-right: 1px solid #ededed;
        }

        .owl-carousel .owl-wrapper-outer {
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .owl-controls {
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
        }

        .owl-carousel .owl-item {
            float: left;
        }

        .owl-carousel .owl-wrapper, .owl-carousel .owl-item {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
        }

        .product-item__mini {
            padding: 15px 0;
            position: relative;
        }

        .product-topseller .product-item__mini {
            border-bottom: 1px solid #ededed;
            border-right: 1px solid #ededed;
            padding: 29px 23px 11.9px;
            margin-bottom: -1px;
            margin-right: -1px;
            margin-left: -1px;
        }

        .product-item__mini .product-item__thumb {
            float: left;
            height: 85px;
            width: 85px;
            background: #fff;
            margin-right: 10px;
            text-align: center;
        }

        .product-topseller .product-item__mini .product-item__thumb {
            height: 120px;
            width: 120px;
            margin-right: 13px;
        }

        .product-topseller .product-item__mini .product-item__thumb img {
            max-width: 120px;
            max-height: 120px;
        }

        .product-topseller .product-item__mini .product-item__content {
            padding-right: 0;
            position: relative;
            top: -26px;
        }

        .product-item__mini .product-item__title {
            font-size: 14px;
            color: #252525;
            font-family: "Roboto";
            line-height: normal;
            height: 34px;
            overflow: hidden;
            margin-bottom: 5px;
            font-weight: 400;
        }

        .product-topseller .product-item__mini .product-item__title {
            font-size: 14px;
            font-family: Arial;
        }

        .product-topseller .product-item__mini .product-item__price {
            height: 36px;
        }

        .product-topseller .product-item__mini .product-item__actions {
            display: block;
            margin-top: 9px;
        }

        .product-topseller .product-item__mini .product-item__title a {
            font-size: 14px;
            font-family: Arial;
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

        .product-topseller .product-item__mini .product-item__actions {
            display: block;
            margin-top: 9px;
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

        .product-item__price__regular, .product-item__price__special {
            font-size: 14px;
            color: #ed1c24;
            font-family: Arial;
            line-height: normal;
            font-weight: bold;
            line-height: 16px;
        }

        p {
            margin: 0px;
            padding: 0px;
        }
    </style>
    <style>
        .product-hot {
            padding-bottom: 30px;
        }

        .home__title {
            background: #f1f6f8;
            border: 1px solid #ebebeb;
            padding: 0 15px;
            position: relative;
            z-index: 1;
        }

        .home__title h2 {
            font-size: 18px;
            font-weight: bold;
            font-family: "RobotoCondensed";
            color: #252525;
            display: inline-block;
            text-transform: uppercase;
            line-height: normal;
            border-bottom: 3px solid #ff5c01;
            margin-bottom: -2px;
            position: relative;
        }

        .product-hot .cate-list {
            display: inline-block;
            margin-left: 15px;
            font-size: 0;
        }

        .product-hot .cate-list__item {
            display: inline-block;
            font-size: 14px;
            color: #898989;
            font-family: Arial;
        }

        .product-hot .cate-list__item a {
            font-size: 14px;
            color: #898989;
            font-family: Arial;
            padding: 0px 8px;
            border-left: 1px solid #898989;
            line-height: 14px;
            display: block;
        }

        .product-hot .cate-list__item:first-child a {
            border-left: none;
        }

        .product-hot .product-home__slide {
            border: 1px solid #ebebeb;
            border-top: none;
            border-bottom: none;
            margin-bottom: -1px;
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

        .product-item__actions .quick-view {
            padding: 10px 6px 10px 5px;
            margin-bottom: 5px;
            clear: both;
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

        .product-item__price__old span {
            font-size: 14px;
            color: #959595;
            font-family: Arial;
            text-decoration: line-through;
            line-height: 20px;
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

        .product-item__grid:hover .product-item__actions {
            top: 50%;
            visibility: visible;
            opacity: 1;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out
        }

        .product-item__grid:hover .product-item__thumb a:after {
            opacity: 1;
            visibility: visible;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out
        }

        .banner-large {
            padding-bottom: 15px;
        }

        .banner-large img {
            width: 100%;
        }
    </style>
    <style>
        .home-blog {
            padding-bottom: 30px;
        }

        .home-blog .general__title {
            margin-bottom: 10px;
        }

        .general__title h1, .general__title h2, .general__title h3, .general__title h4 {
            font-size: 18px;
            font-weight: bold;
            font-family: "RobotoCondensed";
            color: #252525;
            border-bottom: 3px solid #ff5c01;
            display: inline-block;
            text-transform: uppercase;
            padding: 10px 0 7px;
            margin-bottom: 15px;
        }

        .article-item__thumb a {
            display: block;
        }

        .article-item__thumb a img {
            width: 100%;
        }

        .article-item__content {
            margin-bottom: 20px;
        }

        .article-item__title {
            font-size: 14px;
            color: #252525;
            font-family: Arial;
            font-weight: bold;
            margin: 20px 0px 10px;
            line-height: normal;
            text-transform: uppercase;
            max-height: 32px;
            overflow: hidden;
        }

        .article-item__title a {
            font-size: 14px;
            color: #252525;
            font-family: Arial;
            font-weight: bold;
        }

        .article-item__date {
            font-size: 12px;
            font-family: Arial;
            color: #898989;
            margin-bottom: 10px;
        }

        .article-item__summary {
            font-size: 14px;
            color: #898989;
            font-family: Arial;
        }

        .home-policy {
            background: #f1f6f8;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
        }
        .home-policy__item-1 {
            background: url(//bizweb.dktcdn.net/100/141/731/themes/183776/assets/policy-icon-1.png?1490007774344) no-repeat left center;
        }
        .home-policy__item {
            padding: 20px 0 10px 55px;
            min-height: 87px;
        }
        .home-policy__item--content {
            padding-right: 25px;
        }
        .home-policy__item--title {
            color: #464646;
            font-size: 14px;
            font-family: "RobotoCondensed";
            font-weight: bold;
            text-transform: uppercase;
            line-height: 25px;
        }
        .home-policy__item--description {
            font-family: Arial;
            color: #898989;
            font-size: 12px;
        }
        .home-policy__item-2 {
            background: url(//bizweb.dktcdn.net/100/141/731/themes/183776/assets/policy-icon-2.png?1490007774344) no-repeat left center;
        }
        .home-policy__item-3 {
            background: url(//bizweb.dktcdn.net/100/141/731/themes/183776/assets/policy-icon-3.png?1490007774344) no-repeat left center;
        }
        .home-policy__item-4 {
            background: url(//bizweb.dktcdn.net/100/141/731/themes/183776/assets/policy-icon-4.png?1490007774344) no-repeat left center;
        }
        .footer__menu {
            border-top: 1px solid #e9e9e9;
            padding: 20px 0;
        }
        .footer__menu--list {
            font-size: 0;
            text-align: center;
        }
        .footer__menu--item {
            padding: 0 15px;
            border-right: 1px solid #c4c5c6;
            border-left: 1px solid #636363;
            font-size: 14px;
            color: #636363;
            display: inline-block;
        }
        .footer__menu--item:first-child {
            border-left: none;
        }
        .footer__menu--item a {
            font-size: 14px;
            color: #636363;
            font-family: Arial;
        }
        footer .copyright {
            background: #313131;
            color: #989898;
            padding: 15px 0;
            font-size: 14px;
        }
        footer .copyright a {
            text-transform: uppercase;
            color: #ff5c01;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <section class="topbar theme--bg--sliver hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 topbar__left hidden-xs">
                        <div class="topbar__left__message">
                            Chào mừng bạn đến với <a href="//amobile.bizwebvietnam.net">Amobile</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 topbar__right">
                        <div class="topbar__right__menu">
                            <ul class="menu">

                                <li class="menu__lv1">
                                    <a href="javascript:;" class="menu__link"><i class="fa fa-unlock-alt icon"
                                                                                 aria-hidden="true"></i> Đăng nhập <i
                                                class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="menu__child" style="display: none;">
                                        <li class="menu__lv2">
                                            <a href="javascript:;" data-toggle="modal" data-dismis="modal"
                                               data-target="#LoginPopup" class="menu__link"><i class="fa fa-unlock-alt icon"
                                                                                               aria-hidden="true"></i> Đăng
                                                nhập</a>
                                        </li>
                                        <li class="menu__lv2">
                                            <a href="javascript:;" data-toggle="modal" data-dismis="modal"
                                               data-target="#RegisterPopup" class="menu__link"><i class="fa fa-key icon"
                                                                                                  aria-hidden="true"></i>
                                                Đăng ký</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu__lv1">
                                    <a href="javascript:;" class="menu__link"><i class="fa fa-user icon"
                                                                                 aria-hidden="true"></i> Tài khoản <i
                                                class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="menu__child text-message" style="display: none;">
                                        <li class="menu__lv2">
                                            <p class="menu__message">Bạn chưa đăng nhập. Đăng nhập tại <a
                                                        href="javascript:;" data-toggle="modal" data-dismis="modal"
                                                        data-target="#LoginPopup">đây</a></p>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div>
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6 header__logo">
                        <a title="Amobile" href="/">

                            <img alt="Amobile"
                                 src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/logo.png?1493953410461">

                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 header__hotline">
                        <div class="header__hotline--bg">
                            <p class="header__hotline--phone"><strong class="hidden-xs">Hotline: </strong><span><a
                                            href="tel:1900 451 452">1900 451 452</a></span></p>
                            <p class="header__hotline--email hidden-xs"><strong class="hidden-xs">Email: </strong><span><a
                                            href="mailto:support@mobile.com">support@mobile.com</a></span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-5 col-xs-12 header__search hidden-xs">
                        <form action="/search" method="get">
                            <label class="hidden" for="header-search">Tìm kiếm</label>
                            <input type="text" placeholder="Nhập nội dung tìm kiếm" id="header-search" value=""
                                   maxlength="70" class="input" name="query">
                            <button class="button" type="submit" aria-label="Tìm kiếm">Tìm kiếm</button>
                        </form>
                        <ul class="header__search--suggest hidden-sm hidden-xs">

                            <li><a href="/dien-thoai" class="header__search--suggest--link">Điện thoại</a></li>

                            <li><a href="/may-tinh-bang" class="header__search--suggest--link">Máy tính bảng</a></li>

                            <li><a href="/laptop" class="header__search--suggest--link">Laptop</a></li>

                            <li><a href="/may-cu" class="header__search--suggest--link">Máy cũ</a></li>

                            <li><a href="/phu-kien" class="header__search--suggest--link">Phụ kiện</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <div>
        <nav id="nav" class="menu">
            <div class="container">
		<span class="hidden-lg hidden-md hidden-sm header__btn">
			<a href="#menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
		</span>
                <form action="/search" method="get" class="hidden-lg hidden-md hidden-sm">
                    <label class="hidden" for="search-mobile">Tìm kiếm</label>
                    <input type="text" placeholder="Nhập nội dung tìm kiếm" id="search-mobile" value="" maxlength="70"
                           class="input input__search" name="query">
                    <button class="button" type="submit" aria-label="Tìm kiếm"><i class="fa fa-search"
                                                                                  aria-hidden="true"></i></button>
                </form>
                <ul class="menu__list hidden-xs">


                    <li class="menu__item"><a href="/" class="menu__link">Trang chủ</a></li>


                    <li class="menu__item"><a href="/gioi-thieu" class="menu__link">Giới thiệu</a></li>


                    <li class="menu__item menu_parent">
                        <a href="/collections/all" class="menu__link">Danh mục sản phẩm <i class="fa fa-angle-down"
                                                                                           aria-hidden="true"></i></a>
                        <ul class="menu-sub">


                            <li class="menu-sub__item"><a href="/khuyen-mai" class="menu-sub__link">Khuyến mãi</a></li>


                            <li class="menu-sub__item">
                                <a href="/dien-thoai" class="menu-sub__link">Điện thoại <i
                                            class="fa fa-angle-right"></i></a>
                                <ul class="menu--sub">

                                    <li class="menu--sub__item"><a href="/iphone" class="menu--sub__link">iPhone</a></li>

                                    <li class="menu--sub__item"><a href="/samsung" class="menu--sub__link">Samsung</a></li>

                                    <li class="menu--sub__item"><a href="/oppo" class="menu--sub__link">Oppo</a></li>

                                    <li class="menu--sub__item"><a href="/huawei" class="menu--sub__link">Huawei</a></li>

                                    <li class="menu--sub__item"><a href="/asus" class="menu--sub__link">Asus</a></li>

                                    <li class="menu--sub__item"><a href="/acer" class="menu--sub__link">Acer</a></li>

                                    <li class="menu--sub__item"><a href="/sony" class="menu--sub__link">Sony</a></li>

                                    <li class="menu--sub__item"><a href="/khac" class="menu--sub__link">Khác</a></li>

                                </ul>
                            </li>


                            <li class="menu-sub__item"><a href="/may-tinh-bang" class="menu-sub__link">Máy tính bảng</a>
                            </li>


                            <li class="menu-sub__item"><a href="/laptop" class="menu-sub__link">Laptop</a></li>


                            <li class="menu-sub__item"><a href="/may-cu" class="menu-sub__link">Máy cũ</a></li>


                            <li class="menu-sub__item"><a href="/phu-kien" class="menu-sub__link">Phụ kiện</a></li>


                            <li class="menu-sub__item"><a href="/sac-du-phong" class="menu-sub__link">Sạc dự phòng</a></li>


                            <li class="menu-sub__item"><a href="/smartwatch" class="menu-sub__link">SmartWatch</a></li>


                        </ul>
                    </li>


                    <li class="menu__item"><a href="/tin-tuc" class="menu__link">Tin tức</a></li>


                    <li class="menu__item"><a href="/tuyen-dung" class="menu__link">Tuyển dụng</a></li>


                    <li class="menu__item"><a href="/lien-he" class="menu__link">Liên hệ</a></li>


                </ul>
            </div>
        </nav>
    </div>

    <div>
        <section id="homepage-slider" class="slider theme--color--white">
            <div class="container">
                <div class="bg-slider">
                    <div id="slider" class="theme-default">
                        <a href="">
                            <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/home-slider-1.jpg?1493953410461"
                                 alt="Bảo hành 1 năm 1 đổi 1 với iPhone & iPad"/>
                        </a>

                        <a href="">
                            <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/home-slider-2.jpg?1493953410461"
                                 alt="Amobile"/>
                        </a>


                    </div>
                </div>
            </div>
        </section>
        <script src='//bizweb.dktcdn.net/100/141/731/themes/183776/assets/jquery.nivo.slider.pack.js?1493953410461'
                type='text/javascript'></script>
        <link href='//bizweb.dktcdn.net/100/141/731/themes/183776/assets/nivo-slider.scss.css?1493953410461'
              rel='stylesheet' type='text/css'/>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('#slider').nivoSlider({
                    effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
                    slices: 15, // For slice animations
                    boxCols: 8, // For box animations
                    boxRows: 4, // For box animations
                    animSpeed: 500, // Slide transition speed
                    pauseTime: 3000, // How long each slide will show
                    startSlide: 3, // Set starting Slide (0 index)
                    directionNav: true, // Next & Prev navigation
                    directionNavHide: true, // Only show on hover
                    controlNav: false, // 1,2,3... navigation
                    controlNavThumbs: false, // Use thumbnails for Control Nav
                    controlNavThumbsFromRel: false, // Use image rel for thumbs
                    controlNavThumbsSearch: '', // Replace this with...
                    controlNavThumbsReplace: '', // ...this in thumb Image src
                    keyboardNav: true, // Use left & right arrows
                    pauseOnHover: true, // Stop animation while hovering
                    manualAdvance: false, // Force manual transitions
                    captionOpacity: 0.8, // Universal caption opacity
                    prevText: 'Prev', // Prev directionNav text
                    nextText: 'Next', // Next directionNav text
                    beforeChange: function () {
                    }, // Triggers before a slide transition
                    afterChange: function () {
                    }, // Triggers after a slide transition
                    slideshowEnd: function () {
                    }, // Triggers after all slides have been shown
                    lastSlide: function () {
                    }, // Triggers when last slide is shown
                    afterLoad: function () {
                    } // Triggers when slider has loaded
                });
            });
        </script>
    </div>
    <div>
        <section class="three-module">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">
                        <div class="catalog" style="position: relative;top: -22px;">
                            <div class="catalog__title">
                                <h2><i class="fa fa-bars" aria-hidden="true"></i> Danh mục sản phẩm</h2>
                            </div>
                            <div class="catalog__bg">
                                <ul class="catalog__list">
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
                                        <a href="/sac-du-phong" title="Sạc dự phòng" style="border-bottom: none">


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
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-topseller" id="topseller">
                            <div class="home__title proánduct-topseller__title">
                                <h2 style="padding: 0px">Sản phẩm bán chạy</h2>
                            </div>
                            <div class="slider-product-list owl-carousel owl-theme" style="opacity: 1; display: block;">


                                <div class="owl-wrapper-outer">
                                    <div class="owl-wrapper" style="width: 3684px; left: 0px; display: block;">
                                        <div class="owl-item" style="width: 307px;">
                                            <div class="item">


                                                <div class="product-item__mini clearfix">
                                                    <div class="product-item__thumb">
                                                        <a href="/dien-thoai-iphone-7-32gb">
                                                            <img src="//bizweb.dktcdn.net/thumb/compact/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                                 alt="Điện thoại iPhone 7 32GB">
                                                        </a>
                                                    </div>
                                                    <div class="product-item__content">
                                                        <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                                thoại iPhone 7 32GB</a></h3>


                                                        <div class="product-item__price">

                                                            <p class="product-item__price__old">
                                                                <span>20.000.000₫</span><span class="sale-flag">-11%</span>
                                                            </p>
                                                            <p class="product-item__price__special">17.790.000₫</p>

                                                        </div>


                                                        <div class="product-item__actions">

                                                            <form action="/cart/add" method="post" class="variants"
                                                                  id="product-actions-4738132"
                                                                  enctype="multipart/form-data">


                                                                <button class="button btn-cart" title="Chọn sản phẩm"
                                                                        type="button" aria-label="Chọn sản phẩm"
                                                                        onclick="window.location.href='/dien-thoai-iphone-7-32gb'">
                                                                    <span>Chọn</span></button>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="product-item__mini clearfix">
                                                    <div class="product-item__thumb">
                                                        <a href="/blackberry-passport">
                                                            <img src="//bizweb.dktcdn.net/thumb/compact/100/141/731/products/blackberrypassportblack15.png?v=1479142099757"
                                                                 alt="BlackBerry Passport">
                                                        </a>
                                                    </div>
                                                    <div class="product-item__content">
                                                        <h3 class="product-item__title"><a href="/blackberry-passport">BlackBerry
                                                                Passport</a></h3>


                                                        <div class="product-item__price">

                                                            <p class="product-item__price__regular">11.980.000₫</p>

                                                        </div>


                                                        <div class="product-item__actions">

                                                            <form action="/cart/add" method="post" class="variants"
                                                                  id="product-actions-4726077"
                                                                  enctype="multipart/form-data">


                                                                <input type="hidden" name="variantId" value="7637601">
                                                                <button class="button btn-cart add_to_cart" title="Mua hàng"
                                                                        aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307px;">
                                            <div class="item">


                                                <div class="product-item__mini clearfix">
                                                    <div class="product-item__thumb">
                                                        <a href="/dien-thoai-sony-xperia-z5-dual">
                                                            <img src="//bizweb.dktcdn.net/thumb/compact/100/141/731/products/sony-xperia-x-1-400x460.png?v=1479172676383"
                                                                 alt="Điện thoại Sony Xperia Z5 Dual">
                                                        </a>
                                                    </div>
                                                    <div class="product-item__content">
                                                        <h3 class="product-item__title"><a
                                                                    href="/dien-thoai-sony-xperia-z5-dual">Điện thoại Sony
                                                                Xperia Z5 Dual</a></h3>


                                                        <div class="product-item__price">

                                                            <p class="product-item__price__old">
                                                                <span>13.990.000₫</span><span class="sale-flag">-14%</span>
                                                            </p>
                                                            <p class="product-item__price__special">11.990.000₫</p>

                                                        </div>


                                                        <div class="product-item__actions">

                                                            <form action="/cart/add" method="post" class="variants"
                                                                  id="product-actions-4726021"
                                                                  enctype="multipart/form-data">


                                                                <input type="hidden" name="variantId" value="9876594">
                                                                <button class="button btn-cart add_to_cart" title="Mua hàng"
                                                                        aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="product-item__mini clearfix">
                                                    <div class="product-item__thumb">
                                                        <a href="/dien-thoai-sony-xperia-x">
                                                            <img src="//bizweb.dktcdn.net/thumb/compact/100/141/731/products/sony-xperia-z5-dual-400x460.png?v=1479141392427"
                                                                 alt="Điện thoại Sony Xperia X">
                                                        </a>
                                                    </div>
                                                    <div class="product-item__content">
                                                        <h3 class="product-item__title"><a href="/dien-thoai-sony-xperia-x">Điện
                                                                thoại Sony Xperia X</a></h3>


                                                        <div class="product-item__price">

                                                            <p class="product-item__price__old">
                                                                <span>10.990.000₫</span><span class="sale-flag">-9%</span>
                                                            </p>
                                                            <p class="product-item__price__special">9.990.000₫</p>

                                                        </div>


                                                        <div class="product-item__actions">

                                                            <form action="/cart/add" method="post" class="variants"
                                                                  id="product-actions-4725962"
                                                                  enctype="multipart/form-data">


                                                                <input type="hidden" name="variantId" value="7637417">
                                                                <button class="button btn-cart add_to_cart" title="Mua hàng"
                                                                        aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307px;">
                                            <div class="item">


                                                <div class="product-item__mini clearfix">
                                                    <div class="product-item__thumb">
                                                        <a href="/htc-one-m9">
                                                            <img src="//bizweb.dktcdn.net/thumb/compact/100/141/731/products/13090htconem9goldonsilver.jpg?v=1479172304403"
                                                                 alt="HTC One M9">
                                                        </a>
                                                    </div>
                                                    <div class="product-item__content">
                                                        <h3 class="product-item__title"><a href="/htc-one-m9">HTC One M9</a>
                                                        </h3>


                                                        <div class="product-item__price">

                                                            <p class="product-item__price__regular">10.990.000₫</p>

                                                        </div>


                                                        <div class="product-item__actions">

                                                            <form action="/cart/add" method="post" class="variants"
                                                                  id="product-actions-4726075"
                                                                  enctype="multipart/form-data">


                                                                <input type="hidden" name="variantId" value="7637599">
                                                                <button class="button btn-cart add_to_cart" title="Mua hàng"
                                                                        aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="product-item__mini clearfix">
                                                    <div class="product-item__thumb">
                                                        <a href="/lenovo-s8">
                                                            <img src="//bizweb.dktcdn.net/thumb/compact/100/141/731/products/big97572lenovos850lcz3745.png?v=1479172450703"
                                                                 alt="Lenovo S8">
                                                        </a>
                                                    </div>
                                                    <div class="product-item__content">
                                                        <h3 class="product-item__title"><a href="/lenovo-s8">Lenovo S8</a>
                                                        </h3>


                                                        <div class="product-item__price">

                                                            <p class="product-item__price__regular">4.639.000₫</p>

                                                        </div>


                                                        <div class="product-item__actions">

                                                            <form action="/cart/add" method="post" class="variants"
                                                                  id="product-actions-4726067"
                                                                  enctype="multipart/form-data">


                                                                <input type="hidden" name="variantId" value="7637591">
                                                                <button class="button btn-cart add_to_cart" title="Mua hàng"
                                                                        aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307px;">
                                            <div class="item">


                                                <div class="product-item__mini clearfix">
                                                    <div class="product-item__thumb">
                                                        <a href="/oppo-neo-5">
                                                            <img src="//bizweb.dktcdn.net/thumb/compact/100/141/731/products/135237opponeo51201white1.png?v=1479142113290"
                                                                 alt="Oppo Neo 5">
                                                        </a>
                                                    </div>
                                                    <div class="product-item__content">
                                                        <h3 class="product-item__title"><a href="/oppo-neo-5">Oppo Neo 5</a>
                                                        </h3>


                                                        <div class="product-item__price">

                                                            <p class="product-item__price__regular">3.189.000₫</p>

                                                        </div>


                                                        <div class="product-item__actions">

                                                            <form action="/cart/add" method="post" class="variants"
                                                                  id="product-actions-4726076"
                                                                  enctype="multipart/form-data">


                                                                <input type="hidden" name="variantId" value="7637600">
                                                                <button class="button btn-cart add_to_cart" title="Mua hàng"
                                                                        aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="product-item__mini clearfix">
                                                    <div class="product-item__thumb">
                                                        <a href="/nokia-x6-8gb">
                                                            <img src="//bizweb.dktcdn.net/thumb/compact/100/141/731/products/0010687nokiax68gb1.png?v=1479141860967"
                                                                 alt="Nokia X6 8GB">
                                                        </a>
                                                    </div>
                                                    <div class="product-item__content">
                                                        <h3 class="product-item__title"><a href="/nokia-x6-8gb">Nokia X6
                                                                8GB</a></h3>


                                                        <div class="product-item__price">

                                                            <p class="product-item__price__old"><span>6.600.000₫</span><span
                                                                        class="sale-flag">-2%</span></p>
                                                            <p class="product-item__price__special">6.490.000₫</p>

                                                        </div>


                                                        <div class="product-item__actions">

                                                            <form action="/cart/add" method="post" class="variants"
                                                                  id="product-actions-4726082"
                                                                  enctype="multipart/form-data">


                                                                <input type="hidden" name="variantId" value="7637606">
                                                                <button class="button btn-cart add_to_cart" title="Mua hàng"
                                                                        aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307px;">
                                            <div class="item">


                                                <div class="product-item__mini clearfix">
                                                    <div class="product-item__thumb">
                                                        <a href="/lg-g-pro-lite-dual">
                                                            <img src="//bizweb.dktcdn.net/thumb/compact/100/141/731/products/5341643lggprolitedual011.png?v=1479141824977"
                                                                 alt="LG G Pro Lite Dual">
                                                        </a>
                                                    </div>
                                                    <div class="product-item__content">
                                                        <h3 class="product-item__title"><a href="/lg-g-pro-lite-dual">LG G
                                                                Pro Lite Dual</a></h3>


                                                        <div class="product-item__price">

                                                            <p class="product-item__price__old"><span>6.300.000₫</span><span
                                                                        class="sale-flag">-3%</span></p>
                                                            <p class="product-item__price__special">6.100.000₫</p>

                                                        </div>


                                                        <div class="product-item__actions">

                                                            <form action="/cart/add" method="post" class="variants"
                                                                  id="product-actions-4726083"
                                                                  enctype="multipart/form-data">


                                                                <input type="hidden" name="variantId" value="7637607">
                                                                <button class="button btn-cart add_to_cart" title="Mua hàng"
                                                                        aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="product-item__mini clearfix">
                                                    <div class="product-item__thumb">
                                                        <a href="/lg-l70">
                                                            <img src="//bizweb.dktcdn.net/thumb/compact/100/141/731/products/big52005lggpad.png?v=1479141705710"
                                                                 alt="LG L70">
                                                        </a>
                                                    </div>
                                                    <div class="product-item__content">
                                                        <h3 class="product-item__title"><a href="/lg-l70">LG L70</a></h3>


                                                        <div class="product-item__price">

                                                            <p class="product-item__price__old"><span>5.200.000₫</span><span
                                                                        class="sale-flag">-4%</span></p>
                                                            <p class="product-item__price__special">5.000.000₫</p>

                                                        </div>


                                                        <div class="product-item__actions">

                                                            <form action="/cart/add" method="post" class="variants"
                                                                  id="product-actions-4726084"
                                                                  enctype="multipart/form-data">


                                                                <input type="hidden" name="variantId" value="7637608">
                                                                <button class="button btn-cart add_to_cart" title="Mua hàng"
                                                                        aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 307px;">
                                            <div class="item">


                                                <div class="product-item__mini clearfix">
                                                    <div class="product-item__thumb">
                                                        <a href="/iphone-4s-32-gb">
                                                            <img src="//bizweb.dktcdn.net/thumb/compact/100/141/731/products/54115944s1.png?v=1479141894390"
                                                                 alt="iPhone 4s 32GB">
                                                        </a>
                                                    </div>
                                                    <div class="product-item__content">
                                                        <h3 class="product-item__title"><a href="/iphone-4s-32-gb">iPhone 4s
                                                                32GB</a></h3>


                                                        <div class="product-item__price">

                                                            <p class="product-item__price__old">
                                                                <span>10.000.000₫</span><span class="sale-flag">-2%</span>
                                                            </p>
                                                            <p class="product-item__price__special">9.790.000₫</p>

                                                        </div>


                                                        <div class="product-item__actions">

                                                            <form action="/cart/add" method="post" class="variants"
                                                                  id="product-actions-4726081"
                                                                  enctype="multipart/form-data">


                                                                <input type="hidden" name="variantId" value="7637605">
                                                                <button class="button btn-cart add_to_cart" title="Mua hàng"
                                                                        aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="product-item__mini clearfix">
                                                    <div class="product-item__thumb">
                                                        <a href="/iphone-4-16gb">
                                                            <img src="//bizweb.dktcdn.net/thumb/compact/100/141/731/products/appleiphone4s2.png?v=1479141442657"
                                                                 alt="iPhone 4 16GB">
                                                        </a>
                                                    </div>
                                                    <div class="product-item__content">
                                                        <h3 class="product-item__title"><a href="/iphone-4-16gb">iPhone 4
                                                                16GB</a></h3>


                                                        <div class="product-item__price">

                                                            <p class="product-item__price__old"><span>6.000.000₫</span><span
                                                                        class="sale-flag">-0%</span></p>
                                                            <p class="product-item__price__special">5.990.000₫</p>

                                                        </div>


                                                        <div class="product-item__actions">

                                                            <form action="/cart/add" method="post" class="variants"
                                                                  id="product-actions-4726088"
                                                                  enctype="multipart/form-data">


                                                                <input type="hidden" name="variantId" value="7637612">
                                                                <button class="button btn-cart add_to_cart" title="Mua hàng"
                                                                        aria-label="Mua hàng"><span>Mua hàng</span></button>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="owl-controls clickable">
                                    <div class="owl-buttons">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-md hidden-sm hidden-xs">
                        <div class="three-module__banner_right">
                            <a href="/">
                                <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/home-banner-right.jpg?1493953410461"
                                     alt="Samsung Galaxy S6 EDGE chỉ còn 7.500.000đ">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div>
        <section class="three-banner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="three-banner__list" style="margin-bottom: 50px">
                            <div class="row">
                                <div class="three-banner__item col-md-4 col-sm-4 col-xs-12">
                                    <a href="/">
                                        <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/rhs-banner-1.jpg?1493953410461"
                                             alt="iPhone 7">
                                    </a>
                                </div>
                                <div class="three-banner__item col-md-4 col-sm-4 col-xs-12 hidden-xs">
                                    <a href="/">
                                        <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/rhs-banner-2.jpg?1493953410461"
                                             alt="Galaxy S7 EDGE">
                                    </a>
                                </div>
                                <div class="three-banner__item col-md-4 col-sm-4 col-xs-12 hidden-xs">
                                    <a href="/">
                                        <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/rhs-banner-3.jpg?1493953410461"
                                             alt="Samsung Galaxy Note 6">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
                            <div class="owl-wrapper" style="width: 4560px; left: 0px; display: block;">
                                <div class="owl-item" style="width: 190px;">
                                    <div class="item">


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
                                </div>
                                <div class="owl-item" style="width: 190px;">
                                    <div class="item">


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
                                <div class="owl-item" style="width: 190px;">
                                    <div class="item">


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
                                </div>
                                <div class="owl-item" style="width: 190px;">
                                    <div class="item">


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
                                </div>
                                <div class="owl-item" style="width: 190px;">
                                    <div class="item">


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
                                </div>
                                <div class="owl-item" style="width: 190px;">
                                    <div class="item">


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
                                </div>
                                <div class="owl-item" style="width: 190px;">
                                    <div class="item">


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


                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="/aonike-cd-150">
                                                    <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4236103aonikecd15011.png?v=1479140903213"
                                                         alt="Tai nghe Aonike CD-150">
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="aonike-cd-150" class="button quick-view">
                                                        Xem nhanh
                                                    </button>

                                                    <form action="/cart/add" method="post" class="variants"
                                                          id="product-actions-4726097" enctype="multipart/form-data">


                                                        <input type="hidden" name="variantId" value="9348202">
                                                        <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                                title="Mua hàng"><span>Mua hàng</span></button>

                                                    </form>

                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a href="/aonike-cd-150">Tai nghe Aonike
                                                        CD-150</a></h3>


                                                <div class="product-item__price">

                                                    <p class="product-item__price__old"><span>250.000₫</span><span
                                                                class="sale-flag">-40%</span></p>
                                                    <p class="product-item__price__special">150.000₫</p>

                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 190px;">
                                    <div class="item">


                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="/de-tan-nhiet-xcm-n19">
                                                    <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4320312coolermasternotepalergo.png?v=1479140953727"
                                                         alt="Đế tản nhiệt XCM N19">
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="de-tan-nhiet-xcm-n19" class="button quick-view">
                                                        Xem nhanh
                                                    </button>

                                                    <form action="/cart/add" method="post" class="variants"
                                                          id="product-actions-4726096" enctype="multipart/form-data">


                                                        <input type="hidden" name="variantId" value="7637620">
                                                        <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                                title="Mua hàng"><span>Mua hàng</span></button>

                                                    </form>

                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a href="/de-tan-nhiet-xcm-n19">Đế tản nhiệt
                                                        XCM N19</a></h3>


                                                <div class="product-item__price">

                                                    <p class="product-item__price__old"><span>220.000₫</span><span
                                                                class="sale-flag">-9%</span></p>
                                                    <p class="product-item__price__special">200.000₫</p>

                                                </div>


                                            </div>
                                        </div>


                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="/loa-icore-ic-38-hifi-bluetooth-mini-speaker">
                                                    <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4759147loaicore7001.png?v=1479140976967"
                                                         alt="Loa iCore IC-38 Hifi Bluetooth Mini Speaker">
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="loa-icore-ic-38-hifi-bluetooth-mini-speaker"
                                                            class="button quick-view">
                                                        Xem nhanh
                                                    </button>

                                                    <form action="/cart/add" method="post" class="variants"
                                                          id="product-actions-4726095" enctype="multipart/form-data">


                                                        <input type="hidden" name="variantId" value="7637619">
                                                        <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                                title="Mua hàng"><span>Mua hàng</span></button>

                                                    </form>

                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a
                                                            href="/loa-icore-ic-38-hifi-bluetooth-mini-speaker">Loa iCore
                                                        IC-38 Hifi Bluetooth Mini Speaker</a></h3>


                                                <div class="product-item__price">

                                                    <p class="product-item__price__old"><span>500.000₫</span><span
                                                                class="sale-flag">-10%</span></p>
                                                    <p class="product-item__price__special">450.000₫</p>

                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 190px;">
                                    <div class="item">
                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="/samsung-ec-wb50fzbdbvn">
                                                    <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/50390391511.png?v=1479141038480"
                                                         alt="Samsung EC-WB50FZBDBVN">
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="samsung-ec-wb50fzbdbvn" class="button quick-view">
                                                        Xem nhanh
                                                    </button>

                                                    <form action="/cart/add" method="post" class="variants"
                                                          id="product-actions-4726094" enctype="multipart/form-data">
                                                        <input type="hidden" name="variantId" value="7637618">
                                                        <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                                title="Mua hàng"><span>Mua hàng</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a href="/samsung-ec-wb50fzbdbvn">Samsung
                                                        EC-WB50FZBDBVN</a></h3>
                                                <div class="product-item__price">

                                                    <p class="product-item__price__old"><span>4.000.000₫</span><span
                                                                class="sale-flag">-8%</span></p>
                                                    <p class="product-item__price__special">3.700.000₫</p>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="/mieng-dan-film-dan-man-hinh">
                                                    <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4500006combodanflimdanmanhinhc.png?v=1479141078567"
                                                         alt="Miếng dán film, dán màn hình">
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="mieng-dan-film-dan-man-hinh"
                                                            class="button quick-view">
                                                        Xem nhanh
                                                    </button>

                                                    <form action="/cart/add" method="post" class="variants"
                                                          id="product-actions-4726093" enctype="multipart/form-data">


                                                        <input type="hidden" name="variantId" value="7637617">
                                                        <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                                title="Mua hàng"><span>Mua hàng</span></button>
                                                    </form>

                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a href="/mieng-dan-film-dan-man-hinh">Miếng
                                                        dán film, dán màn hình</a></h3>


                                                <div class="product-item__price">

                                                    <p class="product-item__price__old"><span>200.000₫</span><span
                                                                class="sale-flag">-20%</span></p>
                                                    <p class="product-item__price__special">160.000₫</p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 190px;">
                                    <div class="item">
                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="/sony-cybershot-14-1px">
                                                    <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/50513471321.png?v=1479141106580"
                                                         alt="Sony Cybershot 14.1px">
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="sony-cybershot-14-1px" class="button quick-view">
                                                        Xem nhanh
                                                    </button>

                                                    <form action="/cart/add" method="post" class="variants"
                                                          id="product-actions-4726092" enctype="multipart/form-data">


                                                        <input type="hidden" name="variantId" value="7637616">
                                                        <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                                title="Mua hàng"><span>Mua hàng</span></button>

                                                    </form>

                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a href="/sony-cybershot-14-1px">Sony
                                                        Cybershot 14.1px</a></h3>


                                                <div class="product-item__price">

                                                    <p class="product-item__price__old"><span>8.000.000₫</span><span
                                                                class="sale-flag">-8%</span></p>
                                                    <p class="product-item__price__special">7.349.000₫</p>

                                                </div>


                                            </div>
                                        </div>
                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="/sony-vaio-vpc-eb3afx">
                                                    <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/0034585sonyvaiovpcz1390xcto11.png?v=1479141129887"
                                                         alt="Sony Vaio VPC EB3AFX">
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="sony-vaio-vpc-eb3afx" class="button quick-view">
                                                        Xem nhanh
                                                    </button>

                                                    <form action="/cart/add" method="post" class="variants"
                                                          id="product-actions-4726091" enctype="multipart/form-data">


                                                        <input type="hidden" name="variantId" value="7637615">
                                                        <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                                title="Mua hàng"><span>Mua hàng</span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a href="/sony-vaio-vpc-eb3afx">Sony Vaio
                                                        VPC EB3AFX</a></h3>
                                                <div class="product-item__price">

                                                    <p class="product-item__price__old"><span>16.000.000₫</span><span
                                                                class="sale-flag">-0%</span></p>
                                                    <p class="product-item__price__special">15.999.000₫</p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 190px;">
                                    <div class="item">


                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="/sony-anpha-a58">
                                                    <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/510870931.png?v=1479141173427"
                                                         alt="Sony Alpha a58">
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="sony-anpha-a58" class="button quick-view">
                                                        Xem nhanh
                                                    </button>

                                                    <form action="/cart/add" method="post" class="variants"
                                                          id="product-actions-4726090" enctype="multipart/form-data">


                                                        <input type="hidden" name="variantId" value="7637614">
                                                        <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                                title="Mua hàng"><span>Mua hàng</span></button>

                                                    </form>

                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a href="/sony-anpha-a58">Sony Alpha a58</a>
                                                </h3>


                                                <div class="product-item__price">

                                                    <p class="product-item__price__old"><span>12.000.000₫</span><span
                                                                class="sale-flag">-1%</span></p>
                                                    <p class="product-item__price__special">11.900.000₫</p>

                                                </div>


                                            </div>
                                        </div>


                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="/sac-dtdd-chan-v8">
                                                    <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4710041sac11.png?v=1479141235690"
                                                         alt="Sạc ĐTDĐ chân V8">
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="sac-dtdd-chan-v8" class="button quick-view">
                                                        Xem nhanh
                                                    </button>

                                                    <form action="/cart/add" method="post" class="variants"
                                                          id="product-actions-4726089" enctype="multipart/form-data">


                                                        <input type="hidden" name="variantId" value="7637613">
                                                        <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                                title="Mua hàng"><span>Mua hàng</span></button>

                                                    </form>

                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a href="/sac-dtdd-chan-v8">Sạc ĐTDĐ chân
                                                        V8</a></h3>


                                                <div class="product-item__price">

                                                    <p class="product-item__price__old"><span>200.000₫</span><span
                                                                class="sale-flag">-25%</span></p>
                                                    <p class="product-item__price__special">150.000₫</p>

                                                </div>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 190px;">
                                    <div class="item">


                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="/acer-aspire-5745g-382g50mn">
                                                    <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/0413707aceraspire5745450px41.png?v=1479141501610"
                                                         alt="Acer Aspire 5745G 382G50Mn">
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="acer-aspire-5745g-382g50mn"
                                                            class="button quick-view">
                                                        Xem nhanh
                                                    </button>

                                                    <form action="/cart/add" method="post" class="variants"
                                                          id="product-actions-4726087" enctype="multipart/form-data">


                                                        <input type="hidden" name="variantId" value="7637611">
                                                        <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                                title="Mua hàng"><span>Mua hàng</span></button>

                                                    </form>

                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a href="/acer-aspire-5745g-382g50mn">Acer
                                                        Aspire 5745G 382G50Mn</a></h3>


                                                <div class="product-item__price">

                                                    <p class="product-item__price__old"><span>12.800.000₫</span><span
                                                                class="sale-flag">-0%</span></p>
                                                    <p class="product-item__price__special">12.799.000₫</p>

                                                </div>


                                            </div>
                                        </div>


                                        <div class="product-item__grid">
                                            <div class="product-item__thumb">
                                                <a href="/lenovo-ideapad-z360-049390">
                                                    <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/0513889lenovoideapadz360049390.png?v=1479141533727"
                                                         alt="Lenovo IdeaPad Z360 (049390)">
                                                </a>
                                                <div class="product-item__actions hidden-xs">
                                                    <button data-handle="lenovo-ideapad-z360-049390"
                                                            class="button quick-view">
                                                        Xem nhanh
                                                    </button>

                                                    <form action="/cart/add" method="post" class="variants"
                                                          id="product-actions-4726086" enctype="multipart/form-data">


                                                        <input type="hidden" name="variantId" value="7637610">
                                                        <button class="button btn-cart add_to_cart" aria-label="Mua hàng"
                                                                title="Mua hàng"><span>Mua hàng</span></button>

                                                    </form>

                                                </div>
                                            </div>
                                            <div class="product-item__content">
                                                <h3 class="product-item__title"><a href="/lenovo-ideapad-z360-049390">Lenovo
                                                        IdeaPad Z360 (049390)</a></h3>


                                                <div class="product-item__price">

                                                    <p class="product-item__price__old"><span>14.000.000₫</span><span
                                                                class="sale-flag">-0%</span></p>
                                                    <p class="product-item__price__special">13.999.000₫</p>

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
    <div>
        <section class="home-blog hidden-xs">
            <div class="container">
                <div class="general__title home-blog__title">
                    <h2>Tin tức</h2>
                </div>
                <div class="home-blog__list">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="article-item">
                                <div class="article-item__thumb">
                                    <a href="/apple-lan-dau-tien-truc-tiep-ban-iphone-tra-bao-hanh">

                                        <img src="//bizweb.dktcdn.net/thumb/large/100/141/731/articles/asdadsad.jpg?v=1479057687783"
                                             alt="Apple lần đầu tiên trực tiếp bán iPhone trả bảo hành">

                                    </a>
                                </div>
                                <div class="article-item__content">
                                    <h3 class="article-item__title"><a
                                                href="/apple-lan-dau-tien-truc-tiep-ban-iphone-tra-bao-hanh">Apple lần đầu
                                            tiên trực tiếp bán iPhone trả bảo hành</a></h3>
                                    <div class="article-item__date">Thứ Hai, 14/11/2016 00:13</div>
                                    <div class="article-item__summary"> Trước đây, người ta có thể dễ dàng tìm mua các mẫu
                                        máy Mac, iPad hay cả iPod hàng “tân trang” (refurbished) trên chính gian hàng online
                                        của Apple,...
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="article-item">
                                <div class="article-item__thumb">
                                    <a href="/iphone-7-jet-black-va-xiaomi-mi-mix-ai-se-gianh-danh-hieu-chiec-may-ban-nhat-201">

                                        <img src="//bizweb.dktcdn.net/thumb/large/100/141/731/articles/dscf5289-1478932166269.jpg?v=1479056882707"
                                             alt="iPhone 7 Jet Black và Xiaomi Mi Mix: Ai sẽ giành danh hiệu &quot;Chiếc máy bẩn nhất 2016&quot;?">

                                    </a>
                                </div>
                                <div class="article-item__content">
                                    <h3 class="article-item__title"><a
                                                href="/iphone-7-jet-black-va-xiaomi-mi-mix-ai-se-gianh-danh-hieu-chiec-may-ban-nhat-201">iPhone
                                            7 Jet Black và Xiaomi Mi Mix: Ai sẽ giành danh hiệu "Chiếc máy bẩn nhất
                                            2016"?</a></h3>
                                    <div class="article-item__date">Thứ Hai, 14/11/2016 00:08</div>
                                    <div class="article-item__summary"> Cả hai chiếc máy đều có vẻ ngoài hào nhoáng, "bóng
                                        lộn" và... dễ bẩn, nhưng liệu chiếc máy nào bẩn hơn? Nếu xét về thiết kế, iPhone
                                        7...
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="article-item">
                                <div class="article-item__thumb">
                                    <a href="/cach-de-sao-luu-tin-nhan-va-cuoc-goi-don-gian-tren-android">

                                        <img src="//bizweb.dktcdn.net/thumb/large/100/141/731/articles/backup-800x450.jpg?v=1479056088670"
                                             alt="Cách để sao lưu tin nhắn và cuộc gọi đơn giản trên Android">

                                    </a>
                                </div>
                                <div class="article-item__content">
                                    <h3 class="article-item__title"><a
                                                href="/cach-de-sao-luu-tin-nhan-va-cuoc-goi-don-gian-tren-android">Cách để
                                            sao lưu tin nhắn và cuộc gọi đơn giản trên Android</a></h3>
                                    <div class="article-item__date">Chủ Nhật, 13/11/2016 23:54</div>
                                    <div class="article-item__summary">Đôi khi, trong quá trình sử dụng&nbsp;smartphone, bạn
                                        gặp phải những lỗi hay mã độc nên phải cài đặt lại thiết bị. Việc này sẽ làm mất
                                        toàn bộ dữ...
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
        <section class="home-policy hidden-xs">
            <div class="container">
                <div class="row">




                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="home-policy__item home-policy__item-1">
                            <div class="home-policy__item--content">
                                <h4 class="home-policy__item--title">Miễn phí vận chuyển </h4>
                                <p class="home-policy__item--description">Miễn phí vận chuyển các tỉnh nội thành Hà Nội &amp; TP. HCM</p>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="home-policy__item home-policy__item-2">
                            <div class="home-policy__item--content">
                                <h4 class="home-policy__item--title">Đổi trả trong vòng 24h</h4>
                                <p class="home-policy__item--description">Đổi trả sản phẩm nhanh chóng trong vòng 24h đồng hồ.</p>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="home-policy__item home-policy__item-3">
                            <div class="home-policy__item--content">
                                <h4 class="home-policy__item--title">Uy Tín Hàng Đầu </h4>
                                <p class="home-policy__item--description">Sản phẩm được ủy quyền bởi các hãng sản xuất.</p>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="home-policy__item home-policy__item-4">
                            <div class="home-policy__item--content">
                                <h4 class="home-policy__item--title">Tư vấn Miễn Phí 24/7</h4>
                                <p class="home-policy__item--description">Hotline : 0934 55 88 90</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <div>
        <footer>
            <div class="hidden-xs footer__menu text-center">
                <ul class="footer__menu--list">

                    <li class="footer__menu--item"><a href="/" class="footer__menu--link">Trang chủ</a></li>

                    <li class="footer__menu--item"><a href="/dien-thoai" class="footer__menu--link">Điện thoại</a></li>

                    <li class="footer__menu--item"><a href="/may-tinh-bang" class="footer__menu--link">Máy tính bảng</a></li>

                    <li class="footer__menu--item"><a href="/laptop" class="footer__menu--link">Laptop</a></li>

                    <li class="footer__menu--item"><a href="/may-cu" class="footer__menu--link">Máy cũ</a></li>

                    <li class="footer__menu--item"><a href="/phu-kien" class="footer__menu--link">Phụ kiện</a></li>

                    <li class="footer__menu--item"><a href="/khuyen-mai" class="footer__menu--link">Khuyến mãi</a></li>

                    <li class="footer__menu--item"><a href="/sac-du-phong" class="footer__menu--link">Sạc dự phòng</a></li>

                </ul>
            </div>
            <div class="copyright">
                <div class="container text-center">
                    © Bản quyền thuộc về <a href="javascript:;" rel="nofollow">TT Team</a> - Cung cấp bởi <a href="https://www.bizweb.vn/?utm_source=site-khach-hang&amp;utm_campaign=referral_bizweb&amp;utm_medium=footer&amp;utm_content=cung-cap-boi-bizweb">Bizweb</a>
                </div>
            </div>
        </footer>
    </div>
</body>
