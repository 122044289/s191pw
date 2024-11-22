@extends('layouts.plantilla1')

@section('titulo', 'Clientes')

@section('contenido')

    @if (session('exito'))
        <script>
            Swal.fire({
                title: "Actualización Exitosa",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif

    <div class="container mt-5 col-md-8">
        @foreach ($consultaClientes as $cliente)
            <div class="card text-justify font-monospace mt-3">
                <div class="card-header fs-5 text-primary">
                    {{ $cliente->nombre }}
                </div>

                <div class="card-body">
                    <h5 class="fw-bold"> {{ $cliente->correo }}</h5>
                    <h5 class="fw-medium"> {{ $cliente->telefono }} </h5>
                    <p class="card-text fw-lihgter"></p>
                </div>

                <div class="card-footer text-muted">
                    <a href="{{ route('rutaedit', $cliente->id) }}" type="submit" class="btn btn-warning btn-sm">{{ __('Actualizar') }} </a>
                    <a href="javascript:void(0);" onclick="confirmDelete({{ $cliente->id }})" class="btn btn-danger btn-sm"> {{ __('Eliminar') }} </a>
                </div>

            </div>
        @endforeach 
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(clienteId) {
            Swal.fire({
                title: '¿Estás seguro/a?',
                text: "Ya no habra vuelta atras he",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sisisi',
                cancelButtonText: 'No, aquí dejalo'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `/cliente/delete/${clienteId}`;
                }
            });
        }
    </script>

@endsection