<?php
include 'koneksi.php';

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Poli | Data Dokter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Poliklinik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Naufal Radityatama Umar</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            </ul>
          </li>
          <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dokter.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Dokter</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pasien.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pasien</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Dokter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container">
<h3>
    Form Pengisian Data Dokter
</h3>
<hr>    
<!--Form Input Data-->

<form class="form" method="POST" action="" name="myForm" onsubmit="return(validate());">
    <!-- Kode php untuk menghubungkan form dengan database -->
    <?php
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    ini_set('max_execution_time', 0);
    include "koneksi.php";
    $controladd = $_GET['controladd'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
  
    if (isset($_POST['tambah'])) {
  
      $sql = "INSERT INTO dokter VALUES (NULL,'$nama','$alamat','$no_hp')";
      if (mysqli_query($koneksi, $sql)) {
        $nilaihasil = "Records inserted successfully.";
      } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
      }
    }
    if (isset($_POST['edit'])) {
      //edit
      $sql = "UPDATE dokter SET nama = '$nama' , alamat = '$alamat' , no_hp = '$no_hp' WHERE id = '$id'";
      if (mysqli_query($koneksi, $sql)) {
        $nilaihasil = "Records updated successfully.";
      } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
      }
    }
    if (isset($_POST['delete'])) {
      //delete
      $sql = "DELETE FROM dokter WHERE id = '$id'";
      if (mysqli_query($koneksi, $sql)) {
        $nilaihasil = "Records deleted successfully.";
      } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
      }
    }
  
    if (isset($_POST['deleteall'])) {
      //delete
      $pilih = $_POST['pilih'];
      $sql = "DELETE FROM dokter WHERE id IN (" . implode(",", $pilih) . ")";
      if (mysqli_query($koneksi, $sql)) {
        $nilaihasil = "Records deleted successfully.";
      } else {
        // echo "ERROR: Could not able to execute $sql. " . mysqli_error($koneksi);
      }
    }
  
    ?>
    <form method="post" action="">
      <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-6">
              <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">New Record</a>
              <?php
              if ($controladd == "1") {
              ?>
                <input type="submit" name="deleteall" value="Delete Selected" class="btn btn-danger" onclick="return confirm('Are you sure delete selected records?')">
              <?php
              }
              ?>
  
            </div>
          </div>
        </div>
        <br>
        <?php echo "$nilaihasil"; ?>
        <table id="tabel-data" class="table table-striped table-hover">
          <thead>
            <tr>
              <th>
                <span class="custom-checkbox">
                  <input type="checkbox" id="selectAll">
                  <label for="selectAll"></label>
                </span>
              </th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Nomor HP</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
                  <?php
            $i = 0;
            $ksql = "SELECT * FROM dokter ORDER BY id DESC";
            $khasil = mysqli_query($koneksi, $ksql);
            while ($krow = mysqli_fetch_array($khasil)) {
              $i++;
            ?>
              <tr>
                <td>
                  <span class="custom-checkbox">
                    <input type="checkbox" id="checkbox5" name="pilih[]" value="<?php echo $krow['id']; ?>">
                    <label for="checkbox5"></label>
                  </span>
                </td>
                <td><?php echo $krow['nama']; ?></td>
                <td><?php echo $krow['alamat']; ?></td>
                <td><?php echo $krow['no_hp']; ?></td>
                <td>
                  <?php
                  if ($controladd == "1") {
                  ?>
                    <a href="#editEmployeeModal<?php echo $krow['id']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                    <a href="#deleteEmployeeModal<?php echo $krow['id']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                  <?php
                  }
                  ?>
                </td>
              </tr>
  
              <!-- Delete Modal HTML -->
              <div id="deleteEmployeeModal<?php echo $krow['id']; ?>" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form method="post" action="">
                      <input type="hidden" class="form-control" value="<?php echo $krow['id']; ?>" name="id" required>
  
                      <div class="modal-header">
                        <h4 class="modal-title">Delete</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <p>Are you sure you want to delete these Records <?php echo $krow['id']; ?>?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                      </div>
                      <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete" name="delete">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
  
  
              <!-- Edit Modal HTML -->
              <div id="editEmployeeModal<?php echo $krow['id']; ?>" class="modal fade">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form method="post" action="">
                      <input type="hidden" class="form-control" value="<?php echo $krow['id']; ?>" name="id" required>
                      <div class="modal-header">
                        <h4 class="modal-title">Edit</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <label>Nama</label>
                          <input type="text" class="form-control" value="<?php echo $krow['nama']; ?>" autocomplete="off" name="nama" required>
                        </div>
                        <div class="form-group">
                          <label>Alamat</label>
                          <input type="text" class="form-control" value="<?php echo $krow['alamat']; ?>" autocomplete="off" name="alamat" required>
                        </div>
                        <div class="form-group">
                          <label>Nomor HP</label>
                          <input type="text" class="form-control" value="<?php echo $krow['no_hp']; ?>" autocomplete="off" name="no_hp" required>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save" name="edit">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
  
            <?php
                      }
            // Close connection
            //mysqli_close($koneksi);
            ?>
  
          </tbody>
  
        </table>
      </div>
    </form>
    <!-- Add Modal HTML -->
  
    <div id="addEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <form method="post" action="">
            <div class="modal-header">
              <input type="hidden" class="form-control" value="" name="id" required>
              <h4 class="modal-title">ADD </h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" name="alamat" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label>Nomor HP</label>
                <input type="text" class="form-control" name="no_hp" autocomplete="off" required>
              </div>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-success" value="Add" name="tambah">
            </div>
          </form>
        </div>
      </div>
    </div>
  
        <!-- /.row -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
