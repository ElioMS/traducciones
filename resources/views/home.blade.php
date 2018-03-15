<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Translatable Web </title>

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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('about') }}">@lang('messages.about') <span class="sr-only">(current)
                        </span></a>
                    </li>

                </ul>
          </div>

        <ul>
            @php
                $languages = config('app.locales');
            @endphp

            <div id="app">
                <lang name="EN" @language="changeLanguage('en')"></lang>
                <lang name="ES" @language="changeLanguage('es')"></lang>
            </div>

        </ul>
        </nav>

        <div class="container">
           {{--  @php
                dump(session('locale'));
                dump(app()->getLocale());
            @endphp --}}

            @yield('content')
        </div>

        <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="/js/lang-bar.js"></script>
    </body>
</html>
