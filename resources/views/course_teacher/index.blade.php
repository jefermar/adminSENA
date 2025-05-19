@extends('layouts.app')

@section('content')

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

            </tbody>
        </table>
    </div>
@endsection