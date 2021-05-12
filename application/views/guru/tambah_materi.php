<!-- Page content -->
<div class="container-fluid mt-3">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Tambah Materi</b></div>
                <form action="<?=base_url()?>guru/add_materi" method="post" enctype='multipart/form-data'>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="">Judul Materi</label>
                        <input type="text" class="form-control" name="judul_materi" required>
                    </div>
                     <div class="form-group mb-3">
                        <label for="">Upload Materi (.pdf)</label>
                        <input type="file" class="form-control" name="file" accept=".pdf" required>
                    </div>
                    <input type="hidden" name="id_kelas" value="<?=$id_kelas?>">

                    <div class="text-center">
                        <input type="submit" value="Tambah Materi" class="btn btn-primary my-4">
                    </div>
                </div>
                </form>
            </div>
        </div>

    </div>


</div>