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
                <a href="{{ route('casos.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus">Crear Caso</i></a>
            </div>
            <div class="card-body">
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                          <th scope="col">CASO</th>
                          <th scope="col">Modelos</th>
                        </tr>
                    </thead>
                      <tbody>
                        @foreach ($casos as $caso)
                            <tr>
                                <td>
                                    ID:{!! $caso->id !!} <br>
                                    TRAZABILIDAD:{!! $caso->trazabilidad_hospital !!} <br>
                                    Fecha Alta: {!! $caso->created_at !!}
                                    <form action="{{ route('casos.destroy', $caso) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger session-remove" onclick="return confirm('¿Desea eliminar el caso?')">
                                            <i class="fa fa-trash"><span class="popuptext" id="delete{{$caso->id}}">Borrar</span></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    @foreach ($caso->modelos as $modelo )
                                    <a href="{{ route('modelos.edit', $modelo) }}" class="btn btn-sm btn-info">
                                        <i class="fa fa-pencil-alt"><span class="popuptext" id="edit{{$modelo->id}}">{!! $modelo->nombre !!}</span></i>
                                    </a>
                                    <br>
                                    @endforeach
                                    <a href="{{ route('modelos.create2', $caso) }}" class="btn btn-success float-right"><i class="fa fa-plus">Crear Modelo</i></a>
                                </td>

                            </tr>
                        @endforeach
                      </tbody>
                </table>

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



