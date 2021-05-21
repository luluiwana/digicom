<!-- Header -->
<div class="header bg-primary pb-1">
    <div class="container-fluid">
        <h3 class="text-white text-center mb-4">Selamat Datang, <?=$this->session->userdata('nama');?></h3>
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
                                    <span class="h3 font-weight-bold mb-0"><?=$nama_kelas?></span>
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
                                    <h5 class="card-title text-uppercase text-muted mb-0">Guru</h5>
                                    <span class="h4 font-weight-bold mb-0"><?=$guru?></span>
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
                                    <span class="h2 font-weight-bold mb-0"><?=$materi?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                        <i class="ni ni-book-bookmark"></i>
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
                                    <span class="h2 font-weight-bold mb-0"><?=$tugas?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                        <i class="ni ni-laptop"></i>
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
        <div class="col-xl-5 col-sm-">
            <div class="card">
                <div class="card-header border-0 ">
                    <div class="row align-items-center">
                        <div class="col">
                                <img style="width:100px" class="mr-3"
                                    src="<?=base_url('assets/img/custom/undraw_Mail_sent_re_0ofv.svg')?>" alt=""
                                    srcset="">
                                <a href="<?=base_url('siswa/materi')?>"
                                    class="btn bg-gradient-primary text-white px-5">Materi</a>
                        </div>

                    </div>
                </div>
            </div>
              <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">

                            <h3 class="mb-0">
                                <img style="width:100px" class="mr-3"
                                    src="<?=base_url('assets/img/custom/undraw_teaching_f1cm.svg')?>" alt="">
                                <a href="<?=base_url('siswa/tugas')?>" class="btn bg-gradient-primary text-white px-5">Tugas</a>
                            </h3>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-7">
            <div class="">
                <div class="card-body bg-none">
                    <img style="width:300px" src="<?=base_url('assets/img/custom/undraw_mail_2_tqip.svg')?>" alt="">
                </div>
            </div>
        </div>
       
    </div>