<!-- Argon Scripts -->
<!-- Core -->
<script src="<?=base_url('assets/vendor/jquery/dist/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?=base_url('assets/vendor/js-cookie/js.cookie.js')?>"></script>
<script src="<?=base_url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')?>"></script>
<script src="<?=base_url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')?>"></script>
<!-- Argon JS -->
<script src="<?=base_url('assets/js/argon.js?v=1.2.0')?>"></script>
</body>

</html>
<script>
$(document).ready(function() {
    $("#btn_daftar_siswa").click(function(){
        $("#daftar_siswa, #daftar_sebagai").toggle();
    });
    $("#btn_daftar_guru").click(function(){
        $("#daftar_guru, #daftar_sebagai").toggle();
    });
});
</script>