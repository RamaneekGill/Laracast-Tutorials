@extends('app')

@section('content')
	<h1>Write a New Article</h1>
	<hr>

	{!! Form::open(['url' => 'articles']) !!}
	
		<div class="form-group">
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

	
		<div class="form-group">
			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
		</div>


		<div class="form-group">
			{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-fontrol']) !!}
		</div>

	{!! Form::close() !!}

@stop