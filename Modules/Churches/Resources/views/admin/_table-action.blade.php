@if(has_access('churches.show'))
    {!! edit_btn(route('admin.churches.show',$id)) !!}
@endif
@if(has_access('churches.edit'))
    {!! edit_btn(route('admin.churches.edit',$id)) !!}
@endif
@if(has_access('churches.destroy'))
    {!! delete_btn(route('admin.churches.destroy',$id)) !!}
@endif