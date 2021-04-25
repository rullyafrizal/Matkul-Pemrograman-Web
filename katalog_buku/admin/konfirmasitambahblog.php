<?php
session_start();
include('../koneksi/koneksi.php');
$id_blog = $_POST['id_blog'];
$id_kategori_blog = $_POST['kategori_blog'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
if (empty($id_kategori_blog)) {
    header("Location:tambahblog.php?notif=tambahkosong&jenis=kategoriblog");
} else if (empty($judul)) {
    header("Location:tambahblog.php?notif=tambahkosong&jenis=judul");
} else if (empty($tanggal)) {
    header("Location:tambahblog.php?notif=tambahkosong&jenis=tanggal");
} else {
    $sql = "INSERT INTO `blog`(`id_kategori_blog`, `tanggal`, `judul`, `isi`)
            VALUES ('$id_kategori_blog','$tanggal','$judul','$isi')";
    mysqli_query($koneksi, $sql);
    header("Location:blog.php?notif=tambahberhasil");
}
