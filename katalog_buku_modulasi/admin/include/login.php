<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin</b>Katalog Buku</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <?php if (!empty($_GET['gagal'])) {
                if ($_GET['gagal'] == "userKosong") {
                    echo '<span class="text-danger">
                    Maaf Username Tidak Boleh Kosong
                    </span>';
                } else if ($_GET['gagal'] == "passKosong") {
                    echo '<span class="text-danger">
                    Maaf Password Tidak Boleh Kosong
                    </span>';
                } else {
                    echo '<span class="text-danger">
                    Maaf Username dan Password Anda Salah
                    </span>';
                }
            } ?>
            <form action="index.php?include=konfirmasi-login" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" name="login" value="login" class="btn btn-primary btn-block">Sign In
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.social-auth-links -->
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<?php include("includes/script.php") ?>

</body>
