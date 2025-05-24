@extends('layouts.app')
@section('title','Courses')
@section('content')
 <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Listado: </h4>
    <a href="{{ route('trainingcenter.create') }}" class="btn btn-dark">+ Crear </a>
</div>
                 @foreach ($courses as $course)
                     <tr>
                        <td>ID course:{{ $course['id'] }}</td>
                        <br>
                        <td>Nnumero de curso: {{ $course['course number'] }}</td>
                        <br>
                        <td>Dia o jornada:{{ $course['day'] }}</td>
                    </tr>
                @endforeach
<br><br>
                 @foreach ($areas as $area)
                     <tr>
                        <td>ID Area: {{ $area['id'] }}</td>
                        <br>
                        <td>Nombre: {{ $area['name'] }}</td>
                    </tr>
                @endforeach
 <br><br>           
                @foreach ($trainingCenters as $trainingCenter)
                    <tr>
                        <td>ID training Center:{{ $trainingCenter['id'] }}</td>
                        <br>
                        <td>Nombre: {{ $trainingCenter['name'] }}</td>
                        <br>
                        <td>Location: {{ $trainingCenter['location'] }}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection