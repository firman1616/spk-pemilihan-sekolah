</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Kreator Nusantara Indonesia</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('Login/logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
<?php
// foreach ($kriteria->result() as $row) {
//     $kode_arr[] = $row->kode_kriteria;
//     $nama_arr[] = $row->nama_kriteria;
// }
// $int_matrix = count($nama_arr);

?>

<!-- Bootstrap core JavaScript-->
<script src="<?= site_url('') ?>assets/template/vendor/jquery/jquery.min.js"></script>
<script src="<?= site_url('') ?>assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= site_url('') ?>assets/template/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= site_url('') ?>assets/template/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= site_url('') ?>assets/template/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= site_url('') ?>assets/template/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= site_url('') ?>assets/template/js/demo/datatables-demo.js"></script>

<script>
    var BASE_URL = "<?php echo base_url(); ?>";
</script>

<!-- <script>
    $(document).ready(function() {
        var int_matrix = <?php echo $int_matrix; ?>;
        $('select[name^=index]').change(function() {
            var jumlah_x = 0;
            var jumlah_y = 0;
            var index = $(this).data("id");
            var index_x = index.split("-")[0];
            var index_y = index.split("-")[1];
            var value = $(this).find(":selected").val();



            if (value == 0) {
                $('input[name="index[' + index_y + '][' + index_x + ']"]').val(0);
            } else { 
                $('input[name="index[' + index_y + '][' + index_x + ']"]').val((1 / value).toFixed(2));
            }

            for (let i = 0; i < int_matrix; i++) {
                jumlah_y += Number($('[name="index[' + i + '][' + index_y + ']"]').val());
                jumlah_x += Number($('[name="index[' + i + '][' + index_x + ']"]').val());
            }

            $('[name="jumlah[' + index_y + ']"]').val(jumlah_y);
            $('[name="jumlah[' + index_x + ']"]').val(jumlah_x);

            // EIGEN
            for (let i = 0; i < int_matrix; i++) { //kebawah
                var temp_value_x = $('[name="index[' + i + '][' + index_x + ']"]').val();
                var temp_value_y = $('[name="index[' + i + '][' + index_y + ']"]').val();

                $('[name="eigen[' + i + '][' + index_x + ']"]').val(temp_value_x / jumlah_x);
                $('[name="eigen[' + i + '][' + index_y + ']"]').val(temp_value_y / jumlah_y);

                var eigen_x = 0;
                for (let j = 0; j < int_matrix; j++) { //kesamping
                    eigen_x += Number($('[name="eigen[' + i + '][' + j + ']"]').val());
                }

                $('[name="rata-rata[' + i + ']"]').val(eigen_x / int_matrix);
            }


        });
    });
</script> -->

<!-- costume js -->
<?php
if (isset($footer_js)) {
    foreach ($footer_js as $fjs) { ?>
        <script type="text/javascript" src="<?= base_url($fjs) ?>"></script>
<?php }
} ?>


</body>

</html>