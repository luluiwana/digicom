<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-2">

        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <!-- DAFTAR SEBAGAI -->
    <div class="container mt--8 pb-3" id="daftar_sebagai">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-7 col-sm-12">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-dark mb-4">
                            <h2>Daftar Sebagai</h2>
                        </div>
                        <div class="row text-center">
                            <button class="btn col-md-5  text-center" id="btn_daftar_siswa">
                                <img style="width:200px"
                                    src="<?= base_url('assets/img/custom/undraw_Graduation_ktn0.svg') ?>" alt=""
                                    srcset="">
                                Siswa
                            </button>
                            <div class="col-md-1"></div>
                            <button class="btn col-md-5  text-center" id="btn_daftar_guru">

                                <img style="width:200px"
                                    src="<?= base_url('assets/img/custom/undraw_professor_8lrt.svg') ?>" alt=""
                                    srcset="">
                                Guru
                            </button>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END DAFTAR SEBAGAI -->
    <!-- Daftar Siswa -->
    <div class="container mt--8 pb-3 " id="daftar_siswa" style="display:none">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">

                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            Daftar Sebagai Siswa
                        </div>
                        <form role="form" method="post" action="<?= base_url('auth/daftar_siswa') ?>">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-check-bold"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Nomor Induk Siswa" name='username'
                                        type="text" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input class="form-control" name='nama' type="text" placeholder="Nama Lengkap"
                                        required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-books"></i></span>
                                    </div>
                                    <select name="kelas" class="form-control" required>
                                        <option value="">Pilih Kelas</option>
                                        <?php foreach($kelas as $row):?>
                                        <option name="id_kelas" value="<?=$row->id_kelas?>"><?=$row->nama_sekolah.' - '.$row->nama_kelas?></option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" name='password' placeholder="Password" type="password"
                                        required>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" value="Daftar" class="btn btn-info">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Daftar Guru -->
    <div class="container mt--8 pb-3 " id="daftar_guru" style="display:none">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">

                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            Daftar Sebagai Guru
                        </div>


                        <form role="form" method="post" action="<?= base_url('auth/daftar_guru') ?>">
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-check-bold"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="NIP" name="id" required>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Nama Lengkap" name="nama" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Buat Password" name="password"
                                        type="password" required>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="hidden" name="level" value="guru">
                                <input type="submit" value="Daftar" class="btn btn-primary my-4" required>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <span class="text-white"><small>Sudah memiliki akun?</small></span> <a href="<?= base_url('auth/login') ?>"
                class="text-light"><small>Login</small></a>
        </div>
    </div>
</div>