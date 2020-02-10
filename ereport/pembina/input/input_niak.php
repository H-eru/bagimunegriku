<?php
	include "../../config/koneksi.php";

	$kelas_siswa 	= $_POST['kelas_siswa'];
	$jenis_nilai 	= $_POST['jenis_nilai'];
	$mapel 			= $_POST['mapel'];
	
	$penilaian_ke	= $_POST['penilaian_ke'];
	$tgl_penilaian	= $_POST['tgl_penilaian'];
	
	$banyak_data 	= $_POST['banyak_data'];
	
	$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_niak WHERE mapel='$mapel' AND jenis_nilai='$jenis_nilai' AND kelas_siswa='$kelas_siswa' AND penilaian_ke='$penilaian_ke' AND tgl_penilaian='$tgl_penilaian'"));
	
	if($cek>0){
		echo "<script>alert('Terjadi DUPLICATE Data. Mohon masukkan data yang berbeda.');window.location='../tambah/tambahNiak.php'</script>";
	}else{
		
		for($i=0;$i<$banyak_data;$i++){
			//$nama_siswa = $_POST['nama_siswa_'.$i];
			$id_siswa 		= $_POST['id_siswa_'.$i];
			$nilai_angka 	= $_POST['nilai_angka_'.$i];
				
			
			if($nilai_angka < 75){
				$ket_nilai="Tidak Tuntas";
			}else{
				$ket_nilai="Tuntas";
			}
			
			$input_multiple =  mysqli_query($conn, "INSERT INTO tbl_niak(id_siswa,kelas_siswa,mapel,tgl_penilaian,jenis_nilai,penilaian_ke,besar_nilai,ket_nilai) 
								VALUES ('$id_siswa','$kelas_siswa','$mapel','$tgl_penilaian','$jenis_nilai','$penilaian_ke','$nilai_angka','$ket_nilai')");
		}
		
		if($input_multiple){
			echo"<script>alert('Proses Input Data Nilai Siswa BERHASIL.');window.location='../tabel/tabelDataNiak.php';
				</script>";
		}else{
			echo"<script>alert('Maaf, Proses Input Data Nilai Siswa GAGAL. Mohon Cek dan Inputkan Kembali Data Anda.');
				 window.location='../tambah/tambahNiak.php';</script>";
			
		}
	}
?>