@extends('admin.layout')


@section('title')
    Change Password
@endsection

@section('page_title')
    Change Password
@endsection

@section('page_content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Change Password</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Password</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                    <input type="password" class="form-control">
                                </div>
                                <span class="help-block">Password field sample</span>
                            </div>
                            <div class="col-md-3 col-xs-12"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">New Password</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                    <input type="password" class="form-control">
                                </div>
                                <span class="help-block">Password field sample</span>
                            </div>
                            <div class="col-md-3 col-xs-12"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label class="col-md-3 col-xs-12 control-label">Repeat New Password</label>
                            <div class="col-md-6 col-xs-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="fa fa-unlock-alt"></span></span>
                                    <input type="password" class="form-control">
                                </div>
                                <span class="help-block">Password field sample</span>
                            </div>
                            <div class="col-md-3 col-xs-12"></div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-default">Clear Form</button>
                    <button class="btn btn-primary pull-right">Submit</button>
                </div>
            </div>

        </div>
    </div>
@endsection
