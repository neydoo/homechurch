{{ Form::open(['route' => 'admin.offering.index', 'method' => 'GET', 'id' => 's-form',])}}
    {{ Form::text('search', null, ['id' => 'search', 'class' => 'col-md-4 form-control pull-right', 'style'=> 'margin-bottom:10px;', 'placeholder' => 'Search For ...']) }}
    {{-- {{ Form::submit('Go') }} --}}
{{ Form::close() }}
<table class="table table-striped table-hover table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Cell Name</th>
        <th> Cash</th>
        <th> Cheque</th>
        <th> Pos</th>
        <th> Amount</th>
        <th> Date</th>
        <th> Week</th>
        <th> Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($models as $offering)
        <tr>
            <td>
                @if(!empty($offering->homechurch))
                    {{ $offering->homechurch->name.' (Physical Cell)' }}
                @else
                    {{ $offering->groupchat->name.' (Online Cell)' }}
                @endif
            </td>
            <td>{{ number_format($offering->cash,2) }} </td>
            <td>{{ number_format($offering->cheques,2) }} </td>
            <td>{{ number_format($offering->pos,2) }} </td>
            <td>{{ number_format($offering->amount,2) }} </td>
            <td>{{ date('D d M Y',strtotime($offering->date)) }} </td>
            <td>{{ date('W',strtotime($offering->date)) }} </td>
            <td>@include('offering::admin._table-action',['id'=> $offering->id])</td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $models->render() }}