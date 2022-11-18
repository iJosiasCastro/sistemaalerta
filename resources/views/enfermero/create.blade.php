@extends('layouts.app')

@section('content')
<div class="py-3"></div>
<div class="col-md-10 mx-auto">
   <div class="card">
      <div class="card-body">
         <h3 class="mb-4">Crear enfermero</h3>
         {!! Form::open(['route' => 'enfermero.create', 'autocomplete' => 'off']) !!}

            @include('enfermero.form')

            {!! Form::submit('Crear enfermero', ['class' => 'btn btn-primary']) !!}


         {!! Form::close() !!}
      </div>
   </div>
</div>

@endsection