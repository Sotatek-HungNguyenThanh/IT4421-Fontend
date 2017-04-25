<div id="create-supplier" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-header">
            <h4 class="modal-title">Create Supplier</h4>
        </div>
        <!-- Modal content-->
        <div class="modal-content">
            <div class="content-header">
                <button type="button" class="close" data-dismiss="modal">
                    <img src="https://nholicham.com/image/close-button.png" alt="">
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <dl>
                        <dt>Tên nhà cung cấp</dt>
                        <dd>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" name="name" ng-model="controller.name" class="form-control" placeholder="Supplier's name" required/>
                            </div>
                        </dd>
                    </dl>
                    <dl>
                        <dt>Số điện thoai</dt>
                        <dd>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" name="phone_number" ng-model="controller.phone_number" class="form-control" placeholder="Supplier's telephone" required pattern="[0-9]{10,11}" minlength="10" maxlength="11"/>
                            </div>
                        </dd>
                    </dl>
                    <dl>
                        <dt>Địa chỉ</dt>
                        <dd>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                <input type="text" name="address" ng-model="controller.address" class="form-control" placeholder="Supplier's address" required/>
                            </div>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            Ghi chú
                        </dt>
                        <dd>
                            <textarea name="description" rows="5" class="form-control" ng-model="controller.description" required></textarea>
                        </dd>
                        <div style="margin: 10px 0px">
                            <button class="btn btn-primary pull-right"
                                    ng-click="controller.createSupplier()">Submit
                            </button>
                            <button class="btn btn-primary pull-right" data-dismiss="modal"
                                    style="margin-right: 5px"
                                    ng-click="controller.cancelCreateSupplier()">Close
                            </button>
                        </div>
                    </dl>
                </form>
            </div>
        </div>
    </div>
</div>
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