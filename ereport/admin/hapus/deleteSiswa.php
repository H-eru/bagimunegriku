<?php
include "../../config/koneksi.php";
$id_siswa = $_GET['id_siswa'];
$delete = mysqli_query($conn, "DELETE FROM tbl_siswa WHERE id_siswa='$id_siswa'");

if($delete){
	echo"<script>alert('Data Siswa BERHASIL di Hapus!!');
	window.location='../tabel/tabelDataSiswa.php';</script>";
}else{
	echo"<script>alert('Maaf!! Data Siswa GAGAL di Hapus!!');
	window.location='../tabel/tabelDataSiswa.php';</script>";
}
?>