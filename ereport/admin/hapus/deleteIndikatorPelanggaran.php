<?php
include "../../config/koneksi.php";
$id_indikator_plg = $_GET['id_indikator_plg'];
$delete = mysqli_query($conn, "DELETE FROM tbl_indikator_plg WHERE id_indikator_plg='$id_indikator_plg'");

if($delete){
	echo"<script>alert('Data Indikator Pelanggaran BERHASIL di Hapus!!');
	window.location='../tabel/tabelDataIndikatorPelanggaran.php';</script>";
}else{
	echo"<script>alert('Maaf!! Data Indikator Pelanggaran GAGAL di Hapus!!');
	window.location='../tabel/tabelDataIndikatorPelanggaran.php';</script>";
}
?>