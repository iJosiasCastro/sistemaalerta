@extends('layouts.app')

@section('content')
    <div class="py-5"></div>
    <form class="col-md-6 mx-auto" method="POST" action="/login">
        <!-- <ul class="navbar-nav bg-primary h-0 sidebar sidebar-dark accordion mx-auto mb-5" style="min-height: 100%;" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="sidebar-brand-text" style="display: inline !important;">Sistema Alerta</div>
            </a>
        </ul> -->
        <div class="text-center mb-3">
            <img src="{{ asset('logo.png')}}" style="max-width:250px;" alt="">
        </div>
        <h3 class="text-center">Iniciar sesión</h3>
        @csrf
        @if (session('error'))
            <div class="alert alert-danger">
                <strong>{{session('error')}}</strong>
            </div>
        @endif
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <label class="form-label" for="form2Example1">Correo eletronico</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <label class="form-label" for="form2Example2">Contraseña</label>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">
            {{ __('Ingresar') }}
        </button>

        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
    </form>

    </form>
  <div class="py-5"></div>

@endsection