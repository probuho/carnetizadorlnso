@extends('layouts.app')

@section('content')
    {{-- Inclusión de la barra de navegación --}}

    {{-- Header --}}
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Educación para el futuro: Tu camino hacia el éxito</h4>
                <h1 class="display-4 font-weight-bold text-white">Formación integral con valores y compromiso</h1>
                <a href="https://nicelocal.com.ve/caracas/education/liceo_nocturno_suroeste/"
                   class="btn btn-secondary mt-1 py-3 px-5">Ubicación</a>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5 header-logo" src="{{ asset('img/header.png') }}" alt="">
            </div>
        </div>
    </div>

    {{-- Secciones ; facilities, about, classes, team, etc. --}}
    @include('partials.facilities')
    @include('partials.about')
    @include('partials.classes')
    @include('partials.team')

    <style>
        .header-logo {
            width: 80%; /* Ajustar el tamaño a un 50% del contenedor */
            max-width: 100%; /* Asegurarse de que no se extienda más allá del contenedor */
            height: auto; /* Mantener la proporción de aspecto */
            padding: 25px 0px 75px 90px;
        }
    </style>
@endsection

@section('scripts')
    @include('partials.scripts')
@endsection

{{-- @extends('layouts.app') --}}
{{--  --}}
{{-- @section('content') --}}
    {{-- Inclusión de la barra de navegación --}}
{{--  --}}
    {{-- Header --}}
    {{-- <div class="container-fluid bg-primary px-0 px-md-5 mb-5"> --}}
        {{-- <div class="row align-items-center px-3"> --}}
            {{-- <div class="col-lg-6 text-center text-lg-left"> --}}
                {{-- <h4 class="text-white mb-4 mt-5 mt-lg-0">Educación para el futuro: Tu camino hacia el éxito</h4> --}}
                {{-- <h1 class="display-4 font-weight-bold text-white">Formación integral con valores y compromiso --}}
                {{-- </h1> --}}
                {{-- <a href="https://nicelocal.com.ve/caracas/education/liceo_nocturno_suroeste/" --}}
                    {{-- class="btn btn-secondary mt-1 py-3 px-5">Ubicación</a> --}}
            {{-- </div> --}}
            {{-- <div class="col-lg-6 text-center text-lg-right"> --}}
                {{-- <img class="img-fluid mt-5" src="{{ asset('img/header.png') }}" alt=""> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    {{-- </div> --}}
{{--  --}}
    {{-- Secciones ; facilities, about, classes, team, etc. --}}
    {{-- @include('partials.facilities') --}}
    {{-- @include('partials.about') --}}
    {{-- @include('partials.classes') --}}
    {{-- @include('partials.team') --}}
{{--  --}}
{{-- @endsection --}}
{{--  --}}
{{-- @section('scripts') --}}
    {{-- @include('partials.scripts') --}}
{{-- @endsection --}}
{{--  --}}
