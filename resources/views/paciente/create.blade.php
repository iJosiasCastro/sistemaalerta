@extends('layouts.app')

@section('content')
<div class="py-3"></div>
<div class="col-md-10 mx-auto">
   <div class="card">
      <div class="card-body">
         <h3 class="mb-4">Crear paciente</h3>
         {!! Form::open(['route' => 'paciente.create', 'autocomplete' => 'off']) !!}

            @include('paciente.form')

            {!! Form::submit('Crear paciente', ['class' => 'btn btn-primary']) !!}


         {!! Form::close() !!}
      </div>
   </div>
</div>

@endsection