<div>
    <nav id="nav"  class="menu nav-collapse" role="navigation">
        <div class="container container-fluid">
            <span class=" header__btn">
                <a href="#" id="btn-navbar" data-toggle="collapse" data-target="#example-navbar-moblie">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </a>
            </span>
            <form action="/search" method="get" class="hidden-lg hidden-md hidden-sm">
                <label class="hidden" for="search-mobile">Tìm kiếm</label>
                <input type="text" placeholder="Nhập nội dung tìm kiếm" id="search-mobile" value="" maxlength="70"
                       class="input input__search" name="query">
                <button class="button" type="submit" aria-label="Tìm kiếm"><i class="fa fa-search"
                                                                              aria-hidden="true"></i></button>
            </form>
            <ul class="menu__list hidden-xs">
                <li class="menu__item"><a href="/" class="menu__link">Trang chủ</a></li>

                <li class="menu__item menu_parent">
                    <a href="#" class="menu__link">Danh mục sản phẩm <i class="fa fa-angle-down"
                                                                                       aria-hidden="true"></i></a>
                    <ul class="menu-sub">

                        <li class="menu-sub__item">
                            <a href="/products?category=dien-thoai" class="menu-sub__link">Điện thoại <i
                                        class="fa fa-angle-right"></i></a>
                            <ul class="menu--sub">

                                <li class="menu--sub__item"><a href="/products?category=dien-thoai&query=iphone" class="menu--sub__link">IPhone</a></li>

                                <li class="menu--sub__item"><a href="/products?category=dien-thoai&query=/samsung" class="menu--sub__link">Samsung</a></li>

                                <li class="menu--sub__item"><a href="/products?category=dien-thoai&query=oppo" class="menu--sub__link">Oppo</a></li>

                                <li class="menu--sub__item"><a href="/products?category=dien-thoai&query=huawei" class="menu--sub__link">Huawei</a></li>

                                <li class="menu--sub__item"><a href="/products?category=dien-thoai&query=asus" class="menu--sub__link">Asus</a></li>

                                <li class="menu--sub__item"><a href="/products?category=dien-thoai&query=acer" class="menu--sub__link">Acer</a></li>

                                <li class="menu--sub__item"><a href="/products?category=dien-thoai&query=sony" class="menu--sub__link">Sony</a></li>

                                <li class="menu--sub__item"><a href="/products?category=dien-thoai&query=khac" class="menu--sub__link">Khác</a></li>

                            </ul>
                        </li>


                        <li class="menu-sub__item"><a href="/products?category=may-tinh-bang" class="menu-sub__link">Máy tính bảng</a>
                        </li>


                        <li class="menu-sub__item"><a href="/products?category=laptop" class="menu-sub__link">Laptop</a></li>


                        <li class="menu-sub__item"><a href="/products?category=may-cu" class="menu-sub__link">Máy cũ</a></li>


                        <li class="menu-sub__item"><a href="/products?category=phu-kien" class="menu-sub__link">Phụ kiện</a></li>

                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse menu-mobile" id="example-navbar-moblie">
                <ul class="nav navbar-nav _menu__list">
                    <li class="_menu__item"><a href="/" class="menu_item_mobile">Trang chủ</a></li>
                    <li class="dropdown _menu__item">
                        <li class="_menu__item">
                        <a href="/products?category=dien-thoai" class="dropdown-toggle menu_item_mobile" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            Danh mục sản phẩm <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu _has_sub_menu">
                            <li class="">
                                <a href="#" class="sub_menu_item_mobile">Điện thoại<span class="caret"></span></a>
                                <ul class="__menu_sub_mobile">
                                    <li class="_menu__sub__item"><a href="/products?category=dien-thoai&query=iphone" class="sub_menu_item_mobile">IPhone</a></li>

                                    <li class="_menu__sub__item"><a href="/products?category=dien-thoai&query=/samsung" class="sub_menu_item_mobile">Samsung</a></li>

                                    <li class="_menu__sub__item"><a href="/products?category=dien-thoai&query=oppo" class="sub_menu_item_mobile">Oppo</a></li>

                                    <li class="_menu__sub__item"><a href="/products?category=dien-thoai&query=huawei" class="sub_menu_item_mobile">Huawei</a></li>

                                    <li class="_menu__sub__item"><a href="/products?category=dien-thoai&query=asus" class="sub_menu_item_mobile">Asus</a></li>

                                    <li class="_menu__sub__item"><a href="/products?category=dien-thoai&query=acer" class="sub_menu_item_mobile">Acer</a></li>

                                    <li class="_menu__sub__item"><a href="/products?category=dien-thoai&query=sony" class="sub_menu_item_mobile">Sony</a></li>

                                    <li class="_menu__sub__item"><a href="/products?category=dien-thoai&query=khac" class="sub_menu_item_mobile">Khác</a></li>
                                </ul>
                            </li>
                            <li class="_menu__sub__item"><a href="/products?category=may-tinh-bang" class="sub_menu_item_mobile">Máy tính bảng</a></li>
                            <li class="_menu__sub__item"><a href="/products?category=laptop" class="sub_menu_item_mobile">Laptop</a></li>
                            <li class="_menu__sub__item"><a href="/products?category=may-cu" class="sub_menu_item_mobile">Máy cũ</a></li>
                            <li class="_menu__sub__item"><a href="/products?category=phu-kien" class="sub_menu_item_mobile">Phụ kiện</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            @include('app.menu_cart')
        </div>
    </nav>
</div>
<style>
    .menu_item_mobile{
        padding: 15px 20px 16px;
        max-height: 50px;
        font-size: 14px;
        display: block;
        color: #fff;
        transition: none;
    }
    .sub_menu_item_mobile{
        color: white !important;
    }

    ._has_sub_menu .__menu_sub_mobile{
        list-style-type: none;
    }

    .menu-mobile .nav>li>a{
        display: none !important;
    }
    @media (max-width: 767px)  {
        .menu-mobile .nav>li>a{
            display: block !important;
        }
    }
</style>