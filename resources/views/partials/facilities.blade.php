<div class="container-fluid pt-5">
    <div class="container pb-3">
        <div class="row">
            @foreach([
                ['icon' => 'flaticon-050-fence', 'title' => 'Nuestra Misión Educativa', 'text' => 'Formamos bachilleres integrales, listos para el mundo laboral.'],
                ['icon' => 'flaticon-022-drum', 'title' => 'Flexibilidad y Apoyo', 'text' => 'Educación adaptada a tu ritmo de vida'],
                ['icon' => 'flaticon-030-crayons', 'title' => 'Desarrollo de Habilidades', 'text' => 'Potenciamos tus capacidades para el éxito profesional'],
                ['icon' => 'flaticon-017-toy-car', 'title' => 'Orientación Vocacional', 'text' => 'Te guiamos hacia tu futuro profesional'],
                ['icon' => 'flaticon-025-sandwich', 'title' => 'Educadores Comprometidos', 'text' => 'Contamos con un equipo docente experimentado y dedicado'],
                ['icon' => 'flaticon-047-backpack', 'title' => 'Tecnología e Innovación', 'text' => 'Utilizamos herramientas modernas para una educación efectiva'],
            ] as $index => $item)
                <div class="col-lg-4 col-md-6 pb-1 {{ $index >= 3 ? 'mt-4' : '' }}">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px; height: 100%;">
                        <i class="{{ $item['icon'] }} h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>{{ $item['title'] }}</h4>
                            <p class="m-0">{{ $item['text'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


{{-- <div class="container-fluid pt-5">
    <div class="container pb-3">
        <div class="row">
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Nuestra Misión Educativa</h4>
                        <p class="m-0">Formamos bachilleres integrales, listos para el mundo laboral.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Flexibilidad y Apoyo</h4>
                        <p class="m-0">Educación adaptada a tu ritmo de vida</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Desarrollo de Habilidades</h4>
                        <p class="m-0">Potenciamos tus capacidades para el éxito profesional</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Orientación Vocacional</h4>
                        <p class="m-0">Te guiamos hacia tu futuro profesional</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Educadores Comprometidos</h4>
                        <p class="m-0">Contamos con un equipo docente experimentado y dedicado</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pb-1">
                <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                    <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
                    <div class="pl-4">
                        <h4>Tecnología e Innovación</h4>
                        <p class="m-0">Utilizamos herramientas modernas para una educación efectiva</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
