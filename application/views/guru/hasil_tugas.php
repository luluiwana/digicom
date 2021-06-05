<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-12">
            <a href="<?=base_url('guru/lihat_tugas/'.$id_tugas)?>" class="btn btn-outline-primary btn-sm mb-3"><i
                    class="	fas fa-chevron-left mr-1"></i>Kembali ke
                Tugas</a>

            <div class="card">
                <div class="card-header"><b>Identitas Siswa</b></div>
                <div class="card-body">
                    <?php foreach($identitas as $row):?>
                    <?php $id_user=$row->id_user?>
                    <table class="table-sm">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?=$row->nama?></td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td>:</td>
                            <td><?=$row->username?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td><?=$row->nama_kelas?> (<?=$row->nama_sekolah?>)</td>
                        </tr>

                        <tr>
                            <td class="text-dark font-weight-bold h4">Nilai</td>
                            <td>:</td>
                            <td class="text-dark font-weight-bold h4"> <?=$row->nilai?>
                                <a class="btn btn-primary btn-sm ml-2 text-white" data-toggle="modal"
                                    data-target="#modal_nilai">
                                    <i class="fas fa-edit"></i> Ubah
                                    Nilai</a>
                                <div class="modal fade" id="modal_nilai" tabindex="-1" role="dialog"
                                    aria-labelledby="modal_nilai" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-centered modal-" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                            <form action="<?=base_url()?>guru/ubah_nilai/<?=$id_tugas.'/'.$id_user?>" method="post">
                                                <div class="py-3 row">
                                                    <div class="col-md-6"><label for="">Masukkan Nilai:</label></div>
                                                    <div class="col-md-6"><input type="text" name="nilai" id="" value="<?=$row->nilai?>"
                                                            class="form-control "></div>
                                                    <div class="col-md-6"></div>
                                                    <div class="col-md-6 ">
                                                   <input type="submit" value="Simpan" class="btn btn-primary btn-sm mt-3 px-5">
                                                            </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Hasil Tugas </b></div>
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
                                <td><?=$row->jenis_surat?> <?=$row->style?></td>
                                <td><?=$row->nomor_surat?></td>
                                <td> 
                                    <?php if ($row->jenis_surat!="Pribadi") {
                                        echo tgl_indo($row->tgl_surat);
                                    }?></td>
                                <?php if($row->tgl_buat>$dateline){
                                    $status='<div class="text-danger">Terlambat</div>';
                                }else {
                                  $status='<div class="text-success">Tepat Waktu</div>';

                                }
                                ?>
                                <td> <?=$status.tgl_indo2($row->tgl_buat)?></td>
                                <td>
                                    <div class="dropdown dropright">
                                        <a href="<?=base_url()?>guru/file_tugas/<?=$row->id_surat.'/'.$row->id_tugas.'/'.$row->id_user?>" class="btn btn-primary btn-sm ">
                                            Lihat Surat
                                        </a>
                                        
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

?>
