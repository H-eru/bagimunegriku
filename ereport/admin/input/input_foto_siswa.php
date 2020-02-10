<?php
	include "../../config/koneksi.php";
	
	$jumlah = count($_FILES['files']['name']);
	if($jumlah>0){
		for($i=0;$i<$jumlah;$i++){
			$id_siswa	= $_POST['id_siswa_'.$i];
			$file_name = $_FILES['files']['name'][$i];
			$tmp_name = $_FILES['files']['tmp_name'][$i];
			move_uploaded_file($tmp_name,"../../FotoSiswa/".$file_name);
			mysqli_query($conn, "UPDATE tbl_siswa SET foto_siswa='$file_name' WHERE id_siswa='$id_siswa'");
		}
		echo"<script>alert('Proses Input Data BERHASIL.');
		window.location='../tabel/tabelDataSiswa.php';</script>";
	}else{
		echo"<script>alert('Maaf, Proses Input Data GAGAL.');
		window.location='../tabel/tabelDataSiswa.php';</script>";
	}
?>