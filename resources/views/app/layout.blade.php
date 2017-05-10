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
    @yield('script')
</head>
<body>
<div class="wrap">
    @include('app.header_top_desc')
    @include('app.header_top')
    @include('app.header_menu')
    @yield('include_banner')
    <div class="content-web">
        @yield('content')
    </div>
</div>
@include('app.footer')
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>