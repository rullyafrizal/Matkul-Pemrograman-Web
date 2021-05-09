<?php
$id_kategori_blog = $_POST['kategori_blog'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$id_user = $_SESSION['id_user'];

if (empty($id_kategori_blog)) {
    header("Location:index.php?include=tambah-blog&notif=tambahkosong&jenis=kategoriblog");
} else if (empty($judul)) {
    header("Location:index.php?include=tambah-blog&notif=tambahkosong&jenis=judul");
} else if (empty($tanggal)) {
    header("Location:index.php?include=tambah-blog&notif=tambahkosong&jenis=tanggal");
} else {
    $sql = "INSERT INTO `blog`(`id_kategori_blog`, `id_user`, `tanggal`, `judul`, `isi`)
            VALUES ('$id_kategori_blog', '$id_user','$tanggal','$judul','$isi')";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=blog&notif=tambahberhasil");
}
