@extends('layouts.app')

@section('title', 'Inicio - Admin Sena')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 text-center fw-bold text-warning">Panel de Control - Admin Sena</h2>

    <div class="row g-4">

        {{-- Card: Áreas --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-bold">Áreas</h5>
                    <p class="card-text">Gestión de áreas del conocimiento o formación.</p>
                    <a href="{{ route('area.index') }}" class="btn btn-outline-dark btn-sm">Ver más</a>
                </div>
            </div>
        </div>

        {{-- Card: Docentes --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-bold">Docentes</h5>
                    <p class="card-text">Listado y gestión de los docentes registrados.</p>
                    <a href="{{ route('teacher.index') }}" class="btn btn-outline-dark btn-sm">Ver más</a>
                </div>
            </div>
        </div>

        {{-- Card: Centros de Formación --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-bold">Centros de Formación</h5>
                    <p class="card-text">Ubicación y datos clave de los centros.</p>
                    <a href="{{ route('trainingCenter.index') }}" class="btn btn-outline-dark btn-sm">Ver más</a>
                </div>
            </div>
        </div>

        {{-- Card: Cursos --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-bold">Cursos</h5>
                    <p class="card-text">Información sobre los cursos y sus jornadas.</p>
                    <a href="{{ route('course.index') }}" class="btn btn-outline-dark btn-sm">Ver más</a>
                </div>
            </div>
        </div>

        {{-- Card: Aprendices --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-bold">Aprendices</h5>
                    <p class="card-text">Datos personales y de contacto de los aprendices.</p>
                    <a href="{{ route('apprentice.index') }}" class="btn btn-outline-dark btn-sm">Ver más</a>
                </div>
            </div>
        </div>

        {{-- Card: Equipos (Computadores) --}}
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-dark fw-bold">Computadores</h5>
                    <p class="card-text">Inventario de equipos disponibles por número y marca.</p>
                    <a href="{{ route('computer.index') }}" class="btn btn-outline-dark btn-sm">Ver más</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
