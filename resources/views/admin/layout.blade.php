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
    <link rel="stylesheet" type="text/css" id="theme" href="/css/admin/layout.css"/>
    <!-- EOF CSS INCLUDE -->
    @yield("css")
    <script type="text/javascript" src="/js/angular/core/underscore-min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="/js/plugins.js"></script>
    <script type="text/javascript" src="/js/actions.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script type="text/javascript" src="/js/angular/core/BaseClass.js"></script>
    <script type="text/javascript" src="/js/angular/core/Filter.js"></script>
    <script type="text/javascript" src="/js/angular/admin/AdminFilter.js"></script>
    <script type="text/javascript" src="/js/angular/core/Service.js"></script>
    <script type="text/javascript" src="/js/angular/admin/AdminService.js"></script>
    <script type="text/javascript" src="/js/angular/core/component_admin.js"></script>

    <script src="{{ url('/js/pikaday/moment.js') }}"></script>
    <script src="{{ url('/js/pikaday/pikaday.js') }}"></script>
    <script src="{{ url('/js/pikaday/pikaday-angular.js') }}"></script>
    <script src="{{ url('/js/angular/pika_date/pika_date_admin.js') }}"></script>

    <script type="text/javascript" src="/js/angular/core/Controller.js"></script>

    <script type="text/javascript" src="/js/angular/core/PaginationController.js"></script>
    <script type="text/javascript" src="/js/angular/admin/ProductController.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    @yield("script")
</head>
<body>
<div class="page-container" ng-app="adminApp" ng-cloak>
    <p>ok</p>
    {{--<div class="page-sidebar">--}}
        {{--<!-- START X-NAVIGATION -->--}}
    {{--@include('admin.sidebar')--}}
    {{--<!-- END X-NAVIGATION -->--}}
    {{--</div>--}}
    {{--<div class="page-content">--}}
        {{--<!-- START X-NAVIGATION VERTICAL -->--}}
    {{--@include('admin.header')--}}
    {{--<!-- END BREADCRUMB -->--}}

        {{--<div class="page-title">--}}
            {{--@yield('page_title')--}}
        {{--</div>--}}

        {{--<div class="page-content-wrap">--}}

            {{--@yield('page_content')--}}

        {{--</div>--}}
        {{--<audio id="audio-alert" src="/audio/alert.mp3" preload="auto"></audio>--}}
        {{--<audio id="audio-fail" src="/audio/fail.mp3" preload="auto"></audio>--}}
    {{--</div>--}}
    {{--@include('admin.loading')--}}
    {{--@include('admin.logout')--}}
</div>
</body>