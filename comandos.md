me puedes ayudar con algo aqui?

@extends('layouts.app')

@section('title', 'Crear Estudiante')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
    <br>
    <div class="container" style="max-width: 90%; background-color: #c7c7c7; padding: 80px; border-radius: 8px;">
        <h2>Crear carnet</h2>
        <hr size="8px" color="black" />
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">Nombre:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Apellido:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="rol">Seleccione un rol</label>
                        <select id="rol" name="rol" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="Estudiante">Estudiante</option>
                            <option value="Docente">Docente</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Directivo">Directivo</option>
                            <option value="Obrero">Obrero</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="grade">Seleccione el año de instrucción:</label>
                        <select id="grade" name="grade" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="1er Año">1er Año</option>
                            <option value="2do Año">2do Año</option>
                            <option value="3er Año">3er Año</option>
                            <option value="4to Año">4to Año</option>
                            <option value="5to Año">5to Año</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section">Seleccione seccion instrucción:</label>
                        <select id="section" name="section" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="Unica">Unica</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="photo">Fotografía:</label>
                        <label for="photo" class="custum-file-upload">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                            fill=""></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="text">
                                <span>por favor solo agrege archivos (.jpg)</span>
                            </div>
                            <input id="photo" type="file" name="photo" required>
                        </label>
                        @if ($errors->has('photo'))
                            <span class="text-danger">{{ $errors->first('photo') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <hr size="8px" color="black">
            <button type="submit" class="btn btn-primary" center>Enviar información</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rolSelect = document.getElementById('rol');
            const gradeSelect = document.getElementById('grade');
            const sectionSelect = document.getElementById('section');
            const photoInput = document.getElementById('photo');
            const photoPreview = document.getElementById('photo-preview');
            const photoPlaceholder = document.querySelector('.photo-placeholder');

            function toggleGradeSection() {
                if (rolSelect.value === 'Estudiante') {
                    gradeSelect.disabled = false;
                    sectionSelect.disabled = false;
                } else {
                    gradeSelect.disabled = true;
                    sectionSelect.disabled = true;
                }
            }

            rolSelect.addEventListener('change', toggleGradeSection);
            toggleGradeSection();

            photoInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        photoPreview.src = e.target.result;
                        photoPreview.style.display = 'block';
                        photoPlaceholder.style.display = 'none';
                    }
                    reader.readAsDataURL(file);
                } else {
                    photoPreview.style.display = 'none';
                    photoPlaceholder.style.display = 'block';
                }
            });
        });
    </script>

    <style>
        .custum-file-upload {
            height: 200px;
            width: 660px;
            display: flex;
            flex-direction: column;
            align-items: space-between;
            gap: 20px;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            border: 2px dashed #e8e8e8;
            background-color: #555151;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0px 48px 35px -48px #e8e8e8;
        }

        .custum-file-upload .icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .icon svg {
            height: 80px;
            fill: #e8e8e8;
        }

        .custum-file-upload .text {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .text span {
            font-weight: 400;
            color: #e8e8e8;
        }

        .custum-file-upload input {
            display: none;
        }

        .photo-upload {
            border: 2px dashed #000000;
            padding: 100px;
            text-align: center;
            position: relative;
            cursor: pointer;
        }

        .photo-placeholder {
            font-size: 16px;
            color: #aaa;
        }

        #photo-preview {
            max-width: 100%;
            max-height: 150px;
            margin-top: 10px;
        }
    </style>
@endsection


1 este es create.blade.php (actulamente)
2 me gustaria que las fotos que se carguen puedan visualizarse como una miniatura
3 me gustaria agregar a la carga de fotografias la logica para que solo puedan subirse archivos de tipo fotografia nada mas , adicionalmente poder agregar un boton que me permita cancelar la carga del archivo y una barra de progreso que indique si la carga del archivo se realizo correctamente o no , al cargar al 100% la barra deberia poder retornar un mensaje que diga la carga es exitosa y debajo de la barra de progreso al lado del boton de cancelar se muestre si es exitosa la opcion de carga del archivo  sino el boton va a retornar un mensaje con un color de alerta que retorne el mensaje de repetir.
4 sobre la logica que ya existe para validar si es un estudiante bueno aqui viene algo mas para agregar si es un estudiante o no por ejemplo si en la seleccion del año de instruccion y la seccion de instruccion como ya sabemos que el campos es obligatorio vas a ayudarme con dos cosas.
5 necesito que el contenedor del formulario se autoajuste a la pantalla y no quede por debajo para que no haya necesidad de deslizar hacia abajo 

