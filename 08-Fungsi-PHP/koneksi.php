<?php
$koneksi = mysqli_connect("localhost","root","","tugas8");
// cek koneksi
if (!$koneksi){
    die("Error koneksi: " . mysqli_connect_errno());
}
