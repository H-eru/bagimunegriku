<?php
	include "../../config/koneksi.php";

	$nama_ortu 		= $_POST['nama_ortu'];
	$jk_ortu 		= $_POST['jk_ortu'];
	$agama_ortu 	= $_POST['agama_ortu'];
	$telp_ortu 		= $_POST['telp_ortu'];
	$alamat_ortu 	= $_POST['alamat_ortu'];
	$hub_dg_anak 	= $_POST['hub_dg_anak'];
	$id_siswa		= $_POST['id_siswa'];
	$username		= $_POST['username'];
	$password 		= md5($_POST['password']);
	$re_password 	= md5($_POST['re_password']);
	$level			= "Ortu";
	
	//Proses Upload
	$target_dir = "../../pictures/";
	$target_file = $target_dir . basename($_FILES["foto_ortu"]["name"]);
	$file=$_FILES['foto_ortu']['name'];
	$check = move_uploaded_file($_FILES["foto_ortu"]["tmp_name"],$target_file);
	
	
	//Proses Counter
	$query = mysqli_query($conn, "SELECT * FROM tbl_counter WHERE id_counter='1'");
	$row = mysqli_fetch_assoc($query);
	$ortu = ($row['id_ortu']+1);
	$id_ortu = ("O-".$ortu);

	$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_ortu WHERE nama_ortu='$nama_ortu' OR username='$username' OR id_siswa='$id_siswa'"));
	if($cek>0){
		echo "<script>alert('DUPLICATE Data Nama/Username. Mohon masukkan data yang berbeda.');window.location='../tambah/tambahOrtu.php'</script>";
	}else{
		if($password == $re_password){
			$input = mysqli_query($conn, "INSERT INTO tbl_ortu VALUES('$id_ortu','$nama_ortu','$jk_ortu',
					'$agama_ortu','$telp_ortu','$alamat_ortu','$file','$hub_dg_anak','$username','$password','$level','$id_siswa')");
			if($input){
				mysqli_query($conn, "UPDATE tbl_counter SET id_ortu='$ortu' WHERE id_counter='1'");
				header('location:../tabel/tabelDataOrtu.php');
			}else{
				echo"<script>alert('Maaf, Proses Input Data Gagal. Mohon Cek dan Inputkan Kembali Data Anda.');
				window.location='../tambah/tambahOrtu.php';</script>";
			}
		}else{
			echo"<script>alert('Password yang Anda Inputkan Tidak Sama!! Mohon Ulang Kembali..!!');
				window.location='../tambah/tambahOrtu.php';</script>";
		}
	}
?>