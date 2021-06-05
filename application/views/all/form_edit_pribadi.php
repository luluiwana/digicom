<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row ">
        <div class="col-md-12">
            <a href="<?= base_url('surat  /update_surat/' . $id_tugas) ?>" class="btn btn-outline-primary btn-sm mb-4"><i class="fas fa-chevron-left mr-1"></i>Kembali</a>
            <div class="card">
                <div class="card-header text-center  h3"><b>Surat Pribadi</b></div>
                <div class="card-body">

                    <?php foreach ($surat as $row) : ?>
                        <input type="hidden" name="jenis_surat" value="<?= $row->jenis_surat ?>">
                        <input type="hidden" name="style" value="<?= $row->style ?>">
                        <!-- <input type="hidden" name="logo_baru" value="<?= $row->logo ?>"> -->
                        <form action="<?= base_url() ?>surat/add_pribadi/<?= $id_tugas ?>" method="post">
                            <textarea name="isi" id='isi_surat_pribadi' class="form-control"><?= $row->isi_surat ?></textarea>
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        <?php endforeach; ?>
                        </form>
                </div>s
            </div>
        </div>
    </div>
</div>