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
                <a href="{{ route('stls.create2', $modelo) }}" class="btn btn-primary float-right"><i class="fa fa-plus">Crear STL</i></a>
            </div>
            <div class="card-body">
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Color</th>
                            <th scope="col">Visible</th>
                            <th scope="col">Transparencia</th>
                            <th scope="col">Orden</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                      <tbody>
                        @foreach ($modelo->stls as $stl)
                            <tr>
                                <td>
                                    {!! $stl->id !!}
                                </td>
                                <td>
                                    {!! $stl->nombre !!}
                                </td>
                                <td>
                                    <input type="color" name="" id="" value="{!! $stl->color !!}" disabled>
                                </td>
                                <td>
                                    {!! ($stl->visible) ? 'Si' : 'No' !!}
                                </td>
                                <td>
                                    {!! $stl->transparencia !!}%
                                </td>
                                <td>
                                    {!! $stl->orden !!}
                                </td>
                                <td>
                                    <a href="{{ route('stls.edit', $stl) }}" class="btn btn-sm btn-info popup">
                                        <i class="fa fa-pencil-alt"><span class="popuptext" id="edit{{$stl->id}}">Editar STL</span></i></a>
                                    <form action="{{ route('stls.destroy', $stl) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm btn-danger popup" onclick="return confirm('¿Desea eliminar el STL?')">
                                            <i class="fa fa-trash"><span class="popuptext" id="delete{{$stl->id}}">Borrar STL</span></i>
                                        </button>
                                    </form>
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



