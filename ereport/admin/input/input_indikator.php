<?php
	include "../../config/koneksi.php";

	$aspek_indikator 	= $_POST['aspek_indikator'];
	$ket_indikator 		= $_POST['ket_indikator'];
			
	//Proses Counter
	$query = mysqli_query($conn, "SELECT * FROM tbl_counter WHERE id_counter='1'");
	$row = mysqli_fetch_assoc($query);
	$indikator = ($row['id_indikator']+1);
	$id_indikator = ("IK-".$indikator);

	$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_indikator_nikar WHERE aspek_indikator='$aspek_indikator' 
											AND ket_indikator='$ket_indikator'"));
	if($cek>0 || $indikator > 8){
		echo "<script>alert('DUPLICATE Data Indikator Nilai Karakter. Mohon masukkan data yang berbeda.');window.location='../tambah/tambahIndikator.php'</script>";
	}else{
		$input = mysqli_query($conn, "INSERT INTO tbl_indikator_nikar VALUES('$id_indikator','$aspek_indikator','$ket_indikator')");
		if($input){
			mysqli_query($conn, "UPDATE tbl_counter SET id_indikator='$indikator' WHERE id_counter='1'");
			header('location:../tabel/tabelDataIndikator.php');
		}else{
			echo"<script>alert('Maaf, Proses Input Data Gagal. Mohon Cek dan Inputkan Kembali Data Anda.');
			window.location='../tambah/tambahIndikator.php';</script>";
		}
		
	}
?>