<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?> 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php include("includes/header.php") ?>

  <?php include("includes/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-lock"></i> Ubah Password</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Ubah Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Pengaturan Password</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form class="form-horizontal" method="POST" action="konfirmasiUbahPassword.php">
        <div class="card-body">
          <h6 class="mb-4">
            <i class="text-blue"><i class="fas fa-info-circle"></i> Silahkan memasukkan password lama dan password baru Anda untuk mengubah password.</i>
          </h6>
            <div class="col-sm-10">
              <?php
                  if (!empty($_GET['notif'])) {
                      if ($_GET['notif'] == "ubahberhasil") {
                          echo '<div class="alert alert-success" role="alert">
                                        Data berhasil diubah</div>';
                      }
                  }
              ?>
            </div>
          <div class="form-group row">
            <label for="pass_lama" class="col-sm-3 col-form-label">Password Lama</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" name="pass_lama" id="pass_lama" value="">
              <?php
                if (!empty($_GET['notif'])) {
                    if($_GET['notif']=="ubahkosong" && $_GET['jenis'] == "passLama"){
                        echo '<span class="text-danger">Mohon maaf, password lama wajib diisi.</span>';
                    } else if($_GET['notif']=="ubahsalah" && $_GET['jenis'] == "passLamaInvalid"){
                        echo '<span class="text-danger">Mohon maaf, password lama salah.</span>';
                    }
                }
              ?>


            </div>
          </div>
          <div class="form-group row">
            <label for="pass_baru" class="col-sm-3 col-form-label">Password Baru</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" name="pass_baru" id="pass_baru" value="">
                <?php
                if (!empty($_GET['notif'])) {
                    if($_GET['notif']=="ubahkosong" && $_GET['jenis'] == "passBaru"){
                        echo '<span class="text-danger">Mohon maaf, password baru wajib diisi.</span>';
                    }
                }
                ?>

            </div>
          </div>
          <div class="form-group row">
            <label for="konfirmasi" class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" name="konfirmasi" id="konfirmasi" value="">
                <?php
                if (!empty($_GET['notif'])) {
                    if($_GET['notif']=="ubahkosong" && $_GET['jenis'] == "konfirmasi"){
                        echo '<span class="text-danger">Mohon maaf, konfirmasi password baru wajib diisi.</span>';
                    } else if($_GET['notif']=="ubahsalah" && $_GET['jenis'] == "passBaruInvalid"){
                        echo '<span class="text-danger">Mohon maaf, password baru dan password konfirmasi harus sama.</span>';
                    }
                }
                ?>

            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("includes/footer.php") ?>

</div>
<!-- ./wrapper -->

<?php include("includes/script.php") ?>
</body>
</html>
