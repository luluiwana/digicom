<!-- Page content -->
<div class="container-fluid mt-3">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Edit Materi</b></div>
                <?php foreach($materi as $row):?>
                <form action="<?=base_url('')?>guru/update_materi/<?=$row->id_kelas?>/<?=$row->id_materi?>/<?=$row->filename?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="">Judul Materi</label>
                        <input type="text" class="form-control" value="<?=$row->judul_materi?>" required name="judul_materi">
                    </div>
                     <div class="form-group mb-3">
                        <label for="">Upload Materi</label>
                        <input type="file" class="form-control" name="file">
                    </div>

                    <div class="t">
                        <input type="submit" value="Simpan" class="btn btn-primary my-4">
                    </div>
                </div>
                </form>
                <?php endforeach;?>
            </div>
        </div>

    </div>


</div>