@extends('admin.layout')

@section('page_title')
    Add Product
@endsection

@section('script')
    <script type="text/javascript" src="/js/plugins/summernote/summernote.js"></script>
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
    <div class="panel panel-default">
        <div style="padding: 20px">
            <form action="/test" method="post">
                {{ csrf_field() }}
                <dl>
                    <dt>Title</dt>
                    <dd>
                        <input type="text" class="form-control" name="title" required/>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        Description
                    </dt>
                    <dd>
                <textarea class="summernote" name="xxx">
                </textarea>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        Images:
                        <input type='file' id="imgInp" class="input-choose-file" accept="image/*"/>
                    </dt>
                    <dd>
                        <div class="btn-choose-file" id=btn-choose-file>
                            <span style="">Upload image</span>
                        </div>
                        <div id="list_images">

                        </div>
                    </dd>
                </dl>
            </form>
        </div>
    </div>
@endsection