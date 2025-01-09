<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::number('precio', null, ['class' => 'form-control', 'required', 'min' => 0]) !!}
</div>


<!-- Fecha Recepcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_recepcion', 'Fecha Recepción:') !!}
    {!! Form::datetimeLocal('fecha_recepcion', null, ['class' => 'form-control', 'id' => 'fecha_recepcion']) !!}
</div>


@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_recepcion').datepicker()
    </script>
@endpush

<!-- Problema Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('problema', 'Problema:') !!}
    {!! Form::textarea('problema', null, ['class' => 'form-control', 'required', 'maxlength' => 5000, 'maxlength' => 5000]) !!}
</div>

<!-- Fecha Diagnostico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_diagnostico', 'Fecha Diagnostico:') !!}
    {!! Form::datetimeLocal('fecha_diagnostico', null, ['class' => 'form-control','id'=>'fecha_diagnostico']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_diagnostico').datepicker()
    </script>
@endpush

<!-- Diagnostico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    {!! Form::textarea('diagnostico', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Fecha Entrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_entrega', 'Fecha Entrega:') !!}
    {!! Form::datetimeLocal('fecha_entrega', null, ['class' => 'form-control','id'=>'fecha_entrega']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_entrega').datepicker()
    </script>
@endpush

<!-- Solucion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('solucion', 'Solucion:') !!}
    {!! Form::textarea('solucion', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente:') !!}
    {!! Form::select('cliente_id', \App\Models\Cliente::pluck('nombres', 'id'), null, ['class' => 'form-control', 'required', 'placeholder' => 'Seleccione un Cliente']) !!}

</div>

<!-- Equipo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipo_id', 'Equipo:') !!}
    {!! Form::select('equipo_id', \App\Models\Equipo::pluck('numero_serie', 'id'), null, ['class' => 'form-control', 'required', 'placeholder' => 'Seleccione un Equipo']) !!}

</div>

<!-- Estado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_id', 'Estado:') !!}
    {!! Form::select('estado_id', \App\Models\Estado::pluck('nombre', 'id'), null, ['class' => 'form-control', 'required', 'placeholder' => 'Seleccione un Estado']) !!}

</div>
