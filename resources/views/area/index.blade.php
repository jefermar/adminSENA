@extends('layouts.app')

@section('content')

                @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area['id'] }}</td>
                        <td>{{ $area['name'] }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection