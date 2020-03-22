@extends('core::admin.master')

@section('title', $title)

@section('page-css')
    <link href="{{asset('assets/admin/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@stop

@section('page-js')
    <script src="{{asset('assets/admin/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/pagination.js')}}" type="text/javascript"></script>    
@stop

@section('page-group-title')
    {{trans($module . '::global.group_name')}}
@stop

@section('page-breadcrumbs')
    <span class="kt-subheader__breadcrumbs-separator"></span>
    <a href="javascript:;" class="kt-subheader__breadcrumbs-link">@Lang($module . '::global.name')</a>
@stop

@section('main')
    <div class="kt-portlet kt-portlet--mobile">
        @include('core::admin._porlet-title', ['module' => $module,'type'=>'create','caption'=>'index'])
        <div class="kt-portlet__body">
            <div class="table-scrollable">
                @include('offering::admin._list',['models'=> $models])
            </div>
        </div>
    </div>
@stop