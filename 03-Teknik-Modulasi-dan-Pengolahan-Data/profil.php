<?php
    session_start();
    if(empty($_SESSION['email']))
    {
        header('Location:form.php');
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 align-content-center">
                <div class="card mt-5">
                    <div class="card-header pt-2 pb-1 text-center">
                        <h3>Selamat Datang</h3>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-success py-2">
                            <strong>Selamat, Anda Berhasil Login!</strong>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <p>Nama Anda &nbsp;&nbsp;: </p>
                            </div>
                            <div class="col">
                                <b><?php echo trim($_SESSION['name'])?></b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <p>Email Anda &nbsp;&nbsp;&nbsp;: </p>
                            </div>
                            <div class="col">
                                <b><?php echo trim($_SESSION['email'])?></b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
