@if(has_access('homechurches.show'))
    {!! edit_btn(route('admin.homechurches.show',$id)) !!}
@endif
@if(has_access('homechurches.edit'))
    {!! edit_btn(route('admin.homechurches.edit',$id)) !!}
@endif
@if(has_access('homechurches.destroy'))
    {!! delete_btn(route('admin.homechurches.destroy',$id)) !!}
@endif
@if(has_access('offering.index'))
    {!! view_btn(route('admin.offering.index'),'view') !!}
@endif