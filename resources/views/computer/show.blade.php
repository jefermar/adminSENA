@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-lg rounded-4 border-0">
                <div class="card-header bg-success text-white text-center fs-4">
                    <i class="bi bi-laptop me-2"></i>Detalles del Computador
                </div>

                <div class="card-body px-4 py-4">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">
                            <strong>ID:</strong>
                            <span>{{ $computer['id'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <strong>Número del equipo:</strong>
                            <span>{{ $computer['number'] }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <strong>Marca:</strong>
                            <span>{{ $computer['brand'] }}</span>
                        </li>
                    </ul>

                    <div class="text-end mt-4">
                        <a href="{{ route('computer.index') }}" class="btn btn-outline-success">
                            <i class="bi bi-arrow-left-circle me-1"></i> Volver a la lista
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
