<?php
include "../../config/koneksi.php";

$id_ortu 		= $_POST['id_ortu'];
$nama_ortu 		= $_POST['nama_ortu'];
$jk_ortu 		= $_POST['jk_ortu'];
$agama_ortu 	= $_POST['agama_ortu'];
$telp_ortu 		= $_POST['telp_ortu'];
$alamat_ortu 	= $_POST['alamat_ortu'];
$hub_dg_anak 	= $_POST['hub_dg_anak'];
$id_siswa		= $_POST['id_siswa'];

//Proses Upload
$target_dir = "../../pictures/";
$target_file = $target_dir1 . basename($_FILES["foto_ortu"]["name"]);
$file=$_FILES['foto_ortu']['name'];
$check = move_uploaded_file($_FILES["foto_ortu"]["tmp_name"],$target_file1);

if($file == NULL){
	$file = $_POST['foto']; 
}

$update = mysqli_query($conn, "UPDATE tbl_ortu SET nama_ortu='$nama_ortu', jk_ortu='$jk_ortu', agama_ortu='$agama_ortu',
			telp_ortu='$telp_ortu', alamat_ortu='$alamat_ortu', hub_dg_anak='$hub_dg_anak', id_siswa='$id_siswa', 
			foto_ortu='$file' WHERE id_ortu='$id_ortu'");

		if($update){
			header('location:../tabel/tabelDataOrtu.php');
			//echo"<script>alert('Data Pembina Asrama BERHASIL di Ubah!!');
			//window.location:'../tabel/tabelDataPembina.php'</script>";
		}else{
			echo"<script>alert('Data Orang Tua/Wali GAGAL di Ubah!!');
			window.location:'../tabel/tabelDataOrtu.php'</script>";
		}
	
?>