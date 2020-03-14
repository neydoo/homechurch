@if(has_access('offerring.show'))
    {!! edit_btn(route('admin.offerring.show',$id)) !!}
@endif
@if(has_access('offerring.edit'))
    {!! edit_btn(route('admin.offerring.edit',$id)) !!}
@endif
@if(has_access('offerring.destroy'))
    {!! delete_btn(route('admin.offerring.destroy',$id)) !!}
@endif