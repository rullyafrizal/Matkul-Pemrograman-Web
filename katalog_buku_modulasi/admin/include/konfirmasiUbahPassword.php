<?php
$passLama = $_POST['pass_lama'];
$passBaru = $_POST['pass_baru'];
$konfirmasi = $_POST['konfirmasi'];

if (isset($_SESSION['id_user'])) {
    $id_user = $_SESSION['id_user'];

    if (empty($passLama)) {
        header("Location:index.php?include=ubah-password&notif=ubahkosong&jenis=passLama");
    } else if (empty($passBaru)) {
        header("Location:index.php?include=ubah-password&notif=ubahkosong&jenis=passBaru");
    } else if (empty($konfirmasi)) {
        header("Location:index.php?include=ubah-password&notif=ubahkosong&jenis=konfirmasi");
    } else {
        $sql = "select `password` from `user` where `id_user`='$id_user'";
        $query = mysqli_query($koneksi, $sql);
        while($data = mysqli_fetch_row($query)){
            $password = $data[0];
        }

        if (MD5($passLama) !== $password) {
            header("Location:index.php?include=ubah-password&notif=ubahsalah&jenis=passLamaInvalid");
        } else {
            if ($passBaru !== $konfirmasi) {
                header("Location:index.php?include=ubah-password&notif=ubahsalah&jenis=passBaruInvalid");
            } else {
                $encPassBaru = MD5($passBaru);

                $sql = "update `user` set `password`='$encPassBaru' where `id_user`='$id_user'";
                mysqli_query($koneksi,$sql);
                header("Location:index.php?include=ubah-password&notif=ubahberhasil");
            }
        }
    }




}
