<x-layout>
    <x-slot:judul>selamat datang di {{ $judul }}</x-slot:judul>

    <section>
        <!-- Skillset Card-->
        <div class="card shadow border-0 rounded-4 mb-5">
            <div class="card-body p-5">
                <!-- Professional skills list-->
                <div class="mb-0">
                    <div class="d-flex align-items-center mb-4">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i
                                class="bi bi-code-slash"></i></div>
                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Laravel / Codeigneter
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3">
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP</div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">database</div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">MySql</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5 mt-4">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                        <p class="lead fw-light mb-4">Nama saya Rehan Maulana dan saya berusia 16 tahun</p>
                        <p class="text-muted">Saya adalah adalah seorang siswa sekolah menengah kejuruan dengan jurusan
                            Penguatan perangkat lunak atau dikenal dengan PPLG</p>
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-layout>
