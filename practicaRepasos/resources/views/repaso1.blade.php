@extends('layouts.buscador')

@section('titulo', 'repaso1 - Practica Repasos')

@section('buscador')

<div class="d-flex justify-content-center align-items-center min-vh-60 gap-3">

    <x-card titulo="Convertidor" contenido="Vamos a morir" boton="Guardar">

        <form>
            <fieldset>
                <legend>Ingresa valores</legend>

                <div class="mb-3">
                    <label for="conversionInput" class="form-label">Valor en MB</label>
                    <input type="number" id="conversionInput" class="form-control" placeholder="Ingresa valor en MB">
                </div>

                <div class="mb-3">
                    
                    <select name="salida" class="form-select">
                        <option selected disabled>Elige una opción</option>
                        <option value="gb">MB a GB</option>
                        <option value="kb">GB a MB</option>
                        <option value="kb">GB a TB</option>
                        <option value="kb">TB a GB</option>

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Funciona por favor</button>
            </fieldset>
        </form>

    </x-card>

</div>

@endsection







