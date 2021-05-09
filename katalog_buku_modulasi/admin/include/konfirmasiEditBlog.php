<?php

if (isset($_SESSION['id_blog'])) {
    $id_kategori_blog = $_POST['kategori_blog'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $id_blog = $_SESSION['id_blog'];

    if (empty($judul)) {
        header("Location:index.php?include=edit-blog&data=". $id_blog . "&notif=editkosong&jenis=judul");
    } else if (empty($isi)) {
        header("Location:index.php?include=edit-blog&data=". $id_blog . "&notif=editkosong&jenis=isi");
    } else if (empty($id_kategori_blog)) {
        header("Location:index.php?include=edit-blog&data=". $id_blog . "&notif=editkosong&jenis=kategori_blog");
    } else {
        $sql = "update `blog` set `judul`='$judul', `isi`='$isi', `id_kategori_blog`= '$id_kategori_blog'
                WHERE `id_blog`='$id_blog'";
        mysqli_query($koneksi, $sql);
        unset($_SESSION['id_blog']);
        header("Location:index.php?include=blog&notif=editberhasil");
    }
}
