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
                    <th>parent</th>
                    <th>description</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $item)
                    <tr class="tr-shadow">
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td class="desc">{!! $item["name"] !!}</td>
                        <td>
                            @if($item['parent_id'] == 0)
                                {!! "NONE" !!}
                            @else
                            <?php
                                $nameParent = \Illuminate\Support\Facades\DB::table('categorys')->where('id', $item["parent_id"])->first();
                                echo $nameParent->name;
                            ?>
                            @endif
                        </td>
                        <td>
                            <span class="status--process">{!! $item["description"] !!}</span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <a href="{!! \Illuminate\Support\Facades\URL::route('admin.category.getEdit',$item['id']) !!}"
                                   class="item" title="Edit--{!! $item['id'] !!}" data-original-title="Edit">
                                    <i class="fa fa-pencil-square-o"></i>
                                </a>
                                <a  href="{!!  \Illuminate\Support\Facades\URL::route('admin.category.getDelete',$item['id'])  !!}"
                                   class="item item-delete" title="Delete--{!! $item['id'] !!}" data-original-title="Delete">
                                    <i class="fa fa-remove"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>


@stop