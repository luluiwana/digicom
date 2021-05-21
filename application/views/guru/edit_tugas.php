<!-- Page content -->
<div class="container-fluid mt-3">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Edit Tugas</b></div>
                <?php foreach($tugas as $row):?>
                <form action="<?=base_url()?>guru/update_tugas/<?=$row->id_tugas?>/<?=$row->filename?>" method="post" enctype= multipart/form-data>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="">Judul Tugas</label>
                        <input name="judul_tugas" type="text" class="form-control" value="<?=$row->judul_tugas?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Deskripsi Tugas</label>
                        <textarea name="deskripsi" id="" class="form-control" cols="30" rows="10" required><?=$row->deskripsi?></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Upload Lampiran Tugas</label>
                        <input name="file" type="file" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Batas pengumpulan Tugas</label>
                        <input type="date" name="date" id="" class="form-control" value="<?=$row->date?>">
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                          <input type="submit" value="Simpan Tugas" class="btn btn-primary px-5">
                        </div>
                        <div class="col-md-4 text-right">
                        <a href="<?=base_url('guru/hapus_tugas/'.$row->id_tugas.'/'.$row->filename)?>" class="btn btn-danger">Hapus Tugas</a>
                        </div>
                    </div>
                </div>
                </form>
                <?php endforeach;?>
            </div>
        </div>

    </div>


</div>