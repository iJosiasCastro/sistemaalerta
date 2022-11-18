@extends('layouts.app')

@section('content')
<div class="py-3"></div>
<div class="col-md-10 mx-auto">
   <div class="card">
      <div class="card-body">
         <h3 class="mb-4">Crear area</h3>
         {!! Form::open(['route' => 'area.create', 'autocomplete' => 'off']) !!}

            @include('area.form')

            {!! Form::submit('Crear area', ['class' => 'btn btn-primary']) !!}


         {!! Form::close() !!}
      </div>
   </div>
</div>

@endsection