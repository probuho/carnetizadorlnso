@extends('layouts.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Contáctanos</h3>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Contacto de Soporte</span></p>
                <h1 class="mb-4">Llena el formulario para reportar tu incidencia</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7 mb-5">
<<<<<<< HEAD
                    <div class="contact-form border rounded p-4">
=======
<<<<<<< Updated upstream
                    <div class="contact-form">
=======
                    <div class="contact-form border rounded p-4">
>>>>>>> Stashed changes
>>>>>>> 60f3bc006404d2fa0e46bb06932e75651a461077
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                            @csrf
<<<<<<< HEAD
                            <div class="form-group">
=======
<<<<<<< Updated upstream
                            <div class="control-group">
>>>>>>> 60f3bc006404d2fa0e46bb06932e75651a461077
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="cedula">Cédula</label>
                                <input type="text" class="form-control" id="cedula" name="cedula" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="report">Reporte</label>
                                <textarea class="form-control" id="report" name="report" required></textarea>
                            </div>
                            <div class="form-group">
                                <!-- Formulario de carga de archivos -->
                                <div class="file-upload">
                                    <input type="file" name="files[]" multiple id="file-input" class="form-control-file">
                                    <p id="file-upload-text">Haga click para cargar o arrastre la evidencia aquí</p>
                                </div>
                            </div>
                            <!-- Botón confirmar en modal -->
                            <div class="text-center mt-4">
                                <button type="button" id="confirmBtn" class="btn btn-warning">Confirmar</button>
<<<<<<< HEAD
=======
                                <button type="submit" id="sendBtn" class="btn btn-primary" disabled>Enviar</button>
=======
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="cedula">Cédula</label>
                                <input type="text" class="form-control" id="cedula" name="cedula" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="report">Reporte</label>
                                <textarea class="form-control" id="report" name="report" required></textarea>
                            </div>
                            <div class="form-group">
                                <!-- Formulario de carga de archivos -->
                                <div class="file-upload">
                                    <input type="file" name="files[]" multiple id="file-input" class="form-control-file">
                                    <p id="file-upload-text">Haga click para cargar o arrastre la evidencia aquí</p>
                                </div>
                            </div>
                            <!-- Botón confirmar en modal -->
                            <div class="text-center mt-4">
                                <button type="button" id="confirmBtn" class="btn btn-warning">Confirmar</button>
>>>>>>> Stashed changes
>>>>>>> 60f3bc006404d2fa0e46bb06932e75651a461077
                            </div>
                        </form>
                    </div>
                    <!-- Consideraciones como lista -->
                    <div class="mt-4">
                        <p>En el formulario a continuación proporcione la siguiente información:</p>
                        <ul>
                            <li> Título breve y descriptivo del problema</li>
                            <li> Descripción detallada de la incidencia</li>
                            <li> Fecha y hora en que ocurrió el problema</li>
                            <li> Navegador web (si aplica)</li>
                            <li> Si es necesario, adjunte capturas de pantalla o archivos relevantes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Modal -->
    <div id="confirmationModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Tu reporte será atendido en un plazo de 24 a 72 horas hábiles. ¿Deseas continuar?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
<<<<<<< HEAD
                    <button type="button" id="confirmSend" class="btn btn-primary">Enviar</button>
=======
<<<<<<< Updated upstream
                    <button type="button" id="confirmSend" class="btn btn-primary">Confirmar</button>
=======
                    <button type="button" id="confirmSend" class="btn btn-primary">Enviar</button>
>>>>>>> Stashed changes
>>>>>>> 60f3bc006404d2fa0e46bb06932e75651a461077
                </div>
            </div>
        </div>
    </div>
@endsection

<<<<<<< HEAD
@section('styles')
    <style>
        body {
            background: rgba(0,0,0,0.1);
        }
        .contact-form {
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .file-upload {
            position: relative;
            width: 100%;
            border: 2px dashed #ddd;
            border-radius: 4px;
            text-align: center;
            padding: 20px;
            cursor: pointer;
        }
        .file-upload p {
            margin: 0;
            color: #333;
            font-size: 16px;
        }
        .file-upload input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }
        #file-input.form-control-file {
            position: relative;
            opacity: 0;
            cursor: pointer;
        }
    </style>
@endsection

=======
<<<<<<< Updated upstream
>>>>>>> 60f3bc006404d2fa0e46bb06932e75651a461077
@section('scripts')
    <script>
        $(document).ready(function(){
            $('#file-input').change(function () {
                let files = this.files;
                let fileText = files.length + " archivo(s) seleccionado(s)";
                $('#file-upload-text').text(fileText);
            });

            const confirmBtn = document.getElementById('confirmBtn');
<<<<<<< HEAD
=======
            const sendBtn = document.getElementById('sendBtn');
=======
@section('styles')
    <style>
        body {
            background: rgba(0,0,0,0.1);
        }
        .contact-form {
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .file-upload {
            position: relative;
            width: 100%;
            border: 2px dashed #ddd;
            border-radius: 4px;
            text-align: center;
            padding: 20px;
            cursor: pointer;
        }
        .file-upload p {
            margin: 0;
            color: #333;
            font-size: 16px;
        }
        .file-upload input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }
        #file-input.form-control-file {
            position: relative;
            opacity: 0;
            cursor: pointer;
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#file-input').change(function () {
                let files = this.files;
                let fileText = files.length + " archivo(s) seleccionado(s)";
                $('#file-upload-text').text(fileText);
            });

            const confirmBtn = document.getElementById('confirmBtn');
>>>>>>> Stashed changes
>>>>>>> 60f3bc006404d2fa0e46bb06932e75651a461077
            const confirmationModal = $('#confirmationModal');
            const confirmSend = document.getElementById('confirmSend');

            confirmBtn.addEventListener('click', function () {
                confirmationModal.modal('show');
            });

            confirmSend.addEventListener('click', function () {
                confirmationModal.modal('hide');
<<<<<<< HEAD
=======
<<<<<<< Updated upstream
                sendBtn.disabled = false;
=======
>>>>>>> 60f3bc006404d2fa0e46bb06932e75651a461077
                // Simulación de envío de formulario y limpieza
                document.getElementById('name').value = '';
                document.getElementById('cedula').value = '';
                document.getElementById('email').value = '';
                document.getElementById('report').value = '';
                $('#file-upload-text').text('Haga click para cargar o arrastre la evidencia aquí');
                $('#file-input').val('');
                alert('Formulario enviado y limpiado.');
<<<<<<< HEAD
=======
>>>>>>> Stashed changes
>>>>>>> 60f3bc006404d2fa0e46bb06932e75651a461077
            });
        });
    </script>
@endsection
