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
                <p class="section-title px-5"><span class="px-2">Reporta tu pago</span></p>
                <h1 class="mb-4">Llena el formulario para reportar tu pago</h1>
            </div>
            <div class="row">
                <div class="col-lg-7 mb-5">
                    <div class="contact-form">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="control-group">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="control-group">
                                <label for="cedula">Cédula</label>
                                <input type="text" class="form-control" id="cedula" name="cedula" required>
                            </div>
                            <div class="control-group">
                                <label for="email">Correo</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="control-group">
                                <label for="report">Reporte</label>
                                <textarea class="form-control" id="report" name="report" required></textarea>
                            </div>
                            <div class="control-group">
                                <label for="screenshot">Captura de pantalla</label>
                                <input type="file" class="form-control" id="screenshot" name="screenshot">
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <button type="reset" class="btn btn-secondary">Cancelar</button>
                                <button type="button" id="confirmBtn" class="btn btn-warning">Confirmar</button>
                                <button type="submit" id="sendBtn" class="btn btn-primary" disabled>Enviar</button>
                            </div>
                        </form>
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
                    <button type="button" id="confirmSend" class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const confirmBtn = document.getElementById('confirmBtn');
            const sendBtn = document.getElementById('sendBtn');
            const confirmationModal = $('#confirmationModal');
            const confirmSend = document.getElementById('confirmSend');

            confirmBtn.addEventListener('click', function () {
                confirmationModal.modal('show');
            });

            confirmSend.addEventListener('click', function () {
                confirmationModal.modal('hide');
                sendBtn.disabled = false;
            });
        });
    </script>
@endsection
