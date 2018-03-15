<div class="form-group">
    <label class="label"> Title </label>
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label class="label"> Description </label>
    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => 4]) !!}
</div>

<div class="form-group">
    <label class="label"> Imagen </label>
    {!! Form::text('imagen', null, ['class' => 'form-control']) !!}
</div>