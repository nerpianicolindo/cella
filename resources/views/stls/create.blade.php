@extends('layout.mainlayout')
@section('content')
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
   <div class="album text-muted">
     <div class="container">
       <div class="row">
        <div class="card">
            <div class="card-header border-0">
            </div>
            <div class="card-body">
                <form action="{{ route('stls.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="ID_MODELO" value="{!! $modelo !!}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="nombre">Nombre</label>
                                <input id="nombre" name="nombre" class="form-control"
                                       placeholder="Introduzca la trazabilidad del caso" type="text" required>
                            </div>
                            <div class="form-group">
                                <label for="color" class="form-control-label">Color</label>
                                <input type="color" name="color" id="color" required>
                            </div>
                            <div class="form-group">
                                <label for="visible" class="form-control-label">Visible</label>
                                <select name="visible" id="visible">
                                    <option value="0">No</option>
                                    <option value="1">Si</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="transparencia" class="form-control-label">Transparencia</label>
                                <input type="number" id="transparencia" name="transparencia"min="0" max="100" required>
                            </div>
                            <div class="form-group">
                                <label for="orden" class="form-control-label">Orden</label>
                                <input type="number" id="orden" name="orden" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <a href="{{ route('modelos.edit', $modelo) }}" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
       </div>
     </div>
   </div>
   <script>
    </script>
@endsection



