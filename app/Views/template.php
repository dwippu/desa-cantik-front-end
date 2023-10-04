<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Desa Cantik - Jawa Barat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../Logo.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- Data Tables Stylesheet -->
    <link href="/assets/css/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="/" class="navbar-brand d-flex">
                    <img src="/assets/img/Logo.png" alt="logo" width="100%" height="50" class="px-1" >
                    <div class="pt-2 px-2" style="border:0; border-left: 1px; border-color:white; border-style:solid;">
                        <p class="display-5 m-0 p-0 text-white" style="font-size: medium;"><b>Website Desa Cantik</b></p>
                        <p class="display-5 m-0, p-0 text-white" style="font-size: small; margin-bottom:0;">Desa <?= $nama_desa['nama_desa'] ?></p>
                    </div>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/<?= service('uri')->getSegment(1) ?>/" class="nav-item nav-link <?php if (strcmp(service('uri')->getSegment(2), "") == 0) echo 'active' ?>">Beranda</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?php if (strcmp(service('uri')->getSegment(2), "tentang") == 0) echo 'active' ?>" data-bs-toggle="dropdown">Tentang Kami</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="/<?= service('uri')->getSegment(1) ?>/tentang" class="dropdown-item">Profil Desa</a>
                                <a href="/<?= service('uri')->getSegment(1) ?>/tentang" class="dropdown-item">Struktur Pemerintahan</a>
                                <a href="/<?= service('uri')->getSegment(1) ?>/tentang" class="dropdown-item">Alamat dan Kontak</a>
                            </div>
                        </div>
                        <a href="/<?= service('uri')->getSegment(1) ?>/data" class="nav-item nav-link <?php if (strcmp(service('uri')->getSegment(2), "data") == 0) echo 'active' ?>">Data & Informasi</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?php if (preg_match("/^sk/", service('uri')->getSegment(2)) == 1) echo 'active' ?>" data-bs-toggle="dropdown">Regulasi</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="/<?= service('uri')->getSegment(1) ?>/skdescan" class="dropdown-item">SK Desa Cantik</a>
                                <a href="/<?= service('uri')->getSegment(1) ?>/skpembina" class="dropdown-item">SK Pembina Desa</a>
                                <a href="/<?= service('uri')->getSegment(1) ?>/skagen" class="dropdown-item">SK Agen Statistik</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle <?php if (preg_match("/^laporan/", uri_string()) == 1) echo 'active' ?>" data-bs-toggle="dropdown">Laporan</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="/<?= service('uri')->getSegment(1) ?>/laporanpembinaan" class="dropdown-item">Laporan Pembinaan</a>
                                <a href="/<?= service('uri')->getSegment(1) ?>/laporanbulanan" class="dropdown-item">Laporan Bulanan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <?= $this->renderSection('content'); ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer">
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row"> 
                    <div class="col-md-8 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Tim Desa Cantik</a>, All Right Reserved.
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                    <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                        Desa <?= $nama_desa['nama_desa'] ?> | <?= $nama_desa['nama_kab'] ?> | <?= $nama_desa['nama_prov'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/lib/wow/wow.min.js"></script>
    <script src="/assets/lib/easing/easing.min.js"></script>
    <script src="/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/lib/counterup/counterup.min.js"></script>
    <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/js/main.js"></script>

    <!-- Data Tables Javascript -->
    <script src="/assets/js/datatables/datatables.min.js"></script>
    <script src="/assets/js/datatables/pdfmake.min.js"></script>
    <script src="/assets/js/datatables/vfs_fonts.js"></script>
    <script src="/assets/js/datatables/custom.js"></script>
</body>

</html>