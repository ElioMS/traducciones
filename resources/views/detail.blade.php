<!DOCTYPE html>
<html>
<head>
	<title> {{ $post->titulo }} </title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
	@php
		$parameters = \Route::getCurrentRoute()->parameters();
		$array_parameters = array();

		foreach ($parameters as $key => $value) {
			array_push($array_parameters, array(
				'name' => $key,
				'value' => $value
			));
		}

		dump($array_parameters);
	@endphp

	<div id="web">
        <web-lang name="EN" @language="usingDynamicRoutes('en')"></web-lang>
        <web-lang name="ES" @language="usingDynamicRoutes('es')"></web-lang>
        <pre>
        	@{{ $data }}
        </pre>
    </div>

	<h2> {{ $post->titulo }} </h2>

	<script src="https://unpkg.com/vue@2.5.13/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    {{-- <script src="/js/lang-bar.js"></script> --}}

    <script type="text/javascript">
    	Vue.component('web-lang', {
			props: ['name', 'action'],
			template: `<button class="btn btn-primary" @click="$emit('language')"> @{{ name }} </button>`,
		});

        var app = new Vue({
		    el: '#web',
		    data: {
		    	currentRouteName: "{{ \Route::currentRouteName() }}",
		    	action: "{{ \Route::currentRouteAction() }}",
		    	slug: "{{ \Request::route('slug') }}",
                parameters: [],
		    },
            mounted() {
                var parameters = [];

                @foreach ($array_parameters as $key => $value)
                    var name = "{{ $value['name'] }}",
                        value = "{{ $value['value'] }}";

                    parameters.push({
                        name  : name,
                        value : value
                    });

                    this.parameters = parameters;
                @endforeach
            },
		    methods: {
		        usingDynamicRoutes: function (language) {
		            axios.post('{{ route("admin.config.dlanguage") }}', {
		                lang: language,
		                routeName: this.currentRouteName,
		                action: this.action,
                        parameters: this.parameters
		            })
		            .then(function (response) {
		            	console.log(response)
		            	window.location = response.data;
		            });
		        },
                generateParameters: function ()
                {

                }
		    }
		});
    </script>
</body>
</html>
