<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>
  </head>
  <body class="bg-dark text-white col-md-10 mx-auto px-2 mt-5">

    @if(count($llamados_importantes))
        <h3>Llamados importantes</h3>
        <table class="table table-striped table-bordered w-full table-responsive-sm mb-5">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Area</th>
                <th scope="col">Paciente</th>
                <th scope="col">Enfermeros</th>
                <th scope="col">Tipo</th>
                <th scope="col">Fecha creado</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-white">
                @foreach($llamados_importantes as $llamado)
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
                        {{ucfirst($llamado->tipo)}}
                    </td>
                    <td>{{$llamado->created_at}}</td>
                    <td>
                        {{-- <button class="btn btn-primary mr-2" data-toggle="modal"  data-target="#modalEnfermero{{$llamado->id}}">Ver más</button> --}}
                        @if(!$llamado->atendido)
                            <a class="btn btn-warning mr-2" href="/dashboard/atender-llamado/{{$llamado->id}}">Atender llamado</a>
                        @endif
                        {{-- <button class="btn btn-danger" data-toggle="modal"  data-target="#modalEliminarEnfermero{{$llamado->id}}">Eliminar</button> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <h3>Llamados no atendidos</h3>
    @if(count($llamados))
        <table class="table table-striped table-bordered w-full table-responsive-sm">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Area</th>
                <th scope="col">Paciente</th>
                <th scope="col">Enfermeros</th>
                <th scope="col">Tipo</th>
                <th scope="col">Fecha creado</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-white">
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
                        {{ucfirst($llamado->tipo)}}
                    </td>
                    <td>{{$llamado->created_at}}</td>
                    <td>
                        {{-- <button class="btn btn-primary mr-2" data-toggle="modal"  data-target="#modalEnfermero{{$llamado->id}}">Ver más</button> --}}
                        @if(!$llamado->atendido)
                            <a class="btn btn-warning mr-2" href="/atender-llamado/{{$llamado->id}}">Atender llamado</a>
                        @endif
                        {{-- <button class="btn btn-danger" data-toggle="modal"  data-target="#modalEliminarEnfermero{{$llamado->id}}">Eliminar</button> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        No hay llamados sin atender
    @endif
    
    @if(count($llamados_importantes))
        <audio controls autoplay id="audioElement" class="d-none">
            <source src="{{asset('tone.mp3')}}" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>
    @endif

    <script>
        setInterval(function (){
            location.reload()
        }, 3000);
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --><!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js')}}"></script></body>
</html>