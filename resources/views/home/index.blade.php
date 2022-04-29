@extends('layouts.app')

@section('content')

@isset($searchResponse)
{{ searchResponse }}
@endisset

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7 col-12">
            <h1>Encuentra el mejor empleo</h1>
            <span>Busca el precio más conveniente comparando en todas las farmacias</span>
            <filter-component post-route="{{ route('postSearch') }}"></filter-component>
            <card-component class="w-100"></card-component>
        </div>
        <div class="col-lg-5 col-12 px-4">
            <img class="w-100" src="{{asset('images/search-img.png')}}" alt="">
            <p class="mt-2">La app más sencilla para buscar y encontrar el mejor precio de tus medicinas comparando y
                poniendo do a
                tu disposición
                las mejores promociones del mercado</p>
        </div>
    </div>
</div>

@endsection
