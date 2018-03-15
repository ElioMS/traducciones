@extends('main')

@section('content')
	<h2> Editar publicación </h2>
	<hr>
	{!! Form::model($post, ['route' => ['posts.update', $post->id] , 'method' => 'PUT'] ) !!}
		@include('post.form')
		<input type="submit" value="EDITAR" class="btn btn-lg btn-success">
		<a href="{{ route('posts.index') }}" class="btn btn-lg btn-info"> REGRESAR AL LISTADO </a>
	{!! Form::close() !!}
@endsection

