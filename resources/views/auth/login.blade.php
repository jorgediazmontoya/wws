@extends('layouts.register')

@section('content')

<div class="login-container">
  <div class="row row-login">
    <div class="col-md-6 login-left-section d-none d-sm-block">
    </div>
    <div class="col-md-6 login-section">
      <div class="login-section-inner">
        <div class="row justify-content-center">
          <div class="col-10 first-section">
            <h1 class="login-title d-flex justify-content-center">Regístrate y Accede</h1>
            <h3 class="login-subtitle d-flex justify-content-center">a los mejores precios y ubicaciones de farmacias</h3>
          </div>
          <div class="col-10 second-section">
            <h1 class="main-title">Iniciar sesión</h1>
            <form action="" method="post" class="mt-3">
              <div class="form-group mt-2">
                <label for="login-email">E-mail:</label>
                <input type="email" class="form-control login-form-control" id="login-email" aria-describedby="emailHelp" placeholder="Ingresa tu e-mail">
              </div>
              <div class="form-group mt-2">
              <label for="login-pass">Contraseña:</label>
                <input type="password" class="form-control login-form-control" id="login-pass" placeholder="Ingrese su contraseña">
              </div>
              <div class="mt-4 mb-4">
                <a href="/password/reset" class="link-dark" rel="noopener noreferrer">Olvidaste tu contraseña</a>
              </div>
              <div class="mt-4">
                <button type="submit" class="button button-light button-login w-100">Iniciar Sesión</button>
                <a href="/register" class="button button-dark mt-3 w-100" rel="noopener noreferrer">Registrarse</a>
              </div>
            </form>
          </div>
          <div class="login-bottom">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- <div class="aimeos container auth">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ airoute('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-5 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-5"></div>
                            <div class="col-md-7">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="button button-dark">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="button button-link" href="{{ airoute('password.request') }}">
                                        {{ __('Forgot Password') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
