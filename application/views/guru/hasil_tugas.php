<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-12">
            <a href="<?=base_url('guru/lihat_tugas')?>" class="btn btn-outline-primary btn-sm mb-3"><i
                    class="	fas fa-chevron-left mr-1"></i>Kembali ke
                Tugas</a>

            <div class="card">
                <div class="card-header"><b>Identitas Siswa</b></div>
                <div class="card-body">
                    <table class="table-sm">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>Aprisa Amanda</td>
                        </tr>
                        <tr>
                            <td>NIS</td>
                            <td>:</td>
                            <td>9823788982</td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td>Kelas A</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td><span class="text-success">Selesai pada 24 Maret 2021</span> </td>
                        </tr>
                        <tr>
                            <td>Nilai</td>
                            <td>:</td>
                            <td>90
                                <a class="btn btn-outline-primary btn-sm ml-2" data-toggle="modal"
                                    data-target="#modal_nilai">
                                    <i class="fas fa-edit"></i> Ubah
                                    Nilai</a>
                                <div class="modal fade" id="modal_nilai" tabindex="-1" role="dialog"
                                    aria-labelledby="modal_nilai" aria-hidden="true">
                                    <div class="modal-dialog  modal-dialog-centered modal-" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="py-3 row">
                                                    <div class="col-md-6"><label for="">Masukkan Nilai:</label></div>
                                                    <div class="col-md-6"><input type="text" name="" id="" value="90" class="form-control "></div>
                                                    <div class="col-md-6"></div>
                                                    <div class="col-md-6 "><a href="" class="btn btn-primary btn-sm mt-3 px-5">Simpan</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Hasil Tugas </b></div>
                <div class="card-body">
                    <table class="table table-responsive" style="min-height:500px">
                        <thead>
                            <th>No</th>
                            <th>Jenis Surat</th>
                            <th>Tanggal Pembuatan</th>
                            <th>Nama Instansi</th>
                            <th>Nomor Surat</th>
                            <th>#</th>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>Dinas</td>
                            <td>18 Maret 2021</td>
                            <td>PT. Alkisah Indonesia</td>
                            <td>782/23uhu23/e</td>
                            <td>
                                <a href="<?=base_url('guru/file_tugas')?>" target="_blank" class="btn btn-primary btn-sm"><i
                                        class="	fas fa-file-alt mr-1    "></i> Lihat Surat</a>
                            </td>

                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>