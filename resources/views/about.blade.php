@extends('layouts.app')

{{-- @section('title', 'Acerca de') --}}

@section('content')
    <!-- Sección "Nosotros" con imagen de fondo -->
    <div class="container-fluid bg-primary mb-5" style="background-image: url('img/about-bg.jpg'); background-size: cover; background-position: center; opacity: 0.8;">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Nosotros</h3>
        </div>
    </div>

    <!-- Sección de Historia, Misión y Visión -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('img/historia.jpg') }}" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="d-flex align-items-start">
                        <i class="fa fa-history text-primary fa-2x mr-3"></i>
                        <div>
                            <h3 class="text-primary mb-4">Historia</h3>
                            <p>
                                El Liceo Sur Oeste fue fundado en 1986 en la Casa Presidencial del General Eleazar Pérez Contreras por el profesor Baudilio Blanco. Inspirado por la necesidad de proporcionar una educación de calidad en el corazón de Caracas, el liceo rápidamente se destacó por su compromiso con la excelencia educativa. A lo largo de los años, el liceo ha superado numerosos desafíos, incluyendo la jubilación del Prof. Francisco González en 2020 y la reestructuración bajo la dirección de la Profa. Amaluz Ytriago en 2022. Hoy en día, el Liceo Sur Oeste sigue siendo un faro de educación, con instalaciones mejoradas y una dedicación renovada a la formación de estudiantes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-lg-5 order-lg-2">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('img/mision.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 order-lg-1">
                    <div class="d-flex align-items-start">
                        <i class="fa fa-bullseye text-primary fa-2x mr-3"></i>
                        <div>
                            <h3 class="text-primary mb-4">Misión</h3>
                            <p>
                                Nuestra misión es formar bachilleres en educación media general, preparados para integrarse eficazmente en el campo laboral. Nos enfocamos en desarrollar individuos íntegros, con habilidades humanas y profesionales, listos para contribuir al desarrollo socioeconómico de la región. Garantizamos una educación centrada en el emprendimiento local y regional, con una visión de integración nacional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('img/vision.jpg') }}" alt="">
                </div>
                <div class="col-lg-7">
                    <div class="d-flex align-items-start">
                        <i class="fa fa-eye text-primary fa-2x mr-3"></i>
                        <div>
                            <h3 class="text-primary mb-4">Visión</h3>
                            <p>
                                Aspiramos a ser reconocidos a nivel local, regional y nacional como una institución educativa de excelencia. Nos dedicamos a preparar ciudadanos responsables, respetuosos y cooperativos, capaces de impulsar el desarrollo socioeconómico del país. Nuestra visión es fortalecer la cohesión entre la escuela y la comunidad para lograr un impacto positivo duradero.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .container-fluid.bg-primary {
        position: relative;
        color: white;
        z-index: 1;
    }
    .container-fluid.bg-primary::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Ajusta la opacidad según sea necesario */
        z-index: -1;
    }
</style>
