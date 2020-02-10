<?php
include "../../config/koneksi.php";
$id_mapel = $_GET['id_mapel'];
$delete = mysqli_query($conn, "DELETE FROM tbl_mapel WHERE id_mapel='$id_mapel'");

if($delete){
	echo"<script>alert('Data Mapel BERHASIL di Hapus!!');
	window.location='../tabel/tabelDataMapel.php';</script>";
}else{
	echo"<script>alert('Maaf!! Data Mapel GAGAL di Hapus!!');
	window.location='../tabel/tabelDataMapel.php';</script>";
}
?>