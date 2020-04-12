{{-- {{ Form::open(['route' => 'admin.item.index', 'method' => 'GET', 'id' => 's-form',])}}
    {{ Form::text('search', null, ['id' => 'search', 'class' => 'col-md-4 form-control pull-right', 'style'=> 'margin-bottom:10px;', 'placeholder' => 'Search For ...']) }}
{{ Form::close() }} --}}

<table class="table table-striped table-hover table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Submitted By</th>
        <th> Address</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($models as $item)
        <tr>
            <td>
                {{ $item->name }}
            </td>
            <td>{{ $item->owner['first_name'] .' '. $item->owner['last_name'] }} </td>
            <td>{{ $item->address }} </td>
            <td>{{ date('D d M Y',strtotime($item->created_at)) }} </td>
        </tr>
    @endforeach
    </tbody>
</table>