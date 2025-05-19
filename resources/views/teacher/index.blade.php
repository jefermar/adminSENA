@extends('layouts.app')

@section('content')

                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher['id'] }}</td>
                        <td>{{ $teacher['name'] }}</td>
                        <td>{{ $teacher['email'] }}</td>
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
                        <td>{{ $trainingCenter['location'] }}</td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection