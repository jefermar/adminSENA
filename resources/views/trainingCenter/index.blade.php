@extends('layouts.app')
@section('title','Training Center')
@section('content')
    @foreach ($TrainingCenters as $trainingcenter)
       <tr>
                        <td>ID training Center:{{ $trainingCenter['id'] }}</td>
                        <br>
                        <td>Nombre: {{ $trainingCenter['name'] }}</td>
                        <br>
                        <td>Location: {{ $trainingCenter['location'] }}</td>
                    </tr>
    @endforeach
@endsection
