<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    {{--css--}}
    <link href="{{url('css/app.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>

    @yield('css')

    {{--javascript--}}
    <script type="text/javascript" src="{{url('js/app.js')}}"></script>
    <link rel="stylesheet" href="/css/theme-home.css" type="text/css">
    {{--<link rel="stylesheet" href="/css/responsive.css" type="text/css">--}}
    <script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="/js/angular/core/BaseClass.js"></script>
    <script type="text/javascript" src="/js/angular/core/Filter.js"></script>
    <script type="text/javascript" src="/js/angular/core/Service.js"></script>
    <script type="text/javascript" src="/js/angular/guest/CartService.js"></script>
    <script type="text/javascript" src="/js/angular/core/component.js"></script>
    <script type="text/javascript" src="/js/angular/core/Controller.js"></script>
    <script type="text/javascript" src="/js/angular/guest/LogicCartController.js"></script>
    <script type="text/javascript" src="/js/angular/guest/CheckoutController.js"></script>
    <script type="text/javascript" src="/js/angular/guest/CartShortcutController.js"></script>
    <script type="text/javascript" src="/js/angular/guest/CartModelController.js"></script>
    <script type="text/javascript" src="/js/angular/core/underscore-min.js"></script>

    <script src="{{ url('/js/pikaday/moment.js') }}"></script>
    <script src="{{ url('/js/pikaday/pikaday.js') }}"></script>
    <script src="{{ url('/js/pikaday/pikaday-angular.js') }}"></script>
    <script src="{{ url('/js/angular/pika_date/pika_date_customer.js') }}"></script>
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
@include('notification_error')
@include('notification_success')
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>