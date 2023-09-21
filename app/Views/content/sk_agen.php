<?= $this->extend('template'); ?>

<?= $this->Section('content'); ?>

    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5"></div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="col-md-12">
            <h4>SK Desa Cantik</h4>
    </div>
    <div class="col-lg-8 col-md-10 ml-auto mr-auto">
        <h4><small>Simple With Actions</small></h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Tahun</th>
                        <th>Nomor SK</th>
                        <th>Tanggal SK</th>
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>2021</td>
                        <td>123/DESCAN/001</td>
                        <td>2 Agustus 2021</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" data-original-title="" title="">
                                <i class="material-icons">person</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>2022</td>
                        <td>152/DESCAN/221</td>
                        <td>9 September 2022</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-info btn-round btn-just-icon btn-sm" data-original-title="" title="">
                                <i class="material-icons">person</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-success btn-round btn-just-icon btn-sm" data-original-title="" title="">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-danger btn-round btn-just-icon btn-sm" data-original-title="" title="">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>2023</td>
                        <td>23/desacantik/003</td>
                        <td>29 Februari 2023</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-info btn-just-icon btn-sm" data-original-title="" title="">
                                <i class="material-icons">person</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm" data-original-title="" title="">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-danger btn-just-icon btn-sm" data-original-title="" title="">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Team End -->


    <?= $this->endSection(); ?>