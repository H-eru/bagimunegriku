<?php
include "../config/koneksi.php";

$id_pembina   	= $_POST['id_pembina']; 
$username_baru  = $_POST['username_baru']; 
				

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_pembina WHERE id_pembina='$id_pembina'"));


$update = mysqli_query($conn, "UPDATE tbl_pembina SET username='$username_baru' WHERE id_pembina='$id_pembina'");

	if($update){
		echo"<script>alert('Proses Ubah Username BERHASIL. Silahkan login lagi dengan Username yang baru.');
			window.location='../pembina/index.php';</script>";
	}else{
		echo"<script>alert('Proses Ubah Username GAGAL.');
			window.location='../pembina/profile.php';</script>";
	}


		
	
?>