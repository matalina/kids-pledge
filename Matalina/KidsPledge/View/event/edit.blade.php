{{ Form::open(['url' => 'allowance/'.$allowance->id, 'method' => 'PUT']) }}

<label> Category: </label>
{{ Form::input('text','category', Input::old('category, $allowance->category)) }}
{{$errors->first('category','<div class="alert danger">:message</div>') }}

<label>Percent:</label>
{{ Form::input('number', 'percent', Input::old('percent', $allowance->percent), ['min' => 1, 'max' => 100]) }}
{{$errors->first('percent','<div class="alert danger">:message</div>') }}

{{ Form::submit('Update Allowance') }}

{{ Form::close() }}