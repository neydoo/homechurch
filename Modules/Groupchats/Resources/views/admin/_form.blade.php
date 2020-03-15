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
<div id="app">
    <create-group :initial-users="{{ $users }}" :churches="{{ $churches }}" :groups="{{ $groups }}"></create-group>
    <hr/>
    <div class="row">
        <div class="col-sm-6">
            <groups :initial-groups="{{ $groups }}" :user="{{ current_user() }}"></groups>
        </div>
    </div>
</div>
@section('page-css')
@endsection
@section('page-js')
<script src="{{asset('js/app.js')}}" type="text/javascript"></script>
@endsection