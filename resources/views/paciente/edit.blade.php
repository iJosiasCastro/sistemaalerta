@extends('layouts.app')

@section('content')
<div class="py-3"></div>
<div class="col-md-10 mx-auto">
    @if (session('info'))
      <div class="alert alert-success">
         <strong>{{session('info')}}</strong>
      </div>
    @endif
   <div class="card">
      <div class="card-body">
         <h3 class="mb-4">Editar paciente</h3>
         {!! Form::model($paciente, ['route' => ['paciente.update', $paciente->id], 'autocomplete' => 'off', 'method' => 'put']) !!}

            @include('paciente.form')

            {!! Form::submit('Editar paciente', ['class' => 'btn btn-primary']) !!}


         {!! Form::close() !!}
      </div>
   </div>
</div>

@endsection