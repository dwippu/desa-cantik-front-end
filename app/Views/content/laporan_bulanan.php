<?= $this->extend('template'); ?>

<?= $this->Section('content'); ?>
<p id="source" hidden><?php helper('webbackend'); echo webBackendBaseUrl(); ?></p>

    <!-- Hero Start -->
    <div class="container-fluid bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <h1 class="text-white animated slideInRight" style="padding-left:7%;">Laporan Bulanan</h1>
                <p class="text-white mb-4 animated slideInRight" style="margin-top:0; padding-left:7%; padding-bottom:10%;"> 
                    Laporan Bulanan
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
                    <table id="laporan_bulanan" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal Kegiatan</th>
                                <th>Peserta Kegiatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($laporan as $row): ?>
                            <tr>
                                <td><?= $row['nama_kegiatan']?></td>
                                <td><?= date("m/d/Y",strtotime($row['tanggal_kegiatan']))?></td>
                                <td><?= $row['peserta_kegiatan']?></td>
                                <td><button data-file="<?=$row['file']?>" data-tgl="<?= date("m/d/Y",strtotime($row['tanggal_kegiatan']))?>" id="btnViewLaporan" class="btn btn-outline-primary rounded-pill" data-toggle="modal" data-target="#modalView"><i class="fa fa-search"></i>View</button></td>
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
        <h5 class="modal-title" id="namaLaporan">Laporan Bulanan</h5>
        <button type="button" class="btn btn-light rounded-pill closeModal" data-dismiss="modal">
          X
        </button>
      </div>
        <div class="modal-body">
            <embed id="fileLaporan" type="application/pdf" width="100%" height="675px"></embed>
        </div>
    </div>
  </div>
</div>

    

<?= $this->endSection(); ?>