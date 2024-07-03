<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Clases Populares</span></p>
            <h1 class="mb-4">Muestras de nuestra experiencia</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <div class="card-body text-center">
                        <h4 class="card-title">Años de experiencia</h4>
                        <p class="card-text">
                            <span id="years-experience" class="count">0</span> años de experiencia formando bachilleres de calidad
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <div class="card-body text-center">
                        <h4 class="card-title">Estudiantes formados</h4>
                        <p class="card-text">
                            <span id="students-humanities" class="count">0</span> en humanidades<br>
                            <span id="students-sciences" class="count">0</span> en ciencias
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/Grado.jpg" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title">Promociones de grado</h4>
                        <p class="card-text">Celebramos las promociones de los alumnos con el orgullo de saber que serán grandes profesionales</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.7/countUp.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const currentYear = new Date().getFullYear();
        const startYear = 1986;
        const yearsOfExperience = currentYear - startYear;

        const options = {
            duration: 2.5,
            useEasing: true,
            useGrouping: true,
            separator: ',',
            decimal: '.',
        };

        // Contador para los años de experiencia
        const yearsExperienceCounter = new CountUp('years-experience', 0, yearsOfExperience, 0, 2.5, options);
        if (!yearsExperienceCounter.error) {
            yearsExperienceCounter.start();
        } else {
            console.error(yearsExperienceCounter.error);
        }

        // Contador para los estudiantes en humanidades
        const studentsHumanitiesCounter = new CountUp('students-humanities', 0, 31023, 0, 2.5, options);
        if (!studentsHumanitiesCounter.error) {
            studentsHumanitiesCounter.start();
        } else {
            console.error(studentsHumanitiesCounter.error);
        }

        // Contador para los estudiantes en ciencias
        const studentsSciencesCounter = new CountUp('students-sciences', 0, 31022, 0, 2.5, options);
        if (!studentsSciencesCounter.error) {
            studentsSciencesCounter.start();
        } else {
            console.error(studentsSciencesCounter.error);
        }
    });
</script>

{{-- <div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Clases Populares</span></p>
            <h1 class="mb-4">Muestras de nuestra experiencia</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/Antes.jpg" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title">Años de experiencia</h4>
                        <p class="card-text">Tenemos una basta experiencia formando lìderes para el futuro</p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">

                    </div>

                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/Jardin.jpg" alt="">

                    <div class="card-footer bg-transparent py-4 px-5">

                    </div>

                </div>
            </div>
            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/Grado.jpg" alt="">
                    <div class="card-body text-center">
                        <h4 class="card-title">Promociones de grado</h4>
                        <p class="card-text">Celebramos las promociones de los alumnos con el orgullo de saber que ser&aacute;n grandes profesionales</p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">

                    </div>

                </div>
            </div>
        </div>
    </div>
</div> --}}

