@extends('admin.master')
@section('content')

    <div class="card">
        <div class="card-header">
            <strong>Add Category</strong>
        </div>
        <form action="{!! route('admin.category.getAdd') !!}" method="post" class="form-horizontal">
            <input type="hidden" name="token" value="{!!csrf_token()!!}">
            {{ csrf_field() }}
            <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_name" class=" form-control-label">Name</label>
                    </div>
                    <div class="col-12 col-md-11">
                        <input type="text" id="input_name" name="inputName" class="form-control">
                        <span class="text-danger">{!! $errors->first('inputName') !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_alias" class=" form-control-label">Alias</label>
                    </div>
                    <div class="col-12 col-md-11">
                        <input type="text" id="input_alias" name="inputAlias" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_alias" class=" form-control-label">Order</label>
                    </div>
                    <div class="col-12 col-md-5">
                        <input type="text" id="input_alias" name="inputOrder" class="form-control">
                    </div>

                    <div class="col col-md-1">
                        <label for="input_alias" class=" form-control-label">Cate Parent</label>
                    </div>
                    <div class="col-12 col-md-5">
                        <input type="text" id="input_alias" name="inputParent" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_keyword" class=" form-control-label">Keyword</label>
                    </div>
                    <div class="col-12 col-md-11">
                        <input type="text" id="input_keyword" name="inputKeyword" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_description" class=" form-control-label">Description</label>
                    </div>
                    <div class="col-12 col-md-11">
                        <input type="text" id="input_description" name="inputDescription" class="form-control">
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