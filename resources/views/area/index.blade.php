@extends('layouts.app')
@section('title','Areas')
@section('content')

                @foreach ($areas as $area)
                    <tr>
                        <td>ID Area: {{ $area['id'] }}</td>
                        <br>
                        <td>Nombre: {{ $area['name'] }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection