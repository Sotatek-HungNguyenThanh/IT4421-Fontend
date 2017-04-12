@extends('layout.app')

@section('css')
    <link href="{{url('css/feedback.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection

@section('content')
    <div class="content-feedback">
        <section class="main-content col-lg-8 col-md-8 col-sm-8">
            <form method="post" action="{{url('feedback')}}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        <div class="green">
                            <div class="carousel-heading no-margin">
                                <h4>Feedback</h4>
                            </div>
                        </div>
                        <div class="page-content">
                            @if(Session::has('alert-success'))
                                <div class="alert alert-success">
                                    <strong>Success!</strong> {{Session::get('alert-success')}}
                                </div>
                            @endif
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="body-feedback">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="iconic-input">
                                        <input type="email" id="Home_ContentPlaceHolder_tb_Email" placeholder="E-mail" class="form-control" name="email" required>
                                        <i class="icons icon-user-3"></i>
                                    </div>
                                    <div style="min-height: 20px"></div>
                                    <div class="iconic-input">
                                        <textarea type="text" class="form-control" rows="8" name="feedback" placeholder="Add feedback..." required></textarea>
                                    </div>
                                </div>
                            </div>
                        <div class="footer-feedback">
                            <button class="btn-send-feedback" id="Home_ContentPlaceHolder_bt_Submit">Send Feedback</button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <aside class="sidebar right-sidebar col-lg-4 col-md-4 col-sm-4">
            <div class="row">
                <div class="page-content">
                    <div class="row-login">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="carousel-heading no-margin">
                                <h4>Đăng nhập tài khoản</h4>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p>Nếu bạn đã có tài khoản</p>
                            <div class="product-actions-single">
                                <a href="/login" class="action-button black">
                                    <span class="add-to-cart">
                                        <span class="action-name">Đăng nhập ngay</span>
                                        <span class="action-note">(Để hưởng nhiều ưu đãi cho thành viên)</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row-register">
                         <div class="col-md-12 col-sm-12 col-xs-12" style="padding-top: 70px;">
                            <div class="carousel-heading no-margin">
                                <h4>Đăng ký tài khoản</h4>
                            </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <p>Nếu bạn chưa có tài khoản</p>
                        <div class="product-actions-single">
                            <a href="/register" class="action-button blue">
                                <span class="add-to-cart">
                                    <span class="action-name">Đăng ký</span>
                                    <span class="action-note">(Hãy đăng ký để trở thành thành viên)</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
@endsection