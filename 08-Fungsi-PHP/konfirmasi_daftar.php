<?php

include('./koneksi.php');

if (!empty($_POST['data_pelamar'])) {
    $dataPelamar = $_POST['data_pelamar'];

    $arrData = explode('#', $dataPelamar);
    $arrData0 = preg_filter('/[0-9]+/','#$0#', $arrData[0]);
    $arrData0 = explode('#', $arrData0);

    $hp = $arrData[1];
    $nama = ucwords($arrData0[0]);
    $usia = $arrData0[1];
    $kota = strtoupper($arrData0[2]);

    if (preg_match('/[A-Z]+/', $arrData0[0]) || preg_match('/[A-Z]+/', $arrData0[2])) {
        echo 'Format data tidak boleh menggunakan huruf kapital';
    } else {
//        echo $nama . '<br>';
//        echo $usia . '<br>';
//        echo $kota . '<br>';
//        echo $hp . '<br>';
        $sql = "insert into `peserta` (`nama`, `usia`, `kota`,  `hp`) 
                values ('$nama', '$usia', '$kota', '$hp')";

        mysqli_query($koneksi, $sql);

        echo 'Terimakasih. Anda telah berhasil mendaftar, berikut data diri anda : ' . '<br>';
        echo "Nama Anda : {$nama}"  . '<br>';
        echo "Usia Anda : {$usia}"  . '<br>';
        echo "Kota Anda : {$kota}"  . '<br>';
        echo "Nomor HP Anda : {$hp}"  . '<br>';

    }

}

