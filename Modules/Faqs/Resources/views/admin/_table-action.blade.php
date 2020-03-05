@if(has_access('faqs.show'))
    {!! edit_btn(route('admin.faqs.show',$id)) !!}
@endif
@if(has_access('faqs.edit'))
    {!! edit_btn(route('admin.faqs.edit',$id)) !!}
@endif
@if(has_access('faqs.destroy'))
    {!! delete_btn(route('admin.faqs.destroy',$id)) !!}
@endif