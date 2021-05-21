<?php 
    $id_kelas = $this->session->userdata('kelas');
?>
   <!-- Page content -->
 <div class="container-fluid mt-3">
     <a href="<?=base_url('siswa/materi')?>" class="btn btn-outline-primary mb-3 btn-sm"><i class="	fas fa-chevron-left mr-1"></i> Kembali ke Daftar Materi</a>
     <div class="row">
         <div class="col-md-12">
             <?php foreach($materi as $row):?>
             <div class="card">
                 <div class="card-header"><b><?=$row->judul_materi?></b></div>
                 <div class="card-body">
                   <?php $file=base_url('file/materi/'.$id_kelas.'/'.$row->filename)?>
                    <iframe id="pdf-js-viewer" src="<?=$file?>" title="webviewer" frameborder="0" style="width:100%;" height="800px"></iframe>
                 </div>
             </div>
             <?php endforeach;?>
         </div>
        
     </div>


 </div>
 