@extends('layouts.app')
@section('title','Computers')
@section('content')

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