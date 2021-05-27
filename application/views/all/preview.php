<?php
if ($this->session->userdata('level') == 0) {
    $level = 'guru';
} else {
    $level = 'siswa';
}
?>

<?php foreach ($surat as $row) {
    $jenis_surat = $row->jenis_surat;
    $id = $row->id_surat;
}
?>
<!-- Page content -->
<div class="container-fluid mt-3">
    <?php if ($level == 'siswa') : ?>
        <div><a href="<?= base_url('siswa/lihat_tugas/' . $id_tugas) ?>" class="btn btn-sm btn-outline-primary mb-3"><i class="fas fa-chevron-left mr-1"></i> Kembali ke Tugas</a></div>
    <?php else : ?>
        <div><a href="<?= base_url('guru/surat') ?>" class="btn btn-sm btn-outline-primary mb-3"><i class="fas fa-chevron-left mr-1"></i> Kembali</a></div>
    <?php endif; ?>
    <a href="<?= base_url('surat/cetak_surat/' . $id_surat) ?>" target="_blank" class="btn btn-outline-primary btn-sm mt-1"><i class="fas fa-print"></i> Cetak Surat</a>
    <a href="<?= base_url('surat/cetak_amplop/' . $jenis_surat . '/' . $id) ?>" class="btn btn-outline-primary btn-sm mt-1"><i class="fas fa-envelope"></i> Cetak Amplop</a>
    <a href="<?= base_url($level . '/edit_surat') ?>" class="btn btn-outline-primary btn-sm mt-1"><i class="fas fa-edit"></i> Edit Surat</a>
    <a href="#" class="btn btn-outline-primary btn-sm mt-1" data-toggle="modal" data-target="#modal-notification"><i class="fas fa-trash"></i> Hapus Surat</a>

    <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-danger">


                <div class="modal-body">

                    <div class="py-3 text-center">
                        <i class="ni ni-bell-55 ni-3x"></i>
                        <h4 class="mt-4 text-white">Hapus surat ini?</h4>
                    </div>

                </div>

                <div class="modal-footer">
                    <?php if ($level == 'siswa') : ?>
                        <a href="<?= base_url('siswa/lihat_tugas') ?>"><button type="button" class="btn btn-white px-5">Ya</button></a>
                    <?php else : ?>
                        <a href="<?= base_url('guru/surat') ?>"><button type="button" class="btn btn-white col-md-6 px-5">Ya</button></a>
                    <?php endif; ?>
                    <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Tidak</button>
                </div>

            </div>
        </div>





    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Preview Surat </b></div>

                <div class="card-body col-md-12">
                    <iframe id="pdf-js-viewer" src="<?= base_url('surat/cetak_surat/' . $id_surat) ?>" title="webviewer" frameborder="0" style="width:100%;" height="800px"></iframe>

                </div>
                <?php if ($jenis_surat == "Dinas") : ?>

                <?php endif ?>

            </div>
        </div>

    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Preview Surat </b></div>

                <div class="card-body col-md-12">
                    <iframe id="pdf-js-viewer" src="<?= base_url('surat/cetak_surat/' . $id_surat) ?>" title="webviewer" frameborder="0" style="width:100%;" height="800px"></iframe>

                </div>
                <?php if ($jenis_surat == "Dinas") : ?>

                <?php endif ?>

            </div>
        </div>

    </div>