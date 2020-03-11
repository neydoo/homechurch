@if(has_access('church.show'))
    {!! edit_btn(route('admin.church.show',$id)) !!}
@endif
@if(has_access('church.edit'))
    {!! edit_btn(route('admin.church.edit',$id)) !!}
@endif
@if(has_access('church.destroy'))
    {!! delete_btn(route('admin.church.destroy',$id)) !!}
@endif