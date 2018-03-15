@extends('home')

@section('content')


<div class="container">
   <h2> {{ $about->titulo }} </h2>
    <p>
        {{ $about->descripcion }}
    </p>
</div>


@endsection