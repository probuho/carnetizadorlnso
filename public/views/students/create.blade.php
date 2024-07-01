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
