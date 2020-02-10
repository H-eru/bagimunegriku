<?php
include "../config/koneksi.php";

$id_user   = $_POST['id_user']; 
$pass_lama = md5($_POST['pass_lama']);
$pass_baru = md5($_POST['pass_baru']);
$pass_baru_ulang = md5($_POST['pass_baru_ulang']);
				

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_user WHERE id_user='$id_user'"));

if($data['password'] == $pass_lama && $pass_baru == $pass_baru_ulang){
	$update = mysqli_query($conn, "UPDATE tbl_user SET password='$pass_baru_ulang' WHERE id_user='$id_user'");

	if($update){
		echo"<script>alert('Proses Ubah Password BERHASIL.');
			window.location='profile.php';</script>";
	}else{
		echo"<script>alert('Proses Ubah Password GAGAL.');
			window.location='profile.php';</script>";
	}
}else{
	echo"<script>alert('Proses Ubah Password GAGAL.');
		window.location='profile.php';</script>";
}

		
	
?>