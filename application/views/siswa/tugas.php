<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-8">
            <?php foreach($tugas as $row):?>
            <div class="card ">
                <div class="card-body row">
                    <div class="col-md-8 h5">
                        <a href="<?=base_url('siswa/lihat_tugas/'.$row->id_tugas)?>"><?=$row->judul_tugas?></a>
                    </div>
                    <div class="h5 text-danger col-md-4">
                        <i class="fas fa-calendar-times mr-2"></i> Belum Dikerjakan
                    </div>

                </div>
            </div>
            <?php endforeach;?>

        </div>
        <div class="col-md-4">
            <img class="w-100" src="<?=base_url('assets/img/custom/undraw_Booked_re_vtod.svg')?>" alt="">
        </div>
    </div>
</div>