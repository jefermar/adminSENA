@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-lg rounded-4">
                <div class="card-header bg-primary text-white text-center fs-4">
                    <i class="bi bi-pc-display me-2"></i>Actualizar Información del Computador
                </div>

                <div class="card-body px-4 py-3">
                    <form action="{{ route('computer.update', $computer->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="number" class="form-label fw-semibold">Número del Computador</label>
                            <input type="text"
                                   name="number"
                                   id="number"
                                   class="form-control @error('number') is-invalid @enderror"
                                   value="{{ old('number', $computer->number) }}"
                                   placeholder="Ej: 1234"
                                   required>
                            @error('number')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="brand" class="form-label fw-semibold">Marca</label>
                            <input type="text"
                                   name="brand"
                                   id="brand"
                                   class="form-control @error('brand') is-invalid @enderror"
                                   value="{{ old('brand', $computer->brand) }}"
                                   placeholder="Ej: Lenovo"
                                   required>
                            @error('brand')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-success px-4">
                                <i class="bi bi-arrow-repeat me-1"></i> Actualizar
                            </button>
                            <a href="{{ route('computer.index') }}" class="btn btn-secondary ms-2">
                                <i class="bi bi-arrow-left-circle me-1"></i> Cancelar
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
