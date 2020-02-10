<?php
include "../../config/koneksi.php";

$id_indikator_plg 	= $_POST['id_indikator_plg'];
$tingkat_plg 		= $_POST['tingkat_plg'];
$ket_indikator_plg 	= $_POST['ket_indikator_plg'];

$update = mysqli_query($conn, "UPDATE tbl_indikator_plg SET tingkat_plg='$tingkat_plg', 
						ket_indikator_plg='$ket_indikator_plg' WHERE id_indikator_plg='$id_indikator_plg'");

		if($update){
			header('location:../tabel/tabelIndikatorPelanggaran.php');
			//echo"<script>alert('Data Pembina Asrama BERHASIL di Ubah!!');
			//window.location:'../tabel/tabelDataPembina.php'</script>";
		}else{
			echo"<script>alert('Data Indikator Pelanggaran GAGAL di Ubah!!');
			window.location:'../tabel/tabelIndikatorPelanggaran.php'</script>";
		}
	
?>