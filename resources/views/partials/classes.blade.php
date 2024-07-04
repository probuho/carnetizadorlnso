<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contadores Animados</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            /* padding: 25px; */
            /* background-color: #f5f5f5; */
            color: #808080;
            text-align: center;
        }

        .col_fourth {
            width: 30%;
            margin: 1.5%;
            display: inline-block;
            vertical-align: top;
        }

        .wrapper {
            width: 100%;
            margin: 30px auto;
        }

        .counter {
            background-color: #ffffff;
            padding: 20px 0;
            border-radius: 5px;
        }

        .count-title {
            font-size: 40px;
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center;
        }

        .count-text {
            font-size: 13px;
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 0;
            text-align: center;
        }

        .fa-2x {
            margin: 0 auto;
            float: none;
            display: table;
            color: #131313;
        }
    </style>
</head>
<body>

<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Clases Populares</span></p>
            <h1 class="mb-4">Muestras de nuestra experiencia</h1>
        </div>
        <div class="wrapper">
            <div class="counter col_fourth">
                <i class="fas fa-award fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="0" data-speed="1500" id="years-experience"></h2>
                <p class="count-text">Años de experiencia</p>
            </div>

            <div class="counter col_fourth">
                <i class="fas fa-user-graduate fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="31023" data-speed="1500" id="students-humanities"></h2>
                <p class="count-text">Estudiantes en humanidades</p>
            </div>

            <div class="counter col_fourth end">
                <i class="fas fa-user-graduate fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="31022" data-speed="1500" id="students-sciences"></h2>
                <p class="count-text">Estudiantes en ciencias</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    (function ($) {
        $.fn.countTo = function (options) {
            options = options || {};

            return $(this).each(function () {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from: $(this).data('from'),
                    to: $(this).data('to'),
                    speed: $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals: $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof (settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof (settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,               // the number the element should start at
            to: 0,                 // the number the element should end at
            speed: 1000,           // how long it should take to count between the target numbers
            refreshInterval: 100,  // how often the element should be updated
            decimals: 0,           // the number of decimal places to show
            formatter: formatter,  // handler for formatting the value before rendering
            onUpdate: null,        // callback method for every time the element is updated
            onComplete: null       // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function ($) {
        const currentYear = new Date().getFullYear();
        const startYear = 1986;
        const yearsOfExperience = currentYear - startYear;

        // Actualiza los datos
        $('#years-experience').data('to', yearsOfExperience);
        $('#students-humanities').data('to', 31023);
        $('#students-sciences').data('to', 31022);

        // Inicia todos los contadores
        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
</script>

</body>
</html>

{{-- DIVISORRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR --}}

{{-- <div class="container-fluid pt-5">
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
</script> --}}
