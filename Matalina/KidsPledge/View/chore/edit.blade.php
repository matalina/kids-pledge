{{ Form::open(['url' => 'chore/'.$chore->id, 'method' => 'PUT']) }}

<label> Chore: </label>
{{ Form::input('text','chore', Input::old('chore', $chore->chore)) }}
{{$errors->first('chore','<div class="alert danger">:message</div>') }}

<label>Points:</label>
{{ Form::input('number', 'points', Input::old('points', $chore->points), ['min' => 0, 'max' => 10000]) }}
{{$errors->first('points','<div class="alert danger">:message</div>') }}

{{ Form::submit('Update Chore') }}

{{ Form::close() }}