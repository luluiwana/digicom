<!-- Page content -->
<div class="container-fluid mt-3">
    <a href="<?=base_url('siswa/tugas')?>" class="btn btn-sm btn-outline-primary mb-3"><i class="fas fa-chevron-left mr-1"></i> Kembali ke Daftar Tugas</a>
    <div class="row">
        <div class="col-md-12">
            <?php foreach($tugas as $row):?>
            <?php $dateline=$row->date?>
            <div class="card">
                <div class="card-header h4"><b><?=$row->judul_tugas?></b>
                   
                </div>
                <div class="card-body">
                    <div>
                        <p class="small"><?=$row->deskripsi?></p>
                    </div>
                    <div class="h6 text-danger">Batas Waktu Penyelesaian: <?=tgl_indo($row->date)?></div>
              

            </div>
            <?php endforeach;?>
            <div class="card">
                <div class="card-header"><b>Hasil Tugas</b>
                    <a href="<?=base_url('siswa/buat_surat/'.$id_tugas)?>"
                        class="btn bg-gradient-primary text-white float-right btn-sm"><i class="fas fa-envelope-open"></i> Buat Surat</a>
                </div>
                <div class="card-body">
                    <table class="table table-responsive" style="min-height:500px">
                        <tr>
                            <th>No</th>
                            <th>Jenis Surat</th>
                            <th>Nomor Surat</th>
                            <th>Tanggal Surat</th>
                            <th>Waktu Selesai</th>
                            <th>Opsi</th>
                        </tr>
                        <th>
                            <?php $x=1; foreach($surat as $row):?>
                            <tr>
                                <td><?=$x?></td>
                                <td><?=$row->jenis_surat?> (<?=$row->style?>)</td>
                                <td><?=$row->nomor_surat?></td>
                                <td><?=tgl_indo($row->tgl_surat)?></td>
                                <?php if($row->tgl_buat>$dateline){
                                    $status='<div class="text-danger">Terlambat</div>';
                                }else {
                                  $status='<div class="text-success">Tepat Waktu</div>';

                                }
                                ?>
                                <td>  <?=$status.tgl_indo2($row->tgl_buat)?></td>
                                <td>
                                    <div class="dropdown dropright">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                            data-toggle="dropdown">
                                            Opsi
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?=base_url('surat/preview/'.$row->id_surat.'/'.$id_tugas)?>">Lihat Surat</a>
                                            <a class="dropdown-item" href="<?=base_url('siswa/cetak_surat')?>">Cetak Surat</a>
                                            <a class="dropdown-item" href="<?=base_url('siswa/cetak_amplop')?>">Cetak Amplop</a>
                                            <a class="dropdown-item" href="<?=base_url('siswa/edit_surat')?>">Edit Surat</a>
                                            <a class="dropdown-item" href="<?=base_url('siswa/lihat_tugas')?>">Hapus Surat</a>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            <?php $x++; endforeach;?>
                        </th>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function tgl_indo2($tanggal)
{
    $orgDate = $tanggal;  
    $newDate = date("d-m-Y (H:i)", strtotime($orgDate));  
    return $newDate;
}
