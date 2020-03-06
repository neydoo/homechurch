@if(has_access('announcements.show'))
    {!! edit_btn(route('admin.announcements.show',$id)) !!}
@endif
@if(has_access('announcements.edit'))
    {!! edit_btn(route('admin.announcements.edit',$id)) !!}
@endif
@if(has_access('announcements.destroy'))
    {!! delete_btn(route('admin.announcements.destroy',$id)) !!}
@endif