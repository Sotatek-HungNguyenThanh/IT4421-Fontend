@extends('app.layout')

@section('css')
    <link href="{{url('css/customer/account.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection

@section('script')
    <script type="text/javascript" src="/js/angular/AccountController.js"></script>
@endsection

@section('content')
    <div ng-controller="AccountController as controller" class="col-md-12 col-sm-12 col-xs-12">
        <div class="content-account-page">
            <aside class="sidebar right-sidebar col-md-3 col-sm-4 col-xs-12">
                <div class="row sidebar-box blue">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar-box-heading">
                            <i class="icons icon-user"></i>
                            <h4>Tài khoản của bạn</h4>
                        </div>
                        <div class="sidebar-box-content">
                            <ul>
                                <li class="active"><a href="{{url('account')}}"><i class="icons icon-right-dir"></i>Thông tin tài khoản</a></li>

                                <li><a href="{{url('change-password')}}">Thay đổi mật khẩu</a></li>

                                <li><a href="#">Lịch sử giao dịch</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            @yield('content-view-account')
        </div>
    </div>
@endsection