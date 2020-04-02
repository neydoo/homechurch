@section('page-breadcrumbs')
    <span class="kt-subheader__breadcrumbs-separator"></span>
    <a href="javascript:;" class="kt-subheader__breadcrumbs-link">@Lang($module . '::global.name')</a>
@stop
@if(!empty(current_user()->churchtype))
    {!!generate_datatable(config($module.'.hth'))!!}
@else
    {!!generate_datatable(config($module.'.th'))!!}
@endif
