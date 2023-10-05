<?= $this->extend('template'); ?>

<?= $this->Section('content'); ?>

    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-4">
            <div class="row g-5 pt-4">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-6">
                    <h1 class="display-4 text-white mb-3 animated slideInRight">Portal Integrasi Desa Cantik <br> <span><?= $nama_desa['nama_desa'] ?></span></h1>
                    <p class="text-white mb-5 animated slideInRight">Wajah virtual desa yang menampilkan informasi terkait potensi desa,
                        dokumentasi, dan diseminasi data desa.</p>
                    <nav class="d-flex flex-row mt-6">
                        <div class="text-white location pe-3 me-2 fs-6 text-start animated slideInRight" style="border-right:1.5px dashed #212529; border-color:white; border-width:medium">Lokasi<br>
                            <span class="text-white fs-5 fw-bolder animated slideInRight">Desa <?= $nama_desa['nama_desa'] ?></span>
                        </div>
                        <button id="btnFilter" class="btn btn-light ms-2 py-1 px-3 fw-bold animated slideInRight" data-toggle="modal" data-target="#modalFilter">Ubah Lokasi</button>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="../assets/img/hero-img.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="../assets/img/about-img.png">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Apa itu Desa Cinta Statistik (Desa Cantik) ?</h1>
                    <p class="mb-4">Desa Cantik merupakan program peningkatan kompetensi aparatur desa dalam mengelola 
                        dan memanfaatkan data desa sehingga perencanaan pembangunan desa lebih tepat sasaran untuk mewujudkan 17 SDG's Desa.
                    </p>
                    <p class="mb-4">Program Desa Cinta Statistik menjadi salah satu <i>quick wins</i> BPS 2021-2024
                        mengenal penguatan statistik sektoral melalui pembinaan, pengelolaan, dan pemanfaatan data desa.
                    </p>
                    <p class="mb-4">Mengapa pada level desa?</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3 d-flex"><i class="fa fa-check text-primary me-2"></i>Dilengkapi beragam informasi mumpuni</h6>
                            <h6 class="mb-0 d-flex"><i class="fa fa-check text-primary me-2"></i>Penunjang pembangunan nasional</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3 d-flex"><i class="fa fa-check text-primary me-2"></i>Produk data belum terstandarisasi</h6>
                            <h6 class="mb-0 d-flex" ><i class="fa fa-check text-primary me-2"></i>Penggalangan aktivitas statistik di desa</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="/tentang">Profil Desa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="mb-4">Mengapa Desa Cantik?</h1>
                    <p class="mb-4">Desa Cantik menjadi salah satu sumber dan ujung tombak dalam mewujudkan
                         Satu Data Indonesia. Kolaborasi bersama aparatur desa adalah jalan terbaik untuk
                         memudahkan akses dan ketersediaan data sebagai wujud transparansi pemerintah.
                    </p>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">Data adalah jenis kekayaan baru bangsa kita, kini data lebih berharga dari minyak</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="../assets/img/testimonial-1.png"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Joko Widodo</h5>
                                    <span>Presiden RI Periode 2019-2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">Arah kita sama, lima tahun lagi semua pihak akan percaya desa dalam mengumpulkan data. BPS memiliki otoritas untuk melatih SDM pendataan di desa, sehingga kualitas data desa terjaga</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="../assets/img/testimonial-2.png"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Abdul Halim</h5>
                                    <span>Menteri DPDTT Periode 2019-2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">BPS juga memiliki visi desa sebagai subyek pendataan yang aktif mendata, memiliki data, dan memutakhirkannya</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="../assets/img/testimonial-3.png"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Margo Yuwono</h5>
                                    <span>Kepala BPS RI Periode 2021-2023</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



    <!-- FAQ -->
    <div class="container-fluid bg-primary feature pt-5">
    <div class="container py-5 pt-0">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="mb-4" style="color:white;">Frequently Asked Questions</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ1">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Mengapa harus desa?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body p-3">
                                    Desa tidak lagi dianggap sebagai objek pembangunan, melainkan subjek dan ujung tombak pembangunan dalam peningkatan kesejahteraan masyarakat                                    
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Apa tujuan Program Desa Cantik?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body p-3">
                                    Secara umum, pembinaan desa cantik bertujuan untuk meningkatkan literasi data, standarisasi data statistik desa, optimalisasi pemanfaatan data statistik oleh agen-agen level desa/kelurahan. Secara khusus, desa cantik akan meningkatkan kapasitas desa/kelurahan untuk mengidentifikasi kebutuhan data dan potensi desa dalam ranga mengentaskan kemiskinan
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Siapa saja yang terlibat dalam program desa cantik?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body p-3">
                                BPS RI, Pusdiklat BPS dan Polstat STIS, BPS Provinsi, BPS Kab/Kota, serta Aparatur Desa
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingThree2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                    Apa dasar hukum pelaksanaan Desa Cantik?
                                </button>
                            </h2>
                            <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body p-3">
                                UU No. 16 tahun 1997 Tentang Statisitik, UU No. 23 tahun 2014 Tentang Pemerintah Daerah, Perpres No. 39 tahun 2019 Tentang Satu Data Indonesia, UU No. 6 tahun 2014 Tentang Desa, dam Permen DPDTT RI No. 13 tahun 2020 Tentang Prioritas Penggunaan Dana Desa Tahun 2021
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Bagaimana cara menjadi desa cantik?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body p-3">
                                Kepala BPS mengeluarkan surat keputusan mengenai daftar desa yang akan dibina dan ditetapkan sebagai Desa Cinta Statistik (Desa Cantik)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Apa saja yang akan dibina oleh BPS?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body p-3">
                                    Inventarisir kebutuhan data, penyusunan instrumen pengumpulan data, teknik pengumpulan data, pengolahan, analisis, diseminasi,  manajemen kualitas data, serta pemanfaatan data desa untuk dasar kebijakan
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Apa hubungan Desa Cantik dengan SGDs Desa?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body p-3">
                                BPS membangun sinergitas dengan Kemendes PDTT dalam membangun kemitraan statistik desa melalui penyediaan data-data yang diperlukan di tingkat desa. Dengan demikian, pencatatan data dan pemetaan potensi desa dapat tersandarisasi
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Siapa yang menjadi pembina desa cantik?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body p-3">
                                Jabatan Fungsional di BPS Kab/Kota yang tersertifikasi memberikan pembinaan pada aparatur desa
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.9s">
                            <h2 class="accordion-header" id="headingSeven2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven2" aria-expanded="false" aria-controls="collapseSeven2">
                                    Bagaimana awal mula Desa Cantik?
                                </button>
                            </h2>
                            <div id="collapseSeven2" class="accordion-collapse collapse" aria-labelledby="headingSeven2"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body p-3">
                                Pada tahun 2019, BPS Sumatera Barat mencanangkan "Nagari Statistik" dan BPS Sulawesi Selatan melaksanakan "Kampung Statistik" untuk mendekatakan data dan statistik kepada masyarakat. Pragram tersebut menjadi cikal bakal "Desa Cantik" yang dilaksankan secara nasional mulai tahun 2021
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="1s">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Apa manfaat desa cantik bagi pemerintah?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body p-3">
                                Tersedianya data yang mutakhir sebagai sumber utama dalam proses penyusunan RPJM dan RKP Desa serta menunjukkan keterbukaan dan transparansi data instansi pemerintah
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ END -->

    <!-- Modal View-->
    <div class="modal fade" id="modalFilter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Detail Pengajuan</h5>
            <button type="button" class="btn btn-light rounded-pill closeModal" data-dismiss="modal">
            X
            </button>
        </div>
            <div class="modal-body">
                <form id="" action="/ubah" method="post">
                    <div class="form-group">
                        <div class="dropdown bootstrap-select select-mfd form-control">
                            <select class="form-select mb-2" name="kabupaten" id="pilih_kabupaten">
                                <option  value=''>-- Pilih Kabupaten --</option>
                                <?php foreach ($kab as $i): ?>
                                    <option value="<?= $i['kab'] ?>"><?= $i['nama_kab'] ?></option>
                                <?php endforeach;?>
                            </select>
                            <select class="form-select mb-2" name="desa" id="pilih_desa" disabled>
                                <option selected disabled value=''>-- Pilih Desa --</option>
                            </select>
                            <div class="modal-footer p-0">
                                <button id="submitFilter" type="submit" class="btn btn-primary rounded-pill px-4 me-3" disabled>Ubah</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

<?= $this->endSection(); ?>