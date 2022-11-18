{{--  ['nombre_y_apellido', 'dni', 'localidad', 'domicilio',
      'telefono', 'detalles', 'area_id']; --}}
<div class="form-group pb-3">
   {!! Form::label('nombre_y_apellido', 'Nombre y apellido:') !!}
   {!! Form::text('nombre_y_apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre y apellido del paciente']) !!}
   @error('nombre_y_apellido')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>

<div class="form-group pb-3">
   {!! Form::label('dni', 'Dni:') !!}
   {!! Form::number('dni', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el dni del paciente']) !!}
   @error('dni')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>

<div class="form-group pb-3">
   {!! Form::label('localidad', 'Localidad (Opcional):') !!}
   {!! Form::text('localidad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el localidad del paciente']) !!}
   @error('localidad')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>

<div class="form-group pb-3">
   {!! Form::label('domicilio', 'Domicilio (Opcional):') !!}
   {!! Form::text('domicilio', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el domicilio del paciente']) !!}
   @error('domicilio')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>

<div class="form-group pb-3">
   {!! Form::label('telefono', 'Teléfono (Opcional):') !!}
   {!! Form::number('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono del paciente']) !!}
   @error('telefono')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>

{{-- <div class="form-group pb-3">
   {!! Form::label('area_id', 'Exposiciones:') !!}
   <div class="mt-n2 mb-2">
      <small>Seleccione el area las exposiciones que son parte de la ruta</small>
   </div>
   @foreach ($areas as $area)
       {!! Form::checkbox('areas[]', $area->id, null) !!}
       {{$area->title}}
       <br>
   @endforeach
   @error('exposicions')
       <div class="mt-3 alert alert-danger">
           {{$message}}
       </div>
   @enderror
</div>
 --}}

<div class="form-group">
    {!! Form::label('area_id', 'Area') !!}
    {!! Form::select('area_id', $areas, null, ['class' => 'form-control']) !!}
    @error('area_id')
        <div class="mt-3 alert alert-danger">
            {{$message}}
        </div>
    @enderror
</div>

<div class="form-group pb-3">
   {!! Form::label('enfermeros', 'Enfermeros:') !!}
   <div class="mt-n2 mb-2">
      <small>Seleccione los enfermeros encargados del paciente</small>
   </div>
   @foreach ($enfermeros as $enfermero)
       {!! Form::checkbox('enfermeros[]', $enfermero->id, null) !!}
       {{$enfermero->nombre_y_apellido}}
       <br>
   @endforeach
   @error('enfermeros')
       <div class="mt-3 alert alert-danger">
           {{$message}}
       </div>
   @enderror
</div>




<div class="form-group pb-3">
   {!! Form::label('detalles', 'Detalles (Opcional):') !!}
   {!! Form::textarea('detalles', null, ['class' => 'form-control', 'placeholder' => 'Escriba detalles']) !!}
   @error('detalles')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>
