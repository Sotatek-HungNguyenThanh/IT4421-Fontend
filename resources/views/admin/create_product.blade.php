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
                listImages.push(input.files[0]);
                    reader.onload = function (e) {
                        $("#list_images").append("<img src=\"" +e.target.result + "\"height=\"100\" /> ")
                    }
                
                    reader.readAsDataURL(input.files[0]);
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
        .input-choose-file{
            display: block !important;
            opacity: 0 !important;
            overflow: hidden !important;
            width: 100px
        }
        .btn-choose-file{
            width: 100px;
        }
        .btn-choose-file span{
            position: absolute;
            top: 0px;
            padding: 5px; 
            color: black; 
            border: 1px solid black;
            border-radius: 4px;
        }
    </style>
@endsection

@section('page_content')
<div class="panel panel-default">
    <div class="modal-body">
        <form action="/test" method="post">
            {{ csrf_field() }}
            <dl>
                <dt>Title</dt>
                <dd>
                    <div class="form-group">
                        <div class="col-md-12 col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" class="form-control"/>
                            </div>
                            <span class="help-block">Password field sample</span>
                        </div>
                    </div>
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
        </form>
        <div class="form-group">
            <label class="control-label">Images</label>                            
            <div class="input-group">
                <div class="btn-choose-file" id=btn-choose-file>
                    <span style="">Upload image</span>
                </div>
                <input type='file' id="imgInp" class="input-choose-file" accept="image/*"/>
                    <br>
                    <div id="list_images">
                        
                    </div>
                    
            </div>
        </div>
    </div>
</div>
@endsection