@extends('layout.app')

@section('css')
    <link href="{{url('css/register.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection

@section('content')
    <div class="content-register">
        <section class="main-content col-lg-8 col-md-8 col-sm-8">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                    <div class="green">
                        <div class="carousel-heading no-margin">
                            <h4>Đăng ký thành viên</h4>
                        </div>
                    </div>
                    <div class="page-content">
                        <form method="post" action="{{url('register')}}">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p><strong>Thông tin đăng nhập</strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="no-iconic-input required-input">
                                    <input type="email" id="Home_ContentPlaceHolder_tb_Email" placeholder="Địa chỉ e-mail" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="no-iconic-input">

                                    <input type="password" id="Home_ContentPlaceHolder_tb_Pasw" placeholder="Mật khẩu" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="no-iconic-input">
                                    <input type="password" id="Home_ContentPlaceHolder_tb_ConfirmPasw" placeholder="Nhập lại mật khẩu" required>
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
                                <div class="no-iconic-input required-input">
                                    <input type="text" id="Home_ContentPlaceHolder_tb_FirstName" placeholder="Họ Tên" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="no-iconic-input">
                                    <input type="text" placeholder="Telephone" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="no-iconic-input">
                                    <input type="text"  placeholder="Address" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input type="submit" value="Đăng ký ngay" class="big">
                            </div>
                        </div>
                        </form>
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
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <script type="text/javascript">
        window.onload = function () {
            document.getElementById("Home_ContentPlaceHolder_tb_Pasw").onchange = validatePassword;
            document.getElementById("Home_ContentPlaceHolder_tb_ConfirmPasw").onchange = validatePassword;
        }
        function validatePassword(){
            var pass2=document.getElementById("Home_ContentPlaceHolder_tb_ConfirmPasw").value;
            var pass1=document.getElementById("Home_ContentPlaceHolder_tb_Pasw").value;
            if(pass1 != pass2)
                document.getElementById("Home_ContentPlaceHolder_tb_ConfirmPasw").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("Home_ContentPlaceHolder_tb_ConfirmPasw").setCustomValidity('');
        }
    </script>
@endsection