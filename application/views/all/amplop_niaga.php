<style>
    @page {
        margin: 40px;
        margin-top: 20px;
        size: 114mm 229mm landscape;
    }

    .text-center {
        text-align: center;
    }

    .bold {
        font-weight: bold;
    }
</style>
<?php
foreach ($surat as $row) :
?>
    <table>
        <tr>
            <td width="145px"> <img width="100px" src="<?= "file/logo_surat/" . $row->logo ?>" alt=""></td>
            <td>
                <table>
                    <tr>
                        <td class="text-center">
                            <h1 style="margin:0px">
                                <?= $row->jenis_instansi ?>
                            </h1>
                        </td>

                    </tr>
                    <tr>
                        <td class="text-center bold">

                            <h2 style="margin:0px"> <?= $row->nama_instansi ?></h2>
                        </td>

                    </tr>
                    <tr>
                        <td class=" text-center "><?= $row->alamat_instansi ?>
                        </td>
                    </tr>

                    <tr>
                        <td class="text-center "> Telp : <?= $row->telp ?> | Email : <?= $row->email ?> </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

    <hr style="border: 2px solid black;">
    <table style="width:100%;padding-top:10px">
        <tr>
            <td>Nomor &nbsp;&nbsp;&nbsp;&nbsp;: <?= $row->nomor_surat ?></td>


        </tr>

    </table>
    <div style="margin-top:70px;margin-left:500px;border:1px solid black; padding:8px; border-radius:10px;line-height:25px">
        <?= $row->penerima ?><br>
        <span style="padding-left:30px"><?= $row->instansi_tujuan ?><br></span>
        <span style="padding-left:30px"> <?= $row->kota_tujuan . ' ' . $row->kode_pos ?><br></span>



    </div>

<?php endforeach; ?>

<?php
function tgl_indo($tanggal)

# code...

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

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}

?>