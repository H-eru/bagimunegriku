<?php
	include "../../config/koneksi.php";

	$nama_pembina 	= $_POST['nama_pembina'];
	$jk_pembina 	= $_POST['jk_pembina'];
	$ttl_pembina 	= $_POST['ttl_pembina'];
	$telp_pembina 	= $_POST['telp_pembina'];
	$alamat_pembina = $_POST['alamat_pembina'];
	$username		= $_POST['username'];
	$password 		= md5($_POST['password']);
	$re_password 	= md5($_POST['re_password']);
	$level			= "Pembina";
	
	//Proses Upload
	$target_dir1 = "../../pictures/";
	$target_file1 = $target_dir1 . basename($_FILES["foto_pembina"]["name"]);
	$file1=$_FILES['foto_pembina']['name'];
	$check1 = move_uploaded_file($_FILES["foto_pembina"]["tmp_name"],$target_file1);
	
	
	//Proses Counter
	$query = mysqli_query($conn, "SELECT * FROM tbl_counter WHERE id_counter='1'");
	$row = mysqli_fetch_assoc($query);
	$pembina = ($row['id_pembina']+1);
	$id_pembina = ("P-".$pembina);

	$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_pembina WHERE nama_pembina='$nama_pembina' OR username='$username'"));
	if($cek>0){
		echo "<script>alert('DUPLICATE Data Nama/Username. Mohon masukkan data yang berbeda.');window.location='../tambah/tambahPembina.php'</script>";
	}else{
		if($password == $re_password){
			$input = mysqli_query($conn, "INSERT INTO tbl_pembina VALUES('$id_pembina','$nama_pembina','$jk_pembina',
					'$ttl_pembina','$telp_pembina','$alamat_pembina','$file1','$username','$password','$level')");
			if($input){
				mysqli_query($conn, "UPDATE tbl_counter SET id_pembina='$pembina' WHERE id_counter='1'");
				header('location:../tabel/tabelDataPembina.php');
			}else{
				echo"<script>alert('Maaf, Proses Input Data Gagal. Mohon Cek dan Inputkan Kembali Data Anda.');
				window.location='../tambah/tambahPembina.php';</script>";
			}
		}else{
			echo"<script>alert('Password yang Anda Inputkan Tidak Sama!! Mohon Ulang Kembali..!!');
				window.location='../tambah/tambahPembina.php';</script>";
		}
	}
?>