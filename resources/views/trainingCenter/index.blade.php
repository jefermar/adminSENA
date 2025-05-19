@extends('layouts.app')

@section('content')
    @foreach ($TrainingCenters as $trainingcenter)
        <tr>
            <td>{{ $trainingcenter['id'] }}</td>
            <td>{{ $trainingcenter['name'] }}</td>
            <td>{{ $trainingcenter['location'] }}</td>
        </tr>
    @endforeach
@endsection
