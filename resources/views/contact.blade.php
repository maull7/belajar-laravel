<x-layout>
    <x-slot:judul>selamat datang di {{ $judul }}</x-slot:judul>
    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i
                            class="bi bi-envelope"></i></div>
                    <h1 class="fw-bolder">Contact</h1>
                    <p class="lead fw-normal text-muted mb-0">Contact me </p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 justify-content-center d-flex">
                        <ul>
                            <li>
                                <div class="form-floating mb-3">
                                    <a href="#" class="list-group-item list-group-item-action">Whatsapp <i
                                            class="bi bi-whatsapp text-success"></i></a>
                            </li>
                            <li>
                                <div class="form-floating mb-3">
                                    <a href="#" class="list-group-item list-group-item-action">instagram <i
                                            class="bi bi-instagram text-danger"></i></a>
                            </li>
                            <li>
                                <div class="form-floating mb-3">
                                    <a href="#" class="list-group-item list-group-item-action">TikTok<i
                                            class="bi bi-tiktok"></i></a>
                            </li>
                            <li>
                                <div class="form-floating mb-3">
                                    <a href="#" class="list-group-item list-group-item-action">Email <i
                                            class="bi bi-envelope-fill text-primary"></i></a>
                            </li>

                        </ul>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->

                </div>
            </div>
        </div>
        </div>
    </section>
</x-layout>
