@extends('layout.app')

@section('css')
    <link href="{{url('css/customer/account.css')}}" rel="stylesheet" type="text/css" media="all"/>
@endsection

@section('content')
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

                            <li class="active"><a href="#"><i class="icons icon-right-dir"></i>Thông tin tài khoản</a></li>

                            <li><a href="#">Sổ địa chỉ</a></li>

                            <li><a href="#">Lịch sử giao dịch</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <section class="main-content account col-md-9 col-sm-8 col-xs-12">

            <form method="post" action="#" id="formAccountInfo">

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
                        <div class="col-lg-12 col-md-12 col-sm-12 register-account">
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <span>E-mail liên hệ</span>
                                        <p></p>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9">
                                        <span id="Home_ContentPlaceHolder_UACMaster_ControlPlaceHolder_lb_Email" style="font-weight:bold;">huungnguyen.vp.1995@gmail.com</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3">
                                        <p>Họ và tên <span class="require">*</span></p>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9">
                                        <input type="text" value="Nguyen Hung" id="Home_ContentPlaceHolder_UACMaster_ControlPlaceHolder_tb_FirstName" placeholder="Họ Tên..." required>
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
                                        <input type="submit" name="ctl00$ctl00$Home_ContentPlaceHolder$UACMaster_ControlPlaceHolder$bt_SaveInfo" value="Lưu thông tin" id="Home_ContentPlaceHolder_UACMaster_ControlPlaceHolder_bt_SaveInfo" class="button orange">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            {{--<script type="text/javascript">--}}
                {{--$(document).ready(function () {--}}
                    {{--var $form = $("#formAccountInfo");--}}
                    {{--//Cập nhật thông tin--}}
                    {{--$form.find('input[id*=bt_SaveInfo]').click(function (e) {--}}
                        {{--var isValid = true;--}}

                        {{--//City--}}
                        {{--$form.find('select[id*=ddl_Gender]').each(function () {--}}
                            {{--if ($.trim($(this).val()) != '' && $.trim($(this).val()) != undefined) {--}}
                                {{--$(this).css({ "border": "", "background": "" });--}}
                            {{--}--}}
                            {{--else {--}}
                                {{--isValid = false;--}}
                                {{--alert('Hãy chọn Giới tính cho bạn!'), $(this).focus(), $(this).css({ "border": "1px solid red", "background": "#FFCECE" });--}}
                            {{--}--}}
                        {{--});--}}

                        {{--$form.find('input[id*=tb_FirstName]').each(function () {--}}
                            {{--if ($.trim($(this).val()) != '' && $.trim($(this).val()).length < 30 && $.trim($(this).val()) != undefined) {--}}
                                {{--$(this).css({ "border": "", "background": "" });--}}
                            {{--}--}}
                            {{--else {--}}
                                {{--isValid = false;--}}
                                {{--alert('Họ của bạn không được để trống và phải ít hơn 30 ký tự'), $(this).focus(), $(this).css({ "border": "1px solid red", "background": "#FFCECE" });--}}
                            {{--}--}}
                        {{--});--}}

                        {{--$form.find('input[id*=tb_LastName]').each(function () {--}}
                            {{--if ($.trim($(this).val()) != '' && $.trim($(this).val()).length < 30 && $.trim($(this).val()) != undefined) {--}}
                                {{--$(this).css({ "border": "", "background": "" });--}}
                            {{--}--}}
                            {{--else {--}}
                                {{--isValid = false;--}}
                                {{--alert('Tên của bạn không được để trống và phải ít hơn 30 ký tự'), $(this).focus(), $(this).css({ "border": "1px solid red", "background": "#FFCECE" });--}}
                            {{--}--}}
                        {{--});--}}

                        {{--if (isValid == false)--}}
                            {{--e.preventDefault();--}}
                    {{--});--}}

                    {{--//Cập nhật địa chỉ--}}
                    {{--$form.find('input[id*=btn_UpdateAddr]').click(function (e) {--}}
                        {{--var isValid = true;--}}
                        {{--//$form.find('input[type="text"].required').each(function () {--}}
                        {{--//    if ($.trim($(this).val()) == '') {--}}
                        {{--//        isValid = false;--}}
                        {{--//        $(this).css({"border": "1px solid red","background": "#FFCECE"});--}}
                        {{--//    }--}}
                        {{--//    else {--}}
                        {{--//        $(this).css({"border": "","background": ""});--}}
                        {{--//    }--}}
                        {{--//});--}}

                        {{--//Địa chỉ thanh toán mặc định--}}
                        {{--//Valid Mobile--}}
                        {{--$form.find('input[id*=tb_Mobile]').each(function () {--}}
                            {{--regMobile = /^((09[0-9]{8})|(01[0-9]{9}))$/;--}}
                            {{--if ($.trim($(this).val()) != '' && $.trim($(this).val()) != undefined && regMobile.test($.trim($(this).val()))) {--}}
                                {{--$(this).css({ "border": "", "background": "" });--}}
                            {{--}--}}
                            {{--else {--}}
                                {{--isValid = false;--}}
                                {{--alert('Di động đ/c thanh toán chưa đúng định dạng'), $(this).focus(), $(this).css({ "border": "1px solid red", "background": "#FFCECE" });--}}
                            {{--}--}}
                        {{--});--}}
                        {{--//Address--}}
                        {{--$form.find('input[id*=tb_Address]').each(function () {--}}
                            {{--if ($.trim($(this).val()) != '' && $.trim($(this).val()).length < 150 && $.trim($(this).val()) != undefined) {--}}
                                {{--$(this).css({ "border": "", "background": "" });--}}
                            {{--}--}}
                            {{--else {--}}
                                {{--isValid = false;--}}
                                {{--alert('Địa chỉ thanh toán mặc định không được để trống, hoặc trên 150 ký tự !'), $(this).focus(), $(this).css({ "border": "1px solid red", "background": "#FFCECE" });--}}
                            {{--}--}}
                        {{--});--}}


                        {{--//Địa chỉ giao hàng mặc định--}}
                        {{--//Fullname--}}
                        {{--$form.find('input[id*=tb_Receiver_Fullname]').each(function () {--}}
                            {{--if ($.trim($(this).val()) != '' && $.trim($(this).val()).length < 60 && $.trim($(this).val()) != undefined) {--}}
                                {{--$(this).css({ "border": "", "background": "" });--}}
                            {{--}--}}
                            {{--else {--}}
                                {{--isValid = false;--}}
                                {{--alert('Tên đầy đủ giao hàng mặc định không được để trống, hoặc trên 60 ký tự !'), $(this).focus(), $(this).css({ "border": "1px solid red", "background": "#FFCECE" });--}}
                            {{--}--}}
                        {{--});--}}
                        {{--//Mobile--}}
                        {{--$form.find('input[id*=tb_Receiver_Mobile]').each(function () {--}}
                            {{--regMobile = /^((09[0-9]{8})|(01[0-9]{9}))$/;--}}
                            {{--if ($.trim($(this).val()) != '' && $.trim($(this).val()) != undefined && regMobile.test($.trim($(this).val()))) {--}}
                                {{--$(this).css({ "border": "", "background": "" });--}}
                            {{--}--}}
                            {{--else {--}}
                                {{--isValid = false;--}}
                                {{--alert('Di động đ/c giao hàng chưa đúng định dạng'), $(this).focus(), $(this).css({ "border": "1px solid red", "background": "#FFCECE" });--}}
                            {{--}--}}
                        {{--});--}}
                        {{--//Address--}}
                        {{--$form.find('input[id*=tb_Receiver_Addr]').each(function () {--}}
                            {{--if ($.trim($(this).val()) != '' && $.trim($(this).val()).length < 150 && $.trim($(this).val()) != undefined) {--}}
                                {{--$(this).css({ "border": "", "background": "" });--}}
                            {{--}--}}
                            {{--else {--}}
                                {{--isValid = false;--}}
                                {{--alert('Địa chỉ giao hàng mặc định không được để trống, hoặc trên 150 ký tự !'), $(this).focus(), $(this).css({ "border": "1px solid red", "background": "#FFCECE" });--}}
                            {{--}--}}
                        {{--});--}}

                        {{--//City--}}
                        {{--$form.find('select[id*=cityReceiver]').each(function () {--}}
                            {{--if ($.trim($(this).val()) != '' && $.trim($(this).val()) != undefined) {--}}
                                {{--$(this).css({ "border": "", "background": "" });--}}
                            {{--}--}}
                            {{--else {--}}
                                {{--isValid = false;--}}
                                {{--alert('Hãy chọn Tỉnh/thành cho đ/c giao hàng mặc định!'), $(this).focus(), $(this).css({ "border": "1px solid red", "background": "#FFCECE" });--}}
                            {{--}--}}
                        {{--});--}}

                        {{--//District--}}
                        {{--$form.find('select[id*=districtReceiver]').each(function () {--}}
                            {{--if ($.trim($(this).val()) != '' && $.trim($(this).val()) != undefined) {--}}
                                {{--$(this).css({ "border": "", "background": "" });--}}
                            {{--}--}}
                            {{--else {--}}
                                {{--isValid = false;--}}
                                {{--alert('Hãy chọn Quận/huyện cho đ/c giao hàng mặc định!'), $(this).focus(), $(this).css({ "border": "1px solid red", "background": "#FFCECE" });--}}
                            {{--}--}}
                        {{--});--}}

                        {{--if (isValid == false)--}}
                            {{--e.preventDefault();--}}
                    {{--});--}}

                    {{--//Cập nhật email--}}
                    {{--$form.find('input[id*=bt_EmailUpdate]').click(function (e) {--}}
                        {{--var isValid = true;--}}

                        {{--$form.find('input[id*=tb_Email]').each(function () {--}}
                            {{--regEmail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;--}}
                            {{--if ($.trim($(this).val()) != '' && $.trim($(this).val()) != undefined && regEmail.test($.trim($(this).val()))) {--}}
                                {{--$(this).css({ "border": "", "background": "" });--}}
                            {{--}--}}
                            {{--else {--}}
                                {{--isValid = false;--}}
                                {{--alert('Email nhập chưa đúng định dạng'), $(this).focus(), $(this).css({ "border": "1px solid red", "background": "#FFCECE" });--}}
                            {{--}--}}
                        {{--});--}}

                        {{--if (isValid == false)--}}
                            {{--e.preventDefault();--}}
                    {{--});--}}

                    {{--//Cập nhật mật khẩu--}}
                    {{--$form.find('input[id*=bt_ChangePass]').click(function (e) {--}}
                        {{--var isValid = true;--}}

                        {{--$form.find('input[id*=tb_NewPassword]').each(function () {--}}
                            {{--if ($(this).val() != '' && $(this).val().length > 5) {--}}
                                {{--$(this).css({ "border": "", "background": "" });--}}
                            {{--}--}}

                            {{--else {--}}
                                {{--isValid = false;--}}
                                {{--alert('Mật khẩu không được để trống và phải trên 6 kí tự '), $(this).focus(), $(this).css({ "border": "1px solid red", "background": "#FFCECE" });--}}
                            {{--}--}}
                        {{--});--}}

                        {{--if ($form.find('input[id*=tb_NewPassword]').val() != $form.find('input[id*=tb_RePassword]').val()) {--}}
                            {{--isValid = false;--}}
                            {{--alert('Mật khẩu mới và nhập lại không giống nhau');--}}
                        {{--}--}}

                        {{--if (isValid == false)--}}
                            {{--e.preventDefault();--}}
                    {{--});--}}
                {{--});--}}
            {{--</script>--}}

        </section>
    </div>
@endsection