<!-- Nombre Field -->
<div class="col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', $modelo->nombre, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Descripcion Field -->
<div class="col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', $modelo->descripcion, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Marca Id Field -->
<div class="col-sm-6">
    {!! Form::label('marca_id', 'Marca Id:') !!}
    {!! Form::text('marca_id', $modelo->marca_id, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>
