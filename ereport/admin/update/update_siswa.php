<?php
include "../../config/koneksi.php";

$id_siswa 		= $_POST['id_siswa'];
$nama_siswa 	= $_POST['nama_siswa'];
$jk_siswa 		= $_POST['jk_siswa'];
$kelas_siswa 	= $_POST['kelas_siswa'];
$agama_siswa 	= $_POST['agama_siswa'];
$telp_siswa 	= $_POST['telp_siswa'];
$alamat_siswa 	= $_POST['alamat_siswa'];


$update = mysqli_query($conn, "UPDATE tbl_siswa SET nama_siswa='$nama_siswa', jk_siswa='$jk_siswa', 
			agama_siswa='$agama_siswa', telp_siswa='$telp_siswa', alamat_siswa='$alamat_siswa', 
			kelas_siswa='$kelas_siswa' WHERE id_siswa='$id_siswa'");

		if($update){
			//header('location:../tabel/tabelDatasiswa.php');
			echo"<script>alert('Data Siswa BERHASIL di Ubah.');
				window.location='../tabel/tabelDataSiswa.php';</script>";
		}else{
			echo"<script>alert('Data Siswa GAGAL di Ubah!!');
			window.location:'../tabel/tabelDatasiswa.php'</script>";
		}
	
?>