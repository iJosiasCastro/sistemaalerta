{{--  ['nombre_y_apellido', 'dni', 'localidad', 'domicilio',
      'telefono', 'detalles', 'area_id']; --}}
<div class="form-group pb-3">
   {!! Form::label('nombre_y_apellido', 'Nombre y apellido:') !!}
   {!! Form::text('nombre_y_apellido', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre y apellido del enfermero']) !!}
   @error('nombre_y_apellido')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>

<div class="form-group pb-3">
   {!! Form::label('dni', 'Dni:') !!}
   {!! Form::number('dni', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el dni del enfermero']) !!}
   @error('dni')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>

<div class="form-group pb-3">
   {!! Form::label('telefono', 'Teléfono (Opcional):') !!}
   {!! Form::number('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono del enfermero']) !!}
   @error('telefono')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>

<div class="form-group pb-3">
   {!! Form::label('detalles', 'Detalles (Opcional):') !!}
   {!! Form::textarea('detalles', null, ['class' => 'form-control', 'placeholder' => 'Escriba detalles']) !!}
   @error('detalles')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>
