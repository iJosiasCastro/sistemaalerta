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
        <div class="d-flex justify-content-between mb-3">
            <h3>Todos los pacientes</h3>
            <button class="btn btn-primary d-print-none" onclick="window.print()">
                <i class="fa fa-print mr-1"></i>
                Imprimir datos
            </button>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-responsive-sm">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre y apellido</th>
                    <th scope="col">Dni</th>
                    <th scope="col">Area</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($pacientes as $paciente)
                    <tr>
                        <th>{{$paciente->id}}</th>
                        <th>{{$paciente->nombre_y_apellido}}</th>
                        <td>{{$paciente->dni}}</td>
                        <td>{{$paciente->area_id}}</td>
                        <td>
                            <button class="btn btn-primary mr-2" data-toggle="modal"  data-target="#modalEnfermero{{$paciente->id}}">Ver más</button>
                            <a class="btn btn-warning mr-2" href="/dashboard/editar-paciente/{{$paciente->id}}">Editar</a>
                            <button class="btn btn-danger" data-toggle="modal"  data-target="#modalEliminarEnfermero{{$paciente->id}}">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @foreach($pacientes as $paciente)
                <div class="modal fade" id="modalEnfermero{{$paciente->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$paciente->nombre_y_apellido}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>Nombre y apellido</h5>
                        <p class="mb-3">{{$paciente->nombre_y_apellido}}</p>

                        <h5>Dni</h5>
                        <p class="mb-3">{{$paciente->dni}}</p>

                        @if (!empty($paciente->localidad))
                            <h5>Localidad</h5>
                            <p class="mb-3">{{$paciente->localidad}}</p>
                        @endif

                        @if (!empty($paciente->domicilio))
                            <h5>Domicilio</h5><div class="d-flex justify-content-between mb-3">
            <h3>Todos los llamados</h3>
            <button class="btn btn-primary d-print-none" onclick="window.print()">
                <i class="fa fa-print mr-1"></i>
                Imprimir reporte
            </button>
        </div>
                            <p class="mb-3">{{$paciente->domicilio}}</p>
                        @endif

                        @if (!empty($paciente->telefono))
                            <h5>Telefono</h5>
                            <p class="mb-3">{{$paciente->telefono}}</p>
                        @endif

                        @if (!empty($paciente->detalles))
                            <h5>Detalles</h5>
                            <p class="mb-3">{{$paciente->detalles}}</p>
                        @endif

                        @if (!empty($paciente->area_id))
                            <h5>Area</h5>
                            <p class="mb-3">{{$paciente->area->numero_de_area}}</p>
                        @endif

                        @if (!empty($paciente->enfermeros))
                            <h5>Enfermeros</h5>
                            @foreach($paciente->enfermeros as $enfermero)
                                <p class="mb-1">{{$enfermero->nombre_y_apellido}} - <a href="/dashboard/editar-enfermero/{{$enfermero->id}}">Ver perfil</a></p>
                            @endforeach
                        @endif

                        

                        

                        

                        

                        


                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal fade" id="modalEliminarEnfermero{{$paciente->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar paciente</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>¿Realmente desea eliminar el paciente {{$paciente->nombre_y_apellido}}?</h5>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        {!! Form::open(['route' => ['paciente.destroy', $paciente->id], 'method' => 'delete']) !!}
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