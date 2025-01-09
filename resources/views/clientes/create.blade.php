@extends('layouts.app')

@section('titulo_pagina', 'Crear Cliente')

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Crear Cliente</h1>
                </div>
                <div class="col ">
                    <a class="btn btn-outline-info float-right"
                       href="{{ route('clientes.index') }}"
                        >
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;
                        <span class="d-none d-sm-inline">Regresar</span>
                    </a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">

                    @include('layouts.partials.request_errors')

                    <div class="card">

                        {!! Form::open(['route' => 'clientes.store','class' => 'esperar']) !!}

                        <div class="card-body">

                            <div class="form-row">

                                @include('clientes.fields')

                            </div>
                        </div>

                        <div class="card-footer text-right bg-white border-top">

                            <a href="{{ route('clientes.index') }}"
                               class="btn btn-outline-secondary mr-2">
                                <i class="fa fa-ban"></i>
                                Cancelar
                            </a>

                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i>
                                Guardar
                            </button>
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
