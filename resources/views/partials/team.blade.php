<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Nuestros espacios</span></p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4 team-img-wrapper" style="border-radius: 100%;">
                    <img class="img-fluid w-100 team-img" src="img/team-1.jpg" alt="Educador 1" data-toggle="modal"
                        data-target="#imageModal">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4 team-img-wrapper" style="border-radius: 100%;">
                    <img class="img-fluid w-100 team-img" src="img/team-2.jpg" alt="Educador 2" data-toggle="modal"
                        data-target="#imageModal">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4 team-img-wrapper" style="border-radius: 100%;">
                    <img class="img-fluid w-100 team-img" src="img/team-3.jpg" alt="Educador 3" data-toggle="modal"
                        data-target="#imageModal">
                </div>
            </div>
            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4 team-img-wrapper" style="border-radius: 100%;">
                    <img class="img-fluid w-100 team-img" src="img/team-4.jpg" alt="Educador 4" data-toggle="modal"
                        data-target="#imageModal">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img id="modalImage" class="img-fluid" src="" alt="Imagen Educador">
            </div>
        </div>
    </div>
</div>

<style>
    .team-img-wrapper {
        transition: transform 0.3s ease;
    }

    .team-img-wrapper:hover {
        transform: scale(1.1);
        cursor: pointer;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const images = document.querySelectorAll('.team-img');
        const modalImage = document.getElementById('modalImage');

        images.forEach(image => {
            image.addEventListener('click', function() {
                const src = this.src;
                modalImage.src = src;
            });
        });
    });
</script>
