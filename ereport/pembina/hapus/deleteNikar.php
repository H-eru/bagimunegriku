<?php
include "../../config/koneksi.php";

$id = $_POST['pilih'];

$jumlah_dipilih = count($id);

for($x=0;$x<$jumlah_dipilih;$x++){
	$delete = mysqli_query($conn, "DELETE FROM tbl_nikar WHERE id_nikar='$id[$x]'");
}

if($delete){
	echo"<script>alert('Data BERHASIL di Hapus!!');
	window.location='../tabel/tabelDataNikar.php';</script>";
}else{
	echo"<script>alert('Maaf!! Data GAGAL di Hapus!!');
	window.location='../tabel/tabelDataNikar.php';</script>";
	
}
?>