<?php
include('../koneksi/koneksi.php');
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = MD5($_POST['password']);
$level = $_POST['level'];

if (empty($nama)) {
    header("Location:tambahuser.php?notif=namaKosong");
} else if (empty($email)){
    header("Location:tambahuser.php?notif=emailKosong");
} else if (empty($username)){
    header("Location:tambahuser.php?notif=usernameKosong");
} else if (empty($password)){
    header("Location:tambahuser.php?notif=passwordKosong");
} else if (empty($level)){
    header("Location:tambahuser.php?notif=levelKosong");
} else {
    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'foto/'.$nama_file;
    move_uploaded_file($lokasi_file,$direktori);
    $sql = "INSERT INTO `user` (`nama`, `email`, `username`, `password`, `level`, `foto`) 
            VALUES ('$nama', '$email', '$username', '$password', '$level', '$nama_file')";
    mysqli_query($koneksi, $sql);
    header("Location:user.php?notif=tambahberhasil");
}
