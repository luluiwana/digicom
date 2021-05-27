<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row ">
        <div class="col-md-12">
            <a href="<?= base_url($level . '/buat_surat/'.$id_tugas) ?>" class="btn btn-outline-primary btn-sm mb-4"><i
                    class="fas fa-chevron-left mr-1"></i>Kembali</a>
            <div class="card">
                <div class="card-header text-center  h3"><b>Surat Pribadi</b></div>
                <div class="card-body">
                    <form action="<?=base_url()?>surat/add_pribadi/<?=$id_tugas?>" method="post">
                        <textarea name="isi" id='isi_surat_pribadi' class="form-control"></textarea>
                        <input type="submit" value="Simpan" class="btn btn-primary">
        
                    </form>
            </div>s
        </div>
    </div>
</div>
</div>