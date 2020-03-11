@if(has_access('area.show'))
    {!! edit_btn(route('admin.area.show',$id)) !!}
@endif
@if(has_access('area.edit'))
    {!! edit_btn(route('admin.area.edit',$id)) !!}
@endif
@if(has_access('area.destroy'))
    {!! delete_btn(route('admin.area.destroy',$id)) !!}
@endif