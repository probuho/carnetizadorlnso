@extends('layouts.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Galería</h3>
        </div>
    </div>
    <!-- Header End -->

    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Nuestra Galería</span></p>
                <h1 class="mb-4">Fotos</h1>
            </div>
            
            <div class="row portfolio-container">
                <!-- Aquí puedes iterar sobre tus imágenes si están dinámicamente cargadas -->
                {{-- Imagen 1 --}}
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item" first>
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ asset('img/portfolio-1.jpg') }}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ asset('img/portfolio-1.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Imagen 2 --}}
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item" second>
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ asset('img/portfolio-2.jpg') }}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ asset('img/portfolio-2.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Imagen 3 --}}
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item" third>
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ asset('img/portfolio-3.jpg') }}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ asset('img/portfolio-3.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Imagen 4 --}}
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item" first>
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ asset('img/portfolio-4.jpg') }}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ asset('img/portfolio-4.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Imagen 5 --}}
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item" second>
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ asset('img/portfolio-5.jpg') }}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ asset('img/portfolio-5.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Imagen 6 --}}
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item" third>
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid w-100" src="{{ asset('img/portfolio-6.jpg') }}" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="{{ asset('img/portfolio-6.jpg') }}" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Repite el bloque anterior para cada imagen que quieras mostrar -->
            </div>
        </div>
    </div>
    <!-- Gallery End -->
@endsection