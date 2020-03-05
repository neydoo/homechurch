@if(has_access('partners.show'))
    {!! edit_btn(route('admin.partners.show',$id)) !!}
@endif
@if(has_access('partners.edit'))
    {!! edit_btn(route('admin.partners.edit',$id)) !!}
@endif
@if(has_access('partners.destroy'))
    {!! delete_btn(route('admin.partners.destroy',$id)) !!}
@endif