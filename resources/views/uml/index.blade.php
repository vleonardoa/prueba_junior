@extends('layouts.app')

@section('titulo_pagina', 'UML')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>UML</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="content">
        <div class="container-fluid">
            <div class="clearfix"></div>

            <div class="clearfix"></div>
            <div class="card card-primary">
                <div class="card-body">

                    <img src="{{ asset('img/servicios.png') }}" class="img-fluid" alt="UML">

                </div>
            </div>
            <div class="text-center">

            </div>
        </div>
    </div>



@endsection
