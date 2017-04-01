@extends('customer.index')

@section('content-view-account')
    <section class="main-content account col-md-9 col-sm-8 col-xs-12">
        <form method="post" action="{{url('update-account-info')}}" id="formAccountInfo">
            {{ csrf_field() }}
            <div id="Home_ContentPlaceHolder_UACMaster_ControlPlaceHolder_actionEdit">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2 class="title-block" style="padding: 5px 0 !important">Chỉnh sửa tài khoản</h2>
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
                    <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                        <div class="page-content">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <span>E-mail liên hệ</span>
                                    <p></p>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <span id="Home_ContentPlaceHolder_UACMaster_ControlPlaceHolder_lb_Email" style="font-weight:bold;">@{{ controller.email }}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <p>Họ và tên <span class="require">*</span></p>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <input type="text" name="fullname" id="Home_ContentPlaceHolder_UACMaster_ControlPlaceHolder_tb_FirstName" placeholder="Họ Tên..." ng-model="controller.fullname" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <p>Điện thoại <span class="require">*</span></p>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <input name="phone_number" type="text"
                                           class="required"
                                           id="account_phone_number"
                                           placeholder="Di động"
                                           ng-model="controller.phone_number"
                                           minlength="10"
                                           maxlength="11" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3">
                                    <p>Địa chỉ <span class="require">*</span></p>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9">
                                    <input name="address" type="text" id="Home_ContentPlaceHolder_UACMaster_ControlPlaceHolder_tb_Receiver_Addr" class="required" ng-model="controller.address" required>
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
            document.getElementById("account_phone_number").onchange = function () {
                var phone = document.getElementById("account_phone_number").value;
                if(!/^([0-9]){10,11}$/.test(phone)){
                    document.getElementById("account_phone_number").setCustomValidity("Invalid Phone Number");
                }else {
                    document.getElementById("account_phone_number").setCustomValidity("");
                }
            };
        }
    </script>
@endsection