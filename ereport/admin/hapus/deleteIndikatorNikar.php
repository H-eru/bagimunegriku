<?php
include "../../config/koneksi.php";
$id_indikator = $_GET['id_indikator'];
$delete = mysqli_query($conn, "DELETE FROM tbl_indikator_nikar WHERE id_indikator='$id_indikator'");

if($delete){
	echo"<script>alert('Data Indikator NiKar BERHASIL di Hapus!!');
	window.location='../tabel/tabelDataIndikatorNikar.php';</script>";
}else{
	echo"<script>alert('Maaf!! Data Indikator NiKar GAGAL di Hapus!!');
	window.location='../tabel/tabelDataIndikatorNikar.php';</script>";
}
?>