<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('title')</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        {{--css--}}
        <link href="{{url('css/app.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{url('css/template/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{url('css/template/slider.css')}}" rel="stylesheet" type="text/css" media="all"/>
        @yield('css')

        {{--javascript--}}
        <script type="text/javascript" src="{{url('js/app.js')}}"></script>
        @yield('javascript')
    </head>
    <body>
        <div class="wrap">
            @include('app.header')
            <div class="main">
            @yield('content')
            </div>
        </div>
        @include('app.footer')
        <a href="#" id="toTop"><span id="toTopHover"> </span></a>
    </body>
</html>