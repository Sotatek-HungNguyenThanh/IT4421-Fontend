<div>
    <section class="topbar theme--bg--sliver">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 topbar__left hidden-xs">
                    <div class="topbar__left__message">
                        Chào mừng bạn đến với <a href="//amobile.bizwebvietnam.net">Amobile</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 topbar__right">
                    <div class="topbar__right__menu">
                        <ul class="menu">
                            <li class="menu__lv1">
                                <a href="/feedback" class="menu__link"><i class="fa fa-comments-o icon"
                                                                          aria-hidden="true"></i> Feedback</a>
                            </li>
                            @if(!Auth::check())
                            <li class="menu__lv1">
                                <a href="/register" class="menu__link"><i class="fa fa-registered icon"
                                                                             aria-hidden="true"></i> Đăng ký</a>
                            </li>
                            <li class="menu__lv1">
                                <a href="/login" class="menu__link"><i class="fa fa-unlock-alt icon"
                                                                       aria-hidden="true"></i> Đăng nhập</a>
                            </li>
                            @else
                            <li class="menu__lv1">
                                <a href="/account" class="menu__link"><i class="fa fa-user icon"
                                                                             aria-hidden="true"></i> Tài khoản</a>
                            </li>
                                <li class="menu__lv1">
                                    <a href="/logout" class="menu__link"><i class="fa fa-user icon"
                                                                                       aria-hidden="true"></i>Đăng xuất</a>
                                </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>