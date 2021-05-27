<title>Surat Niaga (Block)</title>
<style>
    @page {
        margin: 40px;
        margin-top: 20px;
    }

    .text-center {
        text-align: center;
    }

    .bold {
        font-weight: bold;
    }

    .small {
        font-size: small;
    }

    .border {
        border: 1px solid black
    }

    .p-1 {
        padding: 3px;
    }

    .top {
        vertical-align: top;
    }

    div>p {
        text-align: justify;
        text-indent: 0px;
        line-height: 1.5em;
        margin-top: 1px;
        margin: 8px;
        margin-left: 0px;
        padding-left: 0px;

    }

    ul {
        margin-bottom: 0px;
        padding-left: 0px;
        padding-inline-start: 0px;
    }

    ul>li {
        list-style-position: inside;
        list-style-type: none
    }

    ol {
        margin-bottom: 0px;
        list-style-position: inside;
        padding-left: 10px;
    }
</style>
<?php


$base = base_url("");
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
            <td style="text-align: right;padding-right:100px">Tanggal : <?= tgl_indo($row->tgl_surat); ?></td>


        </tr>
        <tr>
            <td>Lampiran : <?= $row->lampiran ?></td>
        </tr>
        <tr>
            <td>Perihal &nbsp;&nbsp;&nbsp; : <?= $row->perihal ?></td>
        </tr>
    </table>


    <table style="width:100%;padding-top:30px">

        <tr>
            <td>
                <?= $row->penerima ?>
            </td>
        </tr>
        <tr>
            <td>
                <?= $row->instansi_tujuan ?>
            </td>
        </tr>
        <tr>
            <td>
                <?= $row->alamat_tujuan ?>
            </td>
        </tr>
        <tr>
            <td>
                <?= $row->kota_tujuan . ' ' . $row->kode_pos ?>
            </td>
        </tr>

        <tr>
            <td style="padding-top :30px"><?= $row->salam_buka ?></td>
        </tr>
    </table>

    <?php
    $find = "<li>";
    $replace = "<li style='margin-left:0px;   '> ";
    $str = str_replace($find, $replace, $row->isi_surat);
    ?>

    <div style="margin-top:10px;margin-left:0px;margin-right:0px;margin-bottom:100px;">
        <?= $str ?>
    </div>

    <!-- <table style="margin-top:20px">
    <tr>
        <td><?= $row->salam_tutup ?></td>
    </tr>
</table> -->

    <table style="width:100%;margin-top:50px">

        <tr>
            <td style="text-align: left;padding-left:520px"><?= $row->salam_tutup ?></td>
        </tr>

        <tr>
            <td style="text-align: left;padding-left:520px;padding-top:80px">
                <?= $row->pengirim ?> </td>
        </tr>
        <tr>
            <td style="text-align: left;padding-left:520px">
                <?= $row->jabatan ?> </td>
        </tr>

    </table>
<?php endforeach; ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->
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
