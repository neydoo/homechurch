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
        $("#country_id").change(function(){
            var country_id = $(this).val();
            $.ajax({
                url: "/admin/regions/country/region/"+country_id,
                type: 'get',
                dataType: 'json',
                success:function(response){
                    var len = response.regions.length;
                    console.log(response);
                    $("#region_id").empty();
                    response.regions.forEach((element, index) => {
                        $("#region_id").append("<option value='"+element.id+"'>"+element.name+"</option>");
                    });
                }
            });
        });

        $(".region_id").change(function(){
            var region_id = $(this).val();
            $.ajax({
                url: "{{ URL::route('admin.states.region',"+region_id+") }}",
                type: 'get',
                dataType: 'json',
                success:function(response){
                    var len = response.states.length;
                    $(".state_id").empty();
                    for( var i = 0; i<len; i++){
                        var id = response[i]['id'];
                        var name = response[i]['name'];
                        $(".state_id").append("<option value='${id}'>${name}</option>");

                    }
                }
            });
        });
    });
</script>
@endsection