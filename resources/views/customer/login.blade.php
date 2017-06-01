@extends('app.layout')


@section('title')
    Login
@endsection

@section('css')
    <link href="{{url('css/login.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection

@section('content')
    <div class="content-login">
    <section class="col-lg-6 col-md-6 col-sm-6">
        <form method="post" action="{{url('login')}}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="orange">
                        <div class="carousel-heading no-margin">
                            <h4>Đăng nhập tài khoản</h4>
                        </div>
                    </div>

                    <div class="page-content">
                        <p>Nếu bạn đã có tài khoản, vui lòng đăng nhập </p>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="iconic-input">
                                    <input type="email" name="email" id="Home_ContentPlaceHolder_tb_Email" placeholder="E-mail" required>
                                    <i class="icons icon-user-3"></i>
                                </div>
                                <div class="iconic-input">
                                    <input type="password" name="password" id="Home_ContentPlaceHolder_tb_Pasw" placeholder="Mật khẩu" required minlength="8">
                                    <i class="icons icon-lock"></i>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 align-left">
                                <input type="submit" value="Đăng nhập" id="Home_ContentPlaceHolder_bt_Submit" class="orange">
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 align-right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section class="main-content col-lg-6 col-md-6 col-sm-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                <div class="green">
                    <div class="carousel-heading no-margin">
                        <h4>Đăng ký thành viên</h4>
                    </div>
                </div>
                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <ul>
                                <li><strong>Những lợi ích khi đăng ký thành viên:</strong></li>
                                <li><i class="icons icon-check"></i>Quản lý và kiểm tra trạng thái đơn hàng thật dễ dàng</li>
                                <li><i class="icons icon-check"></i>Quản lý điểm thẻ tích lũy khi mua hàng</li>
                                <li><i class="icons icon-check"></i>Quản lý những sản phẩm yêu thích đã lưu lại</li>
                            </ul>
                            <p>Còn chờ gì nữa! Bạn hãy tạo ngay 1 tài khoản dễ dàng chỉ trong vài phút</p>

                            <a href="/register" class="button big"><span>Đăng ký ngay</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
@endsection