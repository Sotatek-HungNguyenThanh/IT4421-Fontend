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
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="/css/admin/theme-default.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="/css/admin/theme-blue.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="/css/model.css"/>
    <!-- EOF CSS INCLUDE -->
    @yield("css")
    <script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="/js/plugins.js"></script>
    <script type="text/javascript" src="/js/actions.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script type="text/javascript" src="/js/angular/core/BaseClass.js"></script>
    <script type="text/javascript" src="/js/angular/core/BaseFilter.js"></script>
    <script type="text/javascript" src="/js/angular/admin/AdminFilter.js"></script>
    <script type="text/javascript" src="/js/angular/core/BaseService.js"></script>
    <script type="text/javascript" src="/js/angular/admin/AdminService.js"></script>
    <script type="text/javascript" src="/js/angular/core/component.js"></script>
    <script type="text/javascript" src="/js/angular/core/BaseController.js"></script>
    <script type="text/javascript" src="/js/angular/core/underscore-min.js"></script>
    <script type="text/javascript" src="/js/angular/admin/ManageProductController.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    @yield("script")
    <style>
        .modal-backdrop.in{
            z-index: 1;
        }
        .modal-dialog{
            z-index: 10;
        }
        .modal-body {
            min-height: 290px;
        }
        input.form-control,
        textarea.form-control{
            padding: 10px 15px;
            height: auto;
            font-size: 1em;
            border: 1px solid #c8d1d3;
            background-color: transparent;
            box-shadow: none;
        }
        .form-control[disabled], .form-control[readonly]{
            background: white;
            color: #555;
        }
    </style>
    <style>
        .modal-backdrop.in{
            z-index: 1;
        }
        .modal-dialog{
            z-index: 10;
        }
        .modal-body {
            min-height: 290px;
        }
        .form-control[disabled], .form-control[readonly]{
            background: white;
            color: #555;
        }
        .modal-content{
            border-width: 0px;
            border-radius: 5px;
        }
        .modal-body.notification{
            min-height: 70px;
        }
        .modal-body.notification.success{
            background-color: #d6e9c6;
            color: #3c763d;
            border-radius: 5px;
        }
        .modal-body.notification.error{
            background-color: #f2dede;
            color: #a94442;
            border-radius: 5px;
        }
        .page-content-admin{
            min-height: 100%;
            margin-left: 220px;
            background: #f5f5f5 left top repeat;
            position: relative;
            zoom: 1;
        }
    </style>
    <style>
        input.form-control, textarea.form-control, select.form-control {
            border-radius: 2px;
            padding: 10px 15px;
            height: auto;
            font-size: 1em;
            line-height: auto;
            border: 1px solid #c8d1d3;
            background-color: transparent;
            box-shadow: none;
            /*margin-bottom: 15px;*/
        }
        .container-content{
            width: 100%;
            background-color: #FFF;
            border-radius: 3px;
            box-shadow: 0 1px 2px #c8d1d3;
        }
        .container-header{
            padding: 30px;
            font-size: 1.1em;
            font-weight: 400;
            border-bottom: 1px solid #dfe6e8;
            border-left: 0px solid transparent;
            color: #666;
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -ms-flex-align: start;
            align-items: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
        .container-body{
            padding: 30px;
        }
        .form-horizontal .form-group {
            margin-right: -15px;
            margin-left: -15px;
        }
        .btn {
            padding: 10px 30px;
            border-radius: 0;
            border-width: 1px;
            border-style: solid;
            border-color: transparent;
            border-radius: 3px;
            box-shadow: 0 2px 3px rgba(223, 230, 232, 0.3);
            margin-bottom: 5px;
            transition: all .3s ease;
        }
        .btn.btn-primary {
            border-color: #095077;
            border-bottom-color: #043D5D;
            background-color: #095077;
            box-shadow: 0 2px 3px rgba(9, 80, 119, 0.3);
        }
        .x-navigation.x-navigation-horizontal {
            height: 50px;
            background: #33414e;
            position: fixed !important;
        }
        .page-container.page-navigation-toggled .page-content-admin {
            margin-left: 50px;
        }
        .page-container .page-content .page-content-wrap {
            float: left;
            width: 100%;
            background: white;
        }
    </style>
</head>
<body>
<div class="page-container" ng-app="adminApp" ng-cloak>
    <div class="page-sidebar">
        <!-- START X-NAVIGATION -->
    @include('admin.sidebar')
    <!-- END X-NAVIGATION -->
    </div>
    <div class="page-content">
        <!-- START X-NAVIGATION VERTICAL -->
    @include('admin.header')
    <!-- END BREADCRUMB -->

        <div class="page-title">
            @yield('page_title')
        </div>

        <div class="page-content-wrap">

            @yield('page_content')

        </div>
        <audio id="audio-alert" src="/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="/audio/fail.mp3" preload="auto"></audio>
    </div>
    @include('admin.loading')
    @include('admin.logout')
</body>