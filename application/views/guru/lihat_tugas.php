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
                    <div >
                       <?=$row->deskripsi?>
                    </div>
                    <div class="text-danger mt-2 h5">
                        Batas Penyelesaian: <?=$row->date?>
                    </div>
                    <div class="mt-3">
                        <a href="<?=base_url('guru/download_tugas/'.$row->filename)?>" class="btn btn-outline-primary btn-sm"><i
                                class="fas fa-print mr-1"></i> Download Lampiran Tugas</a>
                        <a href="<?=base_url('guru/edit_tugas/'.$row->id_kelas)?>" class="btn btn-outline-primary btn-sm"><i
                                class="fas fa-edit mr-1"></i> Edit Tugas</a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Hasil Tugas Siswa Kelas A</b></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Lengkap</th>
                            <th>Status</th>
                            <th>Nilai</th>
                            <th>Lihat Hasil</th>
                        </thead>
                        <tr>
                            <td>1.</td>
                            <td>1782681209</td>
                            <td>Aprisa Amanda</td>
                            <td><span class="text-success"><i class="	fas fa-star mr-1"></i> Selesai</span></td>
                            <td>90</td>
                            <td>
                                <a href="<?=base_url('guru/hasil_tugas')?>"
                                    class="btn btn-primary btn-sm text-white px-3">
                                    <i class="fas fa-eye mr-1"></i>
                                    Lihat Hasil
                                </a>
                                
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>


</div>