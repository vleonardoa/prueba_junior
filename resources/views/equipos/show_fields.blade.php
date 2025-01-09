<!-- Numero Serie Field -->
<div class="col-sm-6">
    {!! Form::label('numero_serie', 'Número Serie:') !!}
    {!! Form::text('numero_serie', $equipo->numero_serie, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Imei Field -->
<div class="col-sm-6">
    {!! Form::label('imei', 'Imei:') !!}
    {!! Form::text('imei', $equipo->imei, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Modelo Id Field -->
<div class="col-sm-6">
    {!! Form::label('modelo_id', 'Modelo Id:') !!}
    {!! Form::text('modelo_id', $equipo->modelo->nombre, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Marca Id Field -->
<div class="col-sm-6">
    {!! Form::label('marca_id', 'Marca Id:') !!}
    {!! Form::text('marca_id', $equipo->marca->nombre, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Tipo Id Field -->
<div class="col-sm-6">
    {!! Form::label('tipo_id', 'Tipo Id:') !!}
    {!! Form::text('tipo_id', $equipo->tipo->nombre, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>
