@extends('core::admin.master')

@section('title', trans($module . '::global.new'))

@section('page-group-title')
    @Lang($module . '::global.group_name')
@stop


@section('main')
    <div class="kt-portlet kt-portlet--mobile">
        @include('core::admin._porlet-title', ['module' => $module,'type'=>'back','caption'=>'new'])
        <div class="kt-portlet__body form">
            @include($module . '::admin._form')
        </div>
    </div>
@stop
@section('page-js')
<script>
    $(function() {
        getSelectOnChange($("#country_id"),'/admin/regions/country/region/', $('#region_id').closest('div'),$('#region_id'),'Region','regions');
        getSelectOnChange($("#region_id"),'/admin/states/region/state/', $('#state_id').closest('div'),$('#state_id'),'State','states');
        getSelectOnChange($("#state_id"),'/admin/districts/state/district/', $('#district_id').closest('div'),$('#district_id'),'District','districts');
        getSelectOnChange($("#district_id"),'/admin/zones/district/zone/', $('#zone_id').closest('div'),$('#zone_id'),'Zone','zones');
        getSelectOnChange($("#zone_id"),'/admin/areas/zone/area/', $('#area_id').closest('div'),$('#area_id'),'Area','areas');
    });
</script>
@endsection