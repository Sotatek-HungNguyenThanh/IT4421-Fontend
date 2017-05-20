<div class="menu__cart" ng-controller="CartShortcutController as controller">
    <a href="/cart">
        <span class="hidden-xs hidden-sm">Giỏ hàng</span>
        <span>
            <span class="count">@{{ controller.quantityProduct }}</span>
            <span class="hidden-xs  hidden-sm">sản phẩm</span>
        </span>
    </a>
    <div class="cart-droplist hidden-xs">
        <div class="cart-droplist__content arrow_box">
            <div class="cart-droplist__status"><i class="fa fa-check" aria-hidden="true"></i> <span
                        class="cart-counter-list">@{{ controller.quantityProduct }}</span> Sản phẩm trong giỏ hàng
            </div>
            <div id="cart-sidebar" class="mini-list">
                <ul class="list-item-cart">
                    <li class="item" ng-repeat="variant in controller.listVariants">
                        <a class="product-image">
                            <img ng-src="@{{ variant.image }}" width="80"></a>
                        <div class="detail-item">
                            <div class="product-details">
                                <a href="javascript:void(0)" class="remove-item-cart fa fa-trash-o" ng-click="controller.removeVariant(variant)"></a>
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
                                <span class="price">@{{ variant.total | number }}₫</span>
                                <div class="quantity-select">
                                    <button class="reduced items-count btn-minus"
                                            type="button" ng-click="controller.minusVariant(variant)">–
                                    </button>
                                    <input type="text" maxlength="2" min="0"
                                           class="input-text number-sidebar" name="Lines"
                                           size="2" value="1" ng-model="variant.quantity">
                                    <button class="increase items-count btn-plus" type="button"
                                            ng-click="controller.plusVariant(variant)">+</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="top-subtotal">Tổng cộng: <span class="price total-price">@{{ controller.totalPriceOrder | number }}₫</span></div>
                <div class="actions">
                    <button class="btn-checkout" type="button"
                            aria-label="Đặt hàng"
                            onclick="window.location.href='/checkout'">
                        <span>Tiến hành đặt hàng</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cart-droplist hidden-xs">
    <div style="display: none;" class="cart-droplist__content arrow_box">
        <div class="cart-droplist__status"><i class="fa fa-check" aria-hidden="true"></i> <span
                    class="cart-counter-list">2</span> Sản phẩm trong giỏ hàng
        </div>
        <div id="cart-sidebar" class="mini-list">
            <ul class="list-item-cart">
                <li class="item" ng-repeat="variant in controller.listVariants">
                    <a class="product-image">
                        <img ng-src="@{{ variant.image }}" width="80"></a>
                    <div class="detail-item">
                        <div class="product-details">
                            <a href="javascript:void(0)" class="remove-item-cart fa fa-trash-o" ng-click="controller.removeVariant(variant)"></a>
                            <p class="product-name">
                                <a href="javascript:void(0)">@{{ variant.product.title }}</a>
                            </p>
                        </div>
                        <div class="product-details-bottom">
                            <span class="price">@{{ variant.total }}₫</span>
                            <div class="quantity-select">
                                <button class="reduced items-count btn-minus" type="button"
                                        ng-click="controller.minusVariant(variant)">–</button>
                                <input type="text" maxlength="2" min="0"
                                       class="input-text number-sidebar"
                                       name="Lines" size="2" value="1"
                                        ng-model="variant.quantity">
                                <button class="increase items-count btn-plus" type="button"
                                        ng-click="controller.plusVariant(variant)">+</button>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="top-subtotal">
                Tổng cộng:<span class="price total-price">@{{ controller.totalPriceOrder | number }}₫</span>
            </div>
            <div class="actions">
                <button class="btn-checkout" type="button"
                        aria-label="Đặt hàng"
                        onclick="window.location.href='/checkout'">
                    <span>Tiến hành đặt hàng</span>
                </button>
            </div>
        </div>
    </div>
</div>