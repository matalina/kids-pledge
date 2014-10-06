<p><a href="{{ url('allowance/create') }}">New Allowance</a></p>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Percent</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($allowance as $a)
        <tr>
            <td>{{ $a->category }}</td>
            <td>{{ $a->percent }} %</td>
            <td>
                <a href="{{ url('allowance/'.$a->id.'/edit') }}">Edit</a>
                {{ Form::open(['url' => 'allowance/'.$a->id, 'method' => 'DELETE']) }}
                {{ Form::submit('Delete') }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>