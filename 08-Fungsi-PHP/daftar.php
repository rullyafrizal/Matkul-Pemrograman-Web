<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="konfirmasi_daftar.php" role="form" method="post">
                    <label for="data_pendaftar">Data Pelamar : </label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="data_pelamar" placeholder="Silahkan Masukkan Data Anda" aria-label="Data Pendaftar" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit" id="button-addon2">Daftar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>