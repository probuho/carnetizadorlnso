@extends('layouts.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-primary mb-5" style="background-image: url('img/gallery-bg.jpg'); background-size: cover; background-position: center; opacity: 0.8;">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Galería</h3>
        </div>
    </div>
    <!-- Header End -->

    <!-- Gallery Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Nuestra Galería</span></p>
            </div>

            <div class="row portfolio-container">
                @foreach($images as $image)
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid w-100 portfolio-img" src="{{ asset($image->path) }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Modal -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>
@endsection

<style>
    .portfolio-item {
        cursor: pointer;
    }
    .portfolio-item:hover .portfolio-img {
        opacity: 0.8;
        transition: opacity 0.3s;
    }
    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
    }
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }
    .close {
        position: absolute;
        top: 50px;
        right: 35px;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }
    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }
</style>

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var modal = document.getElementById('imageModal');
            var modalImg = document.getElementById('modalImage');
            var closeBtn = document.getElementsByClassName('close')[0];

            document.querySelectorAll('.portfolio-img').forEach(function (img) {
                img.addEventListener('click', function () {
                    modal.style.display = 'block';
                    modalImg.src = this.src;
                });
            });

            closeBtn.onclick = function () {
                modal.style.display = 'none';
            }

            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            }
        });
    </script>
@endsection
