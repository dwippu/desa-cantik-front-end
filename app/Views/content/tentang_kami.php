<?= $this->extend('template'); ?>

<?= $this->Section('content'); ?>

    <!-- Informasi Umum Start -->
    <div id="profil" class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-4">
            <div class="row g-5 pt-3">
                <h1 class="display-4 text-white mb-1 text-center animated slideInRight">Profil Desa</h1>
                <div class="col-lg-6 align-self-start mb-lg-5 pe-0 text-center">
                    <img class="img-fluid pb-3 position-relative top-0 animated slideInRight" src="../assets/img/profil-pic.png" alt="" style="width: 60%;">
                </div>
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5" style="max-width: 35em;">
                    <h4 class="text-white mb-2 animated slideInRight">Informasi Umum Desa</h4>
                    <p class="text-white mb-4 animated slideInRight"><?= ($profil) ? $profil['info_umum'] : '';?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Informasi Umum End -->


    <!-- Struktur Start -->
    <div id="struktur" class="container-fluid bg-light py-5 mt-0">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="mb-4">Struktur Pemerintahan Desa <?= ($profil) ? $nama_desa['nama_desa'] : '' ?></h1>
                    <p class="mb-2"><?= ($profil) ? $profil['alamat'] : '' ?></p>
                    <a class="mb-4" href="mailto: <?= ($profil) ? $profil['email'] : '' ?>"><?= ($profil) ? $profil['email'] : '' ?></a>
                    <p class="mb-4"><?= ($profil) ? $profil['telp'] : '' ?></p>
                </div>
                <div class="col-md-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-10 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="team-item bg-white text-center rounded p-3">
                                        <img class="img-fluid rounded-circle p-4 mb-3" s src="//:0" style="background-color: gold" alt="" height="180" width="180">
                                        <h5 class="mb-0">Sinatrya 1</h5>
                                        <small>Kepala Desa</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-facebook-f"></i> -->
                                            </a>
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-twitter"></i> -->
                                            </a>
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-instagram"></i> -->
                                            </a>
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-linkedin-in"></i> -->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item bg-white text-center rounded p-3">
                                        <img class="img-fluid rounded-circle p-4 mb-3" s src="//:0" style="background-color: gold" alt="" height="180" width="180">
                                        <h5 class="mb-0">Sinatrya 3</h5>
                                        <small>Bendahara Desa</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-facebook-f"></i> -->
                                            </a>
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-twitter"></i> -->
                                            </a>
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-instagram"></i> -->
                                            </a>
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-linkedin-in"></i> -->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-10 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded p-3">
                                        <img class="img-fluid rounded-circle p-4 mb-3" s src="//:0" style="background-color: gold" alt="" height="180" width="180">
                                        <h5 class="mb-0">Sinatrya 2</h5>
                                        <small>Sekretaris Desa</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-facebook-f"></i> -->
                                            </a>
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-twitter"></i> -->
                                            </a>
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-instagram"></i> -->
                                            </a>
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-linkedin-in"></i> -->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="team-item bg-white text-center rounded p-3">
                                        <img class="img-fluid rounded-circle p-4 mb-3" s src="//:0" style="background-color: gold" alt="" height="180" width="180">
                                        <h5 class="mb-0">Sinatrya 4</h5>
                                        <small>Pembina Desa</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-facebook-f"></i> -->
                                            </a>
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-twitter"></i> -->
                                            </a>
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-instagram"></i> -->
                                            </a>
                                            <a class="btn btn-square btn-primary m-1" href="">
                                                <!-- <i class="fab fa-linkedin-in"></i> -->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Struktur End -->

    <!-- Maps Start -->
    <div id="alamat" class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <h3 class="mb-0">Hubungi Kami</h3>
                <p class="mt-4">BPS Provinsi Jawa Barat</p>
                <!--The div element for the map -->
                <?php if ($profil):?>
                <div id="map">
                    <iframe <?= $profil['html_tag'] ?> width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>
    <!-- Maps End -->

    <?= $this->endSection(); ?>