@if(has_access('districts.show'))
    {!! edit_btn(route('admin.districts.show',$id)) !!}
@endif
@if(has_access('districts.edit'))
    {!! edit_btn(route('admin.districts.edit',$id)) !!}
@endif
@if(has_access('districts.destroy'))
    {!! delete_btn(route('admin.districts.destroy',$id)) !!}
@endif