<!-- Nombre Field -->
<div class="col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', $estado->nombre, ['class' => 'form-control', 'readonly']) !!}
</div>

<!-- Descripcion Field -->
<div class="col-sm-6">
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::text('descripcion', $estado->descripcion, ['class' => 'form-control', 'readonly']) !!}
</div>
