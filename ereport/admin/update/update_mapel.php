<?php
include "../../config/koneksi.php";

$id_mapel 		= $_POST['id_mapel'];
$nama_mapel 	= $_POST['nama_mapel'];
$jenis_mapel 	= $_POST['jenis_mapel'];

$update = mysqli_query($conn, "UPDATE tbl_mapel SET nama_mapel='$nama_mapel', jenis_mapel='$jenis_mapel' WHERE id_mapel='$id_mapel'");

		if($update){
			header('location:../tabel/tabelDataMapel.php');
			//echo"<script>alert('Data Pembina Asrama BERHASIL di Ubah!!');
			//window.location:'../tabel/tabelDataPembina.php'</script>";
		}else{
			echo"<script>alert('Data Mata Pelajaran GAGAL di Ubah!!');
			window.location:'../tabel/tabelDataMapel.php'</script>";
		}
	
?>