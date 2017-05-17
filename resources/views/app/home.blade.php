@extends('app.layout')

@section('title')
    Home
@endsection

@section('script')
    <script src="/js/angular/HomeController.js"></script>
@endsection

@section('include_banner')
    @include('app.header_banner')
@endsection
@section('content')
    <div ng-controller="HomeController as controller">
        @include('app.three_module_header')

        @include('app.three_banner_advertisement')

        <div>
            <section class="product-hot" id="product-hot">
                <div class="container">
                    <div class="home__title product-hot__title">
                        <h2>Sản phẩm nổi bật</h2>

                        <ul class="cate-list hidden-xs">

                            <li class="cate-list__item">
                                <a href="/dien-thoai" class="cate-list__link">Điện thoại</a>
                            </li>

                            <li class="cate-list__item">
                                <a href="/may-tinh-bang" class="cate-list__link">Máy tính bảng</a>
                            </li>

                            <li class="cate-list__item">
                                <a href="/laptop" class="cate-list__link">Laptop</a>
                            </li>

                            <li class="cate-list__item">
                                <a href="/may-cu" class="cate-list__link">Máy cũ</a>
                            </li>

                            <li class="cate-list__item">
                                <a href="/phu-kien" class="cate-list__link">Phụ kiện</a>
                            </li>

                        </ul>

                    </div>
                    <div class="product-home__slide">
                        <div class="slider-product-list owl-carousel owl-theme" style="opacity: 1; display: block;">
                            <div class="owl-wrapper-outer">
                                <div class="owl-wrapper" style="width: 4560px; left: 0px; display: block;">
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-iphone-7-32gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"
                                                             alt="Điện thoại iPhone 7 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-iphone-7-32gb"
                                                                class="button quick-view"
                                                                data-toggle="modal" data-target="#myModal">
                                                            Xem nhanh
                                                        </button>

                                                        <form class="variants"
                                                              id="product-actions-4738132"
                                                              enctype="multipart/form-data">


                                                            <button class="button btn-cart" title="Chọn sản phẩm"
                                                                    aria-label="Chọn sản phẩm" type="button"
                                                                    data-toggle="modal" data-target="#CartDesktop">
                                                                <span>Chọn</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-iphone-7-32gb">Điện
                                                            thoại iPhone 7 32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>20.000.000₫</span><span
                                                                    class="sale-flag">-11%</span></p>
                                                        <p class="product-item__price__special">17.790.000₫</p>

                                                    </div>


                                                </div>
                                            </div>

                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/blackberry-passport">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/blackberrypassportblack15.png?v=1479142099757"
                                                             alt="BlackBerry Passport">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="blackberry-passport"
                                                                class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726077"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637601">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/blackberry-passport">BlackBerry
                                                            Passport</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__regular">11.980.000₫</p>

                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-sony-xperia-z5-dual">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/sony-xperia-x-1-400x460.png?v=1479172676383"
                                                             alt="Điện thoại Sony Xperia Z5 Dual">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-sony-xperia-z5-dual"
                                                                class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726021"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="9876594">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a
                                                                href="/dien-thoai-sony-xperia-z5-dual">Điện
                                                            thoại Sony Xperia Z5 Dual</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>13.990.000₫</span><span
                                                                    class="sale-flag">-14%</span></p>
                                                        <p class="product-item__price__special">11.990.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/dien-thoai-sony-xperia-x">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/sony-xperia-z5-dual-400x460.png?v=1479141392427"
                                                             alt="Điện thoại Sony Xperia X">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="dien-thoai-sony-xperia-x"
                                                                class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4725962"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637417">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/dien-thoai-sony-xperia-x">Điện
                                                            thoại Sony Xperia X</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>10.990.000₫</span><span
                                                                    class="sale-flag">-9%</span></p>
                                                        <p class="product-item__price__special">9.990.000₫</p>

                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/htc-one-m9">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/13090htconem9goldonsilver.jpg?v=1479172304403"
                                                             alt="HTC One M9">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="htc-one-m9" class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726075"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637599">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/htc-one-m9">HTC One M9</a>
                                                    </h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__regular">10.990.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/lenovo-s8">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/big97572lenovos850lcz3745.png?v=1479172450703"
                                                             alt="Lenovo S8">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="lenovo-s8" class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726067"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637591">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/lenovo-s8">Lenovo S8</a>
                                                    </h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__regular">4.639.000₫</p>

                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/oppo-neo-5">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/135237opponeo51201white1.png?v=1479142113290"
                                                             alt="Oppo Neo 5">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="oppo-neo-5" class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726076"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637600">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/oppo-neo-5">Oppo Neo 5</a>
                                                    </h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__regular">3.189.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/nokia-x6-8gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/0010687nokiax68gb1.png?v=1479141860967"
                                                             alt="Nokia X6 8GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="nokia-x6-8gb" class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726082"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637606">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/nokia-x6-8gb">Nokia X6
                                                            8GB</a>
                                                    </h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old"><span>6.600.000₫</span><span
                                                                    class="sale-flag">-2%</span></p>
                                                        <p class="product-item__price__special">6.490.000₫</p>

                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/lg-g-pro-lite-dual">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/5341643lggprolitedual011.png?v=1479141824977"
                                                             alt="LG G Pro Lite Dual">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="lg-g-pro-lite-dual"
                                                                class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726083"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637607">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/lg-g-pro-lite-dual">LG G
                                                            Pro Lite
                                                            Dual</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old"><span>6.300.000₫</span><span
                                                                    class="sale-flag">-3%</span></p>
                                                        <p class="product-item__price__special">6.100.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/lg-l70">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/big52005lggpad.png?v=1479141705710"
                                                             alt="LG L70">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="lg-l70" class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726084"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637608">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/lg-l70">LG L70</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old"><span>5.200.000₫</span><span
                                                                    class="sale-flag">-4%</span></p>
                                                        <p class="product-item__price__special">5.000.000₫</p>

                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/iphone-4s-32-gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/54115944s1.png?v=1479141894390"
                                                             alt="iPhone 4s 32GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="iphone-4s-32-gb" class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726081"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637605">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/iphone-4s-32-gb">iPhone 4s
                                                            32GB</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>10.000.000₫</span><span
                                                                    class="sale-flag">-2%</span></p>
                                                        <p class="product-item__price__special">9.790.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/iphone-4-16gb">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/appleiphone4s2.png?v=1479141442657"
                                                             alt="iPhone 4 16GB">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="iphone-4-16gb" class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726088"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637612">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/iphone-4-16gb">iPhone 4
                                                            16GB</a>
                                                    </h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old"><span>6.000.000₫</span><span
                                                                    class="sale-flag">-0%</span></p>
                                                        <p class="product-item__price__special">5.990.000₫</p>

                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/ip-5s-64g">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/1.png?v=1479141982703"
                                                             alt="Ip 5 64G">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="ip-5s-64g" class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726080"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637604">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/ip-5s-64g">Ip 5 64G</a>
                                                    </h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>14.800.000₫</span><span
                                                                    class="sale-flag">-5%</span></p>
                                                        <p class="product-item__price__special">14.000.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/aonike-cd-150">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4236103aonikecd15011.png?v=1479140903213"
                                                             alt="Tai nghe Aonike CD-150">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="aonike-cd-150" class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726097"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="9348202">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/aonike-cd-150">Tai nghe
                                                            Aonike
                                                            CD-150</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old"><span>250.000₫</span><span
                                                                    class="sale-flag">-40%</span></p>
                                                        <p class="product-item__price__special">150.000₫</p>

                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/de-tan-nhiet-xcm-n19">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4320312coolermasternotepalergo.png?v=1479140953727"
                                                             alt="Đế tản nhiệt XCM N19">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="de-tan-nhiet-xcm-n19"
                                                                class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726096"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637620">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/de-tan-nhiet-xcm-n19">Đế
                                                            tản nhiệt
                                                            XCM N19</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old"><span>220.000₫</span><span
                                                                    class="sale-flag">-9%</span></p>
                                                        <p class="product-item__price__special">200.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/loa-icore-ic-38-hifi-bluetooth-mini-speaker">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4759147loaicore7001.png?v=1479140976967"
                                                             alt="Loa iCore IC-38 Hifi Bluetooth Mini Speaker">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="loa-icore-ic-38-hifi-bluetooth-mini-speaker"
                                                                class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726095"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637619">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a
                                                                href="/loa-icore-ic-38-hifi-bluetooth-mini-speaker">Loa
                                                            iCore
                                                            IC-38 Hifi Bluetooth Mini Speaker</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old"><span>500.000₫</span><span
                                                                    class="sale-flag">-10%</span></p>
                                                        <p class="product-item__price__special">450.000₫</p>

                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/samsung-ec-wb50fzbdbvn">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/50390391511.png?v=1479141038480"
                                                             alt="Samsung EC-WB50FZBDBVN">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="samsung-ec-wb50fzbdbvn"
                                                                class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726094"
                                                              enctype="multipart/form-data">
                                                            <input type="hidden" name="variantId" value="7637618">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/samsung-ec-wb50fzbdbvn">Samsung
                                                            EC-WB50FZBDBVN</a></h3>
                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old"><span>4.000.000₫</span><span
                                                                    class="sale-flag">-8%</span></p>
                                                        <p class="product-item__price__special">3.700.000₫</p>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/mieng-dan-film-dan-man-hinh">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4500006combodanflimdanmanhinhc.png?v=1479141078567"
                                                             alt="Miếng dán film, dán màn hình">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="mieng-dan-film-dan-man-hinh"
                                                                class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726093"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637617">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>
                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a
                                                                href="/mieng-dan-film-dan-man-hinh">Miếng
                                                            dán film, dán màn hình</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old"><span>200.000₫</span><span
                                                                    class="sale-flag">-20%</span></p>
                                                        <p class="product-item__price__special">160.000₫</p>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/sony-cybershot-14-1px">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/50513471321.png?v=1479141106580"
                                                             alt="Sony Cybershot 14.1px">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="sony-cybershot-14-1px"
                                                                class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726092"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637616">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/sony-cybershot-14-1px">Sony
                                                            Cybershot 14.1px</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old"><span>8.000.000₫</span><span
                                                                    class="sale-flag">-8%</span></p>
                                                        <p class="product-item__price__special">7.349.000₫</p>

                                                    </div>


                                                </div>
                                            </div>
                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/sony-vaio-vpc-eb3afx">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/0034585sonyvaiovpcz1390xcto11.png?v=1479141129887"
                                                             alt="Sony Vaio VPC EB3AFX">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="sony-vaio-vpc-eb3afx"
                                                                class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726091"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637615">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/sony-vaio-vpc-eb3afx">Sony
                                                            Vaio
                                                            VPC EB3AFX</a></h3>
                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>16.000.000₫</span><span
                                                                    class="sale-flag">-0%</span></p>
                                                        <p class="product-item__price__special">15.999.000₫</p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/sony-anpha-a58">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/510870931.png?v=1479141173427"
                                                             alt="Sony Alpha a58">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="sony-anpha-a58" class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726090"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637614">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/sony-anpha-a58">Sony Alpha
                                                            a58</a>
                                                    </h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>12.000.000₫</span><span
                                                                    class="sale-flag">-1%</span></p>
                                                        <p class="product-item__price__special">11.900.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/sac-dtdd-chan-v8">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4710041sac11.png?v=1479141235690"
                                                             alt="Sạc ĐTDĐ chân V8">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="sac-dtdd-chan-v8"
                                                                class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726089"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637613">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a href="/sac-dtdd-chan-v8">Sạc ĐTDĐ
                                                            chân
                                                            V8</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old"><span>200.000₫</span><span
                                                                    class="sale-flag">-25%</span></p>
                                                        <p class="product-item__price__special">150.000₫</p>

                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="owl-item">
                                        <div class="item">


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/acer-aspire-5745g-382g50mn">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/0413707aceraspire5745450px41.png?v=1479141501610"
                                                             alt="Acer Aspire 5745G 382G50Mn">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="acer-aspire-5745g-382g50mn"
                                                                class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726087"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637611">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a
                                                                href="/acer-aspire-5745g-382g50mn">Acer
                                                            Aspire 5745G 382G50Mn</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>12.800.000₫</span><span
                                                                    class="sale-flag">-0%</span></p>
                                                        <p class="product-item__price__special">12.799.000₫</p>

                                                    </div>


                                                </div>
                                            </div>


                                            <div class="product-item__grid">
                                                <div class="product-item__thumb">
                                                    <a href="/lenovo-ideapad-z360-049390">
                                                        <img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/0513889lenovoideapadz360049390.png?v=1479141533727"
                                                             alt="Lenovo IdeaPad Z360 (049390)">
                                                    </a>
                                                    <div class="product-item__actions hidden-xs">
                                                        <button data-handle="lenovo-ideapad-z360-049390"
                                                                class="button quick-view">
                                                            Xem nhanh
                                                        </button>

                                                        <form action="/cart/add" method="post" class="variants"
                                                              id="product-actions-4726086"
                                                              enctype="multipart/form-data">


                                                            <input type="hidden" name="variantId" value="7637610">
                                                            <button class="button btn-cart add_to_cart"
                                                                    aria-label="Mua hàng"
                                                                    title="Mua hàng"><span>Mua hàng</span></button>

                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="product-item__content">
                                                    <h3 class="product-item__title"><a
                                                                href="/lenovo-ideapad-z360-049390">Lenovo
                                                            IdeaPad Z360 (049390)</a></h3>


                                                    <div class="product-item__price">

                                                        <p class="product-item__price__old">
                                                            <span>14.000.000₫</span><span
                                                                    class="sale-flag">-0%</span></p>
                                                        <p class="product-item__price__special">13.999.000₫</p>

                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div>
            <section class="banner-large hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="/">
                                <img src="//bizweb.dktcdn.net/100/141/731/themes/183776/assets/home-banner-center.jpg?1493953410461"
                                     alt="Samsung Galaxy j7 Prime">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{--@include('app.news')--}}
        @include('app.preview')
        @include('app.cart_model')
    </div>
@endsection


