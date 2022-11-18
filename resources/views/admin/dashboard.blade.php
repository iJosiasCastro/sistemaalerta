@extends('layouts.app')

@section('content')
    <div class="col-md-10 mx-auto">
        <h1 class="mb-5">Dashboard</h1>
        <div class="row">
            @if(Auth::user()->role == 'admin')
                <div class="mb-5 col-12 col-md-6">
                    <h3>Paciente</h3>
                    <div>
                        <a href="/dashboard/crear-paciente">Crear paciente</a>
                    </div>
                    <div>
                        <a href="/dashboard/pacientes">Listado de pacientes</a>
                    </div>
                </div>
            @endif

            @if(Auth::user()->role == 'admin')
                <div class="mb-5 col-12 col-md-6">
                    <h3>Enfermero</h3>
                    <div>
                        <a href="/dashboard/crear-enfermero">Crear enfermero</a>
                    </div>
                    <div>
                        <a href="/dashboard/enfermeros">Listado de enfermeros</a>
                    </div>
                </div>
            @endif

            <div class="mb-5 col-12 col-md-6">
                <h3>Llamados</h3>
                <div>
                    <a href="/escuchar-llamados">Escuchar llamados</a>
                </div>
                @if(Auth::user()->role == 'admin')
                <div>
                    <a href="/dashboard/llamados">Listado de llamados</a>
                </div>
                @endif
            </div>

            @if(Auth::user()->role == 'admin')
                <div class="mb-5 col-12 col-md-6">
                    <h3>Áreas</h3>
                    <div>
                        <a href="/dashboard/crear-area">Crear área</a>
                    </div>
                    <div>
                        <a href="/dashboard/areas">Listado de áreas</a>
                    </div>
                </div>
            @endif

            @if(Auth::user()->role == 'admin')
                <div class="mb-5 col-12 col-md-6">
                    <h3>Usuarios</h3>
                    <div>
                        <a href="/dashboard/crear-usuario">Crear usuario</a>
                    </div>
                    <div>
                        <a href="/dashboard/usuarios">Listado de usuarios</a>
                    </div>
                </div>
            @endif

            @if(Auth::user()->role == 'admin')
                <div class="mb-5 col-12 col-md-6">
                    <h3>Ayuda</h3>
                    <div>
                        <a href="/como-usar">Como usar</a>
                    </div>
                </div>
            @endif
        </div>

    </div>
@endsection