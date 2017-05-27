@extends('app.layout')

@section('title')
    Home
@endsection

@section('script')
    <script src="/js/angular/guest/ProductModelController.js"></script>
    <script src="/js/angular/guest/ProductController.js"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="/css/product_details.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <style>
        .list-variant .item-variant select{
            width: 185px;
            height: 45px;
            border: 1px solid #ebebeb;
            color: #363533;
            font-size: 14px;
            font-family: Arial;
            padding: 10px;
            margin-right: 10px;
            text-align: center;
            display: block;
            margin-bottom: 5px;
            outline: none;
        }
        .list-variant{
            display: inline-block;
            width: 100%;
            left: 0px;
            float: left;
        }
        .list-variant .item-variant{
            display: inline-block;
        }
    </style>
@endsection

@section('content')
    <div ng-controller="ProductController as controller">
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
                                                         ng-src="@{{ controller.product.images[0] }}">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="product__view__content col-lg-7 col-md-7 col-sm-12 col-xs-12">

                                <div class="product__view__name">
                                    <h1>@{{ controller.product.title }}</h1>
                                </div>
                                <div class="product__view__price">
                                    <div class="price-box">


                                        <p class="product__view__price--special"><span
                                                    class="price-label">Giá bán </span><span
                                                    class="price">@{{ controller.price | number }}₫</span></p>


                                    </div>
                                </div>
                                <div class="product__view__content--short-description">
                                    <p>Mã sản phẩm: <span class="product-sku">SP@{{ controller.product.id }}</span> | Tình trạng: <span
                                                class="product-available">@{{ controller.inventory | inventory }}</span></p>
                                </div>

                                <div class="product__view__content--product-description">
                                    <h4>Mô tả:</h4>
                                    @{{ controller.product.description }}
                                </div>

                                <div class="product__view__content--actions  clearfix">
                                    <form
                                            id="add-to-cart-form"
                                            class="form-product-quickview">

                                        <div class="actions-qty">
                                            <div class="list-variant">
                                                <div class="item-variant" ng-repeat="option in controller.listOptions track by $index">
                                                    <label for="option-@{{ $index }}">@{{ option.name }}</label>
                                                    <select type="number" class="form-control" id="option-@{{ $index }}"
                                                            ng-change="controller.chooseVariant(option)" ng-model="option.value">
                                                        <option value="@{{ value }}"
                                                                ng-repeat="value in controller.getListValueOfOption(option.name) track by $index">
                                                            @{{ value }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <label for="qty">Số lượng</label>
                                            <input type="number" class="input-text qtyDetail" ng-model="controller.quantity" value="1" min="1"
                                                   maxlength="12" id="qtyDetail" name="quantity">
                                            <div>
                                                <button class="button btn-cart detail-button add_to_cart_detail_quick_view"
                                                        data-dismiss="modal" ng-click="controller.addCart()">
											<span>
												<i class="fa fa-shopping-cart" aria-hidden="true"></i>
												Mua ngay
											</span>
                                                </button>
                                                <button class="hotline detail-hotline"
                                                        data-dismiss="modal"
                                                        data-toggle="modal"
                                                        data-target="#CartModel" ng-click="controller.showCartModel()">
											<span>
												<i class="fa fa-shopping-basket" aria-hidden="true"></i>
												Thêm vào giỏ hàng
											</span>
                                                </button>
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('app.cart_model')
    </div>
@endsection