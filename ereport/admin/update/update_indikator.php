<?php
include "../../config/koneksi.php";

$id_indikator 		= $_POST['id_indikator'];
$aspek_indikator 	= $_POST['aspek_indikator'];
$ket_indikator 		= $_POST['ket_indikator'];

$update = mysqli_query($conn, "UPDATE tbl_indikator_nikar SET aspek_indikator='$aspek_indikator', 
						ket_indikator='$ket_indikator' WHERE id_indikator='$id_indikator'");

		if($update){
			header('location:../tabel/tabelDataIndikator.php');
			//echo"<script>alert('Data Pembina Asrama BERHASIL di Ubah!!');
			//window.location:'../tabel/tabelDataPembina.php'</script>";
		}else{
			echo"<script>alert('Data Indikator NiKar GAGAL di Ubah!!');
			window.location:'../tabel/tabelDataIndikator.php'</script>";
		}
	
?>