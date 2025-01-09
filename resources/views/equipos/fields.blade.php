<!-- Numero Serie Field -->
<div id="app" class="col-sm-12 row">
    <div class="form-group col-sm-6">
        {!! Form::label('numero_serie', 'Numero Serie:') !!}
        {!! Form::Number('numero_serie', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('imei', 'Imei:') !!}
        {!! Form::Number('imei', null, ['class' => 'form-control', 'required', 'maxlength' => 255]) !!}
    </div>

    <!-- Marca Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('marca_id', 'Marca:') !!}
        <select v-model="marca_id" class="form-control" required @change="loadModelos">
            <option value="">Seleccione una Marca</option>
            <option v-for="marca in marcas" :key="marca.id" :value="marca.id">
                @{{ marca.nombre }}
            </option>
        </select>
        <input type="hidden" name="marca_id" v-model="marca_id">
    </div>

    <!-- Modelo Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('modelo_id', 'Modelo:') !!}
        <select v-model="modelo_id" class="form-control" :disabled="!marca_id" required>
            <option value="">Seleccione un Modelo</option>
            <option v-for="modelo in modelos" :key="modelo.id" :value="modelo.id">
                @{{ modelo.nombre }}
            </option>
        </select>
        <input type="hidden" name="modelo_id" v-model="modelo_id">
    </div>

    <!-- Tipo Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('tipo_id', 'Tipo:') !!}
        {!! Form::select('tipo_id', \App\Models\Tipo::pluck('nombre', 'id'), null, ['class' => 'form-control', 'required', 'placeholder' => 'Seleccione un Tipo']) !!}
    </div>
</div>
@push('scripts')
    <script>
        new Vue({
            el: '#app',
            data: {
                marca_id: '',
                modelo_id: '',
                marcas: @json(\App\Models\Marca::with('modelos')->get()),
                modelos: []
            },
            methods: {
                loadModelos() {
                    // Si se selecciona una marca, actualizamos los modelos disponibles
                    const selectedMarca = this.marcas.find(marca => marca.id === this.marca_id);
                    if (selectedMarca) {
                        this.modelos = selectedMarca.modelos; // Cargamos los modelos correspondientes
                    } else {
                        this.modelos = []; // Si no hay marca seleccionada, vaciamos los modelos
                    }
                }
            }
        });
    </script>
@endpush
