<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-6">
            <?php foreach($materi as $row):?>
            <div class="card ">
                <div class="card-body h5 py-3">
                    <a href="<?=base_url('siswa/lihat_materi/'.$row->id_materi)?>"><b><?=$row->judul_materi?></b></a>
                </div>
            </div>
          <?php endforeach;?>
        </div>
        <div class="col-md-6">
            <img class="w-100" src="<?=base_url('assets/img/custom/undraw_Reading_book_re_kqpk.svg')?>" alt="">
        </div>
    </div>
</div>