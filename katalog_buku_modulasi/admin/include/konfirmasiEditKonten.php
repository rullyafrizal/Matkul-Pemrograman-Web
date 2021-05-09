<?php

if (isset($_SESSION['konten'])) {
    $tanggal = $_POST['tanggal'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $id_konten = $_SESSION['konten'];

    if (empty($judul)) {
        header("Location:index.php?include=edit-konten&data=". $id_konten . "&notif=editkosong&jenis=judul");
    } else if (empty($isi)) {
        header("Location:index.php?include=edit-konten&data=". $id_konten . "&notif=editkosong&jenis=isi");
    } else if (empty($tanggal)) {
        header("Location:index.php?include=edit-konten&data=". $id_konten . "&notif=editkosong&jenis=tanggal");
    } else {
        $sql = "update `konten` set `judul`='$judul', `isi`='$isi',`tanggal`= '$tanggal' where `id_konten`='$id_konten'";
        mysqli_query($koneksi, $sql);
        unset($_SESSION['konten']);
        header("Location:index.php?include=konten&notif=editberhasil");
    }
}
