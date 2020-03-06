@if(has_access('groupchat.show'))
    {!! edit_btn(route('admin.groupchat.show',$id)) !!}
@endif
@if(has_access('groupchat.edit'))
    {!! edit_btn(route('admin.groupchat.edit',$id)) !!}
@endif
@if(has_access('groupchat.destroy'))
    {!! delete_btn(route('admin.groupchat.destroy',$id)) !!}
@endif