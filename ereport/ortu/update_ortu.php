<?php
include "../config/koneksi.php";

$id_ortu 		= $_POST['id_ortu'];
$jk_ortu 		= $_POST['jk_ortu'];
$agama_ortu 	= $_POST['agama_ortu'];
$telp_ortu 		= $_POST['telp_ortu'];
$alamat_ortu 	= $_POST['alamat_ortu'];
$hub_dg_anak 	= $_POST['hub_dg_anak'];

//Proses Upload
$target_dir = "../pictures/";
$target_file = $target_dir . basename($_FILES["foto_ortu"]["name"]);
$file=$_FILES['foto_ortu']['name'];
$check = move_uploaded_file($_FILES["foto_ortu"]["tmp_name"],$target_file);

if($file == NULL){
	$file = $_POST['foto']; 
}

$update = mysqli_query($conn, "UPDATE tbl_ortu SET jk_ortu='$jk_ortu', agama_ortu='$agama_ortu',
			telp_ortu='$telp_ortu', alamat_ortu='$alamat_ortu', hub_dg_anak='$hub_dg_anak',
			foto_ortu='$file' WHERE id_ortu='$id_ortu'");

		if($update){
			//header('location:../tabel/tabelDataOrtu.php');
			echo"<script>alert('Proses Ubah Data BERHASIL.');
			window.location='../ortu/profile.php';</script>";
		}else{
			echo"<script>alert('Proses Ubah Data GAGAL!!');
			window.location:'../ortu/profile.php'</script>";
		}
	
?>