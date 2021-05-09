<?php
$id_user = $_SESSION['id_user_edit'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = '';
if (!empty($_POST['password'])) {
    $password = MD5($_POST['password']);
}
$username = $_POST['username'];
$level = $_POST['level'];

$sql_f = "SELECT `foto` FROM `user` WHERE `id_user`='$id_user'";
$query_f = mysqli_query($koneksi, $sql_f);
while ($data_f = mysqli_fetch_row($query_f)) {
    $foto = $data_f[0];
}

if (empty($nama)) {
    header("Location:index.php?include=edit-user&data=" . $id_user . "&notif=namaKosong");
} else if (empty($email)) {
    header("Location:index.php?include=edit-user&data=" . $id_user . "&notif=emailKosong");
} else if (empty($username)) {
    header("Location:index.php?include=edit-user&data=" . $id_user . "&notif=usernameKosong");
} else if (!empty($password)) {
    $sql = "update `user` set `nama`='$nama', `email`='$email', `username`='$username', `level`='$level',
            `password`='$password' where `id_user`='$id_user'";
    mysqli_query($koneksi, $sql);
    unset($_SESSION['id_user_edit']);
    header("Location:index.php?include=user&notif=editberhasil");
} else if (empty($password)) {
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'foto/' . $nama_file;
    if (move_uploaded_file($lokasi_file, $direktori)) {
        if (!empty($foto)) {
            unlink("foto/$foto");
        }
        $sql = "update `user` set `nama`='$nama', `email` = '$email', `username` = '$username', `level`='$level',
                `foto`='$nama_file' where `id_user`='$id_user'";
        mysqli_query($koneksi, $sql);
    } else {
        $sql = "update `user` set `nama`='$nama', `email` = '$email', `username` = '$username', `level`='$level'
                where `id_user`='$id_user'";
        mysqli_query($koneksi, $sql);
    }
    unset($_SESSION['id_user_edit']);
    header("Location:index.php?include=user&notif=editberhasil");
}
