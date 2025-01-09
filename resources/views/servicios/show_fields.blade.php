<!-- Precio Field -->
<div class="col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::text('precio', $servicio->precio, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Fecha Recepcion Field -->
<div class="col-sm-6">
    {!! Form::label('fecha_recepcion', 'Fecha Recepcion:') !!}
    {!! Form::text('fecha_recepcion', $servicio->fecha_recepcion, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Problema Field -->
<div class="col-sm-6">
    {!! Form::label('problema', 'Problema:') !!}
    {!! Form::text('problema', $servicio->problema, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Fecha Diagnostico Field -->
<div class="col-sm-6">
    {!! Form::label('fecha_diagnostico', 'Fecha Diagnostico:') !!}
    {!! Form::text('fecha_diagnostico', $servicio->fecha_diagnostico, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Diagnostico Field -->
<div class="col-sm-6">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    {!! Form::text('diagnostico', $servicio->diagnostico, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Fecha Entrega Field -->
<div class="col-sm-6">
    {!! Form::label('fecha_entrega', 'Fecha Entrega:') !!}
    {!! Form::text('fecha_entrega', $servicio->fecha_entrega, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Solucion Field -->
<div class="col-sm-6">
    {!! Form::label('solucion', 'Solucion:') !!}
    {!! Form::text('solucion', $servicio->solucion, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Cliente Id Field -->
<div class="col-sm-6">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    {!! Form::text('cliente_id', $servicio->cliente->nombres, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- User Id Field -->
<div class="col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', $servicio->user->username, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Equipo Id Field -->
<div class="col-sm-6">
    {!! Form::label('equipo_id', 'Equipo Id:') !!}
    {!! Form::text('equipo_id', $servicio->equipo->imei, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Estado Id Field -->
<div class="col-sm-6">
    {!! Form::label('estado_id', 'Estado Id:') !!}
    {!! Form::text('estado_id', $servicio->estado->nombre, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>
