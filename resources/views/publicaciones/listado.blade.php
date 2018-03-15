@extends('main')

@section('content')

	<table class="table table-hover">
		<thead>
			<th> Título </th>
			<th> Fecha </th>
		</thead>

		<tbody>
			@foreach ($posts as $post)
				<tr>
					<td> <a href="{{ route('post.detail', ['slug' => $post->slug]) }}"> {{ $post->titulo }} </a> </td>
					<td> {{ $post->created_at }} </td>
				</tr>
			@endforeach
		</tbody>
	</table>

@endsection