{{ Form::open(['url' => 'chore']) }}

<label> Chore: </label>
{{ Form::input('text','chore',Input::old('chore')) }}
{{$errors->first('chore','<div class="alert danger">:message</div>') }}

<label>Points:</label>
{{ Form::input('number','points',Input::old('points',NULL),['min' => 0, 'max' => 10000]) }}
{{$errors->first('points','<div class="alert danger">:message</div>') }}

{{ Form::submit('Add Chore') }}

{{ Form::close() }}