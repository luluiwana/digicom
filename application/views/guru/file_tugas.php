<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-12">
            <a href="<?=base_url('guru/hasil_tugas/'.$id_tugas.'/'.$id_user)?>" class="btn btn-outline-primary btn-sm mb-3"><i
                    class="	fas fa-chevron-left mr-1"></i>Kembali ke
                Tugas</a>
            <div class="card">
                <div class="card-header"><b>Identitas Siswa</b></div>
                <div class="card-body">
                    <?php foreach($identitas as $row):?>
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

                    </table>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>File Tugas </b></div>
                <div class="card-body">
                    <?php $file=base_url('file/materi/1.pdf')?>
                    <iframe id="pdf-js-viewer" src="<?=base_url()?>guru/cetak_surat/<?=$id_surat?>" title="webviewer" frameborder="0" style="width:100%"
                        height="600"></iframe>
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

