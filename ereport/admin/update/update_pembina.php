<?php
include "../../config/koneksi.php";

$id_pembina 	= $_POST['id_pembina'];
$nama_pembina 	= $_POST['nama_pembina'];
$jk_pembina 	= $_POST['jk_pembina'];
$ttl_pembina 	= $_POST['ttl_pembina'];
$telp_pembina 	= $_POST['telp_pembina'];
$alamat_pembina = $_POST['alamat_pembina'];

//Proses Upload
$target_dir1 = "../../pictures/";
$target_file1 = $target_dir1 . basename($_FILES["foto_pembina"]["name"]);
$file1=$_FILES['foto_pembina']['name'];
$check1 = move_uploaded_file($_FILES["foto_pembina"]["tmp_name"],$target_file1);

if($file1 == NULL){
	$file1 = $_POST['foto']; 
}

$update = mysqli_query($conn, "UPDATE tbl_pembina SET nama_pembina='$nama_pembina', jk_pembina='$jk_pembina', ttl_pembina='$ttl_pembina',
			telp_pembina='$telp_pembina', alamat_pembina='$alamat_pembina', foto_pembina='$file1'
			WHERE id_pembina='$id_pembina'");

		if($update){
			header('location:../tabel/tabelDataPembina.php');
			//echo"<script>alert('Data Pembina Asrama BERHASIL di Ubah!!');
			//window.location:'../tabel/tabelDataPembina.php'</script>";
		}else{
			echo"<script>alert('Data Pembina Asrama GAGAL di Ubah!!');
			window.location:'../tabel/tabelDataPembina.php'</script>";
		}
	
?>