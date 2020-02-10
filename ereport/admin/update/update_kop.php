<?php
include "../../config/koneksi.php";

$id_kop 		= $_POST['id_kop'];
$nama_yayasan 	= $_POST['nama_yayasan'];
$nama_instansi 	= $_POST['nama_instansi'];
$alamat_instansi= $_POST['alamat_instansi'];
$telp_instansi 	= $_POST['telp_instansi'];
$email_instansi = $_POST['email_instansi'];
$rek_instansi 	= $_POST['rek_instansi'];

//Proses Upload
$target_dir 	= "../../pictures/";
$target_file 	= $target_dir.basename($_FILES["logo"]["name"]);
$file			= $_FILES['logo']['name'];
$check 			= move_uploaded_file($_FILES["logo"]["tmp_name"],$target_file1);

if($file == NULL){
	$file = $_POST['logo']; 
}

$update = mysqli_query($conn, "UPDATE tbl_kop SET nama_yayasan='$nama_yayasan', nama_instansi='$nama_instansi', 
			alamat_instansi='$alamat_instansi', telp_instansi='$telp_instansi', email_instansi='$email_instansi', 
			rek_instansi='$rek_instansi', logo='$file'
			WHERE id_kop='$id_kop'");

		if($update){
			header('location:../tabel/tabelDataKop.php');
			//echo"<script>alert('Data Pembina Asrama BERHASIL di Ubah!!');
			//window.location:'../tabel/tabelDataPembina.php'</script>";
		}else{
			echo"<script>alert('Data Kop/Header GAGAL di Ubah!!');
			window.location:'../tabel/tabelDataKop.php'</script>";
		}
	
?>