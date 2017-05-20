<div>
    <nav id="nav" class="menu">
        <div class="container">
            <span class="hidden-lg hidden-md hidden-sm header__btn">
                <a href="#menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
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
                    <a href="/collections/all" class="menu__link">Danh mục sản phẩm <i class="fa fa-angle-down"
                                                                                       aria-hidden="true"></i></a>
                    <ul class="menu-sub">

                        <li class="menu-sub__item">
                            <a href="/dien-thoai" class="menu-sub__link">Điện thoại <i
                                        class="fa fa-angle-right"></i></a>
                            <ul class="menu--sub">

                                <li class="menu--sub__item"><a href="/iphone" class="menu--sub__link">iPhone</a></li>

                                <li class="menu--sub__item"><a href="/samsung" class="menu--sub__link">Samsung</a></li>

                                <li class="menu--sub__item"><a href="/oppo" class="menu--sub__link">Oppo</a></li>

                                <li class="menu--sub__item"><a href="/huawei" class="menu--sub__link">Huawei</a></li>

                                <li class="menu--sub__item"><a href="/asus" class="menu--sub__link">Asus</a></li>

                                <li class="menu--sub__item"><a href="/acer" class="menu--sub__link">Acer</a></li>

                                <li class="menu--sub__item"><a href="/sony" class="menu--sub__link">Sony</a></li>

                                <li class="menu--sub__item"><a href="/khac" class="menu--sub__link">Khác</a></li>

                            </ul>
                        </li>


                        <li class="menu-sub__item"><a href="/may-tinh-bang" class="menu-sub__link">Máy tính bảng</a>
                        </li>


                        <li class="menu-sub__item"><a href="/laptop" class="menu-sub__link">Laptop</a></li>


                        <li class="menu-sub__item"><a href="/may-cu" class="menu-sub__link">Máy cũ</a></li>


                        <li class="menu-sub__item"><a href="/phu-kien" class="menu-sub__link">Phụ kiện</a></li>

                        <li class="menu-sub__item"><a href="/phu-kien" class="menu-sub__link">Sạc dự phòng</a></li>

                    </ul>
                </li>


                {{--<li class="menu__item"><a href="/tin-tuc" class="menu__link">Tin tức</a></li>--}}

            </ul>
            @include('app.menu_cart')
        </div>
    </nav>
</div>