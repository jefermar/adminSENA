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
                  @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher['id'] }}</td>
                        <td>{{ $teacher['name'] }}</td>
                        <td>{{ $teacher['email'] }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection