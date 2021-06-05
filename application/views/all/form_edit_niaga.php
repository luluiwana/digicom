<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row ">
        <div class="col-md-12">
            <a href="<?= base_url() ?>siswa/lihat_tugas/<?= $id_tugas ?>" class="btn btn-outline-primary btn-sm mb-4"><i class="fas fa-chevron-left mr-1"></i>Kembali</a>
            <?php foreach ($surat as $row) : ?>
                <div class="card">
                    <div class="card-header text-center  h3"><b>Surat <?= $row->jenis_surat . ' (' . $row->style . ')' ?></b></div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="<?= base_url('surat/update_surat/' . $row->id_surat) ?>" method="POST">
                            <input type="hidden" name="jenis_surat" value="<?= $row->jenis_surat ?>">
                            <input type="hidden" name="style" value="<?= $row->style ?>">
                            <input type="hidden" name="logo_baru" value="<?= $row->logo ?>">
                            <div class="text-dark mb-4 h4 bg-gradient-success ml--4 text-white p-2 col-md-3">Kop Surat</div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Instansi</label>
                                        <div>
                                            <input type="text" name="nama_instansi" class="form-control" value="<?= $row->nama_instansi ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="control-label">Alamat Instansi</label>
                                        <div class="">
                                            <textarea type="text" name="alamat_instansi" class="form-control" value="" placeholder="Jalan Soekarno-Hatta No.18 Kota Malang"><?= $row->alamat_instansi ?> </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label">Email</label>
                                        <div>
                                            <input type="email" name="email" class="form-control" value="<?= $row->email ?>">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label for="" class="control-label">Kota</label>
                                    <div>
                                        <input type="text" name="kota" class="form-control" value=""
                                            placeholder="contoh: Malang">
                                    </div>
                                </div> -->
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Telp /
                                            HP</label>
                                        <div>
                                            <input type="text" name="telp" class="form-control" value="<?= $row->telp ?>">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label for="" class="control-label">Website</label>
                                    <div>
                                        <input type="text" name="website" class="form-control" value="" placeholder="contoh: www/https://indonesiamerkeda.com">
                                    </div>
                                </div> -->
                                    <div class="form-group">
                                        <label for="" class="control-label">Logo Instansi</label>
                                        <div>
                                            <input type="file" name="logo" class="form-control">
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
                                            <input type="date" name="tgl_surat" class="form-control" required value="<?= $row->tgl_surat ?>">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label">Nomor
                                            Surat</label>
                                        <div>
                                            <input type="text" name="nomor" class="form-control" value="<?= $row->nomor_surat ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Perihal</label>
                                        <div>
                                            <input type="text" name="perihal" class="form-control" value="<?= $row->perihal ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label">Lampiran</label>
                                        <div>
                                            <input type="text" name="lampiran" class="form-control" value="<?= $row->lampiran ?>">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="text-dark mb-4 h4 bg-gradient-success ml--4 text-white p-2 col-md-3">Alamat Tujuan
                            </div>
                            <div class="form-group col-12 p-0">
                                <label for="" class="control-label">Penerima Surat</label>
                                <div>
                                    <div class="">
                                        <input type="text" value="<?= $row->penerima ?>" name="penerima" class="form-control"> </input>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama
                                            Instansi Tujuan</label>
                                        <div>
                                            <input type="text" name="instansi_tujuan" class="form-control" value="<?= $row->instansi_tujuan ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kota Instansi Tujuan</label>
                                        <div>
                                            <input type="text" name="kota_tujuan" class="form-control" value="<?= $row->kota_tujuan ?>">
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
                                        <input type="text" name="salam_pembuka" class="form-control" value="<?= $row->salam_buka ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 p-0">
                                <div class="form-group">
                                    <label for="" class="control-label">Isi Surat</label>
                                    <div>
                                        <textarea name="isi" id='isi_surat_dinas' class="form-control"><?= $row->isi_surat ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 p-0">
                                <div class="form-group">
                                    <label for="" class="control-label">Salam
                                        Penutup</label>
                                    <div>
                                        <input type="text" name="salam_penutup" class="form-control" value="<?= $row->salam_tutup ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Atas Nama</label>
                                        <div>
                                            <input type="text" name="nama" value="<?= $row->pengirim ?>" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Jabatan</label>
                                        <div>
                                            <input type="text" name="jabatan" value="<?= $row->jabatan ?>" class="form-control">
                                            <!-- <input type="hidden" name="tipe" value="Hanging" class="form-control"> -->
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nomor Identitas </label>
                                        <div>
                                            <input type="text" name="nip" value="<?= $row->nomor_identitas ?>" class="form-control">
                                            <!-- <input type="hidden" name="tipe" value="Hanging" class="form-control"> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>


                    <input type="submit" value="Simpan Surat" class="btn btn-primary text-white form-control">

                    </form>
                </div>
            <?php endforeach ?>
        </div>
    </div>




</div>
</div>