la primera es que si es alumno tiene que seleccionar año y seccion de instruccion correcto?
si el rol es distinto de estudiante igualmente va a permitirle avanzar con el proceso ya que el sistema lo utilizaran para generar carnets


=====================================================================

{{-- <div class="col-lg-3 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Correo</h3>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control border-0 py-4" placeholder="Nombre" required="required" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control border-0 py-4" placeholder="Tu correo" required="required" />
                </div>
                <div>
                    <button class="btn btn-primary btn-block border-0 py-3" type="submit">Enviar</button>
                </div>
            </form>
        </div> --}}



NIXPACK_BUILD_CMD=composer install && yarn && yarn prod && php artisan optimize && php artisan route:cache && php artisan view:cache && php artisan migrate --force


necesito que acomodemos algo en la logica de esta vista

@extends('layouts.app')

@section('title', 'Crear Estudiante')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
    <br>
    <div class="container" style="max-width: 90%; background-color: #c7c7c7; padding: 80px; border-radius: 8px;">
        <h2>Crear carnet</h2>
        <hr size="8px" color="black" />
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">Nombre:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Apellido:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="rol">Seleccione un rol</label>
                        <select id="rol" name="rol" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="Estudiante">Estudiante</option>
                            <option value="Docente">Docente</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Directivo">Directivo</option>
                            <option value="Obrero">Obrero</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="grade">Seleccione el año de instrucción:</label>
                        <select id="grade" name="grade" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="1er Año">1er Año</option>
                            <option value="2do Año">2do Año</option>
                            <option value="3er Año">3er Año</option>
                            <option value="4to Año">4to Año</option>
                            <option value="5to Año">5to Año</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section">Seleccione seccion instrucción:</label>
                        <select id="section" name="section" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="Unica">Unica</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="photo">Fotografía:</label>
                        <label for="photo" class="custum-file-upload">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                            fill=""></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="text">
                                <span>por favor solo agrege archivos (.jpg)</span>
                            </div>
                            <input id="photo" type="file" name="photo" required>
                        </label>
                        @if ($errors->has('photo'))
                            <span class="text-danger">{{ $errors->first('photo') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <hr size="8px" color="black">
            <button type="submit" class="btn btn-primary" center>Enviar información</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rolSelect = document.getElementById('rol');
            const gradeSelect = document.getElementById('grade');
            const sectionSelect = document.getElementById('section');
            const photoInput = document.getElementById('photo');
            const photoPreview = document.getElementById('photo-preview');
            const photoPlaceholder = document.querySelector('.photo-placeholder');

            function toggleGradeSection() {
                if (rolSelect.value === 'Estudiante') {
                    gradeSelect.disabled = false;
                    sectionSelect.disabled = false;
                } else {
                    gradeSelect.disabled = true;
                    sectionSelect.disabled = true;
                }
            }

            rolSelect.addEventListener('change', toggleGradeSection);
            toggleGradeSection();

            photoInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        photoPreview.src = e.target.result;
                        photoPreview.style.display = 'block';
                        photoPlaceholder.style.display = 'none';
                    }
                    reader.readAsDataURL(file);
                } else {
                    photoPreview.style.display = 'none';
                    photoPlaceholder.style.display = 'block';
                }
            });
        });
    </script>

    <style>
        .custum-file-upload {
            height: 200px;
            width: 660px;
            display: flex;
            flex-direction: column;
            align-items: space-between;
            gap: 20px;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            border: 2px dashed #e8e8e8;
            background-color: #555151;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0px 48px 35px -48px #e8e8e8;
        }

        .custum-file-upload .icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .icon svg {
            height: 80px;
            fill: #e8e8e8;
        }

        .custum-file-upload .text {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .text span {
            font-weight: 400;
            color: #e8e8e8;
        }

        .custum-file-upload input {
            display: none;
        }

        .photo-upload {
            border: 2px dashed #000000;
            padding: 100px;
            text-align: center;
            position: relative;
            cursor: pointer;
        }

        .photo-placeholder {
            font-size: 16px;
            color: #aaa;
        }

        #photo-preview {
            max-width: 100%;
            max-height: 150px;
            margin-top: 10px;
        }
    </style>
@endsection


