<!-- Page content -->
<div class="container mt-3">
    <a href="<?=base_url('guru/lihat_kelas/'.$id_kelas)?>" class="btn btn-sm btn-outline-primary mb-3"><i
            class="	fas fa-chevron-left mr-1"></i> Kembali</a><br>
    <div class="col-md-12">
        <?php foreach($materi as $row):?>
        <div class="card">
            <div class="card-header"><b><?=$row->judul_materi?></b></div>
            <div class="card-body">
                <div class="mb-2">
                    <a href="<?=base_url('guru/download_materi/'.$row->id_kelas.'/'.$row->id_materi.'/'.$row->filename)?>"
                        class="btn btn-outline-primary btn-sm mt-1"><i class="fas fa-print"></i> Download</a>
                    <a href="<?=base_url('guru/edit_materi/'.$row->id_materi)?>"
                        class="btn btn-outline-primary btn-sm mt-1"><i class="fas fa-edit"></i> Edit</a>
                    <a href="#" class="btn btn-outline-primary btn-sm mt-1" data-toggle="modal"
                        data-target="#hapus_materi"><i class="fas fa-trash"></i> Hapus</a>
                    <div class="modal fade" id="hapus_materi" tabindex="-1" role="dialog" aria-labelledby="hapus_materi"
                        aria-hidden="true">
                        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                            <div class="modal-content bg-gradient-danger">
                                <div class="modal-body">
                                    <div class="py-3 text-center">
                                        <i class="ni ni-bell-55 ni-3x"></i>
                                        <h4 class="mt-4 text-white">Hapus Materi <br> "<?=$row->judul_materi?>"?</h4>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="<?=base_url()?>guru/hapus_materi/<?=$row->id_materi?>/<?=$row->filename?>/<?=$row->id_kelas?>"><button type="button"
                                            class="btn btn-white ">Ya</button></a>
                                    <button type="button" class="btn btn-link text-white ml-auto"
                                        data-dismiss="modal">Tidak</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $file=base_url('file/materi/'.$row->id_kelas.'/'.$row->filename)?>
                <iframe id="pdf-js-viewer" src="<?=$file?>" title="webviewer" frameborder="0" style="width:100%"
                    height="600"></iframe>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>