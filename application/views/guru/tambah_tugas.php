<!-- Page content -->
<div class="container-fluid mt-3">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Tambah Tugas</b></div>
                <div class="card-body">
                <form action="<?=base_url()?>guru/add_tugas" method="post" enctype= multipart/form-data>
                    <div class="form-group mb-3">
                        <label for="">Judul Tugas</label>
                        <input type="text" name="judul_tugas" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Deskripsi Tugas</label>
                       <textarea required name="deskripsi" id="" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                     <div class="form-group mb-3">
                        <label for="">Upload Lampiran Tugas</label>
                        <input type="file" name="file" class="form-control" required  accept=".pdf">
                    </div>
                    <div class="form-group mb-3 col-md-3 row">
                        <label for="">Batas pengumpulan Tugas</label>
                        <input type="date"  name="date" id="" class="form-control" required>
                    </div>
                    <input type="hidden" name="id_kelas" value="<?=$id_kelas?>">

                    <div class="">
                        <input type="submit" value="Tambah Tugas" class="btn btn-primary my-4">
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


</div>