vamos a hacer que en el momento que se seleccione el rol de estudiante de forma automatica retorne un modal que indique lo siguiente;

El rol especificado para el carnet es estudiante a continuacion debe seleccionar el año y la seccion a la que pertenece si aplica (internamente debe poder validarse )

en cambio si la persona a llenar el formulario utiliza un rol distinto de  estudiante el modal debe retornar lo siguiente;

el rol especificado esta exonerado de seleccionar grado de instruccion y seccion (internamente debe poder permitir y continuar con el proceso )

es decir para roles distintos a estudiantes 

<div class="form-group">
                        <label for="grade">Seleccione el año de instrucción:</label>
                        <select id="grade" name="grade" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="1er Año">1er Año</option>
                            <option value="2do Año">2do Año</option>
                            <option value="3er Año">3er Año</option>
                            <option value="4to Año">4to Año</option>
                            <option value="5to Año">5to Año</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section">Seleccione seccion instrucción:</label>
                        <select id="section" name="section" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="Unica">Unica</option>
                        </select>
                    </div>
                </div>

esta parte del codigo no va a ser requerido , asi mismo tambien debe entenderlo la base de datos.

por otro lado esta seccion del codigo debe autoajustar su tamaño siempre que la pantalla sea distinta , porque he visto que en otras pantallas este recuadro esta por encima del formulario y no dentro del contenedor asi que cuando se auto ajusta se superpone al formulario y no se autoajusta al tamaño del mismo.

<div class="col-md-6">
                    <div class="form-group">
                        <label for="photo">Fotografía:</label>
                        <label for="photo" class="custum-file-upload">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                            fill=""></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="text">
                                <span>por favor solo agrege archivos (.jpg)</span>
                            </div>
                            <input id="photo" type="file" name="photo" required>
                        </label>
                        @if ($errors->has('photo'))
                            <span class="text-danger">{{ $errors->first('photo') }}</span>
                        @endif
                    </div>
                </div>

aqui tienes el codigo para que puedas hacer la adecucion con lo que te plantee (create.blade.php)

@extends('layouts.app')

@section('title', 'Crear Estudiante')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
    <br>
    <div class="container" style="max-width: 90%; background-color: #c7c7c7; padding: 80px; border-radius: 8px;">
        <h2>Crear carnet</h2>
        <hr size="8px" color="black" />
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">Nombre:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Apellido:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="rol">Seleccione un rol</label>
                        <select id="rol" name="rol" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="Estudiante">Estudiante</option>
                            <option value="Docente">Docente</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Directivo">Directivo</option>
                            <option value="Obrero">Obrero</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="grade">Seleccione el año de instrucción:</label>
                        <select id="grade" name="grade" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="1er Año">1er Año</option>
                            <option value="2do Año">2do Año</option>
                            <option value="3er Año">3er Año</option>
                            <option value="4to Año">4to Año</option>
                            <option value="5to Año">5to Año</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section">Seleccione seccion instrucción:</label>
                        <select id="section" name="section" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="Unica">Unica</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="photo">Fotografía:</label>
                        <label for="photo" class="custum-file-upload">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                            fill=""></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="text">
                                <span>por favor solo agrege archivos (.jpg)</span>
                            </div>
                            <input id="photo" type="file" name="photo" required>
                        </label>
                        @if ($errors->has('photo'))
                            <span class="text-danger">{{ $errors->first('photo') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <hr size="8px" color="black">
            <button type="submit" class="btn btn-primary" center>Enviar información</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rolSelect = document.getElementById('rol');
            const gradeSelect = document.getElementById('grade');
            const sectionSelect = document.getElementById('section');
            const photoInput = document.getElementById('photo');
            const photoPreview = document.getElementById('photo-preview');
            const photoPlaceholder = document.querySelector('.photo-placeholder');

            function toggleGradeSection() {
                if (rolSelect.value === 'Estudiante') {
                    gradeSelect.disabled = false;
                    sectionSelect.disabled = false;
                } else {
                    gradeSelect.disabled = true;
                    sectionSelect.disabled = true;
                }
            }

            rolSelect.addEventListener('change', toggleGradeSection);
            toggleGradeSection();

            photoInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        photoPreview.src = e.target.result;
                        photoPreview.style.display = 'block';
                        photoPlaceholder.style.display = 'none';
                    }
                    reader.readAsDataURL(file);
                } else {
                    photoPreview.style.display = 'none';
                    photoPlaceholder.style.display = 'block';
                }
            });
        });
    </script>

    <style>
        .custum-file-upload {
            height: 200px;
            width: 660px;
            display: flex;
            flex-direction: column;
            align-items: space-between;
            gap: 20px;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            border: 2px dashed #e8e8e8;
            background-color: #555151;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0px 48px 35px -48px #e8e8e8;
        }

        .custum-file-upload .icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .icon svg {
            height: 80px;
            fill: #e8e8e8;
        }

        .custum-file-upload .text {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .text span {
            font-weight: 400;
            color: #e8e8e8;
        }

        .custum-file-upload input {
            display: none;
        }

        .photo-upload {
            border: 2px dashed #000000;
            padding: 100px;
            text-align: center;
            position: relative;
            cursor: pointer;
        }

        .photo-placeholder {
            font-size: 16px;
            color: #aaa;
        }

        #photo-preview {
            max-width: 100%;
            max-height: 150px;
            margin-top: 10px;
        }
    </style>
