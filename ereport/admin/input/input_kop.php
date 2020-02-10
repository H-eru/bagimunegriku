<?php
	include "../../config/koneksi.php";

	$nama_yayasan 		= $_POST['nama_yayasan'];
	$nama_instansi 		= $_POST['nama_instansi'];
	$alamat_instansi 	= $_POST['alamat_instansi'];
	$telp_instansi 		= $_POST['telp_instansi'];
	$email_instansi 	= $_POST['email_instansi'];
	$rek_instansi 		= $_POST['rek_instansi'];
	
	//Proses Upload
	$target_dir = "../../pictures/";
	$target_file = $target_dir . basename($_FILES["logo"]["name"]);
	$file=$_FILES['logo']['name'];
	$check = move_uploaded_file($_FILES["logo"]["tmp_name"],$target_file);

	$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_kop WHERE nama_yayasan='$nama_yayasan' AND nama_instansi='$nama_instansi'"));
	if($cek>0){
		echo "<script>alert('DUPLICATE Data Nama Yayasan dan Nama Instansi. Mohon masukkan data yang berbeda.');window.location='../tambah/tambahKop.php'</script>";
	}else{
		$input = mysqli_query($conn, "INSERT INTO tbl_kop(nama_yayasan,nama_instansi,alamat_instansi,telp_instansi,email_instansi,rek_instansi,logo)
					VALUES('$nama_yayasan','$nama_instansi','$alamat_instansi','$telp_instansi','$email_instansi','$rek_instansi','$file')");
		if($input){
			header('location:../tabel/tabelDataKop.php');
		}else{
			echo"<script>alert('Maaf, Proses Input Data Gagal. Mohon Cek dan Inputkan Kembali Data Anda.');
			window.location='../tambah/tambahKop.php';</script>";
		}
		
	}
?>