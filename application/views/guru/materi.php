
   <!-- Page content -->
 <div class="container-fluid mt-3">
     <a href="<?=base_url('guru/lihat_kelas')?>" class="btn btn-sm btn-outline-primary mb-3"><i class="	fas fa-chevron-left mr-1"></i> Kembali</a>
     <div>
     <a href="<?=base_url('guru/download_materi')?>" class="btn btn-outline-primary btn-sm mt-1"><i
            class="fas fa-print"></i> Download Materi</a>
    <a href="<?=base_url('guru/edit_materi')?>" class="btn btn-outline-primary btn-sm mt-1"><i
            class="fas fa-edit"></i> Edit Materi</a>
    <a href="#" class="btn btn-outline-primary btn-sm mt-1" data-toggle="modal" data-target="#hapus_materi"><i
            class="fas fa-trash"></i> Hapus Materi</a>
            <div class="modal fade" id="hapus_materi" tabindex="-1" role="dialog" aria-labelledby="hapus_materi"
        aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-danger">


                <div class="modal-body">

                    <div class="py-3 text-center">
                        <i class="ni ni-bell-55 ni-3x"></i>
                        <h4 class="mt-4 text-white">Hapus Materi?</h4>
                    </div>

                </div>

                <div class="modal-footer">
               
                    <a href="<?=base_url('guru/lihat_kelas')?>"><button type="button" class="btn btn-white col-md-6 px-5">Ya</button></a>
                    <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Tidak</button>
                </div>

            </div>
        </div>



    </div>
     </div>
     <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header"><b>Materi 1 - Pengantar Ilmu Administrasi</b></div>
                 <div class="card-body">
                   <?php $file=base_url('file/materi/1.pdf')?>
                    <iframe id="pdf-js-viewer" src="<?=$file?>" title="webviewer" frameborder="0" style="width:100%" height="600"></iframe>
                 </div>
             </div>
         </div>
        
     </div>


 </div>
 