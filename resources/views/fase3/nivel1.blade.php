@extends('layouts.app')

@section('titulo_pagina', 'nivel1')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h5>1.	Realizar un script que solicite un numero e imprima la factorial del mismo ejemplo:
                        5! = 5.4.3.2.1 = 120
                    </h5>
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

                    <h1>Calculadora de Factorial</h1>
                    <label for="numero">Ingresa un número: </label>
                    <input type="number" id="numero" />
                    <button onclick="calcularFactorial()">Calcular Factorial</button>

                    <p id="resultado"></p>

                </div>
            </div>
            <div class="text-center">

            </div>
        </div>
    </div>




    @push('scripts')
        <script>
            function calcularFactorial() {
                let numero = document.getElementById('numero').value;
                let resultado = 1;
                let operacion = '';

                // Validación para asegurar que el valor sea un número y sea positivo
                if (numero === '' || isNaN(numero)) {
                    alert("Por favor ingresa un número válido.");
                    return;
                }

                numero = parseInt(numero);

                if (numero < 0) {
                    alert("El factorial no está definido para números negativos.");
                    return;
                }

                // Calcular el factorial
                for (let i = numero; i > 0; i--) {
                    resultado *= i;
                    operacion += i + (i > 1 ? ' . ' : '');
                }

                document.getElementById('resultado').innerHTML = `${numero}! = ${operacion} = ${resultado}`;
            }
        </script>
        @endpush

@endsection
