@if(has_access('district.show'))
    {!! edit_btn(route('admin.district.show',$id)) !!}
@endif
@if(has_access('district.edit'))
    {!! edit_btn(route('admin.district.edit',$id)) !!}
@endif
@if(has_access('district.destroy'))
    {!! delete_btn(route('admin.district.destroy',$id)) !!}
@endif