@endsection

==============================================================================================

necesito que acomodemos algo en la logica de esta vista

@extends('layouts.app')

@section('title', 'Crear Estudiante')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
    <br>
    <div class="container" style="max-width: 90%; background-color: #c7c7c7; padding: 80px; border-radius: 8px;">
        <h2>Crear carnet</h2>
        <hr size="8px" color="black" />
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">Nombre:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Apellido:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="rol">Seleccione un rol</label>
                        <select id="rol" name="rol" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="Estudiante">Estudiante</option>
                            <option value="Docente">Docente</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Directivo">Directivo</option>
                            <option value="Obrero">Obrero</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="grade">Seleccione el año de instrucción:</label>
                        <select id="grade" name="grade" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="1er Año">1er Año</option>
                            <option value="2do Año">2do Año</option>
                            <option value="3er Año">3er Año</option>
                            <option value="4to Año">4to Año</option>
                            <option value="5to Año">5to Año</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section">Seleccione seccion instrucción:</label>
                        <select id="section" name="section" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="Unica">Unica</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="photo">Fotografía:</label>
                        <label for="photo" class="custum-file-upload">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                            fill=""></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="text">
                                <span>por favor solo agrege archivos (.jpg)</span>
                            </div>
                            <input id="photo" type="file" name="photo" required>
                        </label>
                        @if ($errors->has('photo'))
                            <span class="text-danger">{{ $errors->first('photo') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <hr size="8px" color="black">
            <button type="submit" class="btn btn-primary" center>Enviar información</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rolSelect = document.getElementById('rol');
            const gradeSelect = document.getElementById('grade');
            const sectionSelect = document.getElementById('section');
            const photoInput = document.getElementById('photo');
            const photoPreview = document.getElementById('photo-preview');
            const photoPlaceholder = document.querySelector('.photo-placeholder');

            function toggleGradeSection() {
                if (rolSelect.value === 'Estudiante') {
                    gradeSelect.disabled = false;
                    sectionSelect.disabled = false;
                } else {
                    gradeSelect.disabled = true;
                    sectionSelect.disabled = true;
                }
            }

            rolSelect.addEventListener('change', toggleGradeSection);
            toggleGradeSection();

            photoInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        photoPreview.src = e.target.result;
                        photoPreview.style.display = 'block';
                        photoPlaceholder.style.display = 'none';
                    }
                    reader.readAsDataURL(file);
                } else {
                    photoPreview.style.display = 'none';
                    photoPlaceholder.style.display = 'block';
                }
            });
        });
    </script>

    <style>
        .custum-file-upload {
            height: 200px;
            width: 660px;
            display: flex;
            flex-direction: column;
            align-items: space-between;
            gap: 20px;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            border: 2px dashed #e8e8e8;
            background-color: #555151;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0px 48px 35px -48px #e8e8e8;
        }

        .custum-file-upload .icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .icon svg {
            height: 80px;
            fill: #e8e8e8;
        }

        .custum-file-upload .text {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .text span {
            font-weight: 400;
            color: #e8e8e8;
        }

        .custum-file-upload input {
            display: none;
        }

        .photo-upload {
            border: 2px dashed #000000;
            padding: 100px;
            text-align: center;
            position: relative;
            cursor: pointer;
        }

        .photo-placeholder {
            font-size: 16px;
            color: #aaa;
        }

        #photo-preview {
            max-width: 100%;
            max-height: 150px;
            margin-top: 10px;
        }
    </style>
@endsection


vamos a hacer que en el momento que se seleccione el rol de estudiante de forma automatica retorne un modal que indique lo siguiente;

El rol especificado para el carnet es estudiante a continuacion debe seleccionar el año y la seccion a la que pertenece si aplica (internamente debe poder validarse )

en cambio si la persona a llenar el formulario utiliza un rol distinto de  estudiante el modal debe retornar lo siguiente;

el rol especificado esta exonerado de seleccionar grado de instruccion y seccion (internamente debe poder permitir y continuar con el proceso )

es decir para roles distintos a estudiantes 

<div class="form-group">
                        <label for="grade">Seleccione el año de instrucción:</label>
                        <select id="grade" name="grade" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="1er Año">1er Año</option>
                            <option value="2do Año">2do Año</option>
                            <option value="3er Año">3er Año</option>
                            <option value="4to Año">4to Año</option>
                            <option value="5to Año">5to Año</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section">Seleccione seccion instrucción:</label>
                        <select id="section" name="section" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="Unica">Unica</option>
                        </select>
                    </div>
                </div>

esta parte del codigo no va a ser requerido , asi mismo tambien debe entenderlo la base de datos.

por otro lado esta seccion del codigo debe autoajustar su tamaño siempre que la pantalla sea distinta , porque he visto que en otras pantallas este recuadro esta por encima del formulario y no dentro del contenedor asi que cuando se auto ajusta se superpone al formulario y no se autoajusta al tamaño del mismo.

<div class="col-md-6">
                    <div class="form-group">
                        <label for="photo">Fotografía:</label>
                        <label for="photo" class="custum-file-upload">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                            fill=""></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="text">
                                <span>por favor solo agrege archivos (.jpg)</span>
                            </div>
                            <input id="photo" type="file" name="photo" required>
                        </label>
                        @if ($errors->has('photo'))
                            <span class="text-danger">{{ $errors->first('photo') }}</span>
                        @endif
                    </div>
                </div>

aqui tienes el codigo para que puedas hacer la adecucion con lo que te plantee (create.blade.php)

@extends('layouts.app')

@section('title', 'Crear Estudiante')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('content')
    <br>
    <div class="container" style="max-width: 90%; background-color: #c7c7c7; padding: 80px; border-radius: 8px;">
        <h2>Crear carnet</h2>
        <hr size="8px" color="black" />
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">Nombre:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Apellido:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="rol">Seleccione un rol</label>
                        <select id="rol" name="rol" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="Estudiante">Estudiante</option>
                            <option value="Docente">Docente</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Directivo">Directivo</option>
                            <option value="Obrero">Obrero</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="grade">Seleccione el año de instrucción:</label>
                        <select id="grade" name="grade" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="1er Año">1er Año</option>
                            <option value="2do Año">2do Año</option>
                            <option value="3er Año">3er Año</option>
                            <option value="4to Año">4to Año</option>
                            <option value="5to Año">5to Año</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="section">Seleccione seccion instrucción:</label>
                        <select id="section" name="section" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="Unica">Unica</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="photo">Fotografía:</label>
                        <label for="photo" class="custum-file-upload">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                            fill=""></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="text">
                                <span>por favor solo agrege archivos (.jpg)</span>
                            </div>
                            <input id="photo" type="file" name="photo" required>
                        </label>
                        @if ($errors->has('photo'))
                            <span class="text-danger">{{ $errors->first('photo') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <hr size="8px" color="black">
            <button type="submit" class="btn btn-primary" center>Enviar información</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rolSelect = document.getElementById('rol');
            const gradeSelect = document.getElementById('grade');
            const sectionSelect = document.getElementById('section');
            const photoInput = document.getElementById('photo');
            const photoPreview = document.getElementById('photo-preview');
            const photoPlaceholder = document.querySelector('.photo-placeholder');

            function toggleGradeSection() {
                if (rolSelect.value === 'Estudiante') {
                    gradeSelect.disabled = false;
                    sectionSelect.disabled = false;
                } else {
                    gradeSelect.disabled = true;
                    sectionSelect.disabled = true;
                }
            }

            rolSelect.addEventListener('change', toggleGradeSection);
            toggleGradeSection();

            photoInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        photoPreview.src = e.target.result;
                        photoPreview.style.display = 'block';
                        photoPlaceholder.style.display = 'none';
                    }
                    reader.readAsDataURL(file);
                } else {
                    photoPreview.style.display = 'none';
                    photoPlaceholder.style.display = 'block';
                }
            });
        });
    </script>

    <style>
        .custum-file-upload {
            height: 200px;
            width: 660px;
            display: flex;
            flex-direction: column;
            align-items: space-between;
            gap: 20px;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            border: 2px dashed #e8e8e8;
            background-color: #555151;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0px 48px 35px -48px #e8e8e8;
        }

        .custum-file-upload .icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .icon svg {
            height: 80px;
            fill: #e8e8e8;
        }

        .custum-file-upload .text {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .text span {
            font-weight: 400;
            color: #e8e8e8;
        }

        .custum-file-upload input {
            display: none;
        }

        .photo-upload {
            border: 2px dashed #000000;
            padding: 100px;
            text-align: center;
            position: relative;
            cursor: pointer;
        }

        .photo-placeholder {
            font-size: 16px;
            color: #aaa;
        }

        #photo-preview {
            max-width: 100%;
            max-height: 150px;
            margin-top: 10px;
        }
    </style>
