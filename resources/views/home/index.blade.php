@extends('layouts.app')

@section('content')

<div class="home">
  <div class="home-row row justify-content-center">
    <div class="col-lg-9 col-12 py-4">
      <div class="container mx-4">
        <h3 class="title">Encuentra el mejor precio</h3>
        <span>Busca el precio más conveniente comparando en todas las farmacias</span>
        <div class="mt-4">
          <filter-component post-route="{{ route('postSearch') }}"></filter-component>
        </div>
        <div class="d-flex mt-2 justify-content-center">
          <select-component class="mx-2" title="Forma Farmacéutica"
            v-bind:options="{{  json_encode($options['forma']) }}">
          </select-component>
          <select-component class="mx-2" title="Presentación"
            v-bind:options="{{  json_encode($options['presentacion']) }}">
          </select-component>
          <select-component class="mx-2" title="Cantidad" v-bind:options="{{  json_encode($options['cantidad']) }}">
          </select-component>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-12 px-4 home-right-section">
    </div>
  </div>
</div>

@endsection
