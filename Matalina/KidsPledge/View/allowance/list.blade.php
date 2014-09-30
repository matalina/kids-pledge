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
                {{ Form::open(['url' => 'allowance/'.$a->id, 'action' => 'delete']) }}
                {{ Form::submit('Delete') }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>