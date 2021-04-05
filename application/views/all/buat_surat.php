<!-- Page content -->
<div class="container-fluid mt-3">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Pilih Jenis Surat</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 btn bg-secondary text-center">
                           <a href="<?=base_url($level.'/form_surat_pribadi')?>"> <img style="height:50px" class="mr-2"
                                src="<?=base_url('assets/img/custom/undraw_Newsletter_re_wrob.svg')?>" alt="">
                            Surat Pribadi</a>
                        </div>
                        <div class="col-md-4 btn bg-secondary text-center btn-dinas">
                            <img style="height:50px" class="mr-3"
                                src="<?=base_url('assets/img/custom/undraw_Opened_re_i38e.svg')?>" alt="">
                            Surat Dinas
                        </div>
                        <div class="col-md-4 btn bg-secondary text-center btn-niaga">
                            <img style="height:50px" class="mr-3"
                                src="<?=base_url('assets/img/custom/undraw_Team_chat_re_vbq1.svg')?>" alt="">
                            Surat Niaga
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- Surat Dinas -->
    <div class="row" id="surat_dinas" style="display:none">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Surat Dinas</b></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="bg-gradient-danger mb-2 text-white btn btn-d-block">Block</div>
                            <div class="bg-gradient-danger mb-2 text-white btn btn-d-hanging">Hanging</div>
                            <div class="bg-gradient-danger mb-2 text-white btn btn-d-indented">Indented</div>
                            <div class="bg-gradient-danger mb-2 text-white btn btn-d-full">Full Block</div>
                            <div class="bg-gradient-danger mb-2 text-white btn btn-d-semi">Semi Block</div>
                        </div>
                        <!-- Indented -->
                        <div class="col-md-9 text-center" style="display:none" id="d-indented">
                            <h4 class="text-center">Contoh Surat Dinas dengan Style Indented</h4>
                            <div class="border"> <a href="<?=base_url($level.'/form_surat/Dinas/Indented')?>"
                                    class="btn bg-gradient-primary text-white mb-2 px-5">Buat Surat</a>
                                <img class="w-100" src="<?=base_url('file/contoh_surat/indented.jpg')?>" alt="">
                            </div>
                        </div>
                         <!-- Hanging -->
                        <div class="col-md-9 text-center" style="display:none" id="d-hanging">
                            <h4 class="text-center">Contoh Surat Dinas dengan Style Hanging</h4>
                            <div class="border"> <a href="<?=base_url($level.'/form_surat/Dinas/Hanging')?>"
                                    class="btn bg-gradient-primary text-white mb-2 px-5">Buat Surat</a>
                                <img class="w-100" src="<?=base_url('file/contoh_surat/hanging.jpg')?>" alt="">
                            </div>
                        </div>
                         <!-- Block -->
                        <div class="col-md-9 text-center" style="display:none" id="d-block">
                            <h4 class="text-center">Contoh Surat Dinas dengan Style Block</h4>
                            <div class="border"> <a href="<?=base_url($level.'/form_surat/Dinas/Block')?>"
                                    class="btn bg-gradient-primary text-white mb-2 px-5">Buat Surat</a>
                                <img class="w-100" src="<?=base_url('file/contoh_surat/block.jpg')?>" alt="">
                            </div>
                        </div>
                         <!-- Semi-->
                        <div class="col-md-9 text-center" style="display:none" id="d-semi">
                            <h4 class="text-center">Contoh Surat Dinas dengan Style Semi Block</h4>
                            <div class="border"> <a href="<?=base_url($level.'/form_surat/Dinas/Semi-Block')?>"
                                    class="btn bg-gradient-primary text-white mb-2 px-5">Buat Surat</a>
                                <img class="w-100" src="<?=base_url('file/contoh_surat/semi.jpg')?>" alt="">
                            </div>
                        </div>
                         <!-- Full -->
                        <div class="col-md-9 text-center" style="display:none" id="d-full">
                            <h4 class="text-center">Contoh Surat Dinas dengan Style Full Block</h4>
                            <div class="border"> <a href="<?=base_url($level.'/form_surat/Dinas/Full-Block')?>"
                                    class="btn bg-gradient-primary text-white mb-2 px-5">Buat Surat</a>
                                <img class="w-100" src="<?=base_url('file/contoh_surat/full.jpg')?>" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Surat Niaga -->
    <div class="row" id="surat_niaga" style="display:none">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Surat Niaga</b></div>
                <div class="card-body">
                      <div class="row">
                        <div class="col-md-3">
                            <div class="bg-gradient-danger mb-2 text-white btn btn-n-block">Block</div>
                            <div class="bg-gradient-danger mb-2 text-white btn btn-n-hanging">Hanging</div>
                            <div class="bg-gradient-danger mb-2 text-white btn btn-n-indented">Indented</div>
                            <div class="bg-gradient-danger mb-2 text-white btn btn-n-full">Full Block</div>
                            <div class="bg-gradient-danger mb-2 text-white btn btn-n-semi">Semi Block</div>
                        </div>
                        <!-- Indented -->
                        <div class="col-md-9 text-center" style="display:none" id="n-indented">
                            <h4 class="text-center">Contoh Surat Niaga dengan Style Indented</h4>
                            <div class="border"> <a href="<?=base_url($level.'/form_surat/Niaga/Indented')?>"
                                    class="btn bg-gradient-primary text-white mb-2 px-5">Buat Surat</a>
                                <img class="w-100" src="<?=base_url('file/contoh_surat/indented.jpg')?>" alt="">
                            </div>
                        </div>
                         <!-- Hanging -->
                        <div class="col-md-9 text-center" style="display:none" id="n-hanging">
                            <h4 class="text-center">Contoh Surat Niaga dengan Style Hanging</h4>
                            <div class="border"> <a href="<?=base_url($level.'/form_surat/Niaga/Hanging')?>"
                                    class="btn bg-gradient-primary text-white mb-2 px-5">Buat Surat</a>
                                <img class="w-100" src="<?=base_url('file/contoh_surat/hanging.jpg')?>" alt="">
                            </div>
                        </div>
                         <!-- Block -->
                        <div class="col-md-9 text-center" style="display:none" id="n-block">
                            <h4 class="text-center">Contoh Surat Niaga dengan Style Block</h4>
                            <div class="border"> <a href="<?=base_url($level.'/form_surat/Niaga/Block')?>"
                                    class="btn bg-gradient-primary text-white mb-2 px-5">Buat Surat</a>
                                <img class="w-100" src="<?=base_url('file/contoh_surat/block.jpg')?>" alt="">
                            </div>
                        </div>
                         <!-- Semi-->
                        <div class="col-md-9 text-center" style="display:none" id="n-semi">
                            <h4 class="text-center">Contoh Surat Niaga dengan Style Semi Block</h4>
                            <div class="border"> <a href="<?=base_url($level.'/form_surat/Niaga/Semi-Block')?>"
                                    class="btn bg-gradient-primary text-white mb-2 px-5">Buat Surat</a>
                                <img class="w-100" src="<?=base_url('file/contoh_surat/semi.jpg')?>" alt="">
                            </div>
                        </div>
                         <!-- Full -->
                        <div class="col-md-9 text-center" style="display:none" id="n-full">
                            <h4 class="text-center">Contoh Surat Niaga dengan Style Full Block</h4>
                            <div class="border"> <a href="<?=base_url($level.'/form_surat/Niaga/Full-Block')?>"
                                    class="btn bg-gradient-primary text-white mb-2 px-5">Buat Surat</a>
                                <img class="w-100" src="<?=base_url('file/contoh_surat/full.jpg')?>" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


</div>