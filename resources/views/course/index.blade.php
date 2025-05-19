@extends('layouts.app')

@section('content')

                 @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course['id'] }}</td>
                        <td>{{ $course['course number'] }}</td>
                        <td>{{ $course['day'] }}</td>
                    </tr>
                @endforeach
<br><br>
                 @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area['id'] }}</td>
                        <td>{{ $area['name'] }}</td>
                    </tr>
                @endforeach
 <br><br>           
                @foreach ($trainingCenters as $trainingCenter)
                    <tr>
                        <td>{{ $trainingCenter['id'] }}</td>
                        <td>{{ $trainingCenter['name'] }}</td>
                        <td>{{ $trainingCenter['cell number'] }}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection