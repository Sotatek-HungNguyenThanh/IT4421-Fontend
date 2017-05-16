@extends('admin.layout')

@section('script')
    <script type="text/javascript" src="/js/plugins/summernote/summernote.js"></script>
    <script type="text/javascript" src="{{url('js/angular/admin/ProductDetailsController.js')}}"></script>
    <link rel="stylesheet" type="text/css" id="theme" href="/css/admin/add-product.css"/>
    <script>
        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                var name = new Date().getTime();
                listImages.push({name: name, file:input.files[0]});
                if(listImages.length >  0){
                    $("#image_default").hide();
                }
                reader.onload = function (e) {
                    $("#list_images").append("<div style='position: relative; display: inline-block;margin-right: 10px'><img style='position: absolute; top: -13px; right: -13px;' onclick='removeImage(this)' height='31' src='/images/close_red.png'/><img class='item-image' src=\"" +e.target.result + "\"height=\"100\" name='"+ name +"'/></div> ")
                };

                reader.readAsDataURL(input.files[0]);
            }
            $(input).val("");
        }

        function removeImage(image) {
            var parent = $(image).parent();
            listImages = _.filter(listImages, function (image) {
                return image.name != parent.find(".item-image").attr("name");
            });
            parent.remove();
            if(listImages.length ==  0){
                $("#image_default").show();
            }
        }
        $(document).ready(function(){
            listImages = [];
            $("#imgInp").change(function(){
                readURL(this);
            });
            $("#btn-choose-file").click(function(){
                $("#imgInp").click();
            });
        });

    </script>
    <style type="text/css">
        .save-product{
            text-align: right;
        }
        .input-choose-file{
            display: block !important;
            opacity: 0 !important;
            overflow: hidden !important;
            width: 100px
        }
        .btn-choose-file{
            width: 100px;
            position: relative;
            cursor: pointer;
        }
        .btn-choose-file span{
            position: absolute;
            top: 0px;
            padding: 5px;
            color: black;
            border: 1px solid black;
            border-radius: 4px;
        }
        #list_images{
            width: 100%;
            height: 240px;
            min-height: 240px;
            overflow-x: hidden;
            overflow-y: auto;
            max-height: 230px;
            padding-top: 40px;
        }
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
        .error{
            color: red;
        }
    </style>
@endsection

@section('page_content')
    <div class="row" ng-controller="ProductDetailsController as controller">
        <div class="col-md-12">
            <div class="container-content">
                <div class="container-header">
                    <div class="col-md-12">
                        <div class="row _header-content">
                            <div class="col-md-7" style="padding: 15px;font-size: 16px;">
                                Thông tin sản phẩm
                            </div>
                            <div class="col-md-5">
                                <div class="block" style="margin-bottom: 0px;">
                                    <a href="/admin/manage-products" style="color: black; border-color: #A4A4A4; border-radius: 5px;margin-right: 12px;border: 1px solid #A4A4A4;padding: 11px 46px; text-decoration: none">
                                        Cancel
                                    </a>
                                    <button type="button" class="btn btn-twitter" style="color: white; border-color: #A4A4A4; border-radius: 5px;"
                                            ng-click="controller.updateProduct()">Cập nhật sản phẩm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 20px; margin-top: 40px;">
                    <form action="test" method="post">
                        {{ csrf_field() }}
                        <dl>
                            <dt>Title</dt>
                            <span class="error" ng-show="controller.isNull(controller.title) && controller.statusCreateProduct">Please fill out this field</span>
                            <dd>
                                <input type="text" class="form-control"
                                       name="title" ng-model="controller.title" required/>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                Description
                            </dt>
                            <span class="error" ng-show="(controller.description == '<p><br></p>') && controller.statusCreateProduct">Please fill out this field</span>
                            <dd>
                                <textarea class="summernote" id="summernote" name="description"></textarea>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Supplier</dt>
                            <span class="error" ng-show="controller.isNull(controller.supplier) && controller.statusCreateProduct">Please choose supplier</span>
                            <dd>
                                <select type="text"
                                        class="form-control" ng-model="controller.supplier">
                                    <option value="@{{ supplier }}"
                                            ng-repeat="supplier in controller.listSupplier track by $index">
                                        @{{ supplier.name }}
                                    </option>
                                </select>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                Images
                                <input type='file' id="imgInp" class="input-choose-file" accept="image/*"/>
                            </dt>
                            <dd>
                                <div class="btn-choose-file" id="btn-choose-file" ng-click="controller.uploadImage()">
                                    <span>Upload image</span>
                                </div>
                                <div id="list_images" ng-model="controller.image" style="text-align: left;display: inline-flex;">
                                    {{--<i class="fa fa-picture-o" aria-hidden="true" id="image_default" style="font-size: 140px; height: 185px"></i>--}}
                                    <div ng-repeat="image in controller.listImages" style="display: block;">
                                        <div style='position: relative; display: inline-block;margin-right: 10px'>
                                            <img style='position: absolute; top: -13px; right: -13px;' height='31'
                                                 src='/images/close_red.png' ng-click="controller.removeImage(image)"/>
                                            <img class='item-image' src="@{{ image }}" height="100"/>
                                        </div>
                                    </div>
                                </div>
                            </dd>

                            <span class="error" ng-show="controller.isUpdateImages">Please upload images</span>
                        </dl>
                        <div class="variant">
                            <div class="row">
                                <div class="col-md-10">
                                    <b style="margin-left: -10px;">Variants</b>
                                </div>
                            </div>
                            <div class="row">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Images</th>
                                        <th>Variant</th>
                                        <th>Original Price</th>
                                        <th>Selling Price</th>
                                        <th>Inventory</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody ng-repeat="variant in controller.variants">
                                    <tr>
                                        <td>
                                            <img height="20px" src="@{{ variant.image_url }}"/>
                                        </td>
                                        <td>
                                            <div ng-repeat="properties in variant.properties">
                                                <span style="font-size: 13px;font-weight: 700;">@{{ properties.name }} : @{{properties.value }}</span>
                                                <span ng-if="!$last">x</span>
                                            </div>
                                        </td>
                                        <td><input type="text" input-number ng-model="variant.original_price"></td>
                                        <td><input type="text" input-number ng-model="variant.selling_price"></td>
                                        <td><input type="text" input-number ng-model="variant.inventory"></td>
                                        <td>@{{ variant.status }}</td>
                                        <td>
                                            <div >
                                                <i class="fa fa-plus-circle" aria-hidden="true" style="font-size: 20px;"
                                                   ng-click="controller.removeVariant(variant)"
                                                    ng-show="controller.isDestroy(variant.status)"></i>
                                                <i class="fa fa-power-off" aria-hidden="true" style="font-size: 20px;"
                                                   ng-show="controller.isActive(variant.status)"
                                                   ng-click="controller.removeVariant(variant)"></i>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection