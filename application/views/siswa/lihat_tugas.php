<!-- Page content -->
<div class="container-fluid mt-3">
    <a href="<?=base_url('siswa/tugas')?>" class="btn btn-sm btn-outline-primary mb-3"><i class="fas fa-chevron-left mr-1"></i> Kembali ke Daftar Tugas</a>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4"><b>Tugas 1 - Pengantar Ilmu Administrasi</b>
                   
                </div>
                <div class="card-body">
                    <div>
                        <p class="small">It is a long established fact that a reader will be distracted by the readable
                            content of a page when looking at its layout. The point of using Lorem Ipsum is that it has
                            a more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will
                            uncover many web sites still in their infancy. Various versions have evolved over the years,
                            sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    </div>
                    <div class="h6 text-danger">Batas Waktu Penyelesaian: 29 Maret 2021</div>
                <div> <a href="" class="btn btn-sm bg-gradient-success text-white"><i class="	fas fa-upload"></i> Kumpulkan Tugas</a></div>

                </div>

            </div>
            <div class="card">
                <div class="card-header"><b>Hasil Tugas</b>
                    <a href="<?=base_url('siswa/buat_surat')?>"
                        class="btn bg-gradient-primary text-white float-right btn-sm"><i class="fas fa-envelope-open"></i> Buat Surat</a>
                </div>
                <div class="card-body">
                    <table class="table table-responsive" style="min-height:500px">
                        <tr>
                            <th>No</th>
                            <th>Jenis Surat</th>
                            <th>Tanggal Pembuatan</th>
                            <th>Nama Instansi</th>
                            <th>Nomor Surat</th>
                            <th>Opsi</th>
                        </tr>
                        <th>
                            <tr>
                                <td>1</td>
                                <td>Dinas</td>
                                <td>18 Maret 2021</td>
                                <td>PT. Alkisah Indonesia</td>
                                <td>782/23uhu23/e</td>
                                <td>
                                    <div class="dropdown dropright">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                            data-toggle="dropdown">
                                            Opsi
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="<?=base_url('siswa/preview')?>">Lihat Surat</a>
                                            <a class="dropdown-item" href="<?=base_url('siswa/cetak_surat')?>">Cetak Surat</a>
                                            <a class="dropdown-item" href="<?=base_url('siswa/cetak_amplop')?>">Cetak Amplop</a>
                                            <a class="dropdown-item" href="<?=base_url('siswa/edit_surat')?>">Edit Surat</a>
                                            <a class="dropdown-item" href="<?=base_url('siswa/lihat_tugas')?>">Hapus Surat</a>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                             <tr>
                                <td>1</td>
                                <td>Dinas</td>
                                <td>18 Maret 2021</td>
                                <td>PT. Alkisah Indonesia</td>
                                <td>782/23uhu23/e</td>
                                <td>
                                    <div class="dropdown dropright">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                            data-toggle="dropdown">
                                            Opsi
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Lihat Surat</a>
                                            <a class="dropdown-item" href="#">Cetak Surat</a>
                                            <a class="dropdown-item" href="#">Cetak Amplop</a>
                                            <a class="dropdown-item" href="#">Edit Surat</a>
                                            <a class="dropdown-item" href="#">Hapus Surat</a>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                             <tr>
                                <td>1</td>
                                <td>Dinas</td>
                                <td>18 Maret 2021</td>
                                <td>PT. Alkisah Indonesia</td>
                                <td>782/23uhu23/e</td>
                                <td>
                                    <div class="dropdown dropright">
                                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                            data-toggle="dropdown">
                                            Opsi
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Lihat Surat</a>
                                            <a class="dropdown-item" href="#">Cetak Surat</a>
                                            <a class="dropdown-item" href="#">Cetak Amplop</a>
                                            <a class="dropdown-item" href="#">Edit Surat</a>
                                            <a class="dropdown-item" href="#">Hapus Surat</a>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                        </th>
                    </table>
                </div>
            </div>
        </div>

    </div>


</div>