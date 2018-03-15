<input type="text" name="locale" value="{{ app()->getLocale() }}">
<div class="form-group">
	<label class="label"> Title </label>
	{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	<label class="label"> Description </label>
	{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => 4]) !!}
</div>

<div class="form-group">
	<label class="label"> Author </label>
	{!! Form::text('autor', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
	<label class="label"> Link </label>
	{!! Form::text('enlace', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	<label class="label"> Textos </label>
	@if(!$post)
		{!! Form::text('textos[]', null , ['class' => 'form-control']) !!}
		<br>
		{!! Form::text('textos[]', null, ['class' => 'form-control']) !!}
	@else
		@php
			dump($post->textos);
		@endphp
		{{-- @foreach ($post->textos as $element)
			{!! Form::text('textos[]', $element , ['class' => 'form-control']) !!}
		@endforeach --}}

	@endif
</div>