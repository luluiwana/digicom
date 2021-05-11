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
<?php $base = base_url("") ?>
<table>
    <tr>
        <td width="145px"> <img width="100px" src="<?= "file/logo_surat/" . $logo ?>" alt=""></td>
        <td>
            <table>
                <tr>
                    <td class="text-center">
                        <h3 style="margin:0px">
                            <?= $jenis_instansi ?>
                        </h3>
                    </td>

                </tr>
                <tr>
                    <td class="text-center bold">
                        <h2 style="margin:0px">
                            <?= $nama_instansi ?></h2>
                    </td>

                </tr>
                <tr>
                    <td class=" text-center "><?= $alamat_instansi ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-center small"> Telp : <?= $telp ?> | Email : <?= $email ?> </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

<hr style="border: 2px solid black;">
<table style="width:100%;padding-top:10px">
    <tr>
        <td>Nomor &nbsp;&nbsp;&nbsp;&nbsp;: <?= $nomor_surat ?></td>
        <td style="text-align: right;padding-right:100px">Tanggal : <?= $tgl_surat ?></td>

    </tr>
    <tr>
        <td>Lampiran : <?= $lampiran ?></td>
    </tr>
    <tr>
        <td>Perihal &nbsp;&nbsp;&nbsp; : <?= $perihal ?></td>
    </tr>
</table>


<table style="width:100%;padding-top:30px">

    <tr>
        <td>
            <?= $ucapan ?>
        </td>
    </tr>
    <tr>
        <td style="padding-left:30px;">
            <?= $nama_instansi ?>
        </td>
    </tr>
    <tr>
        <td style="padding-left:60px;">
            <?= $kota ?>
        </td>
    </tr>

    <tr>
        <td style="padding-top :30px"><?= $salam_buka ?></td>
    </tr>
</table>

<div style="margin-top:10px;margin-left:0px;margin-right:0px;">
    <?= $isi_surat ?>
</div>

<!-- <table style="margin-top:20px">
    <tr>
        <td><?= $salam_tutup ?></td>
    </tr>
</table> -->

<table style="width:100%;margin-top:50px">

    <tr>
        <td style="text-align: left;padding-left:520px"><?= $salam_tutup ?></td>
    </tr>
    <tr>
        <td style="text-align: left;padding-left:520px">
            <?= $jabatan ?> </td>
    </tr>
    <tr>
        <td style="text-align: left;padding-left:520px;padding-top:80px">
            <?= $pengirim ?> </td>
    </tr>
    <tr>
        <td style="text-align: left;padding-left:520px">
            NIP : <?= $nomor_identitas ?> </td>
    </tr>

</table>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->