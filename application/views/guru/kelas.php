
<!-- Page content -->
 <div class="container-fluid mt-3">
     <div class="row">
         <div class="col">
             <div class="card">
                 <!-- Card header -->
                 <div class="card-header border-0">
                     <h3 class="mb-0">Semua Kelas</h3>
                     <button class="btn btn-sm btn-primary mt-4" data-toggle="modal" data-target="#tambah_kelas">Buat
                         Kelas</button>
                     <!-- Modal -->
                     <div class="modal fade" id="tambah_kelas" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered" role="document">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas Baru</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <form action="<?=base_url('guru/kelas')?>" method="post"> <input type="text"
                                             name="" id="" class="form-control" placeholder="Masukkan Nama Kelas">
                                         <input type="submit" value="Tambah" class="form-control btn btn-primary mt-2">
                                     </form>
                                 </div>

                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Light table -->
                 <div class="table-responsive">
                     <table class="table align-items-center table-flush h-100">
                         <thead class="thead-light">
                             <tr>
                                 <th scope="col" class="sort" data-sort="name">Nama Kelas</th>
                                 <th scope="col" class="sort" data-sort="budget">Jumlah Siswa</th>
                                 <th scope="col" class="sort" data-sort="completion">Opsi</th>
                             </tr>
                         </thead>
                         <tbody class="list">
                             <tr>
                                 <th scope="row">
                                     <a href="<?=base_url('guru/lihat_kelas/')?>"><span class="name mb-0 text-sm">Kelas A</span></a>
                                 </th>
                                 <td class="budget">
                                     25
                                 </td>
                                 <td style="font-size:20px">
                                     <a href="#" data-toggle="modal" data-target="#edit_kelas"><i
                                             class="fas fa-edit text-primary mr-2"></i></a>
                                     <a href="#" data-toggle="modal" data-target="#hapus_kelas"><i
                                             class="fas fa-trash text-danger"></i></a>

                                     <!-- Modal -->
                                     <div class="modal fade" id="edit_kelas" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h5 class="modal-title" id="exampleModalLabel">Ubah Nama Kelas</h5>
                                                     <button type="button" class="close" data-dismiss="modal"
                                                         aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                     </button>
                                                 </div>
                                                 <div class="modal-body">
                                                     <form action="<?=base_url('guru/kelas')?>" method="post"> <input
                                                             type="text" name="" value="Kelas A" id=""
                                                             class="form-control">
                                                         <input type="submit" value="Simpan"
                                                             class="form-control btn btn-primary mt-2">
                                                     </form>
                                                 </div>

                                             </div>
                                         </div>
                                     </div>
                                     <!-- Modal -->
                                     <div class="modal fade" id="hapus_kelas" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h5 class="modal-title text-danger" id="exampleModalLabel">Yakin
                                                         ingin
                                                         menghapus Kelas A?</h5>

                                                 </div>
                                                 <div class="modal-body text-wrap ">
                                                     <p class="font-weight-bold"> Apabila kelas ini dihapus, semua data
                                                         siswa, materi, tugas, dan
                                                         penilaian yang telah dibuat akan terhapus. Hapus Kelas?</p>
                                                 </div>
                                                 <div class="modal-footer">
                                                     <a href="<?=base_url('guru/kelas')?>"> <button type="button" class="btn btn-danger">Hapus
                                                             Kelas</button></a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </td>

                             </tr>

                         </tbody>
                     </table>
                 </div>
                 <!-- Card footer -->
                 <div class="card-footer py-4">
                     <nav aria-label="...">
                         <ul class="pagination justify-content-end mb-0">
                             <li class="page-item disabled">
                                 <a class="page-link" href="#" tabindex="-1">
                                     <i class="fas fa-angle-left"></i>
                                     <span class="sr-only">Previous</span>
                                 </a>
                             </li>
                             <li class="page-item active">
                                 <a class="page-link" href="#">1</a>
                             </li>
                             <li class="page-item">
                                 <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                             </li>
                             <li class="page-item"><a class="page-link" href="#">3</a></li>
                             <li class="page-item">
                                 <a class="page-link" href="#">
                                     <i class="fas fa-angle-right"></i>
                                     <span class="sr-only">Next</span>
                                 </a>
                             </li>
                         </ul>
                     </nav>
                 </div>
             </div>
         </div>
     </div>


 </div>