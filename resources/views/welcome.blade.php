<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        </head>

    <body>

        <div class="container">
            <div id="app">
                <lang name="EN" @language="changeLanguage('en')"></lang>
                <lang name="ES" @language="changeLanguage('es')"></lang>
            </div>

            <table class="table is-bordered">
                <thead>
                    <th> Nombre </th>
                    {{-- <th> E-mail</th> --}}
                </thead>
                {{-- <tbody>
                    @foreach ($posts as $element)
                         <tr>
                            <td> <a href="{{ route('post.detail', ['slug' => $element->slug]) }}"> {{ $element->titulo }} </a>  </td>
                        </tr>
                    @endforeach
                </tbody> --}}
            </table>
        </div>

        <script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="/js/lang-bar.js"></script>

    </body>

</html>