@endsection

necesito que por favor agreges a la logica esto: si el rol es estudiante debes mantener esto en el formulario si la seleccion de rol es diferente de estudiante no debe mostrar esta parte del formulario

<div class="form-group">
    <label for="rol">Seleccione un rol</label>
    <select id="rol" name="rol" class="form-control" required>
        <option value="" disabled selected>Seleccione uno...</option>
        <option value="Estudiante">Estudiante</option>
        <option value="Docente">Docente</option>
        <option value="Administrativo">Administrativo</option>
        <option value="Directivo">Directivo</option>
        <option value="Obrero">Obrero</option>
    </select>
</div>
<div class="form-group">
    <label for="grade">Seleccione el año de instrucción:</label>
    <select id="grade" name="grade" class="form-control">
        <option value="" disabled selected>Seleccione uno...</option>
        <option value="1er Año">1er Año</option>
        <option value="2do Año">2do Año</option>
        <option value="3er Año">3er Año</option>
        <option value="4to Año">4to Año</option>
        <option value="5to Año">5to Año</option>
    </select>
</div>

y por favor no te olvides de el estilo que posee la carga de archivos su diseño es importante mantenerlo

============================


a ver para que me entiendas por favor la parte que necesito que corrijas tiene que ver con la parte donde uno hace la carga del archivo.

@extends('layouts.app')

@section('title', 'Crear Estudiante')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@section('styles')
    <style>
        .container {
            max-width: 90%;
            background-color: #c7c7c7;
            padding: 80px;
            border-radius: 8px;
            margin: auto;
        }

        .custum-file-upload:hover {
            background-color: #f1f1f1;
        }

        .custum-file-upload {
            height: 200px;
            width: 660px;
            display: flex;
            flex-direction: column;
            align-items: space-between;
            gap: 20px;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            border: 2px dashed #e8e8e8;
            background-color: #555151;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0px 48px 35px -48px #e8e8e8;
        }

        .custum-file-upload .icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .icon svg {
            height: 80px;
            fill: #e8e8e8;
        }

        .custum-file-upload .text {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .custum-file-upload .text span {
            font-weight: 400;
            color: #e8e8e8;
        }

        .custum-file-upload input {
            display: none;
        }

        .photo-upload {
            border: 2px dashed #000000;
            padding: 100px;
            text-align: center;
            position: relative;
            cursor: pointer;
        }

        .photo-placeholder {
            font-size: 16px;
            color: #aaa;
        }

        #photo-preview {
            max-width: 100%;
            max-height: 150px;
            margin-top: 10px;
        }

        .modal-content {
            background-color: #fff;
            border-radius: 4px;
            padding: 20px;
        }

        .modal-header,
        .modal-footer {
            border: none;
        }

        .modal-title {
            font-weight: bold;
        }

        .close {
            font-size: 1.4rem;
            color: #333;
            opacity: 1;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Estilo para la alerta de errores */
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border: 1px solid #f5c6cb;
            border-radius: 4px;
            margin-bottom: 20px;
        }
    </style>
@endsection

