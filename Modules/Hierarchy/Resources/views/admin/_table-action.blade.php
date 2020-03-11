@if(has_access('hierarchy.show'))
    {!! edit_btn(route('admin.hierarchy.show',$id)) !!}
@endif
@if(has_access('hierarchy.edit'))
    {!! edit_btn(route('admin.hierarchy.edit',$id)) !!}
@endif
@if(has_access('hierarchy.destroy'))
    {!! delete_btn(route('admin.hierarchy.destroy',$id)) !!}
@endif