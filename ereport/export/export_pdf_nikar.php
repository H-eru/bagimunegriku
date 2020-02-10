<?php
	session_start();
	
	include "../config/koneksi.php";
	
	$user = $_SESSION['username'];
	
	$result2 = mysqli_query($conn, "SELECT * FROM tbl_ortu WHERE username='$user'");
	$hasil2 = mysqli_fetch_assoc($result2);
	$nis = $hasil2['id_siswa'];

	$no=1;
?>

<style type="text/css">
	table.garistepi {
		border-collapse:collapse;
		border-width:2px;
	}
	td.garis {
		border-collapse:collapse;
		padding:5px;
	}
	.header{
		width:100%;
		height:auto;
		padding : 20px;
	}
	.logo{
		float:left;
		position:absolute;
		margin-top:30px;
	}
	.subtitle{
		width:100%;
		font-family:calibri;
	}
	.title{
		margin-left:-40px;
	}
</style>


<html>
<body>
<div class="header">
	<?php 
		$kop = mysqli_query($conn, "SELECT * FROM tbl_kop"); 
		$datakop = mysqli_fetch_assoc($kop);
		
	?>

	<div class="logo"><?php echo "<img src='../pictures/".$datakop['logo']."' width='85px'>"; ?></div>
	<div class="title">
		<p align="center">
			<span class="subtitle h2"><b><?php echo strtoupper("$datakop[nama_yayasan]"); ?></b></span><br>
			<span class="subtitle h1"><b><?php echo strtoupper("$datakop[nama_instansi]"); ?></b></span><br>
			<span><?php echo "$datakop[alamat_instansi]"; ?> <br>Telp. <?php echo "$datakop[telp_instansi]"; ?></span><br>
			<span>email : <?php echo "$datakop[email_instansi]"; ?></span><br>
			<span>no rek: <?php echo "$datakop[rek_instansi]"; ?></span>
		</p>
	</div>
	<hr>
</div>

<?php
	$penilaian = $_GET['penilaian'];

	$ortu_query = mysqli_query($conn, "SELECT * FROM tbl_ortu WHERE tbl_ortu.id_siswa='$nis'");
	$ortu=mysqli_fetch_assoc($ortu_query);
										
	$kueri = mysqli_query($conn, "SELECT * FROM tbl_nikar,tbl_ortu,tbl_siswa 
			WHERE tbl_nikar.id_siswa=tbl_ortu.id_siswa AND tbl_ortu.id_siswa=tbl_siswa.id_siswa
			AND tbl_nikar.id_siswa=tbl_siswa.id_siswa AND tbl_ortu.id_siswa='$nis'");
		
	$hasil = mysqli_fetch_assoc($kueri);
	
	$sesi_penilaian = $hasil['sesi_penilaian'];				
	
?>

	<h2 align="center">Nilai Karakter Siswa <?=$hasil['nama_siswa']?> </h2>
	<center>
		<table>
			<tr>
				<td><b>Sesi Penilaian    </b> <td>:</td><td> <?php echo $sesi_penilaian;?></td>
				<td><b>Tanggal Penilaian </b> <td>:</td><td> <?php echo $hasil['tgl_penilaian'];?></td>
			</tr>
		</table>
	</center>
	<br><br><hr>
	<center>
		<table class="table">
						<tr class="info" align="center">
							<td width="30px"><font color="red"><b>No</b></font></td>
							<td width="750px"><font color="red"><b>Indikator Nilai Karakter</b></font></td>
							<td width="30px">&nbsp;</td>
							<td width="100px" align="center"><font color="red"><b>Nilai</b></font></td>
						</tr>
						<?php
							$no=1;
							$angka=0;
							$i=1;
							
							$result3 = mysqli_query($conn, "SELECT * FROM tbl_indikator_nikar");
							
							$query1 = mysqli_query($conn, "SELECT * FROM tbl_nikar, tbl_ortu, tbl_siswa
											 WHERE tbl_nikar.id_siswa= tbl_ortu.id_siswa
											 AND tbl_nikar.sesi_penilaian = '$sesi_penilaian' 
											 AND tbl_ortu.id_siswa='$nis'");
							
							while($rerow1 = mysqli_fetch_assoc($query1)){
								while($rerow3 = mysqli_fetch_assoc($result3)){
						?>
									<tr>
										<td width="30px" align="center"><font color="orange"><?=$no++;?></font></td>							
										<td width="750px"><?=$rerow3['ket_indikator'];?></td>
										<td width="30px">&nbsp;</td>
										<td width="100px" align="center">
											<font color="blue"><strong><?php 
												echo $rerow1['nilai'.$i]; 
											?></strong></font>
										</td>
									</tr>
									<!-- <tr><td><?php //echo $angka?></td></tr> -->
									<?php
										$angka+=1;		
										$i++;								
									}
									?>
									
									
						<?php } ?>
						</table>
	</center>

<hr width="100%">



  <script>
	window.load = print_d();
	function print_d(){
		window.print();
	}
  </script>
</body>  
</html>
