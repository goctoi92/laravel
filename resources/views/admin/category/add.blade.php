@extends('admin.master')
@section('content')
<?php
$titleForm = "Add Category";
$strRoute = "admin.category.getAdd";
if (isset($data)){
    $titleForm = "Edit Category";
    $strRoute = "admin.category.getEdit";
}
else {
    $id = null;
}

?>
    <div class="card">
        <div class="card-header">
            <strong>{!! $titleForm !!}</strong>
        </div>
        <form action="{{ route($strRoute,["id" => $id])  }}" method="post" class="form-horizontal">
            <input type="hidden" name="token" value="{!!csrf_token()!!}">
            {{ csrf_field() }}
            <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_name" class=" form-control-label">Name</label>
                    </div>
                    <div class="col-12 col-md-11">
                        <input type="text" id="input_name" name="inputName" class="form-control"
                               value="{!! old('inputName',isset($data)?$data['name']:null) !!}">
                        <span class="text-danger">{!! $errors->first('inputName') !!}</span>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_alias" class=" form-control-label">Alias</label>
                    </div>
                    <div class="col-12 col-md-11">
                        <input type="text" id="input_alias" name="inputAlias" class="form-control"
                               value="{!! old('inputAlias',isset($data)?$data['alias']:null) !!}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_order" class=" form-control-label">Order</label>
                    </div>
                    <div class="col-12 col-md-5">
                        <input type="text" id="input_order" name="inputOrder" class="form-control"
                               value="{!! old('inputOrder',isset($data) ? $data['order']:null) !!}">
                    </div>

                    <div class="col col-md-1">
                        <label for="input_parent" class=" form-control-label">Cate Parent</label>
                    </div>
                    <div class="col-12 col-md-5">
                        <select name="inputParent" class="form-control">
                            <option value="0">Select Category Parent</option>
                            <?php
                                if (isset($data))
                                    \Lib\Text::cate_parent($parent,0,"--",$data['parent_id']);
                                else
                                    \Lib\Text::cate_parent($parent);
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_keyword" class=" form-control-label">Keyword</label>
                    </div>
                    <div class="col-12 col-md-11">
                        <input type="text" id="input_keyword" name="inputKeyword" class="form-control"
                               value="{!! old('inputKeyword',isset($data) ? $data['keyword']:null) !!}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-1">
                        <label for="input_description" class=" form-control-label">Description</label>
                    </div>
                    <div class="col-12 col-md-11">
                        <input type="text" id="input_description" name="inputDescription" class="form-control"
                               value="{!! old('inputDescription',isset($data) ? $data['description']:null) !!}">
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