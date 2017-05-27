@extends('app.layout')

@section('title')
    Home
@endsection

@section('script')
    <script src="/js/angular/guest/CartController.js"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/cart.css">
@endsection

@section('content')
    <div class="" ng-controller="CartController as controller">
        <div class="breadcrumbs">
            <div class="container">
                <div class="inner">
                    <a title="Quay lại trang chủ" href="/">Trang chủ</a>
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
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
                            <form novalidate="">
                                <div class="bg-scroll">
                                    <div class="cart-thead">
                                        <div class="first-column">Ảnh sản phẩm</div>
                                        <div class="second-column">
                                            <span class="nobr">Tên sản phẩm</span></div>
                                        <div class="a-right third-column">
                                            <span class="nobr">Giá bán lẻ</span>
                                        </div>
                                        <div class="a-center fourth-column">Số lượng</div>
                                        <div class="a-center fifth-column">Tạm tính</div>
                                        <div class="sixth-column">Xóa</div>
                                    </div>
                                    <div class="cart-tbody">
                                        <div class="item-cart" ng-repeat="variant in controller.listVariants">
                                            <div class="image first-column">
                                                <a class="product-image" href="javascript:void(0)">
                                                    <img width="75" height="auto"
                                                            ng-src="@{{ variant.image }}"></a>
                                            </div>
                                            <div class="second-column">
                                                <h2 class="product-name">
                                                    <a href="javascript:void(0)">@{{ variant.product.title }}</a></h2>
                                                <div class="list-type-variant">
                                                    <span class="variant-title" ng-repeat="type in variant.properties">
                                                        @{{ type.name }} : @{{ type.value }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="a-right third-column">
                                                <span class="item-price">
                                                    <span class="price">@{{ variant.price | number }}₫</span>
                                                </span>
                                            </div>
                                            <div class="a-center fourth-column">
                                                <button class="reduced items-count btn-minus" type="button"
                                                        ng-click="controller.minusVariant(variant)">
                                                    –
                                                </button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar"
                                                       name="Lines" size="2" value="1" ng-model="variant.quantity">
                                                <button class="increase items-count btn-plus" type="button"
                                                        ng-click="controller.plusVariant(variant)">+
                                                </button>
                                            </div>
                                            <div class="a-center fifth-column">
                                                <span class="cart-price">
                                                    <span class="price">@{{ variant.total | number }}₫</span>
                                                </span>
                                            </div>
                                            <div class="sixth-column">
                                                <a class="button remove-item remove-item-cart"
                                                   title="Xóa" href="javascript:void(0);"
                                                   ng-click="controller.removeVariant(variant)">
                                                    <span>Xóa</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="cart-collaterals col-md-4 col-sm-12 col-xs-12">
                            <div id="sticky-wrapper" class="sticky-wrapper" style="height: 190px;">
                                <div class="totals">
                                    <h3>Tổng cộng</h3>
                                    <div class="inner">
                                        <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                                            <colgroup><col><col></colgroup>
                                            <tfoot>
                                            <tr>
                                                <td colspan="1" class="a-left">
                                                    <strong>Tổng tiền</strong>
                                                </td>
                                                <td class="a-right">
                                                    <strong>
                                                        <span class="price">@{{ controller.totalPriceOrder | number }}₫</span>
                                                    </strong>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                        <ul class="checkout">
                                            <li>
                                                <button class="button btn-proceed-checkout"
                                                        aria-label="Tiến hành đặt hàng"
                                                        title="Tiến hành đặt hàng"
                                                        type="button"
                                                        onclick="window.location.href='/checkout'">
                                                    <span>Tiến hành đặt hàng</span>
                                                </button>
                                            </li>
                                            <li>
                                                <button class="button btn-continue"
                                                        aria-label="Tiếp tục mua hàng"
                                                        title="Tiếp tục mua hàng"
                                                        type="button"
                                                        onclick="window.history.go(-1);">
                                                    <span>Tiếp tục mua hàng</span>
                                                </button>
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
                        <div class="cart-droplist__status">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            <span class="cart-counter-list">11</span>
                            Sản phẩm trong giỏ hàng
                        </div>
                        <div class="mini-list">
                            <ul class="list-item-cart">
                                <li class="item" ng-repeat="variant in controller.listVariants">
                                    <a class="product-image">
                                        <img ng-src="@{{ variant.image }}" width="80">
                                    </a>
                                    <div class="detail-item">
                                        <div class="product-details">
                                            <a href="javascript:void(0);" class="remove-item-cart fa fa-trash-o" ng-click="controller.removeVariant(variant)"></a>
                                            <p class="product-name">
                                                <a href="javascript:void(0)">@{{ variant.product.title }}</a>
                                            </p>
                                            <div class="list-type-variant">
                                                    <span class="variant-title" ng-repeat="type in variant.properties">
                                                        @{{ type.name }} : @{{ type.value }}
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="product-details-bottom">
                                            <span class="price">@{{ variant.total | number }}</span>
                                            <div class="quantity-select">
                                                <button class="reduced items-count btn-minus" type="button" ng-click="controller.minusVariant(variant)">–</button>
                                                <input type="text" maxlength="2" min="0"
                                                       class="input-text number-sidebar"
                                                       name="Lines" size="2" value="1" ng-model="variant.quantity">
                                                <button class="increase items-count btn-plus" type="button" ng-click="controller.plusVariant(variant)">+</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="top-subtotal">Tổng cộng: <span class="price total-price">@{{ controller.totalPriceOrder | number }}₫</span>
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
@endsection