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
        <h3 >Todos los enfermeros</h3>
        <div class="row">
            <table class="table table-striped table-bordered table-responsive-sm">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre y apellido</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($enfermeros as $enfermero)
                    <tr>
                        <th>{{$enfermero->id}}</th>
                        <td>{{$enfermero->nombre_y_apellido}}</td>
                        <td>{{$enfermero->dni}}</td>
                        <td>
                            <button class="btn btn-primary mr-2" data-toggle="modal"  data-target="#modalEnfermero{{$enfermero->id}}">Ver más</button>
                            <a class="btn btn-warning mr-2" href="/dashboard/editar-enfermero/{{$enfermero->id}}">Editar</a>
                            <button class="btn btn-danger" data-toggle="modal"  data-target="#modalEliminarEnfermero{{$enfermero->id}}">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @foreach($enfermeros as $enfermero)
                <div class="modal fade" id="modalEnfermero{{$enfermero->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$enfermero->nombre_y_apellido}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>Dni</h5>
                        <p class="mb-3">{{$enfermero->dni}}</p>

                        <h5>Telefono</h5>
                        <p class="mb-3">{{$enfermero->telefono}}</p>

                        <h5>Detalles</h5>
                        <p class="mb-3">{{$enfermero->detalles}}</p>


                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal fade" id="modalEliminarEnfermero{{$enfermero->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar enfermero</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>¿Realmente desea eliminar el enfermero {{$enfermero->nombre_y_apellido}}?</h5>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        {!! Form::open(['route' => ['enfermero.destroy', $enfermero->id], 'method' => 'delete']) !!}
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