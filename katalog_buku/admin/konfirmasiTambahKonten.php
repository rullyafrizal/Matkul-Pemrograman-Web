<?php
session_start();
include('../koneksi/koneksi.php');
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

if (empty($judul)) {
    header("Location:tambahkonten.php?notif=tambahkosong&jenis=judul");
} else if (empty($isi)) {
    header("Location:tambahkonten.php?notif=tambahkosong&jenis=isi");
} else if (empty($tanggal)) {
    header("Location:tambahkonten.php?notif=tambahkosong&jenis=tanggal");
} else {
    $sql = "INSERT INTO `konten` (`judul`, `isi`, `tanggal`)
            VALUES ('$judul', '$isi', '$tanggal')";
    mysqli_query($koneksi, $sql);
    header("Location:konten.php?notif=tambahberhasil");
}