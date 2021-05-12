<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <?php foreach($getKelasById as $row):?>
        <?php $id_kelas=$row->id_kelas?>
        <h3 class="text-white text-center mb-4"><?=$row->nama_kelas.' - '.$row->nama_sekolah?></h3>
        <?php endforeach;?>
        <div class="header-body">
            <!-- Card stats -->
            <div class="row">

                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Siswa</h5>
                                    <span class="h2 font-weight-bold mb-0"><?=$jml_siswa?></span>

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
                                    <span class="h2 font-weight-bold mb-0"><?=$jml_materi?></span>
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
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="">
                                <a href="<?=base_url('guru/data_siswa/'.$id_kelas)?>" class="btn btn-sm btn-outline-dark mb-2"><i
                                        class="fas fa-users mr-1"></i> Data Siswa</a>
                                    <a href="<?=base_url('guru/edit_kelas/'.$id_kelas)?>" class="btn btn-sm btn-outline-dark "><i
                                        class="fas fa-cog mr-1"></i> Pengaturan Kelas</a>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Materi</h3>
                        </div>
                        <div class="col text-right">
                            <a href="<?=base_url('guru/tambah_materi/'.$id_kelas)?>"
                                class="btn btn-sm btn-primary">Tambah Materi</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul Materi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $x=1; foreach($materi as $row):?>
                            <tr>
                                <th scope="row">
                                    <?=$x?>
                                </th>
                                <td class="text-wrap">
                                    <a
                                        href="<?=base_url('guru/materi/'.$row->id_kelas.'/'.$row->id_materi)?>"><?=$row->judul_materi?></a>
                                </td>
                            </tr>
                            <?php $x++; endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Tugas</h3>
                        </div>
                        <div class="col text-right">
                            <a href="<?=base_url('guru/tambah_tugas/'.$id_kelas)?>" class="btn btn-sm btn-primary">Tambah Tugas</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Judul Tugas</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $x=1; foreach($tugas as $row):?>
                            <tr>
                                <td><?=$x?></td>
                                
                                <td>
                                    <a href="<?=base_url('guru/lihat_tugas/'.$row->id_kelas.'/'.$row->id_tugas)?>"><?=$row->judul_tugas?></a>
                                </td>
                                

                            </tr>
                            <?php $x++; endforeach;?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>