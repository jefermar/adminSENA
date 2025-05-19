@extends('layouts.app')

@section('content')

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