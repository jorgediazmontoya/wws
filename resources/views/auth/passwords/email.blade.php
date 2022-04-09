@extends('layouts.register')

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
            <h3 class="login-subtitle d-flex justify-content-center">a los mejores precios y ubicaciones de farmacias</h3>
          </div>
          <div class="col-10 col-md-8 login-form">
            <form action="" method="post" class="mt-3">
              <div class="input-group">
                <input type="email" class="form-control" id="login-email" aria-describedby="Ingresa tu e-mail" placeholder="Ingresa tu e-mail">
              </div>
              <div class="mt-3">
                <button type="submit" class="button button-dark w-100">Recuperar contraseña</button>
                <a href="/login" class="link-dark mt-3 mb-4 w-100 d-flex justify-content-center" rel="noopener noreferrer">Iniciar sesión</a>
                <a href="/register" class="link-dark mt-3 mb-4 w-100 d-flex justify-content-center" rel="noopener noreferrer">Registrarse</a>
              </div>
            </form>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- <div class="aimeos container auth">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ airoute('password.email') }}">
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
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
