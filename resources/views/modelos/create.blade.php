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
                <form action="{{ route('modelos.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="ID_CASO" value="{!! $caso !!}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="nombre">Nombre</label>
                                <input id="nombre" name="nombre" class="form-control"
                                       placeholder="Introduzca la trazabilidad del caso" type="text" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="tipo">Tipo</label>
                                <select name="tipo" id="tipo">
                                    <option value="1">Hepático</option>
                                    <option value="2">Pancreático</option>
                                    <option value="3">Colorrectal</option>
                                    <option value="4">Tiroides</option>
                                    <option value="5">Otro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <a href="{{ route('dashboard') }}" class="btn btn-danger">Cancelar</a>
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



