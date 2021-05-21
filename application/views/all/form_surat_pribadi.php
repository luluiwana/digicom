<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row ">
        <div class="col-md-12">
            <a href="<?= base_url($level . '/buat_surat/'.$id_tugas) ?>" class="btn btn-outline-primary btn-sm mb-4"><i
                    class="fas fa-chevron-left mr-1"></i>Kembali</a>
            <div class="card">
                <div class="card-header text-center  h3"><b>Surat Pribadi</b></div>
                <div class="card-body">
                    <form enctype="multipart/form-data" action="<?= base_url('surat/add_surat') ?>" method="POST">
                        <input type="hidden" name="jenis_surat" value="Pribadi">
                        <div class="text-dark mb-4 h4 bg-gradient-success ml--4 text-white p-2 col-md-3">Pengirim</div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="" class="control-label">Nama Pengirim</label>
                                <div>
                                    <input type="text" name="pengirim" class="form-control" value=""
                                        placeholder="Dewi Ayu Sakdiyyah">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="" class="control-label">Kota Pengirim</label>
                                <div>
                                    <input type="text" name="kota" class="form-control" value="" placeholder="Malang">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-dark mb-4 h4 bg-gradient-success ml--4 text-white p-2 col-md-3">Penerima</div>
                        <!-- Yth. Kepala Sekolah
SMK Sebelas Maret
Jalan Soekarno-Hatta No.18
Lowokwaru, Kota Malang
65143 -->
                        <div class="form-group col-md-6">
                            <label for="" class="control-label">Nama Penerima</label>
                            <div>
                                <input type="text" name="kota" class="form-control" value="" placeholder="Yth. Kepala Sekolah">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="" class="control-label">Instansi Tujuan</label>
                            <div>
                                <input type="text" name="kota" class="form-control" value="" placeholder="SMK Sebelas Maret">
                            </div>
                        </div>
                         <div class="form-group col-md-6">
                            <label for="" class="control-label">Alamay Tujuan</label>
                            <div>
                                <input type="text" name="kota" class="form-control" value="" placeholder="SMK Sebelas Maret">
                            </div>
                        </div>
                         <div class="form-group col-md-6">
                            <label for="" class="control-label">Instansi Tujuan</label>
                            <div>
                                <input type="text" name="kota" class="form-control" value="" placeholder="SMK Sebelas Maret">
                            </div>
                        </div>
                         <div class="form-group col-md-6">
                            <label for="" class="control-label">Instansi Tujuan</label>
                            <div>
                                <input type="text" name="kota" class="form-control" value="" placeholder="SMK Sebelas Maret">
                            </div>
                        </div>


                </div>
                <input type="submit" value="Simpan Surat" class="btn btn-primary text-white form-control">
                </form>
            </div>
        </div>
    </div>
</div>
</div>