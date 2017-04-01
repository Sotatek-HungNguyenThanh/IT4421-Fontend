@extends('customer.index')

@section('content-view-account')
    <section class="main-content account col-md-9 col-sm-8 col-xs-12">

        <form method="post" action="{{url('change-password-account')}}" id="formAccountInfo">
            {{ csrf_field() }}
            <div id="Home_ContentPlaceHolder_UACMaster_ControlPlaceHolder_actionEdit">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="title-block" style="padding: 5px 0 !important">Thay đổi mật khẩu</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">

                    </div>
                </div>
                <div class="row">
                    @if(Session::has('alert-success'))
                        <div class="alert alert-success">
                            <strong>Success!</strong> {{Session::get('alert-success') }}
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
                    <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        <div class="page-content">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <p>Mật khẩu cũ <span class="require">*</span></p>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <input type="password" name="oldPassword" placeholder="Mật khẩu cũ..." minlength="8" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <p>Mật khẩu mới <span class="require">*</span></p>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <input type="password" name="newPassword" id="Home_ContentPlaceHolder_tb_Pasw" minlength="8" placeholder="Mật khẩu mới..." required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <p>Nhập lại mật khẩu mới <span class="require">*</span></p>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <input type="password" name="confirmNewPassword" id="Home_ContentPlaceHolder_tb_ConfirmPasw" minlength="8"
                                           placeholder="Nhập lại mật khẩu mới..." required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <p></p>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <p></p>
                                    <span class="require">*</span> Thông tin bắt buộc
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <input type="submit" value="Lưu thông tin" id="Home_ContentPlaceHolder_UACMaster_ControlPlaceHolder_bt_SaveInfo" class="button orange">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
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