@extends('layouts.app')

@section('title', 'Vista Previa del Carnet')

@section('content')
    <br>
    <div class="container" style="max-width: 90%; background-color: #f8f9fa; padding: 20px; border-radius: 8px;">
        <h2>Vista Previa del Carnet</h2>
        <hr size="8px" color="black" />
        <div class="row">
            <!-- Primera Columna: Información del Estudiante -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <p><strong>Nombre:</strong> {{ $student->first_name }} {{ $student->last_name }}</p>
                                <p><strong>Correo Electrónico:</strong> {{ $student->email }}</p>
                                <p><strong>Cargo:</strong> {{ $student->rol }}</p>
                                <p><strong>Año/Grado:</strong> {{ $student->grade }}</p>
                                <p><strong>Sección:</strong> {{ $student->section }}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                @if ($student->photo_path)
                                    <img src="{{ asset(Storage::url($student->photo_path)) }}" alt="Foto del estudiante"
                                        class="img-thumbnail"
                                        style="max-width: 100%; max-height: 300px; margin-top: 10px; object-fit: cover;">
                                @else
                                    <p>No se proporcionó fotografía.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Segunda Columna: Botones de Acción y Miniatura del Carnet -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 text-center">
                                <!-- Aquí va la miniatura del carnet generado -->
                                <img src="{{ asset('images/carnet_placeholder.png') }}" alt="Miniatura del Carnet"
                                    class="img-thumbnail" width="200">
                            </div>
                            <div class="col-md-4 text-center">
                                <!-- Botones de acción -->
                                <button onclick="window.print()" class="btn btn-primary" style="display: none;"
                                    id="printButton">Imprimir Carnet</button>
                                <a href="{{ route('students.approve', ['id' => $student->id]) }}" class="btn btn-primary"
                                    id="confirmButton">Confirmar</a>
                                <a href="{{ route('students.create') }}" class="btn btn-secondary"
                                    id="cancelButton">Cancelar</a>
                                <a href="{{ route('students.print', ['id' => $student->id]) }}" class="btn btn-success"
                                    style="display: none;" id="printActionButton">Imprimir</a>
                                <a href="{{ route('students.email', ['id' => $student->id]) }}" class="btn btn-info"
                                    style="display: none;" id="emailButton">Enviar por Correo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Registro Exitoso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ session('success') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const confirmButton = document.getElementById('confirmButton');
            const printButton = document.getElementById('printButton');
            const printActionButton = document.getElementById('printActionButton');
            const emailButton = document.getElementById('emailButton');
            const cancelButton = document.getElementById('cancelButton');

            confirmButton.addEventListener('click', function(event) {
                event.preventDefault();
                // Lógica para confirmar y mostrar botones
                printButton.style.display = 'block';
                printActionButton.style.display = 'block';
                emailButton.style.display = 'block';
                confirmButton.style.display = 'none';

                // Redirigir al enlace de confirmar
                window.location.href = confirmButton.getAttribute('href');
            });

            cancelButton.addEventListener('click', function(event) {
                event.preventDefault();
                // Lógica para cancelar y eliminar datos
                if (confirm(
                        '¿Estás seguro de que deseas cancelar? Se perderán todos los datos ingresados.')) {
                    window.location.href = cancelButton.getAttribute('href');
                }
            });

            // Mostrar el modal si hay un mensaje de éxito
            @if(session('success'))
                $('#successModal').modal('show');
            @endif
        });
    </script>
@endsection



{{-- Backup 2 --}}

