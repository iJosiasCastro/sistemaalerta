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
            <h3>Todos los llamados</h3>
            <button class="btn btn-primary d-print-none" onclick="window.print()">
                <i class="fa fa-print mr-1"></i>
                Imprimir reporte
            </button>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered w-full table-responsive-lg">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Area</th>
                    <th scope="col">Paciente</th>
                    <th scope="col">Enfermeros</th>
                    <th scope="col">Atendido</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Fecha atendido</th>
                    <th scope="col">Fecha creado</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($llamados as $llamado)
                    <tr>
                        <th>{{$llamado->id}}</th>
                        <th>{{$llamado->area->numero_de_area}}</th>
                        <th>{{$llamado->paciente->nombre_y_apellido}}</th>
                        <th>
                            @foreach($llamado->paciente->enfermeros as $enfermero)
                                {{$enfermero->nombre_y_apellido}}
                            @endforeach
                        </th>
                        <td>
                            @if($llamado->atendido)
                                Atendido
                            @else
                                No atendido
                            @endif
                        </td>
                        <td>{{ucfirst($llamado->tipo)}}</td>
                        <td>@if($llamado->fecha_atendido){{$llamado->fecha_atendido}}@else --- @endif</td>
                        <td>{{$llamado->created_at}}</td>
                        <td>
                            {{-- <button class="btn btn-primary mr-2" data-toggle="modal"  data-target="#modalEnfermero{{$llamado->id}}">Ver más</button> --}}
                            @if(!$llamado->atendido)
                                <a class="btn btn-warning mr-2" href="/dashboard/atender-llamado/{{$llamado->id}}">Atender llamado</a>
                            @endif
                            <button class="btn btn-danger" data-toggle="modal"  data-target="#modalEliminarEnfermero{{$llamado->id}}">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @foreach($llamados as $llamado)
                <div class="modal fade" id="modalEnfermero{{$llamado->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$llamado->nombre_y_apellido}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>Nombre y apellido</h5>
                        <p class="mb-3">{{$llamado->nombre_y_apellido}}</p>

                        <h5>Dni</h5>
                        <p class="mb-3">{{$llamado->dni}}</p>

                        @if (!empty($llamado->localidad))
                            <h5>Localidad</h5>
                            <p class="mb-3">{{$llamado->localidad}}</p>
                        @endif

                        @if (!empty($llamado->domicilio))
                            <h5>Domicilio</h5>
                            <p class="mb-3">{{$llamado->domicilio}}</p>
                        @endif

                        @if (!empty($llamado->telefono))
                            <h5>Telefono</h5>
                            <p class="mb-3">{{$llamado->telefono}}</p>
                        @endif

                        @if (!empty($llamado->detalles))
                            <h5>Detalles</h5>
                            <p class="mb-3">{{$llamado->detalles}}</p>
                        @endif

                        @if (!empty($llamado->area_id))
                            <h5>Area_id</h5>
                            <p class="mb-3">{{$llamado->area_id}}</p>
                        @endif

                        

                        

                        

                        

                        


                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal fade" id="modalEliminarEnfermero{{$llamado->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar llamado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        <h5>¿Realmente desea eliminar el llamado {{$llamado->id}}?</h5>

                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        {!! Form::open(['route' => ['llamado.destroy', $llamado->id], 'method' => 'delete']) !!}
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