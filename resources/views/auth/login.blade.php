@extends('layouts.register')

@section('content')

<div class="login-container">
    <div class="row row-login">
        <div class="col-md-6 login-carousel">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{URL::asset('img/carousel.PNG')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('img/carousel.PNG')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('img/carousel.PNG')}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-6 login-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 d-flex justify-content-end">
                        <button class="button button-dark mr-2">Registrarse</button>
                        <button class="button button-light">Iniciar sesión</button>
                    </div>
                    <div class="col-10">
                        Registrarse o Iniciar sesión
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="login-name">Nombre y apellido:</label>
                                <input type="text" class="form-control login-form-control" id="login-name" placeholder="Ingresa tu nombre y apellido">
                            </div>
                            <div class="form-group">
                                <label for="login-pass">Contraseña:</label>
                                <input type="password" class="form-control login-form-control" id="login-pass" placeholder="Ingrese su contraseña">
                            </div>
                            <div class="form-group">
                                <label for="login-pass">Repite tu Contraseña:</label>
                                <input type="password" class="form-control login-form-control" id="login-pass" placeholder="Ingrese su contraseña">
                            </div>
                            <div class="form-group">
                                <label for="login-email">E-mail:</label>
                                <input type="email" class="form-control login-form-control" id="login-email" aria-describedby="emailHelp" placeholder="Ingresa tu e-mail">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="login-terms">
                                <label class="form-check-label" for="login-terms">Estoy de acuerdo con los <b>términos y condiciones</b></label>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="button button-dark mr-2">Registrarse</button>
                                <a href="" class="link-white"  rel="noopener noreferrer">Ya tengo cuenta</a>
                            </div>
                        </form>
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
