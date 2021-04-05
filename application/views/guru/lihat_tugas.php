<!-- Page content -->
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-12">
            <a href="<?=base_url('guru/lihat_kelas')?>" class="btn btn-outline-primary btn-sm mb-3"><i
                    class="	fas fa-chevron-left mr-1"></i>Kembali ke
                Kelas</a>

            <div class="card">
                <div class="card-header"><b>Tugas 1 - Pengantar Ilmu Administrasi</b></div>
                <div class="card-body">
                    <div>
                        Buatlah Sebuah Surat Dinas dengan Style Hanging dan Indented! <br>
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making it look like
                        readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                        their default model text, and a search for 'lorem ipsum' will uncover many web sites still in
                        their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
                        purpose (injected humour and the like).
                    </div>
                    <div class="text-primary mt-2 h5">
                        Batas Penyelesaian: 1 April 2021
                    </div>
                    <div class="mt-3">
                        <a href="<?=base_url('guru/download_tugas')?>" class="btn btn-outline-primary btn-sm"><i
                                class="fas fa-print mr-1"></i> Download Lampiran Tugas</a>
                        <a href="<?=base_url('guru/edit_tugas')?>" class="btn btn-outline-primary btn-sm"><i
                                class="fas fa-edit mr-1"></i> Edit Tugas</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Hasil Tugas Siswa Kelas A</b></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Lengkap</th>
                            <th>Status</th>
                            <th>Nilai</th>
                            <th>Lihat Hasil</th>
                        </thead>
                        <tr>
                            <td>1.</td>
                            <td>1782681209</td>
                            <td>Aprisa Amanda</td>
                            <td><span class="text-success"><i class="	fas fa-star mr-1"></i> Selesai</span></td>
                            <td>90</td>
                            <td>
                                <a href="<?=base_url('guru/hasil_tugas')?>"
                                    class="btn btn-primary btn-sm text-white px-3">
                                    <i class="fas fa-eye mr-1"></i>
                                    Lihat Hasil
                                </a>
                                
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>


</div>