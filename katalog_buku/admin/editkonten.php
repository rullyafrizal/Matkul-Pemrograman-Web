<?php
session_start();
include('../koneksi/koneksi.php');
if(isset($_GET['data'])){
    $id_konten = $_GET['data'];
    $_SESSION['konten'] = $id_konten;
    //get data penerbit
    $sql_p = "select `judul`, `isi`, `tanggal` from `konten` where `id_konten` = '$id_konten'";
    $query_p = mysqli_query($koneksi,$sql_p);
    while($data_p = mysqli_fetch_row($query_p)){
        $judul = $data_p[0];
        $isi = $data_p[1];
        $tanggal = $data_p[2];
    }
}
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
            <h3><i class="fas fa-edit"></i> Edit Data Konten</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="konten.php">Data Konten</a></li>
              <li class="breadcrumb-item active">Edit Data Konten</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Konten</h3>
        <div class="card-tools">
          <a href="konten.php" class="btn btn-sm btn-warning float-right">
          <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
          <?php
          if(!empty($_GET['notif']) && !empty($_GET['jenis'])){
              $jenis = $_GET['jenis'];
              if($_GET['notif']=="editkosong") {
                  echo '<div class="alert alert-danger" role="alert">
                                    Maaf ' . $jenis . ' wajib di isi
                                    </div>';
              }
          }
          ?>
      </div>
      <form class="form-horizontal" method="POST" action="konfirmasiEditKonten.php">
        <div class="card-body">
          <div class="form-group row">
            <label for="nim" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="judul" id="nim" value="<?php echo $judul;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="sinopsis" class="col-sm-3 col-form-label">Isi</label>
            <div class="col-sm-7">
              <textarea class="form-control" name="isi" id="editor1" rows="12"><?php echo $isi;?></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
            <div class="col-sm-7">
                <div class="input-group rows ">
                    <input type="date" class="form-control" name="tanggal" id="tanggal" autocomplete="off" value="<?php echo $tanggal;?>">
                </div>
            </div>
          </div>

          </div>
        </div>

      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
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
