<?php
include "../config/koneksi.php";

$id_pembina 	= $_POST['id_pembina'];
$jk_pembina 	= $_POST['jk_pembina'];
$ttl_pembina 	= $_POST['ttl_pembina'];
$telp_pembina 	= $_POST['telp_pembina'];
$alamat_pembina = $_POST['alamat_pembina'];

//Proses Upload
$target_dir = "../pictures/";
$target_file = $target_dir . basename($_FILES["foto_pembina"]["name"]);
$file=$_FILES['foto_pembina']['name'];
$check = move_uploaded_file($_FILES["foto_pembina"]["tmp_name"],$target_file);

if($file == NULL){
	$file = $_POST['foto']; 
}

$update = mysqli_query($conn, "UPDATE tbl_pembina SET jk_pembina='$jk_pembina', ttl_pembina='$ttl_pembina',
			telp_pembina='$telp_pembina', alamat_pembina='$alamat_pembina',
			foto_pembina='$file' WHERE id_pembina='$id_pembina'");

		if($update){
			//header('location:../tabel/tabelDataOrtu.php');
			echo"<script>alert('Proses Ubah Data BERHASIL.');
			window.location='../pembina/profile.php';</script>";
		}else{
			echo"<script>alert('Proses Ubah Data GAGAL!!');
			window.location:'../pembina/profile.php'</script>";
		}
	
?>