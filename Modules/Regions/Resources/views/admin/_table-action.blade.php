@if(has_access('regions.show'))
    {!! edit_btn(route('admin.regions.show',$id)) !!}
@endif
@if(has_access('regions.edit'))
    {!! edit_btn(route('admin.regions.edit',$id)) !!}
@endif
@if(has_access('regions.destroy'))
    {!! delete_btn(route('admin.regions.destroy',$id)) !!}
@endif