@extends('layouts.app')

@section('title', 'Computers')

@section('content')
<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0 fw-bold text-warning">Listado de Computadores</h4>
        <a href="{{ route('computer.create') }}" class="btn btn-dark">+ Crear</a>
    </div>

    @if ($computers->isEmpty())
        <div class="alert alert-info">No hay computadores registrados.</div>
    @else
        <div class="table-responsive">
            <table class="table table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Número</th>
                        <th>Marca</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($computers as $computer)
                        <tr>
                            <td>{{ $computer->id }}</td>
                            <td>{{ $computer->number }}</td>
                            <td>{{ $computer->brand }}</td>
                            <td>
                                <a href="{{ route('computer.show', $computer->id) }}" class="btn btn-sm btn-outline-primary">Ver más</a>

                                <form action="{{ route('computer.destroy', $computer->id) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('¿Estás seguro de que deseas eliminar este computador?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
