@extends('layouts.app')

{{-- @section('title', 'Acerca de') --}}

@section('content')
    <!-- Aquí comienza la conversión del contenido de about.html a Blade -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">hola hermoso</h3>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <img class="img-fluid rounded mb-5 mb-lg-0" src="{{ asset('img/about-1.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-7">
                            <p class="section-title pr-5"><span class="pr-2">Nuestros momentos</span></p>
                            <h1 class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam impedit aut saepe. Corrupti doloribus porro consequuntur aliquid ut ullam doloremque quae, fuga dicta facere quasi vel debitis velit id accusamus.</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, deleniti ipsum hic eum nam provident vero illo consectetur laboriosam, asperiores quam adipisci laudantium molestiae iste quod similique doloribus neque. Ab.</p>
                            <div class="row pt-2 pb-4">
                                <div class="col-6 col-md-4">
                                    <img class="img-fluid rounded" src="{{ asset('img/about-2.jpg') }}" alt="">
                                </div>
                                <div class="col-6 col-md-8">
                                    <ul class="list-inline m-0">
                                        <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Misa de gracias.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Graduaciones.</li>
                                        <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Promociones.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Historia, Visión y Misión -->
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h3 class="text-primary mb-4">Historia</h3>
                    <p>
                        El Liceo Sur Oeste fue creado en el año 1986 con sede en la Casa Presidencial del General Eleazar Pérez Contreras, siendo su
                        director el profesor Baudilio Blanco, en ese año se gradúan 31.023 humanidades y 31022 en ciencias.
                        Transcurren varios años y varios períodos de directores, en el año 2020 sale jubilado el Prof. Francisco González y asume como
                        director interino el Prof. David Mendoza quien era supervisor y en el año 2022, asume la direccion la Profa. Amaluz Ytriago, la
                        biblioteca se reestructura y comienza a funcionar como centro de recursos para el aprendizaje. El departamento de Evaluación y
                        Control de estudio se fusionan, el cual es ubicado en un lugar adecuado como ambiente propio para el trabajo que allí se realiza.
                        Actualmente los estudiantes reciben clase en el edificio principal de la ETC Luis Razzeti, el cual tiene como nombre Edf. Simon Bolívar,
                        se dispone de 6 aulas para atender una poblar de 135 estudientes. Se retoman los actos de graduación y en ese primer año de gestión
                        se sacan los títulos de 2019-19-20-21-22, ya que los años anteriores quedaron pendientes. Se organizan el resumen final y se entregan
                        desde el año 2016 hasta el año 2023.
                    </p>
                </div>

                <div class="col-lg-12 mb-5">
                    <h3 class="text-primary mb-4">Visión</h3>
                    <p>
                        Ser reconocida a nivel local, regional y nacional como una de las casas de formación en preparar ciudadanos tales como la responsabilidad,
                        el respeto, la cooperación, entre otros, en función del desarrollo socio-económico y la productividad del país; tomando en consideración
                        la cohesión efectiva de todos los elementos que conforman la fusión Escuela-Comunidad.
                    </p>
                </div>

                <div class="col-lg-12 mb-5">
                    <h3 class="text-primary mb-4">Misión</h3>
                    <p>
                        Formar bachilleres en educación media general, individuos actos integrales aptos a incorporarse al campo laboral, desempeñando de manera
                        efectiva y eficaz con el componente laboral aprobado por el socio-económico productivo, garantizando su formación humana y profesional
                        centrada en emprendimientos local y regional con visión de integración nacional.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Aquí termina la conversión -->
@endsection
