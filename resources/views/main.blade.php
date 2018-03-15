<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Translatable Admin </title>

        <style type="text/css">
            .active {
                color: red;
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    {{-- <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li> --}}

                </ul>
          </div>

        <ul>
            @php
                $languages = config('app.locales');
            @endphp

            @foreach ($languages as $lang => $el)
                <li  style="display: inline;"> <a class="{{ app()->getLocale() == $lang ?  'active' : '' }}" href="{{ route('config.language', ['lang' => $lang]) }}">{{ $el }} </a> </li> {{ !$loop->last ? '|' : ''}}
            @endforeach

        </ul>
        </nav>

        <div class="container">
           {{--  @php
                dump(session('locale'));
                dump(app()->getLocale());
            @endphp --}}

            @yield('content')
        </div>
    </body>
</html>
