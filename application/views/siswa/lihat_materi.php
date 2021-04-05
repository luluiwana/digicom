
   <!-- Page content -->
 <div class="container-fluid mt-3">
     <a href="<?=base_url('siswa/materi')?>" class="btn btn-outline-primary mb-3 btn-sm"><i class="	fas fa-chevron-left mr-1"></i> Kembali ke Daftar Materi</a>
     <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header"><b>Materi 1 - Pengantar Ilmu Administrasi</b></div>
                 <div class="card-body">
                   <?php $file=base_url('file/materi/1.pdf')?>
                    <iframe id="pdf-js-viewer" src="<?=$file?>" title="webviewer" frameborder="0" style="width:100%;" height="800px"></iframe>
                 </div>
             </div>
         </div>
        
     </div>


 </div>
 