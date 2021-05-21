<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row ">
        <div class="col-md-12">
            <a href="<?= base_url($level . '/buat_surat/'.$id_tugas) ?>" class="btn btn-outline-primary btn-sm mb-4"><i
                    class="fas fa-chevron-left mr-1"></i>Kembali</a>
            <div class="card">
                <div class="card-header text-center  h3"><b>Surat <?= $jenis . ' (' . $style . ')' ?></b></div>
                <div class="card-body">
                    <form enctype="multipart/form-data" action="<?= base_url('surat/add_surat') ?>" method="POST">
                        <input type="hidden" name="jenis_surat" value="<?=$jenis?>">
                        <input type="hidden" name="style" value="<?=$style?>">
                        <div class="text-dark mb-4 h4 bg-gradient-success ml--4 text-white p-2 col-md-3">Kop Surat</div>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="" class="control-label">Nama Instansi</label>
                                    <div>
                                        <input type="text" name="nama_instansi" class="form-control" value=""
                                            placeholder="PT MATAHARI PUTRA PRIMA">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="control-label">Alamat Instansi</label>
                                    <div class="">
                                        <textarea type="text" name="alamat_instansi" class="form-control" value=""
                                            placeholder="Jalan Basuki Rahmat No.11 Tulungagung "> </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="control-label">Logo Instansi</label>
                                    <div>
                                        <input type="file" name="logo" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Telp /
                                        HP</label>
                                    <div>
                                        <input type="text" name="telp" class="form-control" value=""
                                            placeholder="contoh: (031) 47189xxx ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">Website</label>
                                    <div>
                                        <input type="text" name="website" class="form-control" value=""
                                            placeholder="contoh: www.matahariputraprima.com">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="" class="control-label">Email</label>
                                    <div>
                                        <input type="email" name="email" class="form-control" value=""
                                            placeholder="contoh : email@email.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-dark mb-4 h4 bg-gradient-success ml--4 text-white p-2 col-md-3">Header Surat
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- wajib  -->
                                    <label for="" class="control-label">Tanggal</label>
                                    <div class="input-group date">
                                        <input type="date" name="tgl_surat" class="form-control" required>

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
                                            placeholder="contoh: Pesanan Barang">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">Lampiran</label>
                                    <div>
                                        <input type="text" name="lampiran" class="form-control" value=""
                                            placeholder="-">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="text-dark mb-4 h4 bg-gradient-success ml--4 text-white p-2 col-md-3">Alamat Tujuan
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Penerima Surat</label>

                                    <div class="">
                                        <input type="text" placeholder="contoh: Yth. Direktur " name="penerima"
                                            class="form-control"> </input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">Nama
                                        Instansi Tujuan</label>
                                    <div>
                                        <input type="text" name="instansi_tujuan" class="form-control" value=""
                                            placeholder="contoh: PT Makmur Jaya">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">Alamat Instansi Tujuan</label>
                                    <div class="">
                                        <textarea type="text" name="alamat_tujuan" class="form-control"
                                            value=""> </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="" class="control-label">Kota Instansi Tujuan</label>
                                    <div>
                                        <input type="text" name="kota_tujuan" class="form-control" value=""
                                            placeholder="contoh: Kebumen">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="control-label">Kode Pos</label>
                                    <div>
                                        <input type="text" name="kode_pos" class="form-control" value=""
                                            placeholder="contoh: 63152">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="text-dark mb-4 h4 bg-gradient-success ml--4 text-white p-2 col-md-3">Isi Surat</div>

                        <div class="col-md-12 p-0">
                            <div class="form-group">
                                <label for="" class="control-label">Salam
                                    Pembuka</label>
                                <div>
                                    <input type="text" name="salam_pembuka" class="form-control" value=""
                                        placeholder="contoh: Dengan Hormat">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">
                            <div class="form-group">
                                <label for="" class="control-label">Isi Surat</label>
                                <div>
                                    <textarea name="isi" id='isi_surat_dinas' class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 p-0">
                            <div class="form-group">
                                <label for="" class="control-label">Salam
                                    Penutup</label>
                                <div>
                                    <input type="text" name="salam_penutup" class="form-control" value=""
                                        placeholder="contoh: Hormat Kami">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Atas Nama</label>
                                    <div>
                                        <input type="text" name="nama" placeholder="contoh: Indah Setyorini"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Jabatan</label>
                                    <div>
                                        <input type="text" name="jabatan" placeholder="contoh: Manajer Pemasaran"
                                            class="form-control">
                                    </div>
                                </div>
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