@extends('layouts.register')

@section('content')
<div class="login-container">
    <div class="row row-login">
      <div class="col-md-6 login-left-section d-none d-sm-block">
      </div>
      <div class="col-md-6 login-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-10 first-section">
              <h1 class="login-title d-flex justify-content-center">Regístrate y Accede</h1>
              <h3 class="login-subtitle d-flex justify-content-center">a los mejores precios y ubicaciones de farmacias</h3>
            </div>
            <div class="col-10 second-section">
              <h1 class="main-title">Registrarse</h1>
              <form action="" method="post" class="mt-3">
                <div class="form-group mt-2">
                  <label for="login-name">Nombre y apellido:</label>
                  <input type="text" class="form-control login-form-control" id="login-name" placeholder="Ingresa tu nombre y apellido">
                </div>
                <div class="form-group mt-2">
                  <label for="login-pass">Contraseña:</label>
                  <input type="password" class="form-control login-form-control" id="login-pass" placeholder="Ingrese su contraseña">
                </div>
                <div class="form-group mt-2">
                  <label for="login-pass">Repite tu Contraseña:</label>
                  <input type="password" class="form-control login-form-control" id="login-pass" placeholder="Ingrese su contraseña">
                </div>
                <div class="form-group mt-2">
                  <label for="login-email">E-mail:</label>
                  <input type="email" class="form-control login-form-control" id="login-email" aria-describedby="emailHelp" placeholder="Ingresa tu e-mail">
                </div>
                <div class="form-check terms-and-conditions mt-2">
                  <input type="checkbox" class="form-check-input" id="login-terms">
                  <label class="form-check-label mt-1 ms-2" for="login-terms">Estoy de acuerdo con los <b>términos y condiciones</b></label>
                </div>
                <div class="mt-4">
                  <button type="submit" class="button button-dark w-100">Registrarse</button>
                  <a href="/login" class="button button-light mt-3 w-100"  rel="noopener noreferrer">Ya tengo cuenta</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<!--<div class="aimeos container auth">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(config('app.shop_registration'))
                    <div class="card-header">{{ __('Merchant registration') }}</div>
                @else
                    <div class="card-header">{{ __('Registration') }}</div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ airoute('register') }}">
                        @csrf

                        <div class="form-group row">
                            @if(config('app.shop_registration'))
                                <label for="code" class="col-md-5 col-form-label text-md-right">{{ __('Account') }}</label>

                                <div class="col-md-7">
                                    <input id="code" type="text" class="form-control @error('code') is-invalid @enderror"
                                        name="code" value="{{ old('code') }}" required autocomplete="off" autofocus
                                        placeholder="{{ __('Characters, numbers and dashes') }}">

                                    @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @else
                                <label for="name" class="col-md-5 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-7">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="off" autofocus
                                        placeholder="{{ __('Your name') }}">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-5 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="{{ __('Valid e-mail address') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-5 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password"
                                    placeholder="{{ __('Eight characters minimum') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-5 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="{{ __('Repeat password') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    @if(config('app.shop_registration'))
                                        {{ __('Register as merchant') }}
                                    @else
                                        {{ __('Register') }}
                                    @endif
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
