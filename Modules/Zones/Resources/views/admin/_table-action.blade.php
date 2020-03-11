@if(has_access('zones.show'))
    {!! edit_btn(route('admin.zones.show',$id)) !!}
@endif
@if(has_access('zones.edit'))
    {!! edit_btn(route('admin.zones.edit',$id)) !!}
@endif
@if(has_access('zones.destroy'))
    {!! delete_btn(route('admin.zones.destroy',$id)) !!}
@endif