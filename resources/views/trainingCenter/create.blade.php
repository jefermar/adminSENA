@extends('layouts.app')

@section('content')


<form action="{{route('trainingcenter.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required placeholder="Nombre del centro">
          </div>

          <div class="mb-3">
            <label for="location" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="location" name="location" required placeholder="Ej: Popayán, Cauca">
          </div>

          <div class="text-end">
            <button type="submit" class="btn btn-success">Crear</button>
            <button type="reset" class="btn btn-secondary">Limpiar</button>
          </div>
       

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</form>

@endsection 