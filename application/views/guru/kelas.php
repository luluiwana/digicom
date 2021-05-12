<!-- Page content -->

<body class="bg-primary">
    <div class="col-md-8 mx-auto mt-3">
        <div class="card mt-4">
            <div class="card-header border-0 h3 ">
                Semua Kelas
                <a href="<?=base_url()?>guru/buat_kelas"
                    class="btn btn-sm bg-gradient-primary float-right text-white">Buat Kelas</a>
            </div>
            <div class="card-body">
                <div class="align-items-center">
                    <div class="">
                        <table class="table table-hover" id="kelas">
                            <thead>
                                <th>
                                    <h5>No.</h5>
                                </th>
                                <th>
                                    <h5>Nama Kelas</h5>
                                </th>
                                <th>
                                    <h5>Sekolah</h5>
                                </th>
                                <th>
                                    <h5>#
                                    </h5>
                                </th>
                            </thead>
                            <?php $x=1; foreach($kelas as $row):?>
                            <tr>
                                <td style="font-size:15px"><?=$x?></td>
                                <td style="font-size:15px"><?=$row->nama_kelas?></td>
                                <td style="font-size:15px"><?=$row->nama_sekolah?></td>
                                <td style="font-size:15px">
                                    <a href="<?=base_url()?>guru/lihat_kelas/<?=$row->id_kelas?>"> Lihat Kelas <i
                                            class="fa fa-angle-double-right"></i></a>

                                </td>
                            </tr>
                            <?php $x++; endforeach;?>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>