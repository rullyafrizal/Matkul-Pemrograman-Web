<?php
$penerbit = $_POST['penerbit'];
$alamat = $_POST['alamat'];
if (empty($penerbit)) {
    header("Location:index.php?include=tambah-penerbit&notif=tambahkosong");
} elseif (empty($alamat)) {
    header("Location:index.php?include=tambah-penerbit&notif=tambahkosong");
} else {
    $sql = "insert into `penerbit` (`penerbit`,`alamat`) values ('$penerbit','$alamat')";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=penerbit&notif=tambahberhasil");
}
?>
