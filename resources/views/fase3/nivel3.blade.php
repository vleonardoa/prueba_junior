@extends('layouts.app')

@section('titulo_pagina', 'nivel1')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h5>3.	Realizar un script en php que resuelva la potencia de binomios (a + b)n , el script debe realizarse con un algoritmo recursivo, el único valor que deberá solicitar el script es la potencia a la que se desea elevar el binomio y en base a este deberá dar el resultado ejemplo:
                        (a + b)3 = 1a3 + 3a2b + 3ab2 + 1b3
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

                    <h1>Expansión del Binomio (a + b)^n</h1>

                    <!-- Formulario para ingresar la potencia -->
                    <form id="binomioForm">
                        <label for="potencia">Ingresa la potencia (n): </label>
                        <input type="number" id="potencia" required min="0">
                        <button type="submit">Calcular</button>
                    </form>

                    <div class="result" id="result"></div>

                </div>
            </div>
            <div class="text-center">

            </div>
        </div>
    </div>




    @push('scripts')
        <script>
            // Función recursiva para calcular el coeficiente binomial
            function binomioCoeficiente(n, k) {
                // Caso base
                if (k === 0 || k === n) {
                    return 1;
                }
                // Caso recursivo
                return binomioCoeficiente(n - 1, k - 1) + binomioCoeficiente(n - 1, k);
            }

            // Función para generar la expansión del binomio (a + b)^n
            function expandirBinomio(n) {
                let resultado = "";

                for (let k = 0; k <= n; k++) {
                    // Calculando el coeficiente binomial
                    const coeficiente = binomioCoeficiente(n, k);

                    // Solo agregar el coeficiente si es distinto de 1
                    if (coeficiente !== 1) {
                        resultado += coeficiente;
                    }

                    // Expresión de cada término
                    if (k === 0) {
                        resultado += "a^" + (n);
                    } else if (k === n) {
                        resultado += "b^" + (n);
                    } else {
                        if (n - k > 1) {
                            resultado += "a^" + (n - k);
                        } else {
                            resultado += "a";
                        }

                        if (k > 1) {
                            resultado += "b^" + k;
                        } else if (k === 1) {
                            resultado += "b";
                        }
                    }

                    // Agregar "+" si no es el último término
                    if (k < n) {
                        resultado += " + ";
                    }
                }

                return resultado;
            }

            // Manejar el evento de envío del formulario
            document.getElementById('binomioForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevenir el envío del formulario

                const n = parseInt(document.getElementById('potencia').value);

                if (isNaN(n) || n < 0) {
                    document.getElementById('result').innerHTML = "Por favor ingresa un valor válido para la potencia.";
                } else {
                    const expansion = expandirBinomio(n);
                    document.getElementById('result').innerHTML = "(a + b)^" + n + " = " + expansion;
                }
            });
        </script>
    @endpush

@endsection