{{-- @extends('layouts.app')

@section('title', 'Vista Previa del Carnet')

@section('content')
    <br>
    <div class="container" style="max-width: 90%; background-color: #f8f9fa; padding: 20px; border-radius: 8px;">
        <h2>Vista Previa del Carnet</h2>
        <hr size="8px" color="black" />
        <div class="row">
            <!-- Primera Columna: Información del Estudiante -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <p><strong>Nombre:</strong> {{ $student->first_name }} {{ $student->last_name }}</p>
                                <p><strong>Correo Electrónico:</strong> {{ $student->email }}</p>
                                <p><strong>Cargo:</strong> {{ $student->rol }}</p>
                                <p><strong>Año/Grado:</strong> {{ $student->grade }}</p>
                                <p><strong>Sección:</strong> {{ $student->section }}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                @if ($student->photo_path)
                                    <img src="{{ Storage::url($student->photo_path) }}" alt="Foto del estudiante"
                                        class="img-thumbnail"
                                        style="max-width: 100%; max-height: 300px; margin-top: 10px; object-fit: cover;">
                                @else
                                    <p>No se proporcionó fotografía.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Segunda Columna: Botones de Acción y Miniatura del Carnet -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 text-center">
                                <!-- Aquí va la miniatura del carnet generado -->
                                <img src="{{ asset('images/carnet_placeholder.png') }}" alt="Miniatura del Carnet"
                                    class="img-thumbnail" width="200">
                            </div>
                            <div class="col-md-4 text-center">
                                <!-- Botones de acción -->
                                <button onclick="window.print()" class="btn btn-primary" style="display: none;"
                                    id="printButton">Imprimir Carnet</button>
                                <a href="{{ route('students.approve', ['id' => $student->id]) }}" class="btn btn-primary"
                                    id="confirmButton">Confirmar</a>
                                <a href="{{ route('students.create') }}" class="btn btn-secondary"
                                    id="cancelButton">Cancelar</a>
                                <a href="{{ route('students.print', ['id' => $student->id]) }}" class="btn btn-success"
                                    style="display: none;" id="printActionButton">Imprimir</a>
                                <a href="{{ route('students.email', ['id' => $student->id]) }}" class="btn btn-info"
                                    style="display: none;" id="emailButton">Enviar por Correo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Registro Exitoso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ session('success') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const confirmButton = document.getElementById('confirmButton');
            const printButton = document.getElementById('printButton');
            const printActionButton = document.getElementById('printActionButton');
            const emailButton = document.getElementById('emailButton');
            const cancelButton = document.getElementById('cancelButton');

            confirmButton.addEventListener('click', function(event) {
                event.preventDefault();
                // Lógica para confirmar y mostrar botones
                printButton.style.display = 'block';
                printActionButton.style.display = 'block';
                emailButton.style.display = 'block';
                confirmButton.style.display = 'none';

                // Redirigir al enlace de confirmar
                window.location.href = confirmButton.getAttribute('href');
            });

            cancelButton.addEventListener('click', function(event) {
                event.preventDefault();
                // Lógica para cancelar y eliminar datos
                if (confirm(
                        '¿Estás seguro de que deseas cancelar? Se perderán todos los datos ingresados.')) {
                    window.location.href = cancelButton.getAttribute('href');
                }
            });

            // Mostrar el modal si hay un mensaje de éxito
            @if(session('success'))
                $('#successModal').modal('show');
            @endif
        });
    </script>
@endsection --}}


{{-- Backcup de codigo antes del nuevo ajuste --}}

{{-- @extends('layouts.app')

@section('title', 'Vista Previa del Carnet')

@section('content')
    <br>
    <div class="container" style="max-width: 90%; background-color: #f8f9fa; padding: 20px; border-radius: 8px;">
        <h2>Vista Previa del Carnet</h2>
        <hr size="8px" color="black" />
        <div class="row">
            <!-- Primera Columna: Información del Estudiante -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <p><strong>Nombre:</strong> {{ $student->first_name }} {{ $student->last_name }}</p>
                                <p><strong>Correo Electrónico:</strong> {{ $student->email }}</p>
                                <p><strong>Cargo:</strong> {{ $student->rol }}</p>
                                <p><strong>Año/Grado:</strong> {{ $student->grade }}</p>
                                <p><strong>Sección:</strong> {{ $student->section }}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                @if ($student->photo_path)
                                    <img src="{{ Storage::url($student->photo_path) }}" alt="Foto del estudiante"
                                        class="img-thumbnail"
                                        style="max-width: 100%; max-height: 300px; margin-top: 10px; object-fit: cover;">
                                @else
                                    <p>No se proporcionó fotografía.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Segunda Columna: Botones de Acción y Miniatura del Carnet -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 text-center">
                                <!-- Aquí va la miniatura del carnet generado -->
                                <img src="{{ asset('images/carnet_placeholder.png') }}" alt="Miniatura del Carnet"
                                    class="img-thumbnail" width="200">
                            </div>
                            <div class="col-md-4 text-center">
                                <!-- Botones de acción -->
                                <button onclick="window.print()" class="btn btn-primary" style="display: none;"
                                    id="printButton">Imprimir Carnet</button>
                                <a href="{{ route('students.approve', ['id' => $student->id]) }}" class="btn btn-primary"
                                    id="confirmButton">Confirmar</a>
                                <a href="{{ route('students.create') }}" class="btn btn-secondary"
                                    id="cancelButton">Cancelar</a>
                                <a href="{{ route('students.print', ['id' => $student->id]) }}" class="btn btn-success"
                                    style="display: none;" id="printActionButton">Imprimir</a>
                                <a href="{{ route('students.email', ['id' => $student->id]) }}" class="btn btn-info"
                                    style="display: none;" id="emailButton">Enviar por Correo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const confirmButton = document.getElementById('confirmButton');
            const printButton = document.getElementById('printButton');
            const printActionButton = document.getElementById('printActionButton');
            const emailButton = document.getElementById('emailButton');
            const cancelButton = document.getElementById('cancelButton');

            confirmButton.addEventListener('click', function(event) {
                event.preventDefault();
                // Lógica para confirmar y mostrar botones
                printButton.style.display = 'block';
                printActionButton.style.display = 'block';
                emailButton.style.display = 'block';
                confirmButton.style.display = 'none';

                // Redirigir al enlace de confirmar
                window.location.href = confirmButton.getAttribute('href');
            });

            cancelButton.addEventListener('click', function(event) {
                event.preventDefault();
                // Lógica para cancelar y eliminar datos
                if (confirm(
                        '¿Estás seguro de que deseas cancelar? Se perderán todos los datos ingresados.')) {
                    window.location.href = cancelButton.getAttribute('href');
                }
            });
        });
    </script>
@endsection --}}
