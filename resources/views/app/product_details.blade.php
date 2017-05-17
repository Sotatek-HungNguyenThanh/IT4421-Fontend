@extends('app.layout')

@section('title')
    Home
@endsection

@section('script')

@endsection
@section('css')
    <link rel="stylesheet" href="/css/product_details.css">
    <link rel="stylesheet" href="/css/responsive.css">
@endsection

@section('content')
    <div>
        <section class="product">
            <div class="container">
                <div class="row">
                    <div id="product__view" class="product__view col-xs-12 clearfix">
                        <div class="row">
                            <div class="product__view__image col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="product__view__image--list">
                                    <div class="bx-wrapper" style="max-width: 100%;">
                                        <div class="bx-viewport">
                                            <ul class="bxslider">


                                                <li>
                                                    <img class="cloudzoom" id="zoom1"
                                                         data-cloudzoom="zoomSizeMode:'image',zoomPosition:'inside', zoomOffsetX:0"
                                                         src="//bizweb.dktcdn.net/100/141/731/products/13090htconem9goldonsilver.jpg?v=1479172304403"
                                                         alt="HTC One M9">
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="product__view__content col-lg-7 col-md-7 col-sm-12 col-xs-12" itemprop="offers"
                                 itemscope="" itemtype="http://schema.org/AggregateOffer">

                                <link itemprop="availability" href="http://schema.org/InStock">

                                <meta itemprop="priceCurrency" content="VND">
                                <meta itemprop="price" content="10990000.0000">

                                <div class="product__view__name">
                                    <h1>HTC One M9</h1>
                                </div>
                                <div class="product__view__price">
                                    <div class="price-box">


                                        <p class="product__view__price--special"><span
                                                    class="price-label">Giá bán </span><span
                                                    class="price">10.990.000₫</span></p>


                                    </div>
                                </div>
                                <div class="product__view__content--short-description">
                                    <p>Thương hiệu : <a href="/vendors?query=HTC" title="HTC">HTC</a></p>
                                    <p>Mã sản phẩm: <span class="product-sku">HM-TJK8LH</span> | Tình trạng: <span
                                                class="product-available">Còn hàng</span></p>
                                </div>

                                <div class="product__view__content--product-description">
                                    <h4>Mô tả:</h4>
                                    Thiết kế kim loại sắc sảo, thu hút mọi ánh nhìn

                                    HTC One M9 Gold On Silver được thiết kế kim loại đã được cải tiến thành kim loại hai
                                    tông màu (dual-tone) sành điệu và thời trang. Các cạnh sắc sảo của máy nằm ở...
                                </div>

                                <div class="product__view__content--actions  clearfix">
                                    <form action="/cart/add" method="post" enctype="multipart/form-data"
                                          id="add-to-cart-form">


                                        <input type="hidden" name="variantId" value="7637599">


                                        <div class="actions-qty">
                                            <label for="qty">Số lượng</label>
                                            <input type="number" class="input-text qtyDetail" title="Qty" value="1"
                                                   min="1" maxlength="12" id="qtyDetail" name="quantity">
                                            <div class="actions-qty__button">

                                                <button class="button btn-cart add_to_cart_detail detail-button"
                                                        title="Mua ngay" aria-label="Mua ngay"><span><i
                                                                class="fa fa-shopping-cart" aria-hidden="true"></i> Mua ngay</span>
                                                </button>

                                                <buttion class="hotline detail-hotline" aria-label="Hotline"
                                                         title="Holine: 1900 1009"
                                                         onclick="window.location.href='tel:1900 1009'"><i
                                                            class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                                    Hotline: 1900 1009
                                                </buttion>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="product__content col-xs-12 clearfix">--}}
                        {{--<div class="product__content--tab">--}}
                            {{--<ul id="product-detail-tab" class="product__content--tab-list">--}}
                                {{--<li class="active"><a href="#product_tabs_description" data-toggle="tab">Thông tin sản--}}
                                        {{--phẩm</a></li>--}}
                                {{--<li><a href="#product_tabs_custom_1" data-toggle="tab">Đánh giá</a></li>--}}

                            {{--</ul>--}}
                            {{--<div id="productTabContent" class="product__content--tab__content">--}}
                                {{--<div class="tab-content fade in active" id="product_tabs_description">--}}
                                    {{--<div class="std">--}}
                                        {{--<p style="text-align: justify;"><strong>Thiết kế kim loại sắc sảo, thu hút mọi--}}
                                                {{--ánh nhìn</strong></p>--}}

                                        {{--<p style="text-align: justify;">HTC One M9 Gold On Silver được thiết kế kim loại--}}
                                            {{--đã được cải tiến thành kim loại hai tông màu (dual-tone) sành điệu và thời--}}
                                            {{--trang. Các cạnh sắc sảo của máy nằm ở vị trí đối xứng, vát nhẹ ở các góc--}}
                                            {{--mang lại cảm giác dễ cầm nắm trong lòng bàn tay. Lưng máy Unibody uống cong,--}}
                                            {{--mảnh mai đầy quyết rũ khiến bạn ngay lập tức nhận ra đây là chiếc máy thuộc--}}
                                            {{--dòng One – dòng cao cấp nhất của HTC.</p>--}}

                                        {{--<p style="text-align: justify;"><strong>Màn hình sắc nét</strong></p>--}}

                                        {{--<p style="text-align: justify;">Công nghệ màn hình Super LCD 3 với tấm nên IPS--}}
                                            {{--mang lại góc nhìn rộng hơn. Màn hình có kích thước 5 inch độ phân giải Full--}}
                                            {{--HD 1080 x 1920 pixels, có mật độ điểm ảnh lên tới 441ppi mọi thứ đều được--}}
                                            {{--hiển thị mịn màng và sắc sảo đến từng chi tiết. Trên màn hình của máy cũng--}}
                                            {{--được bảo bệ bởi một tấm kính cường lực gorilla glass 4 chịu lực rất tốt và--}}
                                            {{--hạn chế được tối đa trày xước.</p>--}}

                                        {{--<p style="text-align: center;"><img--}}
                                                    {{--src="//bizweb.dktcdn.net/100/017/076/files/130589-htc-one-m9-gold-on-silver-7.jpg?v=1446694084979"--}}
                                                    {{--style="width: 600px; height: 393px;"></p>--}}

                                        {{--<p style="text-align: justify;"><strong>Thông số kỹ thuật</strong></p>--}}

                                        {{--<p style="text-align: justify;">Hãng sản xuất:&nbsp;HTC<br>--}}
                                            {{--Xuất xứ:&nbsp;Chính hãng<br>--}}
                                            {{--Hệ điều hành:&nbsp;Android 5.0 (Lollipop)<br>--}}
                                            {{--Loại màn hình:&nbsp;Super LCD 3<br>--}}
                                            {{--Màn hình rộng:&nbsp;5.0"<br>--}}
                                            {{--Camera sau:&nbsp;20.7 MP<br>--}}
                                            {{--Tốc độ CPU:&nbsp;4 nhân 1.5 GHz Cortex-A53 &amp; 4 nhân 2 GHz Cortex-A57<br>--}}
                                            {{--Chip đồ họa (GPU):&nbsp;Adreno 430<br>--}}
                                            {{--Trọng lượng (g):&nbsp;157 g<br>--}}
                                            {{--Loại pin:&nbsp;Loại pin</p>--}}

                                        {{--<p style="text-align: center;"><img--}}
                                                    {{--src="//bizweb.dktcdn.net/100/017/076/files/htcm9gs-mo-ta-chuc-nang.jpg?v=1446694125691"--}}
                                                    {{--style="width: 600px; height: 450px;"></p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="tab-content fade" id="product_tabs_custom_1">--}}
                                    {{--<div class="product-tabs-content-inner clearfix">--}}
                                        {{--<div id="bizweb-product-reviews" class="bizweb-product-reviews"--}}
                                             {{--data-id="4726075">--}}
                                            {{--<div>--}}
                                                {{--<div class="title-bl">--}}
                                                    {{--<h4>Đánh giá sản phẩm</h4>--}}
                                                {{--</div>--}}
                                                {{--<div id="bizweb-product-reviews-sub">--}}
                                                    {{--<div id="bizweb-product-reviews-summary"--}}
                                                         {{--class="bizweb-product-reviews-summary">--}}
                                                        {{--<div itemscope="" itemtype="http://schema.org/Product">--}}
                                                            {{--<meta content="HTC One M9" itemprop="name">--}}
                                                            {{--<div itemprop="aggregateRating" itemscope=""--}}
                                                                 {{--itemtype="http://schema.org/AggregateRating"--}}
                                                                 {{--class="bpr-summary">--}}
                                                                {{--<meta content="0" itemprop="ratingValue">--}}
                                                                {{--<meta content="5" itemprop="bestRating">--}}
                                                                {{--<meta content="1" itemprop="worstRating">--}}
                                                                {{--<meta content="0" itemprop="ratingCount">--}}

                                                                {{--<span class="bpr-summary-average">0</span>--}}
                                                                {{--<div data-number="5" data-score="0"--}}
                                                                     {{--class="bizweb-product-reviews-star"--}}
                                                                     {{--id="bizweb-prv-summary-star" title="Not rated yet!"--}}
                                                                     {{--style="color: rgb(255, 190, 0);">--}}
                                                                    {{--<i data-alt="1" class="star-off-png"--}}
                                                                       {{--title="Not rated yet!"></i>&nbsp;<i data-alt="2"--}}
                                                                                                           {{--class="star-off-png"--}}
                                                                                                           {{--title="Not rated yet!"></i>&nbsp;<i--}}
                                                                            {{--data-alt="3" class="star-off-png"--}}
                                                                            {{--title="Not rated yet!"></i>&nbsp;<i--}}
                                                                            {{--data-alt="4" class="star-off-png"--}}
                                                                            {{--title="Not rated yet!"></i>&nbsp;<i--}}
                                                                            {{--data-alt="5" class="star-off-png"--}}
                                                                            {{--title="Not rated yet!"></i><input--}}
                                                                            {{--name="score" type="hidden" readonly="">--}}
                                                                {{--</div>--}}
                                                                {{--<div class="bpr-summary-caption">--}}
                                                                    {{--<div></div>--}}
                                                                    {{--<div>--}}
                                                                        {{--<div><p>0</p></div>--}}
                                                                        {{--<div><img height="15" width="16"--}}
                                                                                  {{--src="https://productreviews.bizwebapps.vn/assets/images/user.png">--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                {{--</div>--}}
                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<span class="product-reviews-summary-actions">--}}
        {{--<input type="button" onclick="BPR.toggleForm(this);return false;" id="btnnewreview" value="Viết đánh giá">--}}
    {{--</span>--}}
                                                    {{--<div class="bizweb-product-reviews-form" id="bpr-form_4726075"--}}
                                                         {{--style="display:none;">--}}
                                                        {{--<form method="post"--}}
                                                              {{--action="https://productreviews.bizwebapps.vn/reviews/create"--}}
                                                              {{--onsubmit="BPR.submitForm(this);return false;"--}}
                                                              {{--id="bizweb-product-reviews-frm"--}}
                                                              {{--name="bizweb-product-reviews-frm">--}}
                                                            {{--<input type="hidden" name="productId" id="review_product_id"--}}
                                                                   {{--value="4726075">--}}
                                                            {{--<h4>Đánh giá</h4>--}}
                                                            {{--<fieldset class="bpr-form-rating">--}}
                                                                {{--<div id="dvRating"></div>--}}
                                                                {{--<input type="hidden" name="rating" id="review_rate"--}}
                                                                       {{--value="0">--}}
                                                                {{--<span class="bpr-form-message-error"></span>--}}
                                                            {{--</fieldset>--}}
                                                            {{--<fieldset class="bpr-form-contact">--}}
                                                                {{--<div class="bpr-form-contact-name require">--}}
                                                                    {{--<input type="text" maxlength="128"--}}
                                                                           {{--id="review_author" name="author" value=""--}}
                                                                           {{--placeholder="Nhập tên của bạn">--}}
                                                                    {{--<span class="bpr-form-message-error"></span>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="bpr-form-contact-email require">--}}
                                                                    {{--<input type="text" maxlength="128" id="review_email"--}}
                                                                           {{--name="email" value=""--}}
                                                                           {{--placeholder="nguyenvan@gmail.com">--}}
                                                                    {{--<span class="bpr-form-message-error"></span>--}}
                                                                {{--</div>--}}
                                                            {{--</fieldset>--}}
                                                            {{--<fieldset class="bpr-form-review">--}}
                                                                {{--<div class="bpr-form-review-title">--}}
                                                                    {{--<input type="text" maxlength="512" id="review_title"--}}
                                                                           {{--name="title" value="" placeholder="Tiêu đề">--}}
                                                                    {{--<span class="bpr-form-message-error"></span>--}}
                                                                {{--</div>--}}
                                                                {{--<div class="bpr-form-review-body">--}}
                                                                    {{--<textarea maxlength="1500" id="review_body"--}}
                                                                              {{--name="body" rows="5"--}}
                                                                              {{--placeholder="Nội dung"></textarea>--}}
                                                                    {{--<span class="bpr-form-message-error"></span>--}}
                                                                {{--</div>--}}
                                                            {{--</fieldset>--}}
                                                            {{--<fieldset class="bpr-form-review-error">--}}
                                                                {{--<p class="error"></p>--}}
                                                            {{--</fieldset>--}}
                                                            {{--<fieldset class="bpr-form-actions">--}}
                                                                {{--<input type="submit" value="Gửi"--}}
                                                                       {{--class="bpr-button-submit">--}}
                                                            {{--</fieldset>--}}
                                                        {{--</form>--}}
                                                    {{--</div>--}}
                                                    {{--<div style="display:none;" id="bpr-thanks"--}}
                                                         {{--class="bizweb-product-reviews-form">--}}
                                                        {{--<b>Cám ơn bạn đã đánh giá sản phẩm!</b>--}}
                                                    {{--</div>--}}
                                                    {{--<div id="bpr-list" class="bizweb-product-reviews-list"></div>--}}
                                                    {{--<div id="bpr-more-reviews"></div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="product__content--related">--}}
                            {{--<div class="general__title product__content--related-title">--}}
                                {{--<h2><span>Sản phẩm liên quan</span></h2>--}}
                            {{--</div>--}}
                            {{--<div class="related-slide">--}}
                                {{--<div class="product__content--related-slide owl-carousel clearfix owl-theme"--}}
                                     {{--style="opacity: 1; display: block;">--}}


                                    {{--<div class="owl-wrapper-outer">--}}
                                        {{--<div class="owl-wrapper" style="width: 2280px; left: 0px; display: block;">--}}
                                            {{--<div class="owl-item" style="width: 190px;">--}}
                                                {{--<div class="item">--}}


                                                    {{--<div class="product-item__grid">--}}
                                                        {{--<div class="product-item__thumb">--}}
                                                            {{--<a href="/dien-thoai-iphone-7-32gb">--}}
                                                                {{--<img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/iphone-78-400x460.png?v=1479171358803"--}}
                                                                     {{--alt="Điện thoại iPhone 7 32GB">--}}
                                                            {{--</a>--}}
                                                            {{--<div class="product-item__actions hidden-xs">--}}
                                                                {{--<button data-handle="dien-thoai-iphone-7-32gb"--}}
                                                                        {{--class="button quick-view">--}}
                                                                    {{--Xem nhanh--}}
                                                                {{--</button>--}}

                                                                {{--<form action="/cart/add" method="post" class="variants"--}}
                                                                      {{--id="product-actions-4738132"--}}
                                                                      {{--enctype="multipart/form-data">--}}


                                                                    {{--<button class="button btn-cart"--}}
                                                                            {{--title="Chọn sản phẩm"--}}
                                                                            {{--aria-label="Chọn sản phẩm" type="button"--}}
                                                                            {{--onclick="window.location.href='/dien-thoai-iphone-7-32gb'">--}}
                                                                        {{--<span>Chọn</span></button>--}}

                                                                {{--</form>--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-item__content">--}}
                                                            {{--<h3 class="product-item__title"><a--}}
                                                                        {{--href="/dien-thoai-iphone-7-32gb">Điện thoại--}}
                                                                    {{--iPhone 7 32GB</a></h3>--}}


                                                            {{--<div class="product-item__price">--}}

                                                                {{--<p class="product-item__price__old">--}}
                                                                    {{--<span>20.000.000₫</span><span--}}
                                                                            {{--class="sale-flag">-11%</span></p>--}}
                                                                {{--<p class="product-item__price__special">17.790.000₫</p>--}}

                                                            {{--</div>--}}


                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="owl-item" style="width: 190px;">--}}
                                                {{--<div class="item">--}}


                                                    {{--<div class="product-item__grid">--}}
                                                        {{--<div class="product-item__thumb">--}}
                                                            {{--<a href="/aonike-cd-150">--}}
                                                                {{--<img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4236103aonikecd15011.png?v=1479140903213"--}}
                                                                     {{--alt="Tai nghe Aonike CD-150">--}}
                                                            {{--</a>--}}
                                                            {{--<div class="product-item__actions hidden-xs">--}}
                                                                {{--<button data-handle="aonike-cd-150"--}}
                                                                        {{--class="button quick-view">--}}
                                                                    {{--Xem nhanh--}}
                                                                {{--</button>--}}

                                                                {{--<form action="/cart/add" method="post" class="variants"--}}
                                                                      {{--id="product-actions-4726097"--}}
                                                                      {{--enctype="multipart/form-data">--}}


                                                                    {{--<input type="hidden" name="variantId"--}}
                                                                           {{--value="9348202">--}}
                                                                    {{--<button class="button btn-cart add_to_cart"--}}
                                                                            {{--aria-label="Mua hàng" title="Mua hàng">--}}
                                                                        {{--<span>Mua hàng</span></button>--}}

                                                                {{--</form>--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-item__content">--}}
                                                            {{--<h3 class="product-item__title"><a href="/aonike-cd-150">Tai--}}
                                                                    {{--nghe Aonike CD-150</a></h3>--}}


                                                            {{--<div class="product-item__price">--}}

                                                                {{--<p class="product-item__price__old">--}}
                                                                    {{--<span>250.000₫</span><span--}}
                                                                            {{--class="sale-flag">-40%</span></p>--}}
                                                                {{--<p class="product-item__price__special">150.000₫</p>--}}

                                                            {{--</div>--}}


                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="owl-item" style="width: 190px;">--}}
                                                {{--<div class="item">--}}


                                                    {{--<div class="product-item__grid">--}}
                                                        {{--<div class="product-item__thumb">--}}
                                                            {{--<a href="/de-tan-nhiet-xcm-n19">--}}
                                                                {{--<img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4320312coolermasternotepalergo.png?v=1479140953727"--}}
                                                                     {{--alt="Đế tản nhiệt XCM N19">--}}
                                                            {{--</a>--}}
                                                            {{--<div class="product-item__actions hidden-xs">--}}
                                                                {{--<button data-handle="de-tan-nhiet-xcm-n19"--}}
                                                                        {{--class="button quick-view">--}}
                                                                    {{--Xem nhanh--}}
                                                                {{--</button>--}}

                                                                {{--<form action="/cart/add" method="post" class="variants"--}}
                                                                      {{--id="product-actions-4726096"--}}
                                                                      {{--enctype="multipart/form-data">--}}


                                                                    {{--<input type="hidden" name="variantId"--}}
                                                                           {{--value="7637620">--}}
                                                                    {{--<button class="button btn-cart add_to_cart"--}}
                                                                            {{--aria-label="Mua hàng" title="Mua hàng">--}}
                                                                        {{--<span>Mua hàng</span></button>--}}

                                                                {{--</form>--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-item__content">--}}
                                                            {{--<h3 class="product-item__title"><a--}}
                                                                        {{--href="/de-tan-nhiet-xcm-n19">Đế tản nhiệt XCM--}}
                                                                    {{--N19</a></h3>--}}


                                                            {{--<div class="product-item__price">--}}

                                                                {{--<p class="product-item__price__old">--}}
                                                                    {{--<span>220.000₫</span><span--}}
                                                                            {{--class="sale-flag">-9%</span></p>--}}
                                                                {{--<p class="product-item__price__special">200.000₫</p>--}}

                                                            {{--</div>--}}


                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="owl-item" style="width: 190px;">--}}
                                                {{--<div class="item">--}}


                                                    {{--<div class="product-item__grid">--}}
                                                        {{--<div class="product-item__thumb">--}}
                                                            {{--<a href="/loa-icore-ic-38-hifi-bluetooth-mini-speaker">--}}
                                                                {{--<img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4759147loaicore7001.png?v=1479140976967"--}}
                                                                     {{--alt="Loa iCore IC-38 Hifi Bluetooth Mini Speaker">--}}
                                                            {{--</a>--}}
                                                            {{--<div class="product-item__actions hidden-xs">--}}
                                                                {{--<button data-handle="loa-icore-ic-38-hifi-bluetooth-mini-speaker"--}}
                                                                        {{--class="button quick-view">--}}
                                                                    {{--Xem nhanh--}}
                                                                {{--</button>--}}

                                                                {{--<form action="/cart/add" method="post" class="variants"--}}
                                                                      {{--id="product-actions-4726095"--}}
                                                                      {{--enctype="multipart/form-data">--}}


                                                                    {{--<input type="hidden" name="variantId"--}}
                                                                           {{--value="7637619">--}}
                                                                    {{--<button class="button btn-cart add_to_cart"--}}
                                                                            {{--aria-label="Mua hàng" title="Mua hàng">--}}
                                                                        {{--<span>Mua hàng</span></button>--}}

                                                                {{--</form>--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-item__content">--}}
                                                            {{--<h3 class="product-item__title"><a--}}
                                                                        {{--href="/loa-icore-ic-38-hifi-bluetooth-mini-speaker">Loa--}}
                                                                    {{--iCore IC-38 Hifi Bluetooth Mini Speaker</a></h3>--}}


                                                            {{--<div class="product-item__price">--}}

                                                                {{--<p class="product-item__price__old">--}}
                                                                    {{--<span>500.000₫</span><span--}}
                                                                            {{--class="sale-flag">-10%</span></p>--}}
                                                                {{--<p class="product-item__price__special">450.000₫</p>--}}

                                                            {{--</div>--}}


                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="owl-item" style="width: 190px;">--}}
                                                {{--<div class="item">--}}


                                                    {{--<div class="product-item__grid">--}}
                                                        {{--<div class="product-item__thumb">--}}
                                                            {{--<a href="/samsung-ec-wb50fzbdbvn">--}}
                                                                {{--<img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/50390391511.png?v=1479141038480"--}}
                                                                     {{--alt="Samsung EC-WB50FZBDBVN">--}}
                                                            {{--</a>--}}
                                                            {{--<div class="product-item__actions hidden-xs">--}}
                                                                {{--<button data-handle="samsung-ec-wb50fzbdbvn"--}}
                                                                        {{--class="button quick-view">--}}
                                                                    {{--Xem nhanh--}}
                                                                {{--</button>--}}

                                                                {{--<form action="/cart/add" method="post" class="variants"--}}
                                                                      {{--id="product-actions-4726094"--}}
                                                                      {{--enctype="multipart/form-data">--}}


                                                                    {{--<input type="hidden" name="variantId"--}}
                                                                           {{--value="7637618">--}}
                                                                    {{--<button class="button btn-cart add_to_cart"--}}
                                                                            {{--aria-label="Mua hàng" title="Mua hàng">--}}
                                                                        {{--<span>Mua hàng</span></button>--}}

                                                                {{--</form>--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-item__content">--}}
                                                            {{--<h3 class="product-item__title"><a--}}
                                                                        {{--href="/samsung-ec-wb50fzbdbvn">Samsung--}}
                                                                    {{--EC-WB50FZBDBVN</a></h3>--}}


                                                            {{--<div class="product-item__price">--}}

                                                                {{--<p class="product-item__price__old">--}}
                                                                    {{--<span>4.000.000₫</span><span--}}
                                                                            {{--class="sale-flag">-8%</span></p>--}}
                                                                {{--<p class="product-item__price__special">3.700.000₫</p>--}}

                                                            {{--</div>--}}


                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="owl-item" style="width: 190px;">--}}
                                                {{--<div class="item">--}}


                                                    {{--<div class="product-item__grid">--}}
                                                        {{--<div class="product-item__thumb">--}}
                                                            {{--<a href="/mieng-dan-film-dan-man-hinh">--}}
                                                                {{--<img src="//bizweb.dktcdn.net/thumb/medium/100/141/731/products/4500006combodanflimdanmanhinhc.png?v=1479141078567"--}}
                                                                     {{--alt="Miếng dán film, dán màn hình">--}}
                                                            {{--</a>--}}
                                                            {{--<div class="product-item__actions hidden-xs">--}}
                                                                {{--<button data-handle="mieng-dan-film-dan-man-hinh"--}}
                                                                        {{--class="button quick-view">--}}
                                                                    {{--Xem nhanh--}}
                                                                {{--</button>--}}

                                                                {{--<form action="/cart/add" method="post" class="variants"--}}
                                                                      {{--id="product-actions-4726093"--}}
                                                                      {{--enctype="multipart/form-data">--}}


                                                                    {{--<input type="hidden" name="variantId"--}}
                                                                           {{--value="7637617">--}}
                                                                    {{--<button class="button btn-cart add_to_cart"--}}
                                                                            {{--aria-label="Mua hàng" title="Mua hàng">--}}
                                                                        {{--<span>Mua hàng</span></button>--}}

                                                                {{--</form>--}}

                                                            {{--</div>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="product-item__content">--}}
                                                            {{--<h3 class="product-item__title"><a--}}
                                                                        {{--href="/mieng-dan-film-dan-man-hinh">Miếng dán--}}
                                                                    {{--film, dán màn hình</a></h3>--}}


                                                            {{--<div class="product-item__price">--}}

                                                                {{--<p class="product-item__price__old">--}}
                                                                    {{--<span>200.000₫</span><span--}}
                                                                            {{--class="sale-flag">-20%</span></p>--}}
                                                                {{--<p class="product-item__price__special">160.000₫</p>--}}

                                                            {{--</div>--}}


                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}


                                    {{--<div class="owl-controls clickable" style="display: none;">--}}
                                        {{--<div class="owl-buttons">--}}
                                            {{--<div class="owl-prev"><a class="btn-prev"><i class="fa fa-chevron-left"--}}
                                                                                         {{--aria-hidden="true"></i></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="owl-next"><a class="btn-next"><i class="fa fa-chevron-right"--}}
                                                                                         {{--aria-hidden="true"></i></a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                </div>
            </div>
        </section>
    </div>
@endsection