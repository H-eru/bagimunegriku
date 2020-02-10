<?php
include "../config/koneksi.php";

$id_pembina = $_POST['id_pembina']; 
$pass_lama = md5($_POST['pass_lama']);
$pass_baru = md5($_POST['pass_baru']);
$pass_baru_ulang = md5($_POST['pass_baru_ulang']);
				

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_pembina WHERE id_pembina='$id_pembina'"));

if($data['password'] == $pass_lama && $pass_baru == $pass_baru_ulang){
	$update = mysqli_query($conn, "UPDATE tbl_pembina SET password='$pass_baru_ulang' WHERE id_pembina='$id_pembina'");

	if($update){
		echo"<script>alert('Proses Ubah Password BERHASIL.');
			window.location='../pembina/profile.php';</script>";
	}else{
		echo"<script>alert('Proses Ubah Password GAGAL.');
			window.location='../pembina/profile.php';</script>";
	}
}else{
	echo"<script>alert('Proses Ubah Password GAGAL.');
		window.location='../pembina/profile.php';</script>";
}

		
	
?>