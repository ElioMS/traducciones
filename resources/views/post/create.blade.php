@extends('main')

@section('content')
	<h2> Editar publicación </h2>
	<a href="{{ route('posts.index') }}" class="btn btn-lg btn-info"> REGRESAR AL LISTADO </a>
	<hr>
	{!! Form::open(['route' => 'posts.store', 'method' => 'POST']) !!}
		@include('post.form')
		<input type="submit" class="btn btn-lg btn-success" value="REGISTRAR">
	{!! Form::close() !!}


@endsection