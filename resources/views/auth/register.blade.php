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
              <span class="icon"><i class="bi-person-fill"></i></span>
              <input type="text" class="form-control" id="login-name" placeholder="Ingresa tu nombre">
            </div>
            <div class="input-group">
              <span class="icon"><i class="bi-lock-fill"></i></span>
              <input type="password" class="form-control" id="login-pass" placeholder="Ingresa tu contraseña">
            </div>
            <div class="input-group">
              <span class="icon"><i class="bi-lock-fill"></i></span>
              <input type="password" class="form-control" id="login-pass" placeholder="Repite tu contraseña">
            </div>
            <div class="input-group">
              <span class="icon"><i class="bi-envelope-fill"></i></span>
              <input type="email" class="form-control" id="login-email" aria-describedby="emailHelp" placeholder="Ingresa tu email">
            </div>
            <div class="input-group select-country">
              <span class="icon"><i class="bi-geo-alt-fill"></i></span>
              <select name="country" class="countries order-alpha presel-EC group-continents group-order-alpha form-select" id="countryId">
                <option value="">Seleccionar País</option>
              </select>
            </div>
            <div class="input-group select-state">
              <span class="icon"><i class="bi-geo-alt-fill"></i></span>
              <select name="state" class="states form-select" id="stateId">
                <option value="">Seleccionar Estado o Provicia</option>
              </select>
            </div>
            <div class="input-group select-city">
              <span class="icon"><i class="bi-geo-alt-fill"></i></span>
              <select name="city" class="cities form-select" id="cityId">
                <option value="">Seleccionar Ciudad</option>
              </select>
            </div>
            <div class="input-group birthday-date input-group">
              <span class="icon"><i class="bi-calendar2-date-fill"></i></span>
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
@endsection
