@extends('layouts.app')
@section('title','Apprentices')
@section('content')

                @foreach ($apprentices as $apprentice)
                    <tr>
                        <td>ID Apprentices{{ $apprentice['id'] }}</td>
                        <br>
                        <td>Nombre: {{ $apprentice['name'] }}</td>
                        <br>
                        <td>NUmero de celular: {{ $apprentice['cell number'] }}</td>
                    </tr>
                @endforeach
<br><br>
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
                 @foreach ($computers as $computer)
                    <tr>
                        <td>ID computer: {{ $computer['id'] }}</td>
                        <br>
                        <td>Numero: {{ $computer['number'] }}</td>
                        <br>
                        <td>Marca: {{ $computer['brand'] }}</td>
                    </tr>
                @endforeach  

            </tbody>
        </table>
    </div>
@endsection