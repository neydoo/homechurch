@if(has_access('manuals.show'))
    {!! edit_btn(route('admin.manuals.show',$id)) !!}
@endif
@if(has_access('manuals.edit'))
    {!! edit_btn(route('admin.manuals.edit',$id)) !!}
@endif
@if(has_access('manuals.destroy'))
    {!! delete_btn(route('admin.manuals.destroy',$id)) !!}
@endif