<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <h3 class="text-white text-center mb-4">Kelas A</h3>
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
                                    <span class="h2 font-weight-bold mb-0">30</span>

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
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <a href="<?=base_url('guru/data_siswa')?>" class="btn btn-sm btn-outline-dark mb-2"><i class="fas fa-users mr-2"></i> Data Siswa</a>
                                   
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
                            <a href="<?=base_url('guru/tambah_materi')?>" class="btn btn-sm btn-primary">Tambah Materi</a>
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
                            <tr>
                                <th scope="row">
                                    1
                                </th>
                                <td class="text-wrap">
                                    <a href="<?=base_url('guru/materi')?>">Materi 1 - Pengantar Ilmu Administrasi</a>
                                </td>
                            </tr>

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
                            <a href="<?=base_url('guru/tambah_tugas')?>" class="btn btn-sm btn-primary">Tambah Tugas</a>
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
                            <tr>
                                <td>1</td>

                                <td>
                                    <a href="<?=base_url('guru/lihat_tugas')?>">Tugas 1 - Pengantar Ilmu Administrasi</a>
                                </td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>