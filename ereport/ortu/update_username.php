<?php
include "../config/koneksi.php";

$id_ortu   		= $_POST['id_ortu']; 
$username_baru  = $_POST['username_baru']; 
				

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_ortu WHERE id_ortu='$id_ortu'"));


$update = mysqli_query($conn, "UPDATE tbl_ortu SET username='$username_baru' WHERE id_ortu='$id_ortu'");

	if($update){
		echo"<script>alert('Proses Ubah Username BERHASIL. Silahkan login lagi dengan Username yang baru.');
			window.location='../index.php';</script>";
	}else{
		echo"<script>alert('Proses Ubah Username GAGAL.');
			window.location='../ortu/profile.php';</script>";
	}


		
	
?>