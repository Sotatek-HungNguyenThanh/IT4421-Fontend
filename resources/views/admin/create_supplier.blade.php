@extends('admin.layout')

@section('title')
    Thêm nhà cung cấp mới
@endsection

@section('script')
    <script type="text/javascript" src="{{url('js/angular/admin/SupplierController.js')}}"></script>
	<style>
		._header-content{
			position: fixed;
			z-index: 2;
			width: calc(100% - 240px);
			border-bottom: 1px solid #dfe6e8;
			background-color: white;
			top: 51px;
			left: 230px
		}
		@media screen and (max-width: 950px) {
			._header-content{
				width: 100%;
				left: 0
			}
		}
		.page-container-wide .content-header-title{
			width: 100% !important;
			left: 53px !important;
			webkit-transition: all 200ms ease;
			-moz-transition: all 200ms ease;
			-ms-transition: all 200ms ease;
			-o-transition: all 200ms ease;
			transition: all 200ms ease;
		}
	</style>
@endsection

@section('page_content')
	<div ng-controller="SupplierController as controller">
	    <div class="row">
	        <div class="col-md-12">
				<div class="container-content">
					<div class="container-header">
						<div class="col-md-12">
							<div class="row _header-content content-header-title">
								<div class="col-md-7" style="padding: 15px;font-size: 16px;">
									Thêm nhà cung cấp mới
								</div>
							</div>
						</div>
					</div>
					<div style="padding: 20px; margin-top: 40px">
						<form>
					<dl>
						<dt>Tên nhà cung cấp</dt>
						<dd>
							<input type="text" name="name" ng-model="controller.name" class="form-control" placeholder="Supplier's name" required/>
						</dd>
					</dl>
					<dl>
						<dt>Số điện thoai</dt>
						<dd>
							<input type="text" name="phone_number" ng-model="controller.phone_number" class="form-control" placeholder="Supplier's telephone" required pattern="[0-9]{10,11}" minlength="10" maxlength="11"/>
						</dd>
					</dl>
					<dl>
						<dt>Địa chỉ</dt>
						<dd>
							<input type="text" name="address" ng-model="controller.address" class="form-control" placeholder="Supplier's address" required/>
						</dd>
					</dl>
					<dl>
						<dt>
							Ghi chú
						</dt>
						<dd>
							<textarea name="description" rows="5" class="form-control" ng-model="controller.description" required></textarea>
						</dd>
						<div style="padding: 10px 0px;">
							<button class="btn btn-primary pull-right"
									ng-click="controller.createSupplier()">Submit
							</button>
							<button class="btn btn-primary pull-right"
									style="margin-right: 5px"
									onclick="window.history.go(-1)">Close
							</button>
						</div>
					</dl>
				</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection