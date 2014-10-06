<p><a href="{{ url('money/create') }}">New Money</a></p>
<table>
    <thead>
        <tr>
            <th>For</th>
            <th>Debit</th>
            <th>Credit</th>
            <th>Added by</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($money as $a)
        <tr>
            <td>{{ $a->user->username }}</td>
            <td>
            @if($a->debit_credit) 
                ${{ number_format($a->amount,2) }}
            @endif
            </td>
            <td>
            @if(!$a->debit_credit) 
                ${{ number_format($a->amount,2) }}
            @endif
            </td>
            <td>{{ $a->user->addedBy->username }}
            <td>
                <a href="{{ url('money/'.$a->id.'/edit') }}">Edit</a>
                {{ Form::open(['url' => 'money/'.$a->id, 'method' => 'DELETE']) }}
                {{ Form::submit('Delete') }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>