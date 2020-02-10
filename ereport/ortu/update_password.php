<?php
include "../config/koneksi.php";

$id_ortu   = $_POST['id_ortu']; 
$pass_lama = md5($_POST['pass_lama']);
$pass_baru = md5($_POST['pass_baru']);
$pass_baru_ulang = md5($_POST['pass_baru_ulang']);
				

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_ortu WHERE id_ortu='$id_ortu'"));

if($data['password'] == $pass_lama && $pass_baru == $pass_baru_ulang){
	$update = mysqli_query($conn, "UPDATE tbl_ortu SET password='$pass_baru_ulang' WHERE id_ortu='$id_ortu'");

	if($update){
		echo"<script>alert('Proses Ubah Password BERHASIL.');
			window.location='../ortu/profile.php';</script>";
	}else{
		echo"<script>alert('Proses Ubah Password GAGAL.');
			window.location='../ortu/profile.php';</script>";
	}
}else{
	echo"<script>alert('Proses Ubah Password GAGAL.');
		window.location='../ortu/profile.php';</script>";
}

		
	
?>