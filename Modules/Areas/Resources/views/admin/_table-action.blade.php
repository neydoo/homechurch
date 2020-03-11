@if(has_access('areas.show'))
    {!! edit_btn(route('admin.areas.show',$id)) !!}
@endif
@if(has_access('areas.edit'))
    {!! edit_btn(route('admin.areas.edit',$id)) !!}
@endif
@if(has_access('areas.destroy'))
    {!! delete_btn(route('admin.areas.destroy',$id)) !!}
@endif