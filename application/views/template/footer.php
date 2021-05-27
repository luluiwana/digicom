        </div>


        </div>
        </div>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="<?= base_url('assets/vendor/jquery/dist/jquery.min.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/js-cookie/js.cookie.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') ?>"></script>
        <!-- Optional JS -->
        <script src="<?= base_url('assets/vendor/chart.js/dist/Chart.min.js') ?>"></script>
        <script src="<?= base_url('assets/vendor/chart.js/dist/Chart.extension.js') ?>"></script>
        <!-- Argon JS -->
        <script src="<?= base_url('assets/js/argon.js?v=1.2.0') ?>"></script>
        <!-- Datatable -->
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <!-- plugin js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.sandbox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.worker.entry.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.worker.min.js"></script>
        <script src="<?= base_url('assets/js/summernote/') ?>summernote.min.js"></script>
        <script>
$(document).ready(function() {
    // btn jenis surat
    $(".btn-dinas").click(function() {
        $("#surat_dinas").show();
        $("#surat_niaga").hide();

    });
    $(".btn-niaga").click(function() {
        $("#surat_niaga").show();
        $("#surat_dinas").hide();
    });
    // btn surat dinas
    $(".btn-d-indented").click(function() {
        $("#d-indented").show();
        $("#d-hanging, #d-block, #d-semi, #d-full").hide();
    });
    $(".btn-d-hanging").click(function() {
        $("#d-hanging").show();
        $("#d-indented, #d-block, #d-semi, #d-full").hide();
    });
    $(".btn-d-block").click(function() {
        $("#d-block").show();
        $("#d-hanging, #d-indented, #d-semi, #d-full").hide();
    });
    $(".btn-d-semi").click(function() {
        $("#d-semi").show();
        $("#d-hanging, #d-block, #d-indented, #d-full").hide();
    });
    $(".btn-d-full").click(function() {
        $("#d-full").show();
        $("#d-hanging, #d-block, #d-semi, #d-indented").hide();
    });
    // btn surat niaga
    $(".btn-n-indented").click(function() {
        $("#n-indented").show();
        $("#n-hanging, #n-block, #n-semi, #n-full").hide();
    });
    $(".btn-n-hanging").click(function() {
        $("#n-hanging").show();
        $("#n-indented, #n-block, #n-semi, #n-full").hide();
    });
    $(".btn-n-block").click(function() {
        $("#n-block").show();
        $("#n-hanging, #n-indented, #n-semi, #n-full").hide();
    });
    $(".btn-n-semi").click(function() {
        $("#n-semi").show();
        $("#n-hanging, #n-block, #n-indented, #n-full").hide();
    });
    $(".btn-n-full").click(function() {
        $("#n-full").show();
        $("#n-hanging, #n-block, #n-semi, #n-indented").hide();
    });

});
        </script>

<script>
$('#isi_surat_dinas').summernote({
    // placeholder: 'Masukkan Isi',
    tabsize: 4,
    height: 100,
    tabDisable: true

});
$('#isi_surat_pribadi').summernote({
    // placeholder: 'Masukkan Isi',
    tabsize: 4,
    height: 600,
    tabDisable: true,

});
$("#isi_surat_pribadi").on("summernote.enter", function(we, e) {
     $(this).summernote("pasteHTML", "<br><br>");
     e.preventDefault();
});
</script>
<script>
$(document).ready(function() {
    $('#kelas').DataTable({
        "paging": false,
        "info": false
    }); 
     $('#siswa').DataTable({
        "paging": false,
        "info": false
    });
});
</script>
</body>



        </html>