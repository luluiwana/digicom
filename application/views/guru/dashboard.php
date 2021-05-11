<!-- Header -->
<div class="header bg-primary pb-1">
    <div class="container-fluid">
        <h3 class="text-white text-center mb-4">Selamat Datang, <?=$nama?></h3>
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Kelas</h5>
                                    <span class="h2 font-weight-bold mb-0"><?=$jml_kelas?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="ni ni-active-40"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Siswa</h5>
                                    <span class="h2 font-weight-bold mb-0">120</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                        <i class="ni ni-chart-pie-35"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Materi</h5>
                                    <span class="h2 font-weight-bold mb-0">24</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                        <i class="ni ni-money-coins"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Tugas</h5>
                                    <span class="h2 font-weight-bold mb-0">10</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                        <i class="ni ni-chart-bar-32"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt-2">

    <div class="row">

        <div class="col-xl-7">
            <?php if($jml_kelas==0):?>
            <div class="card">
                <div class="card-header border-0">
                    <div class="align-items-center">
                        <div class="h3 text-center">
                            Belum Ada Kelas
                        </div>
                        <div class="text-center">
                            <img style="width:300px" class=""
                                src="<?=base_url('assets/img/custom/undraw_teaching_f1cm.svg')?>" alt="">
                        </div>
                        <h3 class="mb-0 text-center">

                            <a href="<?=base_url('guru/buat_kelas')?>"
                                class="btn bg-gradient-primary text-white px-5">Buat
                                Kelas</a>
                        </h3>

                    </div>

                </div>
            </div>
            <?php else:?>
            <div class="card mt-4">
                <div class="card-header border-0 h3  bg-gradient-primary text-white">
                    Kelas Saya
                    <a href="<?=base_url()?>guru/buat_kelas" class="btn btn-sm bg-white float-right">Buat Kelas</a>
                </div>
                <div class="card-body">
                    <div class="align-items-center">
                        <div class="h3 text-center">
                            <table class="table table-sm">
                                <?php foreach($kelas as $row):?>
                                <tr>
                                    <td class="text-left">
                                        <h4>
                                            <a
                                                href="<?=base_url()?>lihat_kelas/<?=$row->id_kelas?>"><?=$row->nama_kelas.' - '.$row->nama_sekolah?></a>
                                        </h4>
                                    </td>
                                    <td><i class="fa fa-angle-double-right"></i></td>
                                </tr>
                                <?php endforeach;?>
                            </table>
                        </div>
                        <div class="col">
                            <h3 class="mb-0">
                               
                                <a href="<?=base_url('guru/kelas')?>"
                                    class="btn bg-gradient-primary btn-sm text-white px-5">Lihat Semua kelas</a>
                            </h3>

                        </div>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </div>
        <div class="col-xl-5">
            <div class="">
                <div class="card-body bg-none d-sm-none d-md-block">
                    <img style="width:300px" src="<?=base_url('assets/img/custom/undraw_mail_2_tqip.svg')?>" alt="">
                </div>
            </div>
        </div>

    </div>