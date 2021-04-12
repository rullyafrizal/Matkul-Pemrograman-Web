

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4 align-content-center" >
                <div class="card mt-5" >
                    <div class="card-header pb-0 pt-1 text-center">
                        <h3>Login Page</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['empty_field'])){
                            echo '<div class="alert alert-danger" role="alert">
                                    Harap isi semua field
                                    </div>';
                        } else if (isset($_GET['wrong_username'])){
                            echo '<div class="alert alert-danger" role="alert">
                                    Username anda salah!
                                    </div>';
                        } else if (isset($_GET['wrong_password'])){
                            echo '<div class="alert alert-danger" role="alert">
                                    Password anda salah!
                                    </div>';
                        } else if (isset($_GET['wrong_username_password'])){
                            echo '<div class="alert alert-danger" role="alert">
                                    Username dan Password anda salah!
                                    </div>';
                        }
                        ?>
                        <form action="cekLogin.php" role="form" method="POST">
                            <input type="text" id="name" name="name" class="form-control my-2" placeholder="Name">
                            <input type="text" id="email" name="email" class="form-control my-2" placeholder="Email">
                            <input type="text" id="username" name="username" class="form-control my-2" placeholder="Username">
                            <input type="password" id="password" name="password" class="form-control my-2" placeholder="Password">
                            <div class="d-flex pt-3 bd-highlight ">
                                <input type="submit" name="login" class="shadow p-2 flex-fill bd-highlight btn btn-primary" value="Login">
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>
</html>
