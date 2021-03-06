<?php
session_start();
include('../koneksi/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include("includes/head.php");
    ?>
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
                        <h3><i class="fas fa-plus"></i> Tambah Konten</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="konten.php">Data Konten</a></li>
                            <li class="breadcrumb-item active">Tambah Konten</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data Konten</h3>
                    <div class="card-tools">
                        <a href="konten.php" class="btn btn-sm btn-warning float-right">
                            <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <br>
                <div class="col-sm-10">
                    <?php
                    if(!empty($_GET['notif']) && !empty($_GET['jenis'])){
                        $jenis = $_GET['jenis'];
                        if($_GET['notif']=="tambahkosong") {
                            echo '<div class="alert alert-danger" role="alert">
                                    Maaf ' . $jenis . ' wajib di isi
                                    </div>';
                        }
                    }
                    ?>
                </div>
                <form class="form-horizontal" action="konfirmasiTambahKonten.php" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="judul" id="judul" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="isi" class="col-sm-3 col-form-label">Isi</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" name="isi" id="editor1" rows="12"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
                            <div class="col-sm-7">
                                <div class="input-group rows ">
                                    <input type="date" class="form-control" name="tanggal" id="tanggal" autocomplete="off" value="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                </form>

            </div>
            <!-- /.card-body -->

            <!-- /.card-footer -->

    </div>


</div>
<!-- /.content-wrapper -->
<?php include("includes/footer.php") ?>
<!-- ./wrapper -->

<?php include("includes/script.php") ?>
</body>
</html>
