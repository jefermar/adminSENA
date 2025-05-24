@extends('layouts.app')

@section('content')


<form action="{{route('computer.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Numero</label>
            <input type="text" class="form-control" id="number" name="number" required placeholder="Numero del equipo">
          </div>

          <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" required placeholder="Ej: Lenovo">
          </div>

          <div class="text-end">
            <button type="submit" class="btn btn-success">Crear</button>
            <button type="reset" class="btn btn-secondary">Limpiar</button>
          </div>
       

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</form>

@endsection 