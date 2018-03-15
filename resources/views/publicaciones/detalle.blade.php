@extends('main')

@section('content')


	<div class="card">
		<div class="card-header"> {{ $post->titulo }} </div>
		<div class="card-body">
			{{ $post->descripcion }}
		</div>
	</div>



@endsection