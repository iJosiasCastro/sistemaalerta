{{--  ['nombre_y_apellido', 'dni', 'localidad', 'domicilio',
      'telefono', 'detalles', 'area_id']; --}}
<div class="form-group pb-3">
   {!! Form::label('numero_de_area', 'Numero de area:') !!}
   {!! Form::number('numero_de_area', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el numero del area']) !!}
   @error('numero_de_area')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>

<div class="form-group pb-3">
   {!! Form::label('descripcion', 'Descripcion:') !!}
   {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripcion del area']) !!}
   @error('descripcion')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>