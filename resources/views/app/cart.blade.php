@extends('app.layout')

@section('title')
    Home
@endsection

@section('script')

@endsection
@section('css')
    <link rel="stylesheet" href="/css/cart.css">
@endsection

@section('content')
    <div class="">
        <div class="breadcrumbs">
            <div class="container">
                <div class="inner">
                    <a title="Quay lại trang chủ" href="/">Trang chủ</a><i class="fa fa-angle-right" aria-hidden="true"></i>

                    Giỏ hàng

                </div>
            </div>
        </div>
        <section id="cart" class="cart">
            <div class="container">
                <div class="general__title cart--title">
                    <h1><span>Giỏ hàng</span></h1>
                </div>

                <div class="bg-cart-page hidden-xs">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <form action="/cart" method="post" novalidate="">
                                <div class="bg-scroll">
                                    <div class="cart-thead">
                                        <div style="width: 17%">Ảnh sản phẩm</div>
                                        <div style="width: 33%"><span class="nobr">Tên sản phẩm</span></div>
                                        <div style="width: 15%" class="a-right"><span class="nobr">Giá bán lẻ</span>
                                        </div>
                                        <div style="width: 14%" class="a-center">Số lượng</div>
                                        <div style="width: 15%" class="a-center">Tạm tính</div>
                                        <div style="width: 6%">Xóa</div>
                                    </div>
                                    <div class="cart-tbody">
                                        <div class="item-cart productid-7637601">
                                            <div style="width: 17%" class="image"><a class="product-image"
                                                                                     title="BlackBerry Passport"
                                                                                     href="/blackberry-passport"><img
                                                            width="75" height="auto" alt="BlackBerry Passport"
                                                            src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/blackberrypassportblack15.png"></a>
                                            </div>
                                            <div style="width: 33%" class="a-left"><h2 class="product-name"><a
                                                            href="/blackberry-passport">BlackBerry Passport</a></h2>
                                                <span class="variant-title" style="display: none;">Default Title</span>
                                            </div>
                                            <div style="width: 15%" class="a-right"><span class="item-price"> <span
                                                            class="price">11.980.000₫</span></span></div>
                                            <div style="width: 14%" class="a-center"><input class="variantID"
                                                                                            type="hidden"
                                                                                            name="variantId"
                                                                                            value="7637601">
                                                <button onclick="var result = document.getElementById('qtyItem7637601'); var qtyItem7637601 = result.value; if( !isNaN( qtyItem7637601 ) &amp;&amp; qtyItem7637601 > 1 ) result.value--;return false;"
                                                        disabled="" class="reduced items-count btn-minus" type="button">
                                                    –
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyItem7637601"
                                                       id="qtyItem7637601" name="Lines" size="2" value="1">
                                                <button onclick="var result = document.getElementById('qtyItem7637601'); var qtyItem7637601 = result.value; if( !isNaN( qtyItem7637601 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                            <div style="width: 15%" class="a-center"><span class="cart-price"> <span
                                                            class="price">11.980.000₫</span> </span></div>
                                            <div style="width: 6%"><a class="button remove-item remove-item-cart"
                                                                      title="Xóa" href="javascript:;" data-id="7637601"><span><span>Xóa</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item-cart productid-7637600">
                                            <div style="width: 17%" class="image"><a class="product-image"
                                                                                     title="Oppo Neo 5"
                                                                                     href="/oppo-neo-5"><img width="75"
                                                                                                             height="auto"
                                                                                                             alt="Oppo Neo 5"
                                                                                                             src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/135237opponeo51201white1.png"></a>
                                            </div>
                                            <div style="width: 33%" class="a-left"><h2 class="product-name"><a
                                                            href="/oppo-neo-5">Oppo Neo 5</a></h2><span
                                                        class="variant-title"
                                                        style="display: none;">Default Title</span></div>
                                            <div style="width: 15%" class="a-right"><span class="item-price"> <span
                                                            class="price">3.189.000₫</span></span></div>
                                            <div style="width: 14%" class="a-center"><input class="variantID"
                                                                                            type="hidden"
                                                                                            name="variantId"
                                                                                            value="7637600">
                                                <button onclick="var result = document.getElementById('qtyItem7637600'); var qtyItem7637600 = result.value; if( !isNaN( qtyItem7637600 ) &amp;&amp; qtyItem7637600 > 1 ) result.value--;return false;"
                                                        class="reduced items-count btn-minus" type="button">–
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyItem7637600"
                                                       id="qtyItem7637600" name="Lines" size="2" value="2">
                                                <button onclick="var result = document.getElementById('qtyItem7637600'); var qtyItem7637600 = result.value; if( !isNaN( qtyItem7637600 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                            <div style="width: 15%" class="a-center"><span class="cart-price"> <span
                                                            class="price">6.378.000₫</span> </span></div>
                                            <div style="width: 6%"><a class="button remove-item remove-item-cart"
                                                                      title="Xóa" href="javascript:;" data-id="7637600"><span><span>Xóa</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item-cart productid-9876594">
                                            <div style="width: 17%" class="image"><a class="product-image"
                                                                                     title="Điện thoại Sony Xperia Z5 Dual"
                                                                                     href="/dien-thoai-sony-xperia-z5-dual"><img
                                                            width="75" height="auto"
                                                            alt="Điện thoại Sony Xperia Z5 Dual"
                                                            src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/sony-xperia-x-1-400x460.png"></a>
                                            </div>
                                            <div style="width: 33%" class="a-left"><h2 class="product-name"><a
                                                            href="/dien-thoai-sony-xperia-z5-dual">Điện thoại Sony
                                                        Xperia Z5 Dual</a></h2><span class="variant-title"
                                                                                     style="display: none;">Default Title</span>
                                            </div>
                                            <div style="width: 15%" class="a-right"><span class="item-price"> <span
                                                            class="price">11.990.000₫</span></span></div>
                                            <div style="width: 14%" class="a-center"><input class="variantID"
                                                                                            type="hidden"
                                                                                            name="variantId"
                                                                                            value="9876594">
                                                <button onclick="var result = document.getElementById('qtyItem9876594'); var qtyItem9876594 = result.value; if( !isNaN( qtyItem9876594 ) &amp;&amp; qtyItem9876594 > 1 ) result.value--;return false;"
                                                        class="reduced items-count btn-minus" type="button">–
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyItem9876594"
                                                       id="qtyItem9876594" name="Lines" size="2" value="4">
                                                <button onclick="var result = document.getElementById('qtyItem9876594'); var qtyItem9876594 = result.value; if( !isNaN( qtyItem9876594 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                            <div style="width: 15%" class="a-center"><span class="cart-price"> <span
                                                            class="price">47.960.000₫</span> </span></div>
                                            <div style="width: 6%"><a class="button remove-item remove-item-cart"
                                                                      title="Xóa" href="javascript:;" data-id="9876594"><span><span>Xóa</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item-cart productid-7637599">
                                            <div style="width: 17%" class="image"><a class="product-image"
                                                                                     title="HTC One M9"
                                                                                     href="/htc-one-m9"><img width="75"
                                                                                                             height="auto"
                                                                                                             alt="HTC One M9"
                                                                                                             src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/13090htconem9goldonsilver.jpg"></a>
                                            </div>
                                            <div style="width: 33%" class="a-left"><h2 class="product-name"><a
                                                            href="/htc-one-m9">HTC One M9</a></h2><span
                                                        class="variant-title"
                                                        style="display: none;">Default Title</span></div>
                                            <div style="width: 15%" class="a-right"><span class="item-price"> <span
                                                            class="price">10.990.000₫</span></span></div>
                                            <div style="width: 14%" class="a-center"><input class="variantID"
                                                                                            type="hidden"
                                                                                            name="variantId"
                                                                                            value="7637599">
                                                <button onclick="var result = document.getElementById('qtyItem7637599'); var qtyItem7637599 = result.value; if( !isNaN( qtyItem7637599 ) &amp;&amp; qtyItem7637599 > 1 ) result.value--;return false;"
                                                        disabled="" class="reduced items-count btn-minus" type="button">
                                                    –
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyItem7637599"
                                                       id="qtyItem7637599" name="Lines" size="2" value="1">
                                                <button onclick="var result = document.getElementById('qtyItem7637599'); var qtyItem7637599 = result.value; if( !isNaN( qtyItem7637599 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                            <div style="width: 15%" class="a-center"><span class="cart-price"> <span
                                                            class="price">10.990.000₫</span> </span></div>
                                            <div style="width: 6%"><a class="button remove-item remove-item-cart"
                                                                      title="Xóa" href="javascript:;" data-id="7637599"><span><span>Xóa</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item-cart productid-7637605">
                                            <div style="width: 17%" class="image"><a class="product-image"
                                                                                     title="iPhone 4s 32GB"
                                                                                     href="/iphone-4s-32-gb"><img
                                                            width="75" height="auto" alt="iPhone 4s 32GB"
                                                            src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/54115944s1.png"></a>
                                            </div>
                                            <div style="width: 33%" class="a-left"><h2 class="product-name"><a
                                                            href="/iphone-4s-32-gb">iPhone 4s 32GB</a></h2><span
                                                        class="variant-title"
                                                        style="display: none;">Default Title</span></div>
                                            <div style="width: 15%" class="a-right"><span class="item-price"> <span
                                                            class="price">9.790.000₫</span></span></div>
                                            <div style="width: 14%" class="a-center"><input class="variantID"
                                                                                            type="hidden"
                                                                                            name="variantId"
                                                                                            value="7637605">
                                                <button onclick="var result = document.getElementById('qtyItem7637605'); var qtyItem7637605 = result.value; if( !isNaN( qtyItem7637605 ) &amp;&amp; qtyItem7637605 > 1 ) result.value--;return false;"
                                                        disabled="" class="reduced items-count btn-minus" type="button">
                                                    –
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyItem7637605"
                                                       id="qtyItem7637605" name="Lines" size="2" value="1">
                                                <button onclick="var result = document.getElementById('qtyItem7637605'); var qtyItem7637605 = result.value; if( !isNaN( qtyItem7637605 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                            <div style="width: 15%" class="a-center"><span class="cart-price"> <span
                                                            class="price">9.790.000₫</span> </span></div>
                                            <div style="width: 6%"><a class="button remove-item remove-item-cart"
                                                                      title="Xóa" href="javascript:;" data-id="7637605"><span><span>Xóa</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item-cart productid-7637606">
                                            <div style="width: 17%" class="image"><a class="product-image"
                                                                                     title="Nokia X6 8GB"
                                                                                     href="/nokia-x6-8gb"><img
                                                            width="75" height="auto" alt="Nokia X6 8GB"
                                                            src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/0010687nokiax68gb1.png"></a>
                                            </div>
                                            <div style="width: 33%" class="a-left"><h2 class="product-name"><a
                                                            href="/nokia-x6-8gb">Nokia X6 8GB</a></h2><span
                                                        class="variant-title"
                                                        style="display: none;">Default Title</span></div>
                                            <div style="width: 15%" class="a-right"><span class="item-price"> <span
                                                            class="price">6.490.000₫</span></span></div>
                                            <div style="width: 14%" class="a-center"><input class="variantID"
                                                                                            type="hidden"
                                                                                            name="variantId"
                                                                                            value="7637606">
                                                <button onclick="var result = document.getElementById('qtyItem7637606'); var qtyItem7637606 = result.value; if( !isNaN( qtyItem7637606 ) &amp;&amp; qtyItem7637606 > 1 ) result.value--;return false;"
                                                        disabled="" class="reduced items-count btn-minus" type="button">
                                                    –
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyItem7637606"
                                                       id="qtyItem7637606" name="Lines" size="2" value="1">
                                                <button onclick="var result = document.getElementById('qtyItem7637606'); var qtyItem7637606 = result.value; if( !isNaN( qtyItem7637606 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                            <div style="width: 15%" class="a-center"><span class="cart-price"> <span
                                                            class="price">6.490.000₫</span> </span></div>
                                            <div style="width: 6%"><a class="button remove-item remove-item-cart"
                                                                      title="Xóa" href="javascript:;" data-id="7637606"><span><span>Xóa</span></span></a>
                                            </div>
                                        </div>
                                        <div class="item-cart productid-7637608">
                                            <div style="width: 17%" class="image"><a class="product-image"
                                                                                     title="LG L70" href="/lg-l70"><img
                                                            width="75" height="auto" alt="LG L70"
                                                            src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/big52005lggpad.png"></a>
                                            </div>
                                            <div style="width: 33%" class="a-left"><h2 class="product-name"><a
                                                            href="/lg-l70">LG L70</a></h2><span class="variant-title"
                                                                                                style="display: none;">Default Title</span>
                                            </div>
                                            <div style="width: 15%" class="a-right"><span class="item-price"> <span
                                                            class="price">5.000.000₫</span></span></div>
                                            <div style="width: 14%" class="a-center"><input class="variantID"
                                                                                            type="hidden"
                                                                                            name="variantId"
                                                                                            value="7637608">
                                                <button onclick="var result = document.getElementById('qtyItem7637608'); var qtyItem7637608 = result.value; if( !isNaN( qtyItem7637608 ) &amp;&amp; qtyItem7637608 > 1 ) result.value--;return false;"
                                                        disabled="" class="reduced items-count btn-minus" type="button">
                                                    –
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyItem7637608"
                                                       id="qtyItem7637608" name="Lines" size="2" value="1">
                                                <button onclick="var result = document.getElementById('qtyItem7637608'); var qtyItem7637608 = result.value; if( !isNaN( qtyItem7637608 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                            <div style="width: 15%" class="a-center"><span class="cart-price"> <span
                                                            class="price">5.000.000₫</span> </span></div>
                                            <div style="width: 6%"><a class="button remove-item remove-item-cart"
                                                                      title="Xóa" href="javascript:;" data-id="7637608"><span><span>Xóa</span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="cart-collaterals col-md-4 col-sm-12 col-xs-12">
                            <div id="sticky-wrapper" class="sticky-wrapper" style="height: 190px;">
                                <div class="totals"><h3>Tổng cộng</h3>
                                    <div class="inner">
                                        <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                                            <colgroup>
                                                <col>
                                                <col>
                                            </colgroup>
                                            <tfoot>
                                            <tr>
                                                <td colspan="1" class="a-left"><strong>Tổng tiền</strong></td>
                                                <td class="a-right"><strong><span
                                                                class="price">98.588.000₫</span></strong></td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <ul class="checkout">
                                            <li>
                                                <button class="button btn-proceed-checkout"
                                                        aria-label="Tiến hành đặt hàng" title="Tiến hành đặt hàng"
                                                        type="button" onclick="window.location.href='/checkout'"><span>Tiến hành đặt hàng</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="button btn-continue" aria-label="Tiếp tục mua hàng"
                                                        title="Tiếp tục mua hàng" type="button"
                                                        onclick="window.history.go(-1);">
                                                    <span><span>Tiếp tục mua hàng</span></span></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-cart-page-mobile cart-droplist visible-xs">
                    <div class="cart-droplist__content arrow_box">
                        <div class="cart-droplist__status"><i class="fa fa-check" aria-hidden="true"></i> <span
                                    class="cart-counter-list">11</span> Sản phẩm trong giỏ hàng
                        </div>
                        <div class="mini-list">
                            <ul class="list-item-cart">
                                <li class="item productid-7637601"><a class="product-image" href="/blackberry-passport"
                                                                      title="BlackBerry Passport"><img
                                                alt="BlackBerry Passport"
                                                src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/blackberrypassportblack15.png"
                                                width="80"></a>
                                    <div class="detail-item">
                                        <div class="product-details"><a href="javascript:;" data-id="7637601"
                                                                        title="Xóa"
                                                                        class="remove-item-cart fa fa-trash-o"></a>
                                            <p class="product-name"><a href="/blackberry-passport"
                                                                       title="BlackBerry Passport">BlackBerry
                                                    Passport</a></p></div>
                                        <div class="product-details-bottom"><span class="price">11.980.000₫</span>
                                            <div class="quantity-select"><input class="variantID" type="hidden"
                                                                                name="variantId" value="7637601">
                                                <button onclick="var result = document.getElementById('qtyMobile7637601'); var qtyMobile7637601 = result.value; if( !isNaN( qtyMobile7637601 ) &amp;&amp; qtyMobile7637601 > 1 ) result.value--;return false;"
                                                        class="reduced items-count btn-minus" disabled="" type="button">
                                                    –
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyMobile7637601"
                                                       id="qtyMobile7637601" name="Lines" size="2" value="1">
                                                <button onclick="var result = document.getElementById('qtyMobile7637601'); var qtyMobile7637601 = result.value; if( !isNaN( qtyMobile7637601 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item productid-7637600"><a class="product-image" href="/oppo-neo-5"
                                                                      title="Oppo Neo 5"><img alt="Oppo Neo 5"
                                                                                              src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/135237opponeo51201white1.png"
                                                                                              width="80"></a>
                                    <div class="detail-item">
                                        <div class="product-details"><a href="javascript:;" data-id="7637600"
                                                                        title="Xóa"
                                                                        class="remove-item-cart fa fa-trash-o"></a>
                                            <p class="product-name"><a href="/oppo-neo-5" title="Oppo Neo 5">Oppo Neo
                                                    5</a></p></div>
                                        <div class="product-details-bottom"><span class="price">3.189.000₫</span>
                                            <div class="quantity-select"><input class="variantID" type="hidden"
                                                                                name="variantId" value="7637600">
                                                <button onclick="var result = document.getElementById('qtyMobile7637600'); var qtyMobile7637600 = result.value; if( !isNaN( qtyMobile7637600 ) &amp;&amp; qtyMobile7637600 > 1 ) result.value--;return false;"
                                                        class="reduced items-count btn-minus" type="button">–
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyMobile7637600"
                                                       id="qtyMobile7637600" name="Lines" size="2" value="2">
                                                <button onclick="var result = document.getElementById('qtyMobile7637600'); var qtyMobile7637600 = result.value; if( !isNaN( qtyMobile7637600 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item productid-9876594"><a class="product-image"
                                                                      href="/dien-thoai-sony-xperia-z5-dual"
                                                                      title="Điện thoại Sony Xperia Z5 Dual"><img
                                                alt="Điện thoại Sony Xperia Z5 Dual"
                                                src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/sony-xperia-x-1-400x460.png"
                                                width="80"></a>
                                    <div class="detail-item">
                                        <div class="product-details"><a href="javascript:;" data-id="9876594"
                                                                        title="Xóa"
                                                                        class="remove-item-cart fa fa-trash-o"></a>
                                            <p class="product-name"><a href="/dien-thoai-sony-xperia-z5-dual"
                                                                       title="Điện thoại Sony Xperia Z5 Dual">Điện thoại
                                                    Sony Xperia Z5 Dual</a></p></div>
                                        <div class="product-details-bottom"><span class="price">11.990.000₫</span>
                                            <div class="quantity-select"><input class="variantID" type="hidden"
                                                                                name="variantId" value="9876594">
                                                <button onclick="var result = document.getElementById('qtyMobile9876594'); var qtyMobile9876594 = result.value; if( !isNaN( qtyMobile9876594 ) &amp;&amp; qtyMobile9876594 > 1 ) result.value--;return false;"
                                                        class="reduced items-count btn-minus" type="button">–
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyMobile9876594"
                                                       id="qtyMobile9876594" name="Lines" size="2" value="4">
                                                <button onclick="var result = document.getElementById('qtyMobile9876594'); var qtyMobile9876594 = result.value; if( !isNaN( qtyMobile9876594 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item productid-7637599"><a class="product-image" href="/htc-one-m9"
                                                                      title="HTC One M9"><img alt="HTC One M9"
                                                                                              src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/13090htconem9goldonsilver.jpg"
                                                                                              width="80"></a>
                                    <div class="detail-item">
                                        <div class="product-details"><a href="javascript:;" data-id="7637599"
                                                                        title="Xóa"
                                                                        class="remove-item-cart fa fa-trash-o"></a>
                                            <p class="product-name"><a href="/htc-one-m9" title="HTC One M9">HTC One
                                                    M9</a></p></div>
                                        <div class="product-details-bottom"><span class="price">10.990.000₫</span>
                                            <div class="quantity-select"><input class="variantID" type="hidden"
                                                                                name="variantId" value="7637599">
                                                <button onclick="var result = document.getElementById('qtyMobile7637599'); var qtyMobile7637599 = result.value; if( !isNaN( qtyMobile7637599 ) &amp;&amp; qtyMobile7637599 > 1 ) result.value--;return false;"
                                                        class="reduced items-count btn-minus" disabled="" type="button">
                                                    –
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyMobile7637599"
                                                       id="qtyMobile7637599" name="Lines" size="2" value="1">
                                                <button onclick="var result = document.getElementById('qtyMobile7637599'); var qtyMobile7637599 = result.value; if( !isNaN( qtyMobile7637599 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item productid-7637605"><a class="product-image" href="/iphone-4s-32-gb"
                                                                      title="iPhone 4s 32GB"><img alt="iPhone 4s 32GB"
                                                                                                  src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/54115944s1.png"
                                                                                                  width="80"></a>
                                    <div class="detail-item">
                                        <div class="product-details"><a href="javascript:;" data-id="7637605"
                                                                        title="Xóa"
                                                                        class="remove-item-cart fa fa-trash-o"></a>
                                            <p class="product-name"><a href="/iphone-4s-32-gb" title="iPhone 4s 32GB">iPhone
                                                    4s 32GB</a></p></div>
                                        <div class="product-details-bottom"><span class="price">9.790.000₫</span>
                                            <div class="quantity-select"><input class="variantID" type="hidden"
                                                                                name="variantId" value="7637605">
                                                <button onclick="var result = document.getElementById('qtyMobile7637605'); var qtyMobile7637605 = result.value; if( !isNaN( qtyMobile7637605 ) &amp;&amp; qtyMobile7637605 > 1 ) result.value--;return false;"
                                                        class="reduced items-count btn-minus" disabled="" type="button">
                                                    –
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyMobile7637605"
                                                       id="qtyMobile7637605" name="Lines" size="2" value="1">
                                                <button onclick="var result = document.getElementById('qtyMobile7637605'); var qtyMobile7637605 = result.value; if( !isNaN( qtyMobile7637605 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item productid-7637606"><a class="product-image" href="/nokia-x6-8gb"
                                                                      title="Nokia X6 8GB"><img alt="Nokia X6 8GB"
                                                                                                src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/0010687nokiax68gb1.png"
                                                                                                width="80"></a>
                                    <div class="detail-item">
                                        <div class="product-details"><a href="javascript:;" data-id="7637606"
                                                                        title="Xóa"
                                                                        class="remove-item-cart fa fa-trash-o"></a>
                                            <p class="product-name"><a href="/nokia-x6-8gb" title="Nokia X6 8GB">Nokia
                                                    X6 8GB</a></p></div>
                                        <div class="product-details-bottom"><span class="price">6.490.000₫</span>
                                            <div class="quantity-select"><input class="variantID" type="hidden"
                                                                                name="variantId" value="7637606">
                                                <button onclick="var result = document.getElementById('qtyMobile7637606'); var qtyMobile7637606 = result.value; if( !isNaN( qtyMobile7637606 ) &amp;&amp; qtyMobile7637606 > 1 ) result.value--;return false;"
                                                        class="reduced items-count btn-minus" disabled="" type="button">
                                                    –
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyMobile7637606"
                                                       id="qtyMobile7637606" name="Lines" size="2" value="1">
                                                <button onclick="var result = document.getElementById('qtyMobile7637606'); var qtyMobile7637606 = result.value; if( !isNaN( qtyMobile7637606 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="item productid-7637608"><a class="product-image" href="/lg-l70"
                                                                      title="LG L70"><img alt="LG L70"
                                                                                          src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/big52005lggpad.png"
                                                                                          width="80"></a>
                                    <div class="detail-item">
                                        <div class="product-details"><a href="javascript:;" data-id="7637608"
                                                                        title="Xóa"
                                                                        class="remove-item-cart fa fa-trash-o"></a>
                                            <p class="product-name"><a href="/lg-l70" title="LG L70">LG L70</a></p>
                                        </div>
                                        <div class="product-details-bottom"><span class="price">5.000.000₫</span>
                                            <div class="quantity-select"><input class="variantID" type="hidden"
                                                                                name="variantId" value="7637608">
                                                <button onclick="var result = document.getElementById('qtyMobile7637608'); var qtyMobile7637608 = result.value; if( !isNaN( qtyMobile7637608 ) &amp;&amp; qtyMobile7637608 > 1 ) result.value--;return false;"
                                                        class="reduced items-count btn-minus" disabled="" type="button">
                                                    –
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar qtyMobile7637608"
                                                       id="qtyMobile7637608" name="Lines" size="2" value="1">
                                                <button onclick="var result = document.getElementById('qtyMobile7637608'); var qtyMobile7637608 = result.value; if( !isNaN( qtyMobile7637608 )) result.value++;return false;"
                                                        class="increase items-count btn-plus" type="button">+
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="top-subtotal">Tổng cộng: <span class="price total-price">98.588.000₫</span>
                            </div>
                            <div class="actions">
                                <button class="btn-checkout" type="button" aria-label="Tiến hành đặt hàng"
                                        onclick="window.location.href='/checkout'"><span><i class="fa fa-money"
                                                                                            aria-hidden="true"></i> Tiến hành đặt hàng</span>
                                </button>
                                <button class="btn-checkout btn-return" type="button" aria-label="Tiếp tục mua hàng"
                                        onclick="window.location.href='/'"><span><i class="fa fa-arrow-circle-left"
                                                                                    aria-hidden="true"></i> Tiếp tục mua hàng</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <style>
        .breadcrumbs {
            line-height: normal;
            padding: 7px 0 8px;
            background: #f1f6f8;
            font-size: 13px;
            color: #ff5c01;
            margin-bottom: 20px;
        }
        .breadcrumbs .inner a:hover {
            color: #ff5c01;
        }
        .breadcrumbs .inner a, .breadcrumbs .inner i {
            color: #898989;
            font-size: 12px;
        }
        .breadcrumbs .inner i {
            margin-left: 6px;
        }
        .form-mobile-cart button.button.btn-cart {
            background: #ff5c01;
        }
        .form-mobile-cart button.button-call-now {
            background: #46a748;
        }
        .cart {
            margin-bottom: 30px;
        }
        .cart #wait {
            display: none;
            width: 106px;
            height: 58px;
            position: absolute;
            top: 50%;
            left: 50%;
            padding: 2px;
            text-align: center;
            margin-left: -53px;
            margin-top: -29px;
            font-size: 16px;
            line-height: 1.8;
        }
        .cart #wait-mobile {
            display: none;
            width: 106px;
            height: 58px;
            top: 50%;
            left: 50%;
            padding: 2px;
            text-align: center;
            font-size: 16px;
            line-height: 1.8;
            margin: 0 auto;
        }
        .cart .bg-cart-page {
            padding-bottom: 15px;
            min-height: 300px;
            position: relative;
        }
        .cart .bg-cart-page .bg-scroll {
            overflow: auto;
            border: 1px solid #e1e1e1;
            border-top: none;
            margin-top: 20px;
        }
        .cart .bg-cart-page .bg-scroll .cart-thead {
            background: #f7f8f9;
            font-weight: bold;
            font-size: 13px;
            clear: both;
            width: 100%;
            border: 1px solid #e1e1e1;
            border-left: none;
            border-right: none;
            float: left;
            min-width: 600px;
            color: #464646;
            text-align: center;
        }
        .cart .bg-cart-page .bg-scroll .cart-thead>div {
            float: left;
            padding: 10px;
            line-height: 25px;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody {
            width: 100%;
            float: left;
            min-width: 600px;
            text-align: center;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart {
            border-bottom: 1px solid #eaeaea;
            width: 100%;
            float: left;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart:last-child {
            border-bottom: none;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart>div {
            float: left;
            padding: 10px 10px 6px;
            line-height: 20px;
            vertical-align: top;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart>div.a-left {
            text-align: left;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart>div.a-center {
            text-align: center;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart>div.a-right {
            text-align: right;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart .product-image {
            min-height: 75px;
            display: block;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart .product-name {
            margin: 0px;
            padding-bottom: 0px;
            font-size: 13px;
            font-weight: bold;
            line-height: 20px;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart .product-name a {
            color: #252525;
            font-weight: bold;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart .product-name a:hover {
            color: #ff5c01;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart .variant-title {
            color: #686868;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart .price {
            font-size: 13px;
            font-weight: normal;
            color: #ff5c01;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart .number-sidebar {
            border: 1px solid #ddd;
            height: 24px;
            margin-left: -1px;
            text-align: center;
            width: 23px;
            margin-right: -1px;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart .items-count {
            border: 1px solid #ddd;
            outline: none;
            background: #fff;
            height: 24px;
            width: 21px;
            vertical-align: top;
            text-align: center;
            padding: 0;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart a.remove-item {
            background-image: none;
            color: #333;
            cursor: pointer;
            padding: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
            cursor: pointer;
            text-decoration: none;
            border: none;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart a.remove-item:before {
            content: "\f014";
            font-family: FontAwesome;
            font-size: 14px;
        }
        .cart .bg-cart-page .bg-scroll .cart-tbody .item-cart a.remove-item span {
            display: none;
        }
        .cart .bg-cart-page .cart-collaterals td, .cart .bg-cart-page .cart-collaterals th {
            border: none;
            padding: 0;
            font-size: 18px;
        }
        .cart .bg-cart-page .cart-collaterals .totals h3 {
            font-size: 15px;
            margin-bottom: 15px;
            border-bottom: 1px #ddd solid;
            padding: 10px 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 20px;
            font-weight: bold;
            font-family: 'Roboto';
            line-height: 20px;
            display: none;
        }
        .cart .bg-cart-page .cart-collaterals .totals .inner {
            padding: 20px 0px 15px 0px;
            margin-top: 0px;
        }
        .cart .bg-cart-page .cart-collaterals .totals .inner .shopping-cart-totals-table {
            float: right;
            width: 100%;
            padding-bottom: 8px;
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 20px;
        }
        .cart .bg-cart-page .cart-collaterals .totals .inner .shopping-cart-totals-table .price {
            font-weight: 900;
            color: #f00;
        }
        .cart .bg-cart-page .cart-collaterals .totals .inner .checkout {
            color: #666666;
            padding-top: 5px;
            text-align: center;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .cart .bg-cart-page .cart-collaterals .totals .inner .checkout .btn-proceed-checkout {
            background: #ff5c01;
            padding: 12px 15px;
            color: #fff;
            width: 100%;
            border: 1px solid #ff5c01;
        }
        .cart .bg-cart-page .cart-collaterals .totals .inner .checkout .btn-proceed-checkout:before {
            content: "\f00c";
            font-family: FontAwesome;
            font-size: 20px;
            padding-right: 5px;
        }
        .cart .bg-cart-page .cart-collaterals .totals .inner .checkout .btn-proceed-checkout span {
            font-size: 18px;
            font-weight: normal;
        }
        .cart .bg-cart-page .cart-collaterals .totals .inner .checkout .btn-proceed-checkout:hover {
            background: #222222;
            border: 1px solid #222222;
        }
        .cart .bg-cart-page .cart-collaterals .totals .inner .checkout .btn-continue {
            margin-top: 15px;
            width: 100%;
            background: #ecebec;
            font-size: 16px;
            padding: 13px;
            border: 1px solid #ddd;
        }
        .cart .bg-cart-page .cart-collaterals .totals .inner .checkout .btn-continue:before {
            content: "\f060";
            font-family: FontAwesome;
            font-size: 12px;
            padding-right: 8px;
        }
        .cart .bg-cart-page .cart-collaterals .totals .inner .checkout .btn-continue:hover {
            background: #f1f6f8;
        }
        .cart .cart-droplist__content {
            position: relative;
            width: 100%;
            display: block;
            box-shadow: none;
            border: 1px solid #ddd;
            margin-top: 15px;
            z-index: 1;
        }

        .cart .bg-cart-page .cart-collaterals .totals .inner .checkout .btn-proceed-checkout {
            background: #ff5c01;
            padding: 12px 15px;
            color: #fff;
            width: 100%;
            border: 1px solid #ff5c01;
        }

        .cart .bg-cart-page .cart-collaterals .totals .inner .checkout .btn-proceed-checkout:hover {
            background: #222222;
            border: 1px solid #222222;
        }
    </style>
@endsection