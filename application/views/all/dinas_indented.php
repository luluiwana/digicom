<title>Surat Dinas (Indented)</title>
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
        text-indent: 3em;
        line-height: 1.5em;
        margin-top: 1px;
        margin: 8px;
        margin-left: 0px;
        padding-left: 0px;

    }
</style>
<?php $base = base_url("") ;
foreach ($surat as $row ) :
?>
<table>
    <tr>
        <td width="145px"> <img width="100px" src="<?= "file/logo_surat/" . $row->logo ?>" alt=""></td>
        <td>
            <table>
                <tr>
                    <td class="text-center">
                        <h3 style="margin:0px">
                            <?= $row->jenis_instansi ?>
                        </h3>
                    </td>

                </tr>
                <tr>
                    <td class="text-center bold">
                        <h2 style="margin:0px">
                            <?= $row->nama_instansi ?></h2>
                    </td>

                </tr>
                <tr>
                    <td class=" text-center "><?= $row->alamat_instansi ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-center small"> Telp : <?= $row->telp ?> | Email : <?= $row->email ?> </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

<hr style="border: 2px solid black;">
<table style="width:100%;padding-top:10px">
    <tr>
        <td>Nomor &nbsp;&nbsp;&nbsp;&nbsp;: <?= $row->nomor_surat ?></td>
        <td style="text-align: right;padding-right:100px">Tanggal : <?= $row->tgl_surat ?></td>

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
        <td style="padding-left:30px;">
            <?= $row->instansi_tujuan ?>
        </td>
    </tr>
    <tr>
        <td style="padding-left:60px;">
            <?= $row->kota_tujuan ?>
        </td>
    </tr>

    <tr>
        <td style="padding-top :30px"><?= $row->salam_buka ?></td>
    </tr>
</table>

<div style="margin-top:10px;margin-left:0px;margin-right:0px;">
    <?= $row->isi_surat ?>
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
        <td style="text-align: left;padding-left:520px">
            <?= $row->jabatan ?> </td>
    </tr>
    <tr>
        <td style="text-align: left;padding-left:520px;padding-top:80px">
            <?= $row->pengirim ?> </td>
    </tr>
    <tr>
        <td style="text-align: left;padding-left:520px">
             <?= $row->nomor_identitas ?> </td>
    </tr>

</table>
<?php endforeach;?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->