@section('content')
    <br>
    <div class="container" style="max-width: 90%; background-color: #c7c7c7; padding: 80px; border-radius: 8px;">
        <h2>Crear carnet</h2>
        <hr size="8px" color="black" />
        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="first_name">Nombre:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Apellido:</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="rol">Seleccione un rol</label>
                        <select id="rol" name="rol" class="form-control" required>
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="Estudiante">Estudiante</option>
                            <option value="Docente">Docente</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Directivo">Directivo</option>
                            <option value="Obrero">Obrero</option>
                        </select>
                    </div>
                    <div class="form-group" id="grade-group">
                        <label for="grade">Seleccione el año de instrucción:</label>
                        <select id="grade" name="grade" class="form-control">
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="1er Año">1er Año</option>
                            <option value="2do Año">2do Año</option>
                            <option value="3er Año">3er Año</option>
                            <option value="4to Año">4to Año</option>
                            <option value="5to Año">5to Año</option>
                        </select>
                    </div>
                    <div class="form-group" id="section-group">
                        <label for="section">Seleccione seccion instrucción:</label>
                        <select id="section" name="section" class="form-control">
                            <option value="" disabled selected>Seleccione uno...</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="Unica">Unica</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="photo">Fotografía:</label>
                        <label for="photo" class="custom-file-upload">
                            <div class="icon">
                                <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                            fill=""></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="text">
                                <span>por favor solo agrege archivos (.jpg)</span>
                            </div>
                            <input id="photo" type="file" name="photo" required>
                        </label>
                        @if ($errors->has('photo'))
                            <span class="text-danger">{{ $errors->first('photo') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <hr size="8px" color="black">
            <button type="submit" class="btn btn-primary" center>Enviar información</button>
        </form>
    </div>

    <!-- Modales -->
    <div class="modal fade" id="modalEstudiante" tabindex="-1" role="dialog" aria-labelledby="modalEstudianteLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEstudianteLabel">Información requerida</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    El rol especificado para el carnet es estudiante. A continuación debe seleccionar el año y la sección a
                    la que pertenece si aplica.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalNoEstudiante" tabindex="-1" role="dialog"
        aria-labelledby="modalNoEstudianteLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalNoEstudianteLabel">Información</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    El rol especificado está exonerado de seleccionar grado de instrucción.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const rolSelect = document.getElementById('rol');
            const gradeGroup = document.getElementById('grade-group');
            const sectionGroup = document.getElementById('section-group');
            const modalEstudiante = new bootstrap.Modal(document.getElementById('modalEstudiante'));
            const modalNoEstudiante = new bootstrap.Modal(document.getElementById('modalNoEstudiante'));

            rolSelect.addEventListener('change', function() {
                const selectedRole = rolSelect.value;
                if (selectedRole === 'Estudiante') {
                    gradeGroup.style.display = 'block';
                    sectionGroup.style.display = 'block';
                    modalEstudiante.show();
                } else {
                    gradeGroup.style.display = 'none';
                    sectionGroup.style.display = 'none';
                    modalNoEstudiante.show();
                }
            });

            // Initialize visibility on page load
            if (rolSelect.value === 'Estudiante') {
                gradeGroup.style.display = 'block';
                sectionGroup.style.display = 'block';
            } else {
                gradeGroup.style.display = 'none';
                sectionGroup.style.display = 'none';
            }
        });
    </script>


@endsection

este es el codigo que deberias incorporar para que se pueda visualizar correctamente por favor integralo al codigo como debe ser tomando en cuenta todo lo antes mencionado y que es un proyecto de laravel

por favor optimiza todo y mejoralo.

<label for="file" class="custum-file-upload">
    <div class="icon">
        <svg viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                    fill=""></path>
            </g>
        </svg>
    </div>
    <div class="text">
        <span>Click to upload image</span>
    </div>
    <input id="file" type="file">
</label>

<style>
    .custum-file-upload {
        height: 200px;
        width: 300px;
        display: flex;
        flex-direction: column;
        align-items: space-between;
        gap: 20px;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        border: 2px dashed #e8e8e8;
        background-color: #212121;
        padding: 1.5rem;
        border-radius: 10px;
        box-shadow: 0px 48px 35px -48px #e8e8e8;
    }

    .custum-file-upload .icon {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .custum-file-upload .icon svg {
        height: 80px;
        fill: #e8e8e8;
    }

    .custum-file-upload .text {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .custum-file-upload .text span {
        font-weight: 400;
        color: #e8e8e8;
    }

    .custum-file-upload input {
        display: none;
    }
</style>

