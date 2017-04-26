<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="{{url('css/app.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="/css/admin/theme-default.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="/css/admin/theme-blue.css"/>
    <link rel="stylesheet" type="text/css" id="theme" href="/css/model.css"/>
    <!-- EOF CSS INCLUDE -->
    @yield("css");
    <script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="/js/plugins.js"></script>
    <script type="text/javascript" src="/js/actions.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script type="text/javascript" src="/js/angular/core/BaseClass.js"></script>
    <script type="text/javascript" src="/js/angular/core/BaseFilter.js"></script>
    <script type="text/javascript" src="/js/angular/core/BaseService.js"></script>
    <script type="text/javascript" src="/js/angular/core/component.js"></script>
    <script type="text/javascript" src="/js/angular/core/BaseController.js"></script>
    <script type="text/javascript" src="/js/angular/core/underscore-min.js"></script>
    @yield("script");
</head>
<body>
    <div class="page-container" ng-app="adminApp">
        <div class="page-sidebar">
            <!-- START X-NAVIGATION -->
           @include('admin.sidebar')
            <!-- END X-NAVIGATION -->
        </div>
        <div class="page-content">
            <!-- START X-NAVIGATION VERTICAL -->
            @include('admin.header')
            <!-- END BREADCRUMB -->
            <div class="body-page">
                <div class="page-title">
                    <h2>@yield('page_title')</h2>
                </div>
                <div class="page-content-wrap">
                    @yield('page_content')
                    <audio id="audio-alert" src="/audio/alert.mp3" preload="auto"></audio>
                    <audio id="audio-fail" src="/audio/fail.mp3" preload="auto"></audio>
                </div>
            </div>
        </div>
    </div>

    @include('admin.logout')
</body>