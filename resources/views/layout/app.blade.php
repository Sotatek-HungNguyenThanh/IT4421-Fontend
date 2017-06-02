<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    {{--css--}}
    <link href="{{url('css/app.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{url('css/template/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{url('css/template/slider.css')}}" rel="stylesheet" type="text/css" media="all"/>
    @yield('css')

    {{--javascript--}}
    <script type="text/javascript" src="{{url('js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script type="text/javascript" src="{{url('js/angular/core/BaseClass.js')}}"></script>
    <script type="text/javascript" src="{{url('js/angular/core/BaseFilter.js')}}"></script>
    <script type="text/javascript" src="{{url('js/angular/core/BaseService.js')}}"></script>
    <script type="text/javascript" src="{{url('js/angular/core/component.js')}}"></script>
    <script type="text/javascript" src="{{url('js/angular/core/BaseController.js')}}"></script>
    <script type="text/javascript" src="{{url('js/angular/core/underscore-min.js')}}"></script>
    @yield('javascript')
</head>
<body>
<div class="wrap" ng-app="myApp">
    @include('layout.header')
    <div class="main">
        @yield('content')
    </div>
</div>
</body>
</html>