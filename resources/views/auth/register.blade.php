@extends('layout.app')

@section('css')
    <link href="{{url('css/register.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection

@section('content')
    <div class="content-register">
        <form method="post" action="{{url('register')}}" novalidate="novalidate">
            <!-- Main Content: Step 01 -->
            <section class="main-content col-lg-8 col-md-8 col-sm-8">
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
                                    <p><strong>Thông tin đăng nhập</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="no-iconic-input required-input">

                                        <input name="ctl00$Home_ContentPlaceHolder$tb_Email" type="text" id="Home_ContentPlaceHolder_tb_Email" placeholder="Địa chỉ e-mail">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="no-iconic-input">

                                        <input name="ctl00$Home_ContentPlaceHolder$tb_Pasw" type="password" id="Home_ContentPlaceHolder_tb_Pasw" placeholder="Mật khẩu">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="no-iconic-input">

                                        <input name="ctl00$Home_ContentPlaceHolder$tb_ConfirmPasw" type="password" id="Home_ContentPlaceHolder_tb_ConfirmPasw" placeholder="Nhập lại mật khẩu">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <p><strong>Thông tin cá nhân</strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="no-iconic-input">

                                                <input type="text" id="Home_ContentPlaceHolder_tb_FirstName" placeholder="Họ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="no-iconic-input">

                                                <input type="text" id="Home_ContentPlaceHolder_tb_LastName" placeholder="Tên">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="no-iconic-input">
                                        <input type="text" placeholder="Telephone">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="no-iconic-input">
                                        <input type="text"  placeholder="Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="submit" value="Đăng ký ngay" class="big">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
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
                    </div>
                </div>
            </div>
        </aside>
    </div>
@endsection