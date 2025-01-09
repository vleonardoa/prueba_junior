<!-- Nombres Field -->
<div class="col-sm-6">
    {!! Form::label('nombres', 'Nombres:') !!}
    {!! Form::text('nombres', $cliente->nombres, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Apellidos Field -->
<div class="col-sm-6">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', $cliente->apellidos, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Cui Field -->
<div class="col-sm-6">
    {!! Form::label('cui', 'Cui:') !!}
    {!! Form::text('cui', $cliente->cui, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Telefono Field -->
<div class="col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', $cliente->telefono, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>

<!-- Direccion Field -->
<div class="col-sm-6">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', $cliente->direccion, ['class' => 'form-control', 'readonly', 'disabled']) !!}
</div>
