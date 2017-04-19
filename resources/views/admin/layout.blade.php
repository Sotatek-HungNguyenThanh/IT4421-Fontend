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
    <link rel="stylesheet" type="text/css" id="theme" href="/css/admin/theme-blue.css"/>
    <!-- EOF CSS INCLUDE -->
    @yield("css");
    <script type="text/javascript" src="{{url('/js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/jquery/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/jquery/jquery.mCustomScrollbar.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{url('js/actions.js')}}"></script>
    @yield("script");
</head>
<body>
    <div class="page-container">
        <div class="page-sidebar">
            <!-- START X-NAVIGATION -->
           @include('admin.sidebar')
            <!-- END X-NAVIGATION -->
        </div>
        <div class="page-content">
            <!-- START X-NAVIGATION VERTICAL -->
            @include('admin.header')
            <ul class="breadcrumb">
            </ul>
            <!-- END BREADCRUMB -->

            <div class="page-title">
                <h2><span class="fa fa-arrow-circle-o-left"></span> @yield('page_title')</h2>
            </div>

            <div class="page-content-wrap">

                @yield('page_content')

            </div>
        </div>
    </div>

    @include('admin.popup_logout')
</body>