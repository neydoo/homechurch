@if(has_access('attendance.show'))
    {!! edit_btn(route('admin.attendance.show',$id)) !!}
@endif
@if(has_access('attendance.edit'))
    {!! edit_btn(route('admin.attendance.edit',$id)) !!}
@endif
@if(has_access('attendance.destroy'))
    {!! delete_btn(route('admin.attendance.destroy',$id)) !!}
@endif