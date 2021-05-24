<?php foreach ($kelas as $row ) {
    $id_kelas=$row->id_kelas;
    $nama_kelas=$row->nama_kelas;
    $sekolah=$row->nama_sekolah;
}?>
<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-12">
            <a href="<?=base_url('guru/lihat_kelas/'.$id_kelas)?>" class="btn btn-outline-primary btn-sm mb-3"><i
                    class="	fas fa-chevron-left mr-1"></i>Kembali ke
                Kelas</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Data Siswa Kelas <?=$nama_kelas?> (<?=$sekolah?>)</b></div>
                <div class="card-body table-responsive">
                    <table class="table" style="" id="siswa">
                        <thead>
                            <th>No</th>
                            <th>Nomor Identitas</th>
                            <th>Nama Lengkap</th>
                        </thead>
                        <?php $x=1; foreach ($siswa as $row ):?>
                        <tr>
                            <td><?=$x?></td>
                            <td><?=$row->username?></td>
                            <td><?=$row->nama?></td>
                            
                        </tr>
                        <?php $x++; endforeach;?>




                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>