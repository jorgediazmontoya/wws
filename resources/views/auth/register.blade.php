@extends('layouts.register')

@section('content')

<div class="login-container login">
  <div class="row login-row">
    <div class="col-md-6 login-left-section d-none d-sm-block">
      <div class="col-10 login-logo"></div>
      <div class="col-10 login-header-pc w-100 pe-4">
        <h1>Regístrate y accede</h1>
        <h3>a los mejores precios y</h3>
        <h3>ubicaciones de farmacias</h3>
      </div>
    </div>
    <div class="col-md-6 login-right-section">
      <div class="row justify-content-center login-right-section-row">
        <div class="col-10 login-header d-sm-none d-sm-block">
          <h1 class="login-title d-flex justify-content-center">Regístrate y Accede</h1>
          <h3 class="login-subtitle d-flex justify-content-center">a los mejores precios y ubicaciones de farmacias</h3>
        </div>
        <div class="col-10 col-md-8 login-form">
          <form action="" method="post">
            <div class="input-group">
              <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
              <input type="text" class="form-control" id="login-name" placeholder="Ingresa tu nombre">
            </div>
            <div class="input-group">
              <input type="password" class="form-control" id="login-pass" placeholder="Ingresa tu contraseña">
            </div>
            <div class="input-group">
              <input type="password" class="form-control" id="login-pass" placeholder="Repite tu contraseña">
            </div>
            <div class="input-group">
              <input type="email" class="form-control" id="login-email" aria-describedby="emailHelp" placeholder="Ingresa tu email">
            </div>
            <div class="select-country">
              <select name="country" class="countries order-alpha presel-EC group-continents group-order-alpha form-select" id="countryId">
                <option value="">Seleccionar País</option>
              </select>
            </div>
            <div class="select-state">
              <select name="state" class="states form-select" id="stateId">
                <option value="">Seleccionar Estado o Provicia</option>
              </select>
            </div>
            <div class="select-city">
              <select name="city" class="cities form-select" id="cityId">
                <option value="">Seleccionar Ciudad</option>
              </select>
            </div>
            <div class="birthday-date input-group">
              <input type="text" class="form-select" id="date" name="date" placeholder="Fecha de nacimiento"/>
            </div>
            <div class="form-check terms-and-conditions">
              <input type="checkbox" class="form-check-input" id="login-terms">
              <label class="form-check-label mt-1 ms-2" for="login-terms">Estoy de acuerdo con los <b>términos y condiciones</b></label>
            </div>
            <div class="mt-4">
              <button type="submit" class="button button-dark w-100">Registrarse</button>
              <a href="/login" class="link-dark mt-3 mb-4 w-100 d-flex justify-content-center"  rel="noopener noreferrer">Ya tengo cuenta</a>
            </div>
          </form>
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

                        <div class="input-group row">
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

                        <div class="input-group row">
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

                        <div class="input-group row">
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

                        <div class="input-group row">
                            <label for="password-confirm" class="col-md-5 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="{{ __('Repeat password') }}">
                            </div>
                        </div>

                        <div class="input-group row">
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
