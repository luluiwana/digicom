<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row ">
        <div class="col-md-12">
        <a href="<?=base_url($level.'/buat_surat')?>" class="btn btn-outline-primary btn-sm mb-4"><i class="fas fa-chevron-left mr-1"></i>Kembali</a>
            <div class="card">
                <div class="card-header text-center  h3"><b>Surat <?=$jenis.' ('.$style.')'?></b></div>
                <div class="card-body">
                    <div class="text-dark mb-4 h4 bg-gradient-success ml--4 text-white p-2 col-md-3">Kop Surat</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Nama Instansi</label>
                                <div>
                                    <input type="text" name="kop_surat" class="form-control" value=""
                                        placeholder="contoh: PT. Induk Jaya">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Jenis
                                    Instansi</label>
                                <div>
                                    <input type="text" name="jenis_instansi" class="form-control" value=""
                                        placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Alamat</label>
                                <div class="">
                                    <textarea type="text" name="alamat" class="form-control" value=""> </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Kota</label>
                                <div>
                                    <input type="text" name="kota" class="form-control" value=""
                                        placeholder="contoh: Malang">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Telp /
                                    HP</label>
                                <div>
                                    <input type="text" name="telp" class="form-control" value=""
                                        placeholder="contoh: 08xxxxxx">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Website</label>
                                <div>
                                    <input type="text" name="website" class="form-control" value=""
                                        placeholder="contoh: www/https://indonesiamerkeda.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Logo Instansi</label>
                                <div>
                                    <input type="file" name="logo" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- wajib  -->
                                <label for="" class="control-label">Tanggal</label>
                                <div class="input-group date">
                                    <input type="date" class="form-control" required>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Nomor
                                    Surat</label>
                                <div>
                                    <input type="text" name="nomor" class="form-control" value=""
                                        placeholder="contoh: 187/AM/IX/2015">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Perihal</label>
                                <div>
                                    <input type="text" name="perihal" class="form-control" value=""
                                        placeholder="contoh: PEMBERITAHUAN">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Lampiran</label>
                                <div>
                                    <input type="text" name="lampiran" class="form-control" value="" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-dark mb-4 h4 bg-gradient-success ml--4 text-white p-2 col-md-3">Alamat Tujuan</div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Nama
                                    Instansi</label>
                                <div>
                                    <input type="text" name="nama_tujuan" class="form-control" value=""
                                        placeholder="contoh: PT. KARYA JAYA">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Alamat</label>
                                <div>
                                    <div class="">
                                        <textarea type="text" name="alamat_tujuan" class="form-control"
                                            value=""> </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Kota</label>
                                <div>
                                    <input type="text" name="kota_tujuan" class="form-control" value=""
                                        placeholder="contoh: Kebumen">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-dark mb-4 h4 bg-gradient-success ml--4 text-white p-2 col-md-3">Isi Surat</div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Salam
                                    Pembuka</label>
                                <div>
                                    <input type="text" name="salam_pembuka" class="form-control" value=""
                                        placeholder="contoh: Dengan Hormat">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="control-label">Isi Surat</label>
                                <div>
                                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="control-label">Salam
                                    Penutup</label>
                                <div>
                                    <input type="text" name="salam_penutup" class="form-control" value=""
                                        placeholder="contoh: Hormat Kami">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="control-label">Nama</label>
                                <div>
                                    <input type="text" name="nama" placeholder="contoh: Indah Setyorini"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="control-label">Jabatan</label>
                                <div>
                                    <input type="text" name="jabatan" placeholder="contoh: Direktur"
                                        class="form-control">
                                    <input type="hidden" name="tipe" value="Hanging" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="<?=base_url($level.'/preview')?>" class="btn btn-primary text-white form-control"><i class="	fas fa-save mr-1"></i> Simpan
                        Surat</a>
                </div>
            </div>
        </div>




    </div>
</div>