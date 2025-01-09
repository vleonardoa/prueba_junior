<!-- Nombre Field -->
<div class="col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', $tipo->nombre, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Descripcion Field -->
<div class="col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', $tipo->descripcion, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>
