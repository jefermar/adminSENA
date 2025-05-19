@extends('layouts.app')

@section('content')

                @foreach ($apprentices as $apprentice)
                    <tr>
                        <td>{{ $apprentice['id'] }}</td>
                        <td>{{ $apprentice['name'] }}</td>
                        <td>{{ $apprentice['cell number'] }}</td>
                    </tr>
                @endforeach
<br><br>
               @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course['id'] }}</td>
                        <td>{{ $course['course number'] }}</td>
                        <td>{{ $course['day'] }}</td>
                    </tr>
                @endforeach
<br><br>
                 @foreach ($computers as $computer)
                    <tr>
                        <td>{{ $computer['id'] }}</td>
                        <td>{{ $computer['number'] }}</td>
                        <td>{{ $computer['brand'] }}</td>
                    </tr>
                @endforeach  

            </tbody>
        </table>
    </div>
@endsection