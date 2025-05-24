@extends('layouts.app')
@section('title','Areas')
@section('content')
 <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Listado: </h4>
    <a href="{{ route('area.create') }}" class="btn btn-dark">+ Crear </a>
</div>
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