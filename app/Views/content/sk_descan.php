<?= $this->extend('template'); ?>

<?= $this->Section('content'); ?>

<p id="source" hidden><?php helper('webbackend'); echo webBackendBaseUrl(); ?></p>
<!-- Hero Start -->
<div class="container-fluid bg-primary hero-header">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <h1 class="text-white animated slideInRight" style="padding-left:7%;">SK Desa Cantik</h1>
            <p class="text-white mb-4 animated slideInRight" style="margin-top:0; padding-left:7%; padding-bottom:10%;"> 
                Surat Keputusan Kepala Badan Pusat Statistik Tentang <br>
                Pembinaan Statistik Sektoral Desa Cantik
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
                <table id="sk_descan" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Nomor SK</th>
                            <th>Tanggal SK</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($sk as $row): ?>
                            <tr>
                                <td><?= date("Y",strtotime($row['tanggal_sk'])) ?></td>
                                <td><?= $row['nomor_sk'] ?></td>
                                <td><?= $row['tanggal_sk'] ?></td>
                                <td><button data-file="<?=$row['file']?>" data-sk="<?=$row['nomor_sk']?>" id="btnViewSk" class="btn btn-outline-primary rounded-pill" data-toggle="modal" data-target="#modalView"><i class="ti ti-search"></i> View</button></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal View-->
<div class="modal fade" id="modalView" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="namaSK">Surat Keputusan Desa Cantik</h5>
        <button type="button" class="btn btn-light rounded-pill closeModal" data-dismiss="modal">
          X
        </button>
      </div>
        <div class="modal-body">
            <embed id="fileSkAgen" type="application/pdf" width="100%" height="675px"></embed>
        </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>