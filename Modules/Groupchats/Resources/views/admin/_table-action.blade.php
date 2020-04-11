@if(has_access('groupchats.show'))
    {!! edit_btn(route('admin.groupchats.show',$id)) !!}
@endif
@if(has_access('groupchats.edit'))
    {!! edit_btn(route('admin.groupchats.edit',$id)) !!}
@endif
@if(has_access('groupchats.destroy'))
    {!! delete_btn(route('admin.groupchats.destroy',$id)) !!}
@endif
{{-- @if(has_access('offering.index'))
    {!! view_btn(route('admin.offering.index'),'view') !!}
@endif --}}