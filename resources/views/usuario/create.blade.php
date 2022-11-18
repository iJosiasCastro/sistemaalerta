@extends('layouts.app')

@section('content')
<div class="py-3"></div>
<div class="col-md-10 mx-auto">
   <div class="card">
      <div class="card-body">
         <h3 class="mb-4">Crear usuario</h3>
         {!! Form::open(['route' => 'usuario.create', 'autocomplete' => 'off']) !!}

            @include('usuario.form')

            {!! Form::submit('Crear usuario', ['class' => 'btn btn-primary']) !!}


         {!! Form::close() !!}
      </div>
   </div>
</div>

@endsection