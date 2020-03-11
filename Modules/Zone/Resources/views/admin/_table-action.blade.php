@if(has_access('zone.show'))
    {!! edit_btn(route('admin.zone.show',$id)) !!}
@endif
@if(has_access('zone.edit'))
    {!! edit_btn(route('admin.zone.edit',$id)) !!}
@endif
@if(has_access('zone.destroy'))
    {!! delete_btn(route('admin.zone.destroy',$id)) !!}
@endif