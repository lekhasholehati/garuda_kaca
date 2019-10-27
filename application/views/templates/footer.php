  <footer class="main-footer text-center">
    <div class="pull-right hidden-xs">
      <!-- <b>Version</b> 2.4.0 -->
    </div>
    <strong>Copyright &copy; 2019 <a href="https://adminlte.io">Lettisya Pasaribu</a>.</strong> All rights
    reserved.
  </footer>
  <!-- <div class="control-sidebar-bg"></div> -->
</div>
<!-- ./wrapper -->

<!-- <script src="<?=base_url()?>assets/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="<?=base_url()?>assets/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/bower_components/raphael/raphael.min.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/bower_components/morris.js/morris.min.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/dist/js/adminlte.min.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/dist/js/pages/dashboard.js"></script>
<script src="<?=base_url()?>assets/AdminLTE/dist/js/demo.js"></script>
<script src="<?=base_url()?>assets/vendor/swal/sweetalert2.all.min.js"></script>
<script src="<?=base_url()?>assets/vendor/dataTables/datatables.min.js"></script>


<script>

$(document).ready( function () {
	$('#data_table').DataTable();
});
		// awal swal
            const flashdata = $('.flash-data').data('flashdata');
            if(flashdata){
                Swal.fire({
                    title: 'Data',
                    text: flashdata,
                    type: 'success'
                });
            }

            $('.tombol-hapus').on('click', function(e){

                // untuk mematikan aksi default browser
                e.preventDefault();
                const href = $(this).attr('href');

                Swal.fire({
                    title: 'Apakah anda yakin',
                    text: "Data akan dihapus",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmBttonText: 'Hapus Data!'
                }).then((result) => {
                    if(result.value) {
                        document.location.href = href;
                    }
                })
            });
// akhir swal
</script>

</body>
</html>
