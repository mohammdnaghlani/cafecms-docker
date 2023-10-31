
    <!-- Main Footer -->
    <footer class="main-footer text-left">
      <strong>Copyleft &copy; 2014-2017 <a href="https://adminlte.io">Almsaeed Studio</a> & <a href="http://hosseinizadeh.ir/adminlte">Alireza Hosseinizadeh</a></strong>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 3 -->
  <script src="<?=getAdminAssets('bower_components/jquery/dist/jquery.min.js');?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?=getAdminAssets('bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
  <script src="<?=getAdminAssets('bower_components/select2/dist/js/select2.full.min.js');?>"></script>
  
  <!-- AdminLTE App -->
  <script src="<?=getAdminAssets('dist/js/adminlte.min.js');?>"></script>
  <?php   showFlashMessage() ;?>
  <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>
  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>

</html>
