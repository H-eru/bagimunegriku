<?php
include "../config/koneksi.php";

$id_user   		= $_POST['id_user']; 
$username_baru  = $_POST['username_baru']; 
				

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_user WHERE id_user='$id_user'"));


$update = mysqli_query($conn, "UPDATE tbl_user SET username='$username_baru' WHERE id_user='$id_user'");

	if($update){
		echo"<script>alert('Proses Ubah Username BERHASIL. Silahkan login lagi dengan Username yang baru.');
			window.location='index.php';</script>";
	}else{
		echo"<script>alert('Proses Ubah Username GAGAL.');
			window.location='profile.php';</script>";
	}


		
	
?>