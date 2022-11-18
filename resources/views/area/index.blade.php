@extends('layouts.app')

@section('content')
<div>
    <div class="col-md-10 mx-auto">
        <div class="py-4"></div>
        @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
        @endif
        <h3 >Todas los áreas</h3>
        <div class="row">
            <table class="table table-striped table-bordered table-responsive-sm">
                <thead class="thead-dark">
                  <tr>
                    {{-- <th scope="col">Id</th> --}}
                    <th scope="col">Numero</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($areas as $area)
                    <tr>
                        {{-- <th>{{$area->id}}</th> --}}
                        <td>{{$area->numero_de_area}}</td>
                        <td>{{$area->descripcion}}</td>
                        <td>
                            <a class="btn btn-warning mr-2" href="/dashboard/editar-area/{{$area->id}}">Editar</a>
                            <button class="btn btn-danger" data-toggle="modal"  data-target="#modalEliminarArea{{$area->id}}">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @foreach($areas as $area)
                <div class="modal fade" id="modalArea{{$area->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$area->nombre_y_apellido}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>Dni</h5>
                        <p class="mb-3">{{$area->dni}}</p>

                        <h5>Telefono</h5>
                        <p class="mb-3">{{$area->telefono}}</p>

                        <h5>Detalles</h5>
                        <p class="mb-3">{{$area->detalles}}</p>


                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal fade" id="modalEliminarArea{{$area->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar area</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>¿Realmente desea eliminar el area {{$area->numero_de_area}}?</h5>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        {!! Form::open(['route' => ['area.destroy', $area->id], 'method' => 'delete']) !!}
                            <button type="submit" class="btn btn-danger">Eliminar</a>
                        {!! Form::close() !!}

                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection