@if(has_access('homechurch.show'))
    {!! edit_btn(route('admin.homechurch.show',$id)) !!}
@endif
@if(has_access('homechurch.edit'))
    {!! edit_btn(route('admin.homechurch.edit',$id)) !!}
@endif
@if(has_access('homechurch.destroy'))
    {!! delete_btn(route('admin.homechurch.destroy',$id)) !!}
@endif