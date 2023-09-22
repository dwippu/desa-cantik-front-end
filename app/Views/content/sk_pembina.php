<?= $this->extend('template'); ?>

<?= $this->Section('content'); ?>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <h1 class="text-white animated slideInRight" style="padding-left:7%;">SK Pembina Desa</h1>
                <p class="text-white mb-4 animated slideInRight" style="margin-top:0; padding-left:7%; padding-bottom:10%;"> 
                    Tim Pelaksana Program Pembinaan Statistik Sektoral <br>
                    <b>Desa Cantik Sukamaju</b>
                </p>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Data Tables -->
    <div class="container" style="margin-top:-8%; padding-bottom:5%;">
        <div class="row">
            <div class="col-12">
                <div class="data_tablesk">
                    <table id="sk_pembina" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Tahun</th>
                                <th>Kabupaten/Kota</th>
                                <th>Nomor SK</th>
                                <th>Tanggal SK</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2021</td>
                                <td>Bandung</td>
                                <td>0630001/32041/KPA/2021</td>
                                <td>15 Agustus 2021</td>
                                <td><button class="btn btn-outline-primary rounded-pill"><i class="fa fa-search"></i>View</button></td>
                            </tr>
                            <tr>
                                <td>2021</td>
                                <td>Bandung</td>
                                <td>0630001/32041/KPA/2021</td>
                                <td>15 Agustus 2021</td>
                                <td><button class="btn btn-outline-primary rounded-pill"><i class="fa fa-search"></i>View</button></td>
                            </tr>
                            <tr>
                                <td>2021</td>
                                <td>Bandung</td>
                                <td>0630001/32041/KPA/2021</td>
                                <td>15 Agustus 2021</td>
                                <td><button class="btn btn-outline-primary rounded-pill"><i class="fa fa-search"></i>View</button></td>
                            </tr>
                            <tr>
                                <td>2021</td>
                                <td>Bandung</td>
                                <td>0630001/32041/KPA/2021</td>
                                <td>15 Agustus 2021</td>
                                <td><button class="btn btn-outline-primary rounded-pill"><i class="fa fa-search"></i>View</button></td>
                            </tr>
                            <tr>
                                <td>2021</td>
                                <td>Bandung</td>
                                <td>0630001/32041/KPA/2021</td>
                                <td>15 Agustus 2021</td>
                                <td><button class="btn btn-outline-primary rounded-pill"><i class="fa fa-search"></i>View</button></td>
                            </tr>
                            <tr>
                                <td>2021</td>
                                <td>Bandung</td>
                                <td>0630001/32041/KPA/2021</td>
                                <td>15 Agustus 2021</td>
                                <td><button class="btn btn-outline-primary rounded-pill"><i class="fa fa-search"></i>View</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    

<?= $this->endSection(); ?>