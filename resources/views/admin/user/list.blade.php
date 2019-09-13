@extends('admin.master')
@section('content')


    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-right">
                <a href="{!! route('admin.category.getAdd') !!}"
                   class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="fa fa-plus"></i>add item</a>

                <a class="au-btn au-btn-icon au-btn--dark au-btn--small">
                    <i class="fa fa-expand"></i>Export</a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                <tr>
                    <th>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </th>
                    <th>name</th>
                    <th>email</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody>
                <tr class="tr-shadow">
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td class="desc">Name</td>
                    <td>
                        email@gmail.com
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <a href="{!! \Illuminate\Support\Facades\URL::route('admin.user.getEdit',1) !!}"
                               class="item" title="Edit--{!! 1 !!}" data-original-title="Edit">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                            <a  href="{!!  \Illuminate\Support\Facades\URL::route('admin.user.getDelete',1)  !!}"
                                class="item item-delete" title="Delete--{!! 1 !!}" data-original-title="Delete">
                                <i class="fa fa-remove"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>

                </tbody>

            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>


@stop