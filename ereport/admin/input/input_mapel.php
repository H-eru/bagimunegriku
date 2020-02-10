<?php
	include "../../config/koneksi.php";

	$nama_mapel 	= $_POST['nama_mapel'];
	$jenis_mapel 	= $_POST['jenis_mapel'];
			
	//Proses Counter
	$query = mysqli_query($conn, "SELECT * FROM tbl_counter WHERE id_counter='1'");
	$row = mysqli_fetch_assoc($query);
	$mapel = ($row['id_mapel']+1);
	$id_mapel = ("M-".$mapel);

	$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_mapel WHERE nama_mapel='$nama_mapel' AND jenis_mapel='$jenis_mapel'"));
	if($cek>0){
		echo "<script>alert('DUPLICATE Data Nama Mata Pelajaran dan Jenis Pelajaran. Mohon masukkan data yang berbeda.');window.location='../tambah/tambahMapel.php'</script>";
	}else{
		$input = mysqli_query($conn, "INSERT INTO tbl_mapel VALUES('$id_mapel','$nama_mapel','$jenis_mapel')");
		if($input){
			mysqli_query($conn, "UPDATE tbl_counter SET id_mapel='$mapel' WHERE id_counter='1'");
			header('location:../tabel/tabelDataMapel.php');
		}else{
			echo"<script>alert('Maaf, Proses Input Data Gagal. Mohon Cek dan Inputkan Kembali Data Anda.');
			window.location='../tambah/tambahMapel.php';</script>";
		}
		
	}
?>