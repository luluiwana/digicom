<!-- Page content -->
<div class="container-fluid mt-3">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Edit Materi</b></div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="">Judul Materi</label>
                        <input type="text" class="form-control" value="Pengantar Ilmu Administrasi">
                    </div>
                     <div class="form-group mb-3">
                        <label for="">Upload Materi</label>
                        <input type="file" class="form-control">
                    </div>

                    <div class="text-center">
                        <a href="<?=base_url('guru/materi')?>"><button type="button"
                                class="btn btn-primary my-4">Edit Materi</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>