@extends('main')

@section('content')
	<a href="{{ route('posts.create') }}" class="btn btn-outline-primary"> CREAR POST </a><br><br>
	<table class="table table-hover">
		<thead>
			<th> Título </th>
			<th> Fecha </th>
			<th> Accciones </th>
		</thead>

		<tbody>
			@foreach ($posts as $post)
				<tr>
					<td> {{ $post->titulo }} </td>
					<td> {{ $post->created_at }} </td>
					<td> <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn btn-primary"> Editar </a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection