<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row ">
        <div class="col-md-12">
            <a href="<?=base_url($level.'/buat_surat')?>" class="btn btn-outline-primary btn-sm mb-4"><i class="fas fa-chevron-left mr-1"></i> Kembali</a>
            <div class="card">
                <div class="card-header text-center  h3"><b>Surat Pribadi</b></div>
                <div class="card-body row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tempat</label>
                            <div>
                                <input type="text" name="tempat" class="form-control" value=""
                                    placeholder="contoh: Malang" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- wajib  -->
                            <label for="" class="control-label">Tanggal</label>
                            <div class="input-group date">
                                <input type="date" id="basicDate" name="tanggal" value="" class="form-control" required>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Penerima</label>
                            <div class="">
                                <input type="text" name="nama_tujuan" class="form-control" value=""
                                    placeholder="contoh: Kakak Desi">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Kota Tujuan</label>
                            <div class="">
                                <input type="text" name="kota_tujuan" class="form-control" value=""
                                    placeholder="contoh: Malang">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="control-label">Salam Pembuka</label>
                            <div class="">
                                <input type="text" name="salam_pembuka" class="form-control" value=""
                                    placeholder="contoh: Salam kangen">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"> <label for="" class="control-label">Isi Surat</label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Salam Penutup</label>
                            <div>
                                <input type="text" name="salam_penutup" class="form-control" value=""
                                    placeholder="contoh: Adik tercintamu">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <div>
                                <input type="text" name="nama" placeholder="contoh: Lala" class="form-control">
                            </div>
                        </div>
                    </div>

                    <a href="<?=base_url($level.'/preview')?>" class="btn btn-primary text-white form-control">Simpan
                        Surat</a>
                </div>
            </div>
        </div>
    </div>
</div>