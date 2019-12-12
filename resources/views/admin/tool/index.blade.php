@extends('admin.master')
@section('content')

    <div class="row card">
        <div class="card-header">
            <p>Import tin tức từ https://vnexpress.net/rss/the-thao.rss</p>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('admin.tool.indexPost')}}">
                {{ csrf_field() }}
                <div class="form-group row">
                    <div class="col-md-12 mt-2">
                        <input hidden placeholder="source" name="source" type="text" value="1"/>
                        <input class="btn btn-success btn-submit-tool-post" name="submit" type="submit" value="Submit"/>
                        <i class="fa fa-spinner fa-pulse fa-fw icon-loading text-success d-none"></i>
                    </div>
                </div>
            </form>
        </div>

    </div>
@stop