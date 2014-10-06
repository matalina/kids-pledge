<p><a href="{{ url('chore/create') }}">New Chore</a></p>
<table>
    <thead>
        <tr>
            <th>Chore</th>
            <th>Points</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($chore as $a)
        <tr>
            <td>{{ $a->chore }}</td>
            <td>{{ $a->points }} pts</td>
            <td>
                <a href="{{ url('chore/'.$a->id.'/edit') }}">Edit</a>
                {{ Form::open(['url' => 'chore/'.$a->id, 'method' => 'DELETE']) }}
                {{ Form::submit('Delete') }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>