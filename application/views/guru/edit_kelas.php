<body class="bg-primary">
    <div class="col-md-8 mx-auto mt-5">
        <h3 class="text-center text-white">Edit Informasi Kelas</h3>
        <div class="card mt-3 ">
            <div class="card-body">
            <?php foreach($kelas as $row):?>
                <form action="<?=base_url().'guru/update_kelas/'.$row->id_kelas?>" method="post">
                    <div class="form-group">
                        <label for="">Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control" placeholder="Masukkan Nama Kelas" id="" required value="<?=$row->nama_kelas?>">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Sekolah</label>
                        <input type="text" name="nama_sekolah" class="form-control" placeholder="Masukkan Nama Sekolah" id="" required value="<?=$row->nama_sekolah?>">
                    </div>
                    <input type="submit" class="btn btn-primary bg-gradient-primary" value="Simpan">
                </form>
            <?php endforeach;?>
            </div>
        </div>
    </div>
</body>