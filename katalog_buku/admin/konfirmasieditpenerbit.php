<?php
session_start();
include('../koneksi/koneksi.php');
if(isset($_SESSION['penerbit'])){
 $id_penerbit = $_SESSION['penerbit'];
 $penerbit = $_POST['penerbit'];
 $alamat = $_POST['alamat'];
 if(empty($penerbit)){
	header("Location:editpenerbit.php?notif=editkosong&jenis=penerbit");
	// }elseif (empty($alamat)){
	// header("Location:editpenerbit.php?data=".$id_penerbit."¬if=editkosong");
	}else{
	$sql = "update `penerbit` set `penerbit`='$penerbit', `alamat`='$alamat' where `id_penerbit`= '$id_penerbit'";
	mysqli_query($koneksi,$sql);
	unset($_SESSION['id_penerbit']);
	header("Location:penerbit.php?notif=editberhasil");
	 }
	}
?>
