<div id="CartModel" class="modal fade cart-desktop-popup" role="dialog" ng-controller="CartModelController as controller" ng-click="controller.hideMessageJustUpdate()">
    <div class="modal-dialog">
        <div class="modal-header">
            <button class="button cart-desktop__close"
                    data-dismiss="modal" aria-label="Close">X</button>
            <p class="cart-desktop__title">
                <a href="/cart">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Giỏ hàng của bạn (<span class="cart-popup-count">@{{ controller.quantityProduct }}</span> sản phẩm)
                </a>
            </p>
            <p class="cart-desktop__status" ng-show="controller.isJustUpdate">
                <i class="fa fa-check" aria-hidden="true"></i> Bạn vừa thêm
                <a href="javascript:void(0)" class="cart-desktop__status_item">
                    @{{ controller.newVariant }}
                </a> vào giỏ hàng
            </p>
        </div>
        <div class="modal-body">
            <div class="cart-desktop__thead">
                <div class="cart-desktop__col-1">Sản phẩm</div>
                <div class="cart-desktop__col-2">Đơn giá</div>
                <div class="cart-desktop__col-3">Số lượng</div>
                <div class="cart-desktop__col-4">Thành tiền</div>
            </div>
            <div class="cart-desktop__tbody">
                <div class="cart-popup__item" ng-repeat="variant in controller.listVariants">
                    <div class="cart-desktop__col-1">
                        <div class="cart-popup__item-image">
                            <a href="javascript:void(0)">
                                <img ng-src="@{{ variant.image }}" width="80">
                            </a>
                        </div>
                        <div class="cart-popup__item-info">
                            <p class="cart-popup__item-name">
                                <a href="javascript:void(0)">@{{ variant.product.title }}</a>
                            </p>
                            <p class="cart-popup__item-remove">
                                <a href="javascript:void(0)" class="cart-popup__item-remove__button remove-item-cart"
                                   title="Xóa" ng-click="controller.removeVariant(variant)">
                                    <i class="fa fa-trash-o"></i> Bỏ sản phẩm
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="cart-desktop__col-2">
                        <div class="cart-popup__item-price">
                            <span class="cart-popup__item-price__price">@{{ variant.price | number }}₫</span>
                        </div>
                    </div>
                    <div class="cart-desktop__col-3">
                        <button class="reduced items-count btn-minus" type="button"
                                ng-click="controller.minusVariant(variant)">–</button>
                        <input type="text" maxlength="2" min="0" class="input-text number-sidebar" name="Lines" size="2" value="1" ng-model="variant.quantity">
                        <button class="increase items-count btn-plus" type="button"
                                ng-click="controller.plusVariant(variant)">+</button>
                    </div>
                    <div class="cart-desktop__col-4">
                        <span class="cart-popup__item-price">
                            <span class="cart-popup__item-price__price total-price-item">@{{ variant.total | number}}₫</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="cart-desktop__tfooter">
                <div class="cart-desktop__tfooter-info clearfix">
                    <p class="cart-desktop__tfooter-total">Tổng tiền: <span class="total-price">@{{ controller.totalPriceOrder | number }}₫</span></p>
                </div>
                <div class="cart-desktop__tfooter-action clearfix">
                    <a class="button cart-desktop__tfooter-continue" title="Tiếp tục mua hàng" data-dismiss="modal"><i
                                class="fa fa-arrow-circle-left" aria-hidden="true"></i> Tiếp tục mua hàng</a>
                    <a class="button cart-desktop__tfooter-checkout" title="Tiến hành đặt hàng" href="/checkout"><i
                                class="fa fa-money" aria-hidden="true"></i> Tiến hành đặt hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .modal-header {
        padding: 15px;
        border-bottom: 1px solid #e5e5e5;
        min-height: 16.42857143px;
    }

    .cart-desktop-popup .cart-desktop__close {
        background: #ff5c01;
        color: #fff;
        border: none;
        outline: none;
        font-size: 14px;
        font-family: Arial;
        height: 30px;
        width: 30px;
        padding: 0;
        position: absolute;
        right: 0;
        top: 0;
        line-height: 30px;
        text-align: center;
        cursor: pointer;
        z-index: 9;
    }

    .cart-desktop-popup .cart-desktop__title {
        font-size: 18px;
        font-weight: normal;
        line-height: 31px;
    }

    .cart-desktop-popup .cart-desktop__title a {
        color: #252525;
    }

    .cart-desktop-popup .cart-desktop__title i {
        vertical-align: top;
        font-size: 26px;
    }

    .cart-desktop-popup .cart-desktop__status {
        padding: 5px 10px;
        background: #d2eab1;
        border: 1px solid #90c24d;
        color: #090;
        margin-top: 5px;
    }

    .cart-desktop-popup .cart-desktop__status a {
        color: #090;
        text-decoration: underline;
    }

    .modal-body {
        position: relative;
        padding: 20px;
    }

    .cart-desktop-popup .cart-desktop__thead {
        float: left;
        width: 100%;
        clear: both;
        border: 1px solid #ebebeb;
        border-bottom: none;
    }

    .cart-desktop-popup .cart-desktop__thead > div:first-child {
        border-left: none;
    }

    .cart-desktop-popup .cart-desktop__thead .cart-desktop__col-1, .cart-desktop-popup .cart-desktop__thead .cart-desktop__col-2, .cart-desktop-popup .cart-desktop__thead .cart-desktop__col-3, .cart-desktop-popup .cart-desktop__thead .cart-desktop__col-4 {
        width: 55%;
        text-align: left;
        background: #f7f7f7;
        padding: 6px 10px;
        text-transform: uppercase;
        font-size: 13px;
        float: left;
        border-left: 2px solid #fff;
    }

    .cart-desktop-popup .cart-desktop__thead .cart-desktop__col-2 {
        text-align: right;
    }

    .cart-desktop-popup .cart-desktop__thead .cart-desktop__col-3 {
        text-align: center;
    }

    .cart-desktop-popup .cart-desktop__thead .cart-desktop__col-4 {
        text-align: center;
    }

    .cart-desktop-popup .cart-desktop__tbody {
        max-height: 248px;
        overflow: auto;
        border: 1px solid #ebebeb;
        border-top: none;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item {
        width: 100%;
        float: left;
        clear: both;
        border-bottom: 1px dotted #ddd;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item > div:first-child {
        border-left: none;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-desktop__col-1, .cart-desktop-popup .cart-desktop__tbody .cart-desktop__col-2, .cart-desktop-popup .cart-desktop__tbody .cart-desktop__col-3, .cart-desktop-popup .cart-desktop__tbody .cart-desktop__col-4 {
        width: 55%;
        float: left;
        text-align: left;
        border-left: 2px solid #fff;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item-image {
        padding: 10px;
        float: left;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item-info {
        padding: 10px 0;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item-image img {
        border: 1px solid #d2d2d2;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item-variant__title {
        font-size: 13px;
        margin-bottom: 5px;
        color: #252525;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item-remove a {
        font-size: 13px;
        color: #2397d3;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-desktop__col-2 {
        text-align: right;
    }

    .cart-desktop-popup .modal-body .cart-desktop__col-2,
    .cart-desktop-popup .modal-body .cart-desktop__col-3,
    .cart-desktop-popup .modal-body .cart-desktop__col-4 {
        width: 15%;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item-price {
        padding: 10px;
        display: block;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item-price__price {
        color: #252525;
        font-size: 12px;
        font-weight: 500;
        font-family: "Roboto";
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-desktop__col-3 {
        text-align: center;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item .items-count {
        border: 1px solid #ddd;
        outline: none;
        background: #fff;
        height: 24px;
        margin-top: 10px;
        width: 23px;
        text-align: center;
        vertical-align: top;
        padding: 0;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item .number-sidebar {
        border: 1px solid #ddd;
        height: 24px;
        margin-left: -1px;
        text-align: center;
        width: 24px;
        vertical-align: top;
        margin-right: -1px;
        margin-top: 10px;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item .items-count {
        border: 1px solid #ddd;
        outline: none;
        background: #fff;
        height: 24px;
        margin-top: 10px;
        width: 23px;
        text-align: center;
        vertical-align: top;
        padding: 0;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-desktop__col-4 {
        text-align: center;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item-price {
        padding: 10px;
        display: block;
    }

    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item-price__price {
        color: #252525;
        font-size: 12px;
        font-weight: 500;
        font-family: "Roboto";
    }

    .modal-dialog {
        background: #fff;
        width: 750px;
        margin: 0 auto;
        text-align: left;
        vertical-align: middle;
        position: relative;
        font-size: 14px;
    }
    .cart-desktop-popup .cart-desktop__tbody .cart-popup__item-name a {
        margin-bottom: 5px;
        font-weight: bold;
        color: #252525;
        font-size: 13px;
    }
    .cart-desktop-popup .cart-desktop__tfooter-total {
        float: right;
        padding: 18px 0px 10px 0px;
        font-size: 16px;
        text-transform: uppercase;
        font-weight: bold;
        color: #252525;
        font-family: "Roboto";
    }
    .cart-desktop-popup .cart-desktop__tfooter-continue, .cart-desktop-popup .cart-desktop__tfooter-checkout {
        float: left;
        background: #ff5c01;
        color: #fff;
        padding: 5px 10px;
        font-size: 15px;
        font-family: "Roboto";
        cursor: pointer;
    }
    .cart-desktop-popup .cart-desktop__tfooter-checkout {
        float: right;
    }
</style>