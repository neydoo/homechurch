@if(has_access('offering.show'))
    {!! edit_btn(route('admin.offering.show',$id)) !!}
@endif
@if(has_access('offering.edit'))
    {!! edit_btn(route('admin.offering.edit',$id)) !!}
@endif
@if(has_access('offering.destroy'))
    {!! delete_btn(route('admin.offering.destroy',$id)) !!}
@endif