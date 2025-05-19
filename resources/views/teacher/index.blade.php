@extends('layouts.app')

@section('content')

                @foreach ($teachers as $teacher)
                    <tr>
                        <td>Id Teacher: {{ $teacher['id'] }}</td>
                        <br>
                        <td>Nombre: {{ $teacher['name'] }}</td>
                        <br>
                        <td>Email: {{ $teacher['email'] }}</td>
                        <br>
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