@section('page-breadcrumbs')
    <span class="kt-subheader__breadcrumbs-separator"></span>
    <a href="{{route("admin.$module.index")}}"
       class="kt-subheader__breadcrumbs-link">@Lang($module . '::global.name')</a>
    <span class="kt-subheader__breadcrumbs-separator"></span>
    <a href="javascript:;" class="kt-subheader__breadcrumbs-link">
        @if(empty($model))
            @Lang($module . '::global.new')
        @else
            @Lang($module . '::global.edit')
        @endif
    </a>
@stop
{!! form_start($form,['id'=>'form-validate']) !!}
@include('core::admin._buttons-form',['top'=>true])
<div class="form-body">
    {!! form_rest($form) !!}
</div>
@include('core::admin._buttons-form')
{!! form_end($form,false) !!}

@section('page-js')
<script src="{{asset('js/utility.js')}}" type="text/javascript"></script>
<script>
    $(function() {
        const church_type = "{{ current_user()->churchtype }}";
        if(church_type){
            $('#type').closest('div').hide();
        }
        
        hideAllExcept(church_type);
        
        $('#type').on('change', function(){
            let type = $(this).val()
            hideAllExcept(type);
        })
    });
</script>
@endsection