@extends('admin.layout')

@section('script')
    <script type="text/javascript" src="/js/plugins/summernote/summernote.js"></script>
    <script type="text/javascript" src="{{url('js/angular/admin/ProductController.js')}}"></script>
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
            console.log(listImages.length);
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
    </style>
@endsection

@section('page_content')
    <div class="row" ng-controller="ProductController as controller">
        <div class="col-md-12">
            <div class="container-content">
                <div class="container-header">
                    <div class="col-md-12">
                        <div class="row _header-content">
                            <div class="col-md-8" style="padding: 15px;font-size: 16px;">
                                Thêm sản phẩm mới
                            </div>
                            <div class="col-md-4">
                                <div class="block" style="margin-bottom: 0px;">
                                    <a href="/admin/manage-products" style="color: black; border-color: #A4A4A4; border-radius: 5px;margin-right: 12px;border: 1px solid #A4A4A4;padding: 11px 46px; text-decoration: none">
                                       Cancel
                                    </a>
                                    <button type="button" class="btn btn-twitter" style="color: white; border-color: #A4A4A4; border-radius: 5px;"
                                            ng-click="controller.saveProduct()">Save product</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding: 20px; margin-top: 40px;">
                    <form>
                        {{ csrf_field() }}
                        <dl>
                            <dt>Title</dt>
                            <dd>
                                <input type="text" class="form-control"
                                       name="title" ng-model="controller.title" required/>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                Description
                            </dt>
                            <dd>
                <textarea class="summernote" name="xxx" ng-model="controller.description">
                </textarea>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Supplier</dt>
                            <dd>
                                <input type="text" class="form-control" name="supplier"
                                       ng-model="controller.supplier" required/>
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
                                <div id="list_images" ng-model="controller.image" style="text-align: left">
                                    {{--<img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload.png">--}}
                                    <i class="fa fa-picture-o" aria-hidden="true" id="image_default" style="font-size: 140px; height: 185px"></i>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dd>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Original Price</label><br>
                                        <input type="text" input-number name="original-price"
                                               class="form-control" placeholder="Original Price"
                                               ng-model="controller.originalPrice" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Selling Price</label><br>
                                        <input type="text" input-number name="selling-price"
                                               class="form-control" placeholder="Selling Price"
                                               ng-model="controller.sellingPrice" required>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>Inventory</dt>
                            <dd>
                                <input type="number" class="form-control" name="inventory"
                                       ng-model="controller.inventory" required/>
                            </dd>
                        </dl>
                        <div class="variant">
                            <div class="row">
                                <div class="col-md-10">
                                    <b style="margin-left: -10px;">Variants</b>
                                    <p>Does this product come in multiple variations like size or color?</p>
                                </div>
                            </div>
                            <div class="row"
                                 ng-repeat="option in controller.options track by $index">
                                <div class="col-md-2">
                                    <label ng-show="$index == 0 ">Option name</label><br>
                                    <input type="text" name="option-name" class="form-control"
                                           placeholder="Add..." required
                                           ng-model="option.name" ng-blur="controller.setValidOption(option)"
                                        ng-keyup = "$event.keyCode == 13 ? controller.setValidOption(option) : null"}}>
                                </div>
                                <div class="col-md-10">
                                    <label ng-show="$index == 0 ">Option Values</label><br>
                                    <div class="list-value-option">
                                        <div style="display: inline-flex">
                                            <div class="value-option">
                                                <div class="item-option" ng-repeat="variant in option.variants track by $index">
                                                    @{{ variant.name }}
                                                    <i class="fa fa-times" aria-hidden="true"
                                                       style="cursor: pointer" ng-click="controller.removeVariant(option, variant)"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="option-value"
                                                   ng-model="option.input_variant"
                                                   ng-keyup="$event.keyCode == 13 ? controller.addVariant(option) : null"
                                                   placeholder="Add..." required
                                                   ng-disabled="controller.isNull(option.name)">
                                            <i class="fa fa-trash-o" aria-hidden="true"
                                               ng-click="controller.removeOption(option)"
                                               style="position: absolute;left: 98%;font-size: 30px;margin-top: 4px;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" id="visibilityFormAddVariants" ng-model="controller.visibilityFormAddVariants"
                                       ng-click="controller.showFromAddVariants()"> <label for="visibilityFormAddVariants">This is product has multiple options</label>
                            </div>
                            <div class="row" style="margin-top: 20px; margin-left: 10px;" ng-show="controller.visibilityFormAddVariants">
                                <button type="button" class="btn btn-default" style="color: #58ACFA; border-color: #A4A4A4; border-radius: 5px;"
                                        ng-click="controller.addRowOption()">Add another Option</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection