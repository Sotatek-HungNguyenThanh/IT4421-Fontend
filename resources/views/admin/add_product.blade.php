@extends('admin.layout')

@section('page_title')
    <div class="panel-heading" ng-controller="ProductController as controller">
        <div class="row">
            <div class="col-md-8">
               Add Product
            </div>
            <div class="col-md-4">
                <div class="block">
                    <a href="/admin/manage-products" style="color: #58ACFA; border-color: #A4A4A4; border-radius: 5px;">
                        <button type="button" class="btn btn-default">Cancel</button>
                    </a>
                    <button type="button" class="btn btn-twitter" style="color: white; border-color: #A4A4A4; border-radius: 5px;" ng-click="controller.saveProduct()">Save product</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript" src="/js/plugins/summernote/summernote.js"></script>
    <script type="text/javascript" src="{{url('js/angular/admin/ProductController.js')}}"></script>

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
                reader.onload = function (e) {
                    $("#list_images").append("<div style='position: relative; display: inline-block'><img style='position: absolute; top: 0px; right: 0px;border: 1px solid black; background: white' onclick='removeImage(this)' height='20' src='/images/close.png'/><img class='item-image' src=\"" +e.target.result + "\"height=\"100\" name='"+ name +"'/></div> ")
                };

                reader.readAsDataURL(input.files[0]);
            }
            $(input).val("");
        }

        function removeImage(image) {
            var parent = $(image).parent();
            _.without(listImages, parent.find(".item-image").attr("name"));
            parent.remove();
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
        
    </style>
@endsection

@section('page_content')
    <div class="panel panel-default" style="width: 90%; margin-left: 5%;" ng-controller="ProductController as controller">
        <div style="padding: 20px">
            <form action="/test" method="post">
                {{ csrf_field() }}
                <dl>
                    <dt>Title</dt>
                    <dd>
                        <input type="text" class="form-control" name="title" ng-model="controller.title" required/>
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
                        <input type="text" class="form-control" name="supplier" ng-model="controller.supplier" required/>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        Images:
                        <input type='file' id="imgInp" class="input-choose-file" accept="image/*"/>
                    </dt>
                    <dd>
                        <div class="btn-choose-file" id=btn-choose-file>
                            <span>Upload image</span>
                        </div>
                        <div id="list_images" ng-model="controller.image">
                        <img style="display: block; margin-left: auto; margin-right: auto;" src="/images/upload.png">
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>Pricing</dt>
                    <dd>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Original Price</label><br>
                                <input type="text" name="original-price" class="form-control" placeholder="Original Price" ng-model="controller.originalPrice" required>
                            </div>
                            <div class="col-md-6">
                                <label>Selling Price</label><br>
                                <input type="text" name="selling-price" class="form-control" placeholder="Selling Price" ng-model="controller.sellingPrice" required>
                            </div>
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>Inventory</dt>
                    <dd>
                        <input type="number" class="form-control" name="inventory" ng-model="controller.inventory" required/>
                    </dd>
                </dl>
                <div class="variant">
                    <div class="row">
                        <div class="col-md-10">
                            <b style="margin-left: -10px;">Variants</b>
                            <p>Does this product come in multiple variations like size or color?</p>
                        </div>
                        <div class="col-md-2">
                            <div class="block">
                                <button type="button" class="btn btn-twitter" ng-hide="controller.addVariant" style="color: white;" ng-click="controller.addVariants()">Add Variants</button>
                                <button type="button" class="btn btn-default" ng-show="controller.addVariant" style="color: blue;" ng-click="controller.cancelAddVariants()">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <div class="row" ng-show="controller.addVariant">
                        <div class="col-md-2">
                            <label>Option name</label><br>
                            <input type="text" name="option-name" class="form-control" placeholder="Size" required>
                        </div>
                        <div class="col-md-10">
                            <label>Option Values</label><br>
                            <div class="input-option">
                                <div class="value-option">
                                    <input type="text" name="option-value" class="form-control" placeholder="Separate Options With A Comma" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; margin-left: 10px;" ng-show="controller.addVariant">
                        <button type="button" class="btn btn-default" style="color: #58ACFA; border-color: #A4A4A4; border-radius: 5px;" ng-click="controller.addAnotherOption()">Add another Option</button>
                    </div>
                    <div class="row">
                        <table style="margin-top: 50px;">
                            <thead>
                                <th style="width: 200px; text-align: center;"></th>
                                <th style="width: 350px; text-align: center;">Variants</th>
                                <th style="width: 350px; text-align: center;">Original Price</th>
                                <th style="width: 350px; text-align: center;">Selling Price</th>
                                <th style="width: 350px; text-align: center;">Inventory</th>
                            </thead>
                            <tbody style="margin-top: 30px;">
                                <td style="width: 200px; text-align: center;"><input type="checkbox"></td>
                                <td style="width: 350px; text-align: center;"></td>
                                <td style="width: 350px; text-align: center;"><input type="number" name="original-price"></td>
                                <td style="width: 350px; text-align: center;"><input type="number" name="selling-price"></td>
                                <td style="width: 350px; text-align: center;"><input type="number" name="inventory"></td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection