@extends('layouts.login')

@section('content')
<div class="login-container login">
    <div class="row login-row">
        <div class="col-md-6 login-left-section d-none d-sm-block">
            <div class="col-10 login-logo"></div>
            <div class="col-10 login-header-pc w-100 pe-4">
                <h1>Ingresa y accede</h1>
                <h3>a los mejores precios y</h3>
                <h3>ubicaciones de farmacias</h3>
            </div>
        </div>
        <div class="col-md-6 login-right-section">
            <div class="row justify-content-center login-right-section-row">
                <div class="col-10 login-header d-sm-none d-sm-block">
                    <h1 class="login-title d-flex justify-content-center">Ingresa y Accede</h1>
                    <h3 class="login-subtitle d-flex justify-content-center">a los mejores precios y ubicaciones de
                        farmacias</h3>
                </div>
                <div class="col-10 col-md-8 login-form">
                    <form action="{{ airoute('login') }}" method="POST" class="mt-3">
                        @csrf
                        <div class="input-group">
                            <span class="icon"><i class="bi-envelope-fill"></i></span>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="login-email" aria-describedby="Ingresa tu e-mail" placeholder="Ingresa tu e-mail"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-group">
                            <span class="icon"><i class="bi-lock-fill"></i></span>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="pass" placeholder="Ingrese su contraseña" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="button button-dark w-100">Iniciar Sesión</button>
                            @if (Route::has('password.request'))
                            <a href="{{ airoute('password.request') }}"
                                class="link-dark mt-3 mb-4 w-100 d-flex justify-content-center"
                                rel="noopener noreferrer">Olvidaste tu contraseña</a>
                            @endif
                            <a href="/register" class="link-dark mt-3 mb-4 w-100 d-flex justify-content-center"
                                rel="noopener noreferrer">Registrarse</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
