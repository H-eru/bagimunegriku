<?php
	include "../../config/koneksi.php";

	$id_siswa		= $_POST['id_siswa'];
	$kelas_siswa	= $_POST['kelas_siswa'];
	$id_pembina 	= $_POST['id_pembina'];
	$tgl_penilaian	= $_POST['tgl_penilaian'];
	$sesi_penilaian = $_POST['sesi_penilaian'];
	
		$nilai=$_POST['nilai_kar']; //post nilai karakter siswa dalam bentuk array
		foreach($nilai as $nilai_karakter){
			$nk[]="'".$nilai_karakter."'";
		}
		
		
		
		$cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_nikar WHERE id_siswa='$id_siswa' AND sesi_penilaian='$sesi_penilaian'"));
		if($cek>0){
			echo "<script>alert('DUPLICATE Data Id_Siswa dan  Jenis Penilaian. Mohon masukkan data yang berbeda.');window.location='../tambah/tambahNikar.php'</script>";
		}else{
			$input=mysqli_query($conn,"insert into tbl_nikar values
				('','$id_siswa','$kelas_siswa','$tgl_penilaian','$sesi_penilaian','$id_pembina','Sudah Di Kerjakan',".implode(',',$nk).")");
		
			if($input){
				echo"<script>alert('Proses Input Data Berhasil.');window.location='../tabel/tabelDataNikar.php';
				</script>";
			}else{
				echo"<script>alert('Maaf, Proses Input Data Gagal. Mohon Cek dan Inputkan Kembali Data Anda.');
				window.location='../tambah/tambahNikar.php';</script>";
				
			}
		}
		
		
		
	
	
		

?>