@extends('layouts.app')

{{-- @section('title', 'Acerca de') --}}

@section('content')
    <!-- Aquí comienza la conversión del contenido de about.html a Blade -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Acerca de</h3>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <img class="img-fluid rounded mb-5 mb-lg-0" src="img/about-1.jpg" alt="">
                        </div>
                        <div class="col-lg-7">
                            <p class="section-title pr-5"><span class="pr-2">Nuestros momentos</span></p>
                            <h1 class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam impedit aut saepe. Corrupti doloribus porro consequuntur aliquid ut ullam doloremque quae, fuga dicta facere quasi vel debitis velit id accusamus.</h1>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, deleniti ipsum hic eum nam provident vero illo consectetur laboriosam, asperiores quam adipisci laudantium molestiae iste quod similique doloribus neque. Ab.</p>
                            <div class="row pt-2 pb-4">
                                <div class="col-6 col-md-4">
                                    <img class="img-fluid rounded" src="img/about-2.jpg" alt="">
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
            <!-- El contenido específico de about.html va aquí -->
            {{-- <!-- Asegúrate de usar {{ asset('ruta/a/tu/recurso') }} para cargar recursos estáticos --> --}}
        </div>
    </div>
    <!-- Aquí termina la conversión -->
@endsection