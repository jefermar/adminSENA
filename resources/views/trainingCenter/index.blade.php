@extends('layouts.app')
@section('title','Training Center')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Listado: </h4>
    <a href="{{ route('trainingcenter.create') }}" class="btn btn-dark">+ Crear </a>
</div>
    @foreach ($TrainingCenters as $trainingCenter)
       <tr>
                        <td>ID training Center:{{ $trainingCenter['id'] }}</td>
                        <br>
                        <td>Nombre: {{ $trainingCenter['name'] }}</td>
                        <br>
                        <td>Location: {{ $trainingCenter['location'] }}</td>
                    </tr>
    @endforeach
@endsection
