<?php
	include "../../config/koneksi.php";

	$tingkat_plg 		= $_POST['tingkat_plg'];
	$ket_indikator_plg 	= $_POST['ket_indikator_plg'];

	$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_indikator_plg WHERE tingkat_plg='$tingkat_plg' 
											AND ket_indikator_plg='$ket_indikator_plg'"));
	if($cek>0){
		echo "<script>alert('DUPLICATE Data Indikator Pelanggaran. Mohon masukkan data yang berbeda.');window.location='../tambah/tambahIndikatorPelanggaran.php'</script>";
	}else{
		$input = mysqli_query($conn, "INSERT INTO tbl_indikator_plg(tingkat_plg,ket_indikator_plg) VALUES('$tingkat_plg','$ket_indikator_plg')");
		if($input){
			header('location:../tabel/tabelIndikatorPelanggaran.php');
		}else{
			echo"<script>alert('Maaf, Proses Input Data Gagal. Mohon Cek dan Inputkan Kembali Data Anda.');
			window.location='../tambah/tambahIndikatorPelanggaran.php';</script>";
		}
		
	}
?>