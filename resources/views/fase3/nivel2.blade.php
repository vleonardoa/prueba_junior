@extends('layouts.app')

@section('titulo_pagina', 'nivel2')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h5>2.	Realizar un script en que imprima la tabla de amortizaciones de un préstamo usado el tipo de cuota sobre saldos, este mismo debe solicitar 3 valores: monto, plazo en meses y tasa de interés mensual, ejemplo:</h5>

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
                    <h1>Tabla de Amortización de un Préstamo</h1>
                    <label for="monto">Monto del préstamo (Q): </label>
                    <input type="number" id="monto" /><br><br>

                    <label for="plazo">Plazo en meses: </label>
                    <input type="number" id="plazo" /><br><br>

                    <label for="tasaInteres">Tasa de interés mensual (%): </label>
                    <input type="number" id="tasaInteres" step="0.01" /><br><br>

                    <button onclick="calcularTablaAmortizacion()">Generar Tabla</button>

                    <div id="tablaAmortizacion" style="margin-top: 20px;"></div>

                </div>
            </div>
            <div class="text-center">

            </div>
        </div>
    </div>




    @push('scripts')
        <script>
            function calcularTablaAmortizacion() {
                let monto = parseFloat(document.getElementById('monto').value);
                let plazo = parseInt(document.getElementById('plazo').value);
                let tasaInteres = parseFloat(document.getElementById('tasaInteres').value) / 100;

                // Validación
                if (isNaN(monto) || isNaN(plazo) || isNaN(tasaInteres) || monto <= 0 || plazo <= 0 || tasaInteres <= 0) {
                    alert("Por favor ingresa valores válidos.");
                    return;
                }

                let saldo = monto;
                let pagoMensual = monto / plazo;
                let tabla = "<table border='1' style='width: 100%; border-collapse: collapse;'><thead><tr><th>Periodo</th><th>Interés</th><th>Abono</th><th>Pago</th><th>Saldo</th></tr></thead><tbody>";
                tabla += `<tr>
                        <td>Saldo Inicial</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>Q ${monto.toFixed(2)}</td>
                    </tr>`;
                for (let i = 1; i <= plazo; i++) {
                    let interes = saldo * tasaInteres;
                    let abono = pagoMensual;
                    let pago = abono + interes;

                    // Si el saldo restante es menor que el abono, lo ajustamos a cero
                    if (saldo - abono < 0) {
                        abono = saldo;
                        pago = abono + interes;
                        saldo = 0;
                    } else {
                        saldo -= abono;
                    }

                    tabla += `<tr>
                            <td>${i}</td>
                            <td>Q ${interes.toFixed(2)}</td>
                            <td>Q ${abono.toFixed(2)}</td>
                            <td>Q ${pago.toFixed(2)}</td>
                            <td>Q ${saldo.toFixed(2)}</td>
                        </tr>`;

                }

                tabla += "</tbody></table>";
                document.getElementById('tablaAmortizacion').innerHTML = tabla;
            }
        </script>
    @endpush

@endsection

