<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    {{--css--}}
    <link href="{{url('css/app.css')}}" rel="stylesheet" type="text/css" media="all"/>
    @yield('css')

    {{--javascript--}}
    <script type="text/javascript" src="{{url('js/app.js')}}"></script>
    <link rel="stylesheet" href="/css/theme-home.css" type="text/css">
    <script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script type="text/javascript" src="/js/angular/core/BaseClass.js"></script>
    <script type="text/javascript" src="/js/angular/core/BaseFilter.js"></script>
    <script type="text/javascript" src="/js/angular/core/BaseService.js"></script>
    <script type="text/javascript" src="/js/angular/core/component.js"></script>
    <script type="text/javascript" src="/js/angular/core/BaseController.js"></script>
    <script type="text/javascript" src="/js/angular/core/underscore-min.js"></script>
    @yield('script')
</head>
<body>
<div class="wrap" ng-app="myApp" ng-cloak>
    @include('app.header')
    @yield('include_banner')
    <div class="content-web">
        @yield('content')
    </div>
</div>
@include('app.footer')
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>