<?php
	include "../../config/koneksi.php";

	$id_siswa 		= $_POST['id_siswa'];
	$id_pembina 	= $_POST['id_pembina'];
	$tgl_input 		= $_POST['tgl_input'];
	$tgl_plg 		= $_POST['tgl_plg'];		
	$tempat_plg 	= $_POST['tempat_plg'];
	$indikator_plg	= $_POST['indikator_plg'];
	$detail_plg		= $_POST['detail_plg'];
	
	//Proses Upload
	$target_dir 	= "../../surat_pelanggaran/";
	$target_file 	= $target_dir . basename($_FILES["surat_plg"]["name"]);
	$file			= $_FILES['surat_plg']['name'];
	$check 			= move_uploaded_file($_FILES["surat_plg"]["tmp_name"],$target_file);
	
	if($file == "" || $file == NULL){
		$file = "Tidak Ada Surat Pelanggaran";
	}

	$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_pelanggaran WHERE id_siswa='$id_siswa'
										AND id_pembina='$id_pembina' AND tgl_plg='$tgl_plg'"));
	if($cek>0){
		echo "<script>alert('DUPLICATE Data Pelanggaran Siswa. Mohon masukkan data yang berbeda.');window.location='../tambah/tambahPelanggaranSiswa.php'</script>";
	}else{
		$input = mysqli_query($conn, "INSERT INTO tbl_pelanggaran(id_siswa,id_pembina,tgl_plg,tempat_plg,indikator_plg,detail_plg,surat_plg,tgl_input) 
				VALUES('$id_siswa','$id_pembina','$tgl_plg','$tempat_plg','$indikator_plg','$detail_plg','$file','$tgl_input')");
		if($input){
			echo"<script>alert('Proses Input Data Pelanggaran Siswa BERHASIL.');
					window.location='../tabel/tabelDataPelanggaranSiswa.php';
				</script>";
		}else{
			echo"<script>alert('Maaf, Proses Input Data Gagal. Mohon Cek dan Inputkan Kembali Data Anda.');
			window.location='../tambah/tambahPelanggaranSiswa.php';</script>";
		}
		
	}
?>