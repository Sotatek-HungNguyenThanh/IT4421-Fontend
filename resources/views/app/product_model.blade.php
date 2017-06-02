<div id="productPreview" class="modal fade" role="dialog" ng-controller="ProductModelController as controller" ng-cloack>
	<div class="modal-dialog">
		<button class="product-quickview__close" data-dismiss="modal" ng-click="controller.closeModel()">X</button>
		<div class="modal-content">
			<section class="product clearfix">
				<div id="product__view" class="product__view col-xs-12 clearfix">
					<div class="row">
						<div class="product__view__image col-lg-5 col-md-5 col-sm-6 col-xs-12">
							<div class="product__view__image--list">
								<div class="bx-wrapper" style="max-width: 100%;">
									<div class="bx-viewport">
										<ul class="bxslider1">

											<li>
												<img
													 ng-src="@{{ controller.product.images[0] }}">
											</li>

										</ul>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="product__view__content col-lg-7 col-md-7 col-sm-6 col-xs-12" itemprop="offers">
							<div class="product__view__name">
								<h1><a href="/product/@{{ controller.product.id }}">@{{ controller.product.title }}</a></h1>
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
											 ng-click="controller.addCart()">
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
			</section>
		</div>
	</div>
</div>


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
	.product-quickview .product__view__content .product__view__name h1 a {
		color: #252525;
		display: block;
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
	.product__view__content .product__view__price p {
		display: inline-block;
		font-size: 14px;
		font-family: Arial;
		color: #252525;
	}
	.product__view__content .product__view__price--old .price-label {
		display: none;
	}
	.product__view__content .product__view__price--old .price {
		font-size: 14px;
		font-family: Arial;
		text-decoration: line-through;
		color: #898989;
		vertical-align: text-bottom;
		margin-left: 5px;
	}
	.product__view__content .product__view__price--old .sale-flag {
		font-size: 12px;
		color: #fff;
		font-family: Arial;
		text-decoration: none;
		background: #46a748;
		margin-left: 5px;
		padding: 2px 3px;
		vertical-align: top;
	}
	.product__view__content .product__view__content--short-description {
		font-size: 14px;
		color: #252525;
		font-family: Arial;
		line-height: 22px;
		margin-bottom: 20px;
	}
	.product__view__content .product__view__content--short-description a {
		color: #207fdd;
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
		margin-bottom: 5px;
	}
	.product-quickview .product__view__content--actions .actions-qty #qtyDetail {
		width: 70px;
		margin-right: 7px;
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
	.product__view__content--actions .actions-qty .detail-button.btn-cart {
		width: 170px;
		padding-left: 45px;
	}
	.product-quickview .product__view__content--actions .actions-qty .detail-button {
		width: 170px;
		margin-right: 5px;
	}
	.product__view__content--actions .actions-qty .detail-button i {
		height: 45px;
		width: 45px;
		background: #d94e01;
		line-height: 45px;
		text-align: center;
		font-size: 22px;
		position: absolute;
		left: 0;
		top: 0;
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
	.product__view__content--actions .actions-qty .detail-hotline i {
		height: 45px;
		width: 45px;
		background: #3c9234;
		line-height: 45px;
		text-align: center;
		font-size: 22px;
		position: absolute;
		left: 0;
		top: 0;
	}
	.product-quickview__close {
		background: #ff5c01;
		color: #fff;
		border: none;
		outline: none;
		font-size: 14px;
		font-family: Arial;
		height: 40px;
		width: 40px;
		padding: 0;
		position: absolute;
		right: 0;
		top: 0;
		line-height: 30px;
		text-align: center;
		cursor: pointer;
		z-index: 9;
	}
	.modal-dialog{
		width: 1148px !important;
		margin-top: 5px !important;
	}
	.modal-content{
		padding: 50px 0px;
		border-radius: inherit;
	}
	@media (max-width: 767px){
		.bx-viewport .bxslider1 li{
			text-align: center;
		}
		.product__view__content--actions .actions-qty .detail-button{
			display: block;
		}
	}
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