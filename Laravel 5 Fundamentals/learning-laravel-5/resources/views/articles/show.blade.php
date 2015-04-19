@extends('app')

@section('content')
	<h1>{{$article->title}}</h1>
	
	<article>
		{{ $article->body }}
	</article>

	@unless ($article->tags->isEmpty())
		<h5>Tags:</h5>
		<ul>
			@foreach ($article->tags as $tag)
				<li>{{ $tag->name }}</li>
			@endforeach
		</ul>
	@endunless
@stop