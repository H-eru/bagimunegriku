<?php
	session_start();
	
	include "../config/koneksi.php";
	
	//$id_ortu = $_SESSION['id_ortu'];
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
	
	$ortu_query = mysqli_query($conn, "SELECT * FROM tbl_ortu WHERE tbl_ortu.id_siswa='$nis'");
	$ortu=mysqli_fetch_assoc($ortu_query);
	
	$kueri = mysqli_query($conn, "SELECT * FROM tbl_niak,tbl_ortu,tbl_siswa 
			WHERE tbl_niak.id_siswa=tbl_ortu.id_siswa AND tbl_ortu.id_siswa=tbl_siswa.id_siswa
			AND tbl_niak.id_siswa=tbl_siswa.id_siswa AND tbl_ortu.id_siswa='$nis'");
									
	$hasil = mysqli_fetch_assoc($kueri);
	
	
?>

	<h2 align="center">Hasil Belajar Siswa<br><?=$hasil['nama_siswa']?></h2>
	<center>
		<table width="90%">
			<tr>
				<td><b>Mata Pelajaran</b></td><td align="center">:</td><td><?=$hasil['mapel']?></td>
				<td><b>Jenis Nilai</b></td><td align="center">:</td><td><?=$hasil['jenis_nilai']?></td>
			</tr>
		</table>
	</center>
	<br><br>
	<center>
		<table border="1" width="100%" class="garistepi">
			<thead>
				<tr>
					<th class="center">
						<label>No</label>
					</th>
					<th class="center"><font size="3px">Tanggal</font></th>
					<th class="center"><font size="3px">Jenis Nilai</font></th>
					<th class="center"><font size="3px">Besar Nilai</font></th>
					<th class="center"><font size="3px">Keterangan</font></th>
				</tr>
            </thead>
            <tbody>			
			<?php 
				$jenis_nilai = $_GET['jenis_nilais'];
				$mapel		 = $_GET['mpl'];
				
				$query	 = mysqli_query($conn, "SELECT * FROM tbl_niak,tbl_ortu,tbl_siswa WHERE 
							tbl_niak.jenis_nilai='$jenis_nilai' AND tbl_niak.mapel='$mapel'
							AND tbl_niak.id_siswa ='$nis' AND tbl_ortu.id_siswa='$nis'
							AND tbl_siswa.id_siswa='$nis'");
													
				while($result = mysqli_fetch_assoc($query)){
			?>
				<tr>
					<td width="50px" class="center">
						<label><?php echo $no;?></label>
					</td>
					<td width="200px" class="center">
						<font size="3px">
						<?php 
							if($result['tgl_penilaian'] != NULL){
								echo date('d F Y', strtotime($result['tgl_penilaian']));
							} else {
								echo "-";
							}
						?>
						</font>
					</td>			
					<td width="300px" class="center">
						<font size="3px"><?php echo $result['jenis_nilai']." - ".$result['penilaian_ke'];?></font>
					</td>
					<td width="200px" class="center">
						<font size="3px"><?php echo $result['besar_nilai'];?></font>
					</td>
					<td width="200px" class="center">
						<font size="3px"><?php echo $result['ket_nilai'];?></font>
					</td>
					</tr>
					<?php $no++; }?>
			</tbody>
		</table>
	</center>
	<p align="right"></p>

<hr width="100%">



  <script>
	window.load = print_d();
	function print_d(){
		window.print();
	}
  </script>
</body>  
</html>
