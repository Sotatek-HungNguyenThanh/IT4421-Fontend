<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="{{url('css/app.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    @yield("css")
    <script type="text/javascript" src="/js/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    @yield("script")
<style>
    .product-quickview .product {
        margin: 0;
    }
    .product-quickview .product__view {
        padding: 20px;
    }
    .product-quickview .product__view__image {
        margin-bottom: 0;
    }
    .product-quickview .product__view__content {
        margin-bottom: 0;
        overflow: auto;
        max-height: 480px;
        padding-right: 5px;
    }
    .product__view__content .product__view__name {
        padding-bottom: 20px;
        border-bottom: 1px solid #acacac;
    }
    .product__view__content .product__view__name h1 {
        font-family: Arial;
        color: #252525;
        font-size: 24px;
        line-height: normal;
        text-transform: uppercase;
    }
    .product-quickview .product__view__content .product__view__name h1 {
        font-size: 18px;
        font-weight: bold;
        padding-right: 20px;
        line-height: 24px;
    }
    .product__view__content .product__view__price {
        padding: 15px 0;
    }



    .product__view__content .product__view__price p {
        display: inline-block;
        font-size: 14px;
        font-family: Arial;
        color: #252525;
    }
    .product__view__content .product__view__price--special .price {
        font-size: 24px;
        font-weight: bold;
        font-family: Arial;
        color: #ed1c24;
    }
    .product__view__content .product__view__content--short-description {
        font-size: 14px;
        color: #252525;
        font-family: Arial;
        line-height: 22px;
        margin-bottom: 20px;
    }
    .product__view__content .product__view__content--product-description {
        font-size: 14px;
        color: #898989;
        font-family: Arial;
        line-height: 24px;
        margin-bottom: 21px;
    }
    .product-quickview .product__view__content .product__view__content--product-description {
        max-height: 116px;
        overflow: hidden;
    }
    .product__view__content .product__view__content--product-description h4 {
        font-size: 14px;
        font-family: Arial;
        color: #323b3d;
        font-weight: bold;
        padding-bottom: 5px;
        line-height: normal;
    }
    .product-quickview .product__view__content--actions {
        margin-bottom: 20px;
    }
    .product__view__content--actions .actions-qty {
        font-size: 0;
    }
    .product__view__content--actions .actions-qty label {
        font-size: 14px;
        color: #555555;
        font-family: Arial;
        display: inline-block;
        min-width: 70px;
        padding-right: 10px;
        font-weight: normal;
    }
    product-quickview .product__view__content--actions .actions-qty #qtyDetail {
        width: 70px;
        margin-right: 7px;
    }
    .product__view__content--actions .actions-qty #qtyDetail {
        width: 74px;
        height: 45px;
        border: 1px solid #ebebeb;
        color: #363533;
        font-size: 14px;
        font-family: Arial;
        padding: 10px;
        margin-right: 10px;
        text-align: center;
    }
    .product-quickview .product__view__content--actions .actions-qty .detail-button {
        width: 170px;
        margin-right: 5px;
    }
    .product__view__content--actions .actions-qty .detail-button.btn-cart {
        width: 262px;
        padding-left: 45px;
    }
    .product__view__content--actions .actions-qty .detail-button {
        background: #ff5c01;
        font-size: 18px;
        font-weight: normal;
        font-family: Arial;
        text-transform: uppercase;
        border: none;
        outline: none;
        width: 217px;
        height: 45px;
        display: inline-block;
        color: #fff;
        padding: 0;
        position: relative;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
        vertical-align: top;
        margin-right: 10px;
    }
    .product__view__content--actions .actions-qty .detail-hotline {
        background: #46a748;
        height: 45px;
        line-height: 45px;
        text-align: center;
        display: inline-block;
        font-size: 14px;
        font-weight: normal;
        font-family: Arial;
        text-transform: uppercase;
        border: none;
        outline: none;
        padding: 0;
        padding-left: 45px;
        position: relative;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
        color: #fff;
        width: 212px;
        vertical-align: top;
        cursor: pointer;
    }
</style>
</head>
<body>
<section class="product clearfix">
<div id="product__view" class="product__view col-xs-12 clearfix">
<div class="row">
<div class="product__view__image col-lg-5 col-md-5 col-sm-6 col-xs-12">
<div class="product__view__image--list">
<div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 359px;"><ul class="bxslider1" style="width: 315%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">


<li style="float: left; list-style: none; position: relative; width: 384px;">
<img class="cloudzoom" id="zoom1" data-cloudzoom="zoomSizeMode:'image',zoomPosition:'inside', zoomOffsetX:0" src="//bizweb.dktcdn.net/100/141/731/products/big97572lenovos850lcz3745.png?v=1479172450703" alt="Lenovo S8" style="user-select: none;">
</li>


</ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev disabled" href=""><i class="fa fa-chevron-left" aria-hidden="true"></i></a><a class="bx-next disabled" href=""><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div></div></div>
<div style="margin: 0 -7px">
<div id="bx-pager1" class="bx-pager owl-carousel owl-theme" style="opacity: 1; display: block;">

<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 164px; left: 0px; display: block;"><div class="owl-item" style="width: 82px;"><a data-slide-index="0" href="" class="active">
<img src="//bizweb.dktcdn.net/thumb/small/100/141/731/products/big97572lenovos850lcz3745.png?v=1479172450703" alt="Lenovo S8">
</a></div></div></div>

<div class="owl-controls clickable" style="display: none;"><div class="owl-buttons"><div class="owl-prev"></div><div class="owl-next"></div></div></div></div>
</div>
</div>
<div class="clear"></div>
</div>
<script>
$('.bxslider1').bxSlider({
pagerCustom: '#bx-pager1',
infiniteLoop: false,
nextText: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
prevText: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
$('.active-slide').removeClass('active-slide');
$('.bxslider1>li').eq(currentSlideHtmlObject + 1).addClass('active-slide');
$('#bx-pager1 .owl-wrapper').trigger('owl.goTo', currentSlideHtmlObject);
},
onSliderLoad: function () {
$('.bxslider1>li').eq(1).addClass('active-slide')
},
});
CloudZoom.quickStart();
$.extend($.fn.CloudZoom.defaults, {
disableOnScreenWidth: 991
});
jQuery("#bx-pager1").owlCarousel({
items : 4, //10 items above 1000px browser width
itemsDesktop : [1024,4], //5 items between 1024px and 901px
itemsDesktopSmall : [900,4], // 3 items betweem 900px and 601px
itemsTablet: [600,4], //2 items between 600 and 0;
itemsMobile : [320,4],
navigation : true,
navigationText : ["",""],
slideSpeed : 500,
pagination : false
});
</script>
<div class="product__view__content col-lg-7 col-md-7 col-sm-6 col-xs-12" itemprop="offers" itemscope="" itemtype="http://schema.org/AggregateOffer">

<link itemprop="availability" href="http://schema.org/InStock">

<meta itemprop="priceCurrency" content="VND">
<meta itemprop="price" content="4639000.0000">

<div class="product__view__name">
<h1><a href="/lenovo-s8">Lenovo S8</a></h1>
</div>
<div class="product__view__price">
<div class="price-box">



<p class="product__view__price--special"><span class="price-label">Giá bán </span><span class="price">4.639.000₫</span></p>



</div>
</div>
<div class="product__view__content--short-description">
<p>Thương hiệu : <a href="/vendors?query=Lenovo" title="Lenovo">Lenovo</a></p>
<p>Mã sản phẩm: <span class="product-sku">S8-LNS8-50LCY</span>  |  Tình trạng: <span class="product-available">Còn hàng</span></p>
</div>

<div class="product__view__content--product-description">
<h4>Mô tả:</h4>
Thiết kế mỏng nhẹ

Nhìn tổng thể, LENOVO S8-LNS8-50LCY là một chiếc tablet có thiết kế khá mỏng và nhẹ, với bề dày 7.9mm và khối lượng khoảng 299 gram. Điểm nhấn của máy là các góc cạnh vuông vức và lớp viền giả kim loại...
</div>

<div class="product__view__content--actions  clearfix">
<form action="/cart/add" method="post" enctype="multipart/form-data" id="add-to-cart-form" class="form-product-quickview">



<input type="hidden" name="variantId" value="7637591">



<div class="actions-qty">
<label for="qty">Số lượng</label>
<input type="number" class="input-text qtyDetail" title="Qty" value="1" min="1" maxlength="12" id="qtyDetail" name="quantity">

<button class="button btn-cart detail-button add_to_cart_detail_quick_view" data-dismiss="modal" title="Mua ngay" aria-label="Mua ngay"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i> Mua ngay</span></button>

<buttion class="hotline detail-hotline" aria-label="Hotline" title="Holine: 1900 1009" onclick="window.location.href='tel:1900 1009'"><i class="fa fa-volume-control-phone" aria-hidden="true"></i> Hotline: 1900 1009</buttion>
</div>

</form>
</div>
<div class="product__view__content--social">
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53b643a9486d818e"></script>
<div class="addthis_native_toolbox" data-url="http://amobile.bizwebvietnam.net/lenovo-s8"></div>
</div>
</div>
</div>
</div>
</section>
</body>