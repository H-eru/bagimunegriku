<?php
include "../../config/koneksi.php";
$id_pembina = $_GET['id_pembina'];
$delete = mysqli_query($conn, "DELETE FROM tbl_pembina WHERE id_pembina='$id_pembina'");

if($delete){
	echo"<script>alert('Data Pembina Asrama BERHASIL di Hapus!!');
	window.location='../tabel/tabelDataPembina.php';</script>";
}else{
	echo"<script>alert('Maaf!! Data Pembina Asrama GAGAL di Hapus!!');
	window.location='../tabel/tabelDataPembina.php';</script>";
}
?>