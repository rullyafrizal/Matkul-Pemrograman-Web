<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-plus"></i> Tambah Konten</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php?include=konten">Data Konten</a></li>
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
                <a href="index.php?include=konten" class="btn btn-sm btn-warning float-right">
                    <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <br>
        <div class="col-sm-10">
            <?php
            if (!empty($_GET['notif']) && !empty($_GET['jenis'])) {
                $jenis = $_GET['jenis'];
                if ($_GET['notif'] == "tambahkosong") {
                    echo '<div class="alert alert-danger" role="alert">
                                    Maaf ' . $jenis . ' wajib di isi
                                    </div>';
                }
            }
            ?>
        </div>
        <form class="form-horizontal" action="index.php?include=konfirmasi-tambah-konten" method="post" enctype="multipart/form-data">
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
                            <input type="date" class="form-control" name="tanggal" id="tanggal" autocomplete="off"
                                   value="">
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
</section>

