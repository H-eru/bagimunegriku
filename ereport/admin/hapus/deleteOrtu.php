<?php
include "../../config/koneksi.php";
$id_ortu = $_GET['id_ortu'];
$delete = mysqli_query($conn, "DELETE FROM tbl_ortu WHERE id_ortu='$id_ortu'");

if($delete){
	echo"<script>alert('Data Orang Tua/Wali BERHASIL di Hapus!!');
	window.location='../tabel/tabelDataOrtu.php';</script>";
}else{
	echo"<script>alert('Maaf!! Data Orang Tua/Wali GAGAL di Hapus!!');
	window.location='../tabel/tabelDataOrtu.php';</script>";
}
?>