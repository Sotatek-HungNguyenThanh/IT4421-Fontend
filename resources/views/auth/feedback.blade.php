@extends('layout.app')

@section('css')
    <link href="{{url('css/feedback.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection

@section('content')
    <div class="content-feedback">
        <section class="main-content col-lg-8 col-md-8 col-sm-8">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                    <div class="green">
                        <div class="carousel-heading no-margin">
                            <h4>Feedback</h4>
                        </div>
                    </div>
                    <div class="page-content">
                        <div class="body-feedback">
                            <p>Email</p>
                            <hr>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                              <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <p>Feedback</p>
                            <hr>
                            <div class="input-feedback">
                              <input id="msg" type="text" class="form-control" name="msg" placeholder="Add feedback">
                            </div>
                        </div>
                    <div class="footer-feedback">
                        <button class="btn-send-feedback">Send Feedback</button>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <aside class="sidebar right-sidebar col-lg-4 col-md-4 col-sm-4">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 register-account">
                    <div class="blue">
                        <div class="carousel-heading no-margin">
                            <h4>Đăng nhập tài khoản</h4>
                        </div>
                    </div>
                    <div class="page-content">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <p>Nếu bạn đã có tài khoản</p>
                                <div class="product-actions-single">
                                    <a href="/login" class="action-button blue">
                                        <span class="add-to-cart">
                                            <span class="action-name">Đăng nhập ngay</span>
                                            <span class="action-note">(Để hưởng nhiều ưu đãi cho thành viên)</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
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
                </div>
            </div>
        </aside>
    </div>
@endsection