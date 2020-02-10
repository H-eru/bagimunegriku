<?php
	include "../../config/koneksi.php";

	$id_siswa 		= $_POST['id_siswa'];
	$id_pembina 	= $_POST['id_pembina'];
	$tgl_input 		= $_POST['tgl_input'];
	$ket_catatan	= $_POST['ket_catatan'];
	
	$input = mysqli_query($conn, "INSERT INTO tbl_cat_khusus_siswa(id_siswa,id_pembina,tgl_input,ket_catatan) 
				VALUES('$id_siswa','$id_pembina','$tgl_input','$ket_catatan')");
	
	if($input){
		echo"<script>alert('Proses Input Data Catatan Khusus Siswa BERHASIL.');
				window.location='../tabel/tabelDataCatKhusus.php';
			</script>";
	}else{
		echo"<script>alert('Maaf, Proses Input Data Gagal. Mohon Cek dan Inputkan Kembali Data Anda.');
		window.location='../tambah/tambahCatKhusus.php';</script>";
	}
		
?>