@if(has_access('newsletters.show'))
    {!! edit_btn(route('admin.newsletters.show',$id)) !!}
@endif
@if(has_access('newsletters.edit'))
    {!! edit_btn(route('admin.newsletters.edit',$id)) !!}
@endif
@if(has_access('newsletters.destroy'))
    {!! delete_btn(route('admin.newsletters.destroy',$id)) !!}
@endif