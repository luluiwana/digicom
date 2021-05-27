<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-12">
            <a href="<?=base_url('guru/lihat_kelas/'.$id_kelas)?>" class="btn btn-outline-primary btn-sm mb-3"><i
                    class="	fas fa-chevron-left mr-1"></i>Kembali ke
                Kelas</a>
            <?php foreach($tugas as $row):?>
            <div class="card">
                <div class="card-header"><b><?=$row->judul_tugas?></b></div>
                <div class="card-body">
                    <div>
                        <?=$row->deskripsi?>
                    </div>
                    <div class="text-danger mt-2 h5">
                        Batas Penyelesaian: <?=$row->date?>
                    </div>
                    <div class="mt-3">
                        <a href="<?=base_url('guru/download_tugas/'.$row->filename)?>"
                            class="btn btn-outline-primary btn-sm"><i class="fas fa-print mr-1"></i> Download Lampiran
                            Tugas</a>
                        <a href="<?=base_url('guru/edit_tugas/'.$row->id_tugas)?>"
                            class="btn btn-outline-primary btn-sm"><i class="fas fa-edit mr-1"></i> Edit Tugas</a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Hasil Tugas Siswa</b></div>
                <div class="card-body table-responsive">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Lengkap</th>
                            <th>Status</th>
                            <th>Nilai</th>
                            <th>Lihat Hasil</th>
                        </thead>
                        <?php $x=1; foreach( $nilai as $row):?>
                        <?php if($row->nilai==0){
                            $status='<span class="text-muted"><i class="fas fa-star mr-1"></i> Belum Dinilai</span>';
                        }else {
                            $status='<span class="text-success"><i class="fas fa-star mr-1"></i> Sudah Dinilai</span>';
                        }
                        
                        ?>
                        <tr>
                            <td><?=$x?></td>
                            <td><?=$row->username?></td>
                            <td><?=$row->nama?></td>
                            <td><?=$status?></td>
                            <td><?=$row->nilai?></td>
                            <td>
                                <a href="<?=base_url('guru/hasil_tugas/'.$row->id_tugas.'/'.$row->id_user)?>"
                                    class="btn btn-primary btn-sm text-white px-3">
                                    <i class="fas fa-eye mr-1"></i>
                                    Lihat Hasil
                                </a>

                            </td>
                        </tr>
                        <?php $x++; endforeach;?>
                    </table>

                </div>
            </div>
        </div>
    </div>


</div>