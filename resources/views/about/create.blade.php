@extends('main')

@section('content')
    <h2> Editar publicación </h2>
    <hr>
    @if(isset($about))
        {!! Form::model($about, ['route' => ['about.update', $about->id] , 'method' => 'PUT'] ) !!}
    @else
    {!! Form::open(['route' => 'about.store', 'method' => 'POST']) !!}
    @endif
    @include('about.form')
    <input type="submit" class="btn btn-lg btn-success" value="REGISTRAR">
    {!! Form::close() !!}

    
@endsection