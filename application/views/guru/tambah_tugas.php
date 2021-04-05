<!-- Page content -->
<div class="container-fluid mt-3">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Tambah Tugas</b></div>
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

                    <div class="text-center">
                        <a href="<?=base_url('guru/lihat_kelas')?>"><button type="button"
                                class="btn btn-primary my-4">Tambah Tugas</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>