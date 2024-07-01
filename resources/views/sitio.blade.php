@extends('layouts.app')

@section('content')
    {{-- Inclusión de la barra de navegación --}}

    {{-- Header --}}
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Nuestra misión es educarte</h4>
                <h1 class="display-4 font-weight-bold text-white">Nuevo enfoque para la educación con Dios la Virgen y amor
                </h1>
                <a href="https://nicelocal.com.ve/caracas/education/colegio_nuestra_senora_de_lourdes/"
                    class="btn btn-secondary mt-1 py-3 px-5">Leer más</a>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="{{ asset('img/header.png') }}" alt="">
            </div>
        </div>
    </div>

    {{-- Secciones ; facilities, about, classes, team, etc. --}}
    @include('partials.facilities')
    @include('partials.about')
    @include('partials.classes')
    @include('partials.team')

@endsection

@section('scripts')
    @include('partials.scripts')
@endsection
