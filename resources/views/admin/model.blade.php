@extends('admin.layout')


@section('title')
    Model
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
@endsection

@section('page_content')
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <button type="button" class="btn btn-warning"
                        data-toggle="modal" data-target="#message-box-update"
                        data-backdrop="static">Update</button>

            </div>
        </div>
    </div>
    <div id="message-box-update" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-header">
                <h4 class="modal-title">Update</h4>
            </div>
            <!-- Modal content-->
            <div class="modal-content">
                <div class="content-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <img src="https://nholicham.com/image/close-button.png" alt="">
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/test" method="post">
                        {{ csrf_field() }}
                        <dl>
                            <dt>
                                Text
                            </dt>
                            <dd>
                            <textarea class="summernote" name="xxx">
                            </textarea>
                                <div style="margin-top: 2px">
                                    <button class="btn btn-primary pull-right" >Submit</button>
                                    <button class="btn btn-primary pull-right" data-dismiss="modal" style="margin-right: 5px">Close</button>
                                </div>
                            </dd>
                        </dl>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection