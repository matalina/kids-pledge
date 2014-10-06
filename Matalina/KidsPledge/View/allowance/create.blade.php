{{ Form::open(['url' => 'allowance']) }}

<label> Category: </label>
{{ Form::input('text','category',Input::old('category')) }}
{{$errors->first('category','<div class="alert danger">:message</div>') }}

<label>Percent:</lable>
{{ Form::input('number','percent',Input::old('percent',NULL),['min' => 1, 'max' => 100]) }}
{{$errors->first('category','<div class="alert danger">:message</div>') }}

{{ Form::submit('Add Allowance') }}

{{ Form::close() }}