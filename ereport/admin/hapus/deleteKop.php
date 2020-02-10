<?php
include "../../config/koneksi.php";
$id_kop = $_GET['id_kop'];
$delete = mysqli_query($conn, "DELETE FROM tbl_kop WHERE id_kop='$id_kop'");

if($delete){
	echo"<script>alert('Data Kop/Header BERHASIL di Hapus!!');
	window.location='../tabel/tabelDataKop.php';</script>";
}else{
	echo"<script>alert('Maaf!! Data Kop/Header GAGAL di Hapus!!');
	window.location='../tabel/tabelDataKop.php';</script>";
}
?>