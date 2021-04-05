<!-- Page content -->
<div class="container-fluid mt-3">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Edit Tugas</b></div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="">Judul Tugas</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Deskripsi Tugas</label>
                        <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Upload Lampiran Tugas</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Batas pengumpulan Tugas</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <a href="<?=base_url('guru/lihat_tugas')?>"><button type="button"
                                    class="btn btn-primary px-5">Edit Tugas</button></a>
                        </div>
                        <div class="col-md-4 text-right">
                        <a href="<?=base_url('guru/lihat_kelas')?>" class="btn btn-danger">Hapus Tugas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>