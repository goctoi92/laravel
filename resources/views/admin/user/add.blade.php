@extends('admin.master')
@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Add User</strong>
        </div>
        <form action="{!! route('admin.user.getAdd') !!}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_name" class=" form-control-label">Name</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="text" id="input_name" name="inputName" class="form-control">
                        <span class="text-danger">{!! $errors->first('inputName') !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_email" class=" form-control-label">Email</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="email" id="input_email" name="inputEmail" class="form-control">
                        <span class="text-danger">{!! $errors->first('inputEmail') !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_pass" class=" form-control-label">Password</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="password" id="input_pass" name="inputPassword" class="form-control">
                        <span class="text-danger">{!! $errors->first('inputPassword') !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_confirm_pass" class=" form-control-label">Confirm Password</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="password" id="input_confirm_pass" name="inputConfirmPassword" class="form-control">
                        <span class="text-danger">{!! $errors->first('inputConfirmPassword') !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_level" class=" form-control-label">Level</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <select id="input_level" name="inputLevel" class="form-control">
                            <option value="0">Choose Level</option>
                            <option value="1">Admin</option>
                            <option value="2">Guest</option>
                        </select>
                        <span class="text-danger">{!! $errors->first('inputLevel') !!}</span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-upload"></i> Submit
                </button>
            </div>
        </form>
    </div>


@stop