<table class="table table-striped table-hover table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Role</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
        @foreach($models as $item)
            <tr>
                <td>{{ $item['first_name'] .' '. $item['last_name'] }} </td>
                <td>{{ $item->roles[0]['name'] }} </td>
                <td>{{ date('D d M Y',strtotime($item->created_at)) }} </td>
            </tr>
        @endforeach
    </tbody>
</table>