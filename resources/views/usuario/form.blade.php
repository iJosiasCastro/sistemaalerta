<div class="form-group pb-3">
   {!! Form::label('name', 'Nombre y apellido:') !!}
   {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del usuario']) !!}
   @error('name')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>

<div class="form-group pb-3">
   {!! Form::label('email', 'Email:') !!}
   {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email del usuario']) !!}
   @error('email')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>

<div class="form-group">
    {!! Form::label('role', 'Rol') !!}
    {!! Form::select('role', ["admin" => "Administrador", "guest" => "Invitado"], null, ['class' => 'form-control']) !!}
    @error('role')
        <div class="mt-3 alert alert-danger">
            {{$message}}
        </div>
    @enderror
</div>


<div class="form-group pb-3">
   {!! Form::label('password', 'Contraseña:') !!}
   {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese la contraseña del usuario']) !!}
   @error('password')
      <small class="text-danger">{{$message}}</small>
   @enderror
</div>
