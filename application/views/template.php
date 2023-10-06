
<!DOCTYPE html>
<html>
  <!-- jQuery 2.2.3 -->
<script src="<?=base_url()?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap.css">

  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url()?>assets/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>BANK </b>RAKSA</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
   
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>
        <li class="treeview">
          <a href="<?=site_url('dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          
          </a>
    
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Tabungan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('tabungan')?>"><i class="fa fa-circle-o"></i>Buka Tabungan Bank Raksa</a></li>
          </ul>
        </li>
    
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Deposito</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('deposito')?>"><i class="fa fa-circle-o"></i> Buka Deposito</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Kredit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('kredit/KMK')?>"><i class="fa fa-circle-o"></i> Buka Kredit KMK</a></li>
            <li><a href="<?=site_url('kredit/KAB')?>"><i class="fa fa-circle-o"></i> Buka Kredit KAB</a></li>
            <li><a href="<?=site_url('kredit/kredit_pegawai')?>"><i class="fa fa-circle-o"></i> Buka Kredit PIPS</a></li>
          
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Data Pengaduan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=site_url('pengaduan_nasabah')?>"><i class="fa fa-circle-o"></i> Pengaduan Nasabah</a></li>
          
          </ul>
        </li>
    
      
        <li class="header">SETTING</li>
        <li><a href="<?=site_url('user')?>"><i class="fa fa-users"></i> <span>Data User</span></a></li>
        <li><a href="#"><i class="fa fa-lock"></i> <span>Ubah Password</span></a></li>
        <li><a href="<?=site_url('auth/keluar')?>"><i class="fa fa-sign-out"></i> <span>Sing Out</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

   <?php echo $contents ?>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- SlimScroll -->
<script src="<?=base_url()?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- bootstrap datepicker -->
<script src="<?=base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url()?>assets/dist/js/demo.js"></script>
</body>
<script>
        $(document).ready(function() {
            $('#table2').DataTable()
        })

    
        var inputJumlahPinjaman = document.getElementById('jml_pinjaman');

inputJumlahPinjaman.addEventListener('input', function () {
    // Hilangkan simbol "Rp" dan pemisah ribuan, kemudian ubah ke angka bulat
    var nilaiTanpaRp = inputJumlahPinjaman.value.replace(/[^\d]/g, '');

    // Format angka ke dalam format rupiah dengan pemisah ribuan
    var formattedValue = formatRupiah(nilaiTanpaRp);

    // Tampilkan nilai yang diformat dalam input
    inputJumlahPinjaman.value = formattedValue;
});

// Fungsi untuk memformat angka ke dalam format rupiah dengan pemisah titik
function formatRupiah(angka) {
    var numberFormat = Number(angka).toLocaleString('id-ID');
    return numberFormat;
}


    </script>
</html>
