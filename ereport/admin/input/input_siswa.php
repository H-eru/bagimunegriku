<?php
	include "../../config/koneksi.php";

	$id_siswa 		= $_POST['id_siswa'];
	$nama_siswa 	= $_POST['nama_siswa'];
	$jk_siswa 		= $_POST['jk_siswa'];
	$kelas_siswa 	= $_POST['kelas_siswa'];
	$telp_siswa 	= $_POST['telp_siswa'];
	$agama_siswa	= $_POST['agama_siswa'];
	$alamat_siswa 	= $_POST['alamat_siswa'];
	
	//Proses Upload
	//$target_dir 	= "../../FotoSiswa/";
	//$target_file 	= $target_dir.basename($_FILES["foto_siswa"]["name"]);
	//$file			= $_FILES['foto_siswa']['name'];
	//$check			= move_uploaded_file($_FILES["foto_siswa"]["tmp_name"],$target_file);
	
	$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_siswa WHERE nama_siswa='$nama_siswa' OR id_siswa='$id_siswa'"));
	if($cek>0){
		echo "<script>alert('DUPLICATE Data NIS / Nama Siswa. Mohon masukkan data yang berbeda.');window.location='../tambah/tambahSiswa.php'</script>";
	}else{
		$input = mysqli_query($conn, "INSERT INTO tbl_siswa(id_siswa,nama_siswa,jk_siswa,kelas_siswa,telp_siswa,agama_siswa,alamat_siswa) 
				VALUES('$id_siswa','$nama_siswa','$jk_siswa','$kelas_siswa','$telp_siswa','$agama_siswa','$alamat_siswa')");
		if($input){
			echo"<script>alert('Proses Input Data BERHASIL.');
				window.location='../tabel/tabelDataSiswa.php';</script>";
		}else{
			echo"<script>alert('Maaf, Proses Input Data Gagal. Mohon Cek dan Inputkan Kembali Data Anda.');
			window.location='../tambah/tambahSiswa.php';</script>";
		}
		
	}
?>