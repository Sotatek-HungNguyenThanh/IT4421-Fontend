@extends('layout.app')

@section('css')
    <link href="{{url('css/account.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row content">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumbs">
                    <div class="links-breadcrumbs">
                        <div><a href="#"><span>Trang chủ</span></a></div>
                        <div><i style="font-size:24px" class="fa">&#xf0da;</i><a href="#"><span>Tài khoản</span></a></div>
                    </div>
                </div>
            </div>
            <aside class="sidebar right-sidebar col-md-3 col-sm-4 col-xs-12">
                <div class="row sidebar-box blue">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar-box-heading">
                            <i class="icons icon-user"></i>
                            <h4>Tài khoản của bạn</h4>
                        </div>
                        <div class="sidebar-box-content">
                            <ul>
                                <li><a href="/customer/account?action=index">Quản lý tài khoản</a></li>
                                <li><a href="/customer/account?action=edit">Thông tin tài khoản</a></li>
                                <li><a href="/customer/account?action=address">Sổ địa chỉ</a></li>
                                <li class="active"><a href="/customer/transaction?action=index"><i class="icons icon-right-dir"></i>Lịch sử giao dịch</a></li>
                                <li><a href="/customer/membercard?action=index">Thông tin thẻ thành viên</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <section class="main-content account col-md-9 col-sm-8 col-xs-12">
    <div class="aspNetHidden">
        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="B2434850" />
    </div>
    <div id="Home_ContentPlaceHolder_UACMaster_ControlPlaceHolder_actionIndex">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2 class="title-block" style="padding: 5px 0 !important">Quản lý tài khoản</h2>
                <p>
                    Xin chào,
                <span id="Home_ContentPlaceHolder_UACMaster_ControlPlaceHolder_lb_CustomerFullname" style="font-weight:bold;">Phí Ngân</span>
                </p>
                <p>Trong mục quản lý tài khoản, bạn có thể xem các hoạt động gần đây của bạn cũng như quản lý thông tin tài khoản. Chọn một link bên dưới để xem hay chỉnh sửa thông tin.</p>
            </div>
        </div>
        <div class="row sidebar-box sidebar-normal blue">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="sidebar-box-heading">
                    <i class="icons icon-user"></i>
                    <h4>Thông tin Liên hệ</h4>
                </div>
                <div class="sidebar-box-content sidebar-padding-box">
                    <p>Phí Ngân<br>kimngan.stupid@gmail.com - <a href="/customer/account?action=email">Thay đổi địa chỉ email</a></p><p><a href="/customer/account?action=password">Thay đổi mật khẩu</a></p><p class="align-right" style="margin-top: 10px;"><a href="/customer/account?action=edit">Chỉnh sửa</a></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="sidebar-box-heading">
                    <i class="icons icon-eye-1"></i>
                    <h4>Nhận bản tin</h4>
                </div>
                <div class="sidebar-box-content sidebar-padding-box">
                    
                </div>
            </div>
        </div>
        <div class="row sidebar-box sidebar-normal">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="sidebar-box-heading">
                    <i class="icons icon-location"></i>
                    <h4>Địa chỉ thanh toán mặc định</h4>
                </div>
                <div class="sidebar-box-content sidebar-padding-box">
                    <p>Phí Ngân</p><p><span>Điện thoại:</span>  / 01653054103</p><p>Nguyễn Công Trứ</p><p>Hà Nội - </p><p class="align-right" style="margin-top: 10px;"><a href="/customer/account?action=address">Chỉnh sửa</a></p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="sidebar-box-heading">
                    <i class="icons icon-location"></i>
                    <h4>Địa chỉ giao hàng mặc định</h4>
                </div>
                <div class="sidebar-box-content sidebar-padding-box">
                    <p>Phí Ngân</p><p><span>Điện thoại:</span>  / 01653054103</p><p>Nguyễn Công Trứ</p><p>Hà Nội - </p><p class="align-right" style="margin-top: 10px;"><a href="/customer/account?action=address">Chỉnh sửa</a></p>
                </div>
            </div>
        </div>
    </div>
            </section>
        </div>
    </div>
@endsection