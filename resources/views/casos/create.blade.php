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
                <form action="{{ route('casos.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="name">Trazabilidad</label>
                                <input id="trazabilidad_hospital" name="trazabilidad_hospital" class="form-control"
                                       placeholder="Introduzca la trazabilidad del caso" type="text" required>
                                {!! $errors->first('name', '<span class="form-text text-danger">:message</span>') !!}
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
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
    </script>
@endsection



