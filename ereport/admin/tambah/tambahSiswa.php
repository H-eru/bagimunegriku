<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['password'])){
	header("location: ../../admin/index.php");
}else{
	include "../../config/koneksi.php";
	$user = $_SESSION['username'];
	$result = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username='$user'");
	$level = mysqli_fetch_assoc($result);
	
?>

<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="../../assets/images/logo_bn.png">
		<title>eReport</title>

		<meta name="description" content="top menu &amp; navigation" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../../assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="../../assets/css/jquery-ui.custom.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="../../assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="../../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../../assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../../assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							eReport Admin
						</small>
					</a>

					<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
						<span class="sr-only">Toggle user menu</span>

						<img src="../../assets/images/avatars/avatar2.png" />
					</button>

					<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
						<span class="sr-only">Toggle sidebar</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
					<ul class="nav ace-nav">
						
						<li class="light-blue dropdown-modal user-min">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="../../assets/images/avatars/avatar2.png" />
								<span class="user-info">
									<small>Selamat Datang,</small>
									<?php echo $level['username'];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								
								<li>
									<a href="../profile.php">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="../../config/proses_logout_admin.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="hover">
						<a href="../home.php">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> Home </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user green"></i>
							<span class="menu-text">
								Pembina
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="../tambah/tambahPembina.php">
									<i class="menu-icon fa fa-plus purple"></i>
									Tambah Data
								</a>
							</li>

							<li class="hover">
								<a href="../tabel/tabelDataPembina.php">
									<i class="menu-icon fa fa-eye pink"></i>
									Lihat Data
								</a>
							</li>
						</ul>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user red"></i>
							<span class="menu-text"> Orang Tua / Wali </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="../tambah/tambahOrtu.php">
									<i class="menu-icon fa fa-plus purple"></i>
									Tambah Data
								</a>
							</li>

							<li class="hover">
								<a href="../tabel/tabelDataOrtu.php">
									<i class="menu-icon fa fa-eye pink"></i>
									Lihat Data
								</a>
							</li>
						</ul>
					</li>
					
					<li class="active open hover">
						<a href="#">
							<i class="menu-icon fa fa-users blue"></i>
							<span class="menu-text"> Siswa </span>
						</a>

						<b class="arrow"></b>
						
						<ul class="submenu">
							<li class="active open hover">
								<a href="#">
									<i class="menu-icon fa fa-plus purple"></i>
									Tambah Data
								</a>
							</li>

							<li class="hover">
								<a href="../tabel/tabelDataSiswa.php">
									<i class="menu-icon fa fa-eye pink"></i>
									Lihat Data
								</a>
							</li>
						</ul>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-book orange"></i>
							<span class="menu-text"> Mata Pelajaran </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="../tambah/tambahMapel.php">
									<i class="menu-icon fa fa-plus purple"></i>
									Tambah Data
								</a>
							</li>

							<li class="hover">
								<a href="../tabel/tabelDataMapel.php">
									<i class="menu-icon fa fa-eye pink"></i>
									Lihat Data
								</a>
							</li>
						</ul>
					</li>
					
					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-bookmark-o brown"></i>
							<span class="menu-text"> Indikator NiKar </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="../tambah/tambahIndikator.php">
									<i class="menu-icon fa fa-plus purple"></i>
									Tambah Data
								</a>
							</li>

							<li class="hover">
								<a href="../tabel/tabelDataIndikator.php">
									<i class="menu-icon fa fa-eye pink"></i>
									Lihat Data
								</a>
							</li>
						</ul>
					</li>

					

					<li class="hover">
						<a href="#">
							<i class="menu-icon fa fa-gavel pink"></i>

							<span class="menu-text">
								Indikator Pelanggaran
							</span>
						</a>

						<b class="arrow"></b>
						
						<ul class="submenu">
							<li class="hover">
								<a href="../tambah/tambahIndikatorPelanggaran.php">
									<i class="menu-icon fa fa-plus purple"></i>
									Tambah Data
								</a>
							</li>

							<li class="hover">
								<a href="../tabel/tabelIndikatorPelanggaran.php">
									<i class="menu-icon fa fa-eye pink"></i>
									Lihat Data
								</a>
							</li>
						</ul>
					</li>

					<li class="hover">
						<a href="#">
							<i class="menu-icon fa fa-desktop green"></i>
							<span class="menu-text"> Kop / Header </span>
						</a>

						<b class="arrow"></b>
						
						<ul class="submenu">
							<li class="hover">
								<a href="../tambah/tambahKop.php">
									<i class="menu-icon fa fa-plus purple"></i>
									Tambah Data
								</a>
							</li>

							<li class="hover">
								<a href="../tabel/tabelDataKop.php">
									<i class="menu-icon fa fa-eye pink"></i>
									Lihat Data
								</a>
							</li>
						</ul>
					</li>
					
				</ul><!-- /.nav-list -->
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="page-content">
						<div class="page-header">
							<h1>
								Home
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									Tambah Data Siswa
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="space"></div>
								<div class="col-sm-8">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
												<li class="active">
													<a data-toggle="tab" href="#input1">Input dengan Form</a>
												</li>

												<li>
													<a data-toggle="tab" href="#input2">Upload File Excel (.xls)</a>
												</li>
											</ul>

											<div class="tab-content">
												<div id="input1" class="tab-pane in active">
						
													<form role="form" action="../input/input_siswa.php" method="POST" enctype="multipart/form-data" autocomplete="off">
														<div class="widget-body">
															<div class="widget-main padding-20">
																<div class="form-group has-info">
																	<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">NIS</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right">
																			<input type="text" name="id_siswa" class="width-100" required/>
																				<i class="ace-icon fa fa-check-circle"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline"></div>
																</div>
															
															
																<div class="form-group has-info">
																	<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Nama</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right">
																			<input type="text" name="nama_siswa" class="width-100" required/>
																				<i class="ace-icon fa fa-check-circle"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline"></div>
																</div>
																
																<div class="col-sm-12"></div>
																
																<div class="form-group has-info">
																	<label for="inputInfo"  class="col-xs-12 col-sm-3 control-label no-padding-right">Jenis Kelamin</label>
																	
																	<div class="col-xs-12 col-sm-5">
																		<select name="jk_siswa" class="form-control" required/>
																			<option value="L">Laki-Laki</option>
																			<option value="P">Perempuan</option>
																		</select>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline"></div>
																</div>
																
																<div class="col-sm-12"></div>
																
																<div class="form-group has-info">
																	<label for="inputInfo"  class="col-xs-12 col-sm-3 control-label no-padding-right">Kelas</label>
																	
																	<div class="col-xs-12 col-sm-5">
																		<select name="kelas_siswa" class="form-control" required/>
																			<?php
																				$kelas=mysqli_query($conn,"select * from tbl_kelas");
																				while($x=mysqli_fetch_assoc($kelas)){
																					echo"<option>$x[nama_kelas]</option>";
																				}
																			?>
																		</select>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline"></div>
																</div>
																
																<div class="col-sm-12"></div>
																
																<div class="form-group has-info">
																	<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Telepon / WA</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right">
																			<input type="text" name="telp_siswa" class="form-control" pattern="^\d{4}-\d{4}-\d{4}$" placeholder="XXXX-XXXX-XXXX" required/>
																				<i class="ace-icon fa fa-check-circle"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline"></div>
																</div>
																
																<div class="col-sm-12"></div>
																
																<div class="form-group has-info">
																	<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Agama</label>

																	<div class="col-xs-12 col-sm-5">
																		<select name="agama_siswa" class="form-control" required/>
																			<option value="Islam">Islam</option>
																			<option value="Kristen">Kristen</option>
																			<option value="Katholik">Katholik</option>
																			<option value="Hindu">Hindu</option>
																			<option value="Budha">Budha</option>
																			<option value="Konghucu">Konghucu</option>
																		</select>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline"></div>
																</div>
																
																<div class="col-sm-12"></div>
																		
																<div class="form-group has-info">
																	<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Alamat</label>

																	<div class="col-xs-12 col-sm-5">
																		<textarea class="form-control" name="alamat_siswa" rows="3" placeholder="Nama Jalan, RT / RW, Desa, Kec, Kota" class="autosize-transition form-control" required/></textarea>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline"></div>
																</div>
																
																<div class="col-sm-12"></div>
																														
																<!-- <div class="form-group has-info">
																	<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Foto</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="">
																			<input type="file" name="foto_siswa" class="width-100" required/>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline"></div>
																</div>
																<div class="col-sm-12"></div>-->
															</div>
															
															<div class="space"></div>
															
															<div class="widget-toolbox padding-4 clearfix">
																<center>
																	<div class="btn-group">
																		<button type="submit" class="btn btn-purple">
																			<i class="ace-icon fa fa-floppy-o bigger-125"></i>
																			Simpan
																		</button>
																	</div>
																</center>
															</div>
														</div>
													</form>
												</div>
													
												<!--- ---------------------------------------------------------------------------- -->	
													
												<div id="input2" class="tab-pane">
													<form role="form" onSubmit="return validateForm()" action="../tambah/tambahSiswa.php" method="POST" enctype="multipart/form-data">
														<div class="widget-body">
															<div class="widget-main padding-20">
																<div class="form-group has-info">
																	<label for="inputInfo"  class="col-xs-12 col-sm-3 control-label no-padding-right">Kelas</label>
																	
																	<div class="col-xs-12 col-sm-5">
																		<select name="kelas_siswa" class="form-control" required/>
																			<?php
																				$kelas=mysqli_query($conn,"select * from tbl_kelas");
																				while($x=mysqli_fetch_assoc($kelas)){
																					echo"<option>$x[nama_kelas]</option>";
																				}
																			?>
																		</select>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline"></div>
																</div>
																
																<div class="space"></div>
																
																<div class="form-group has-info">
																	<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Upload File Data Siswa <font color="purple"><b>(.xls)</b></font></label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="">
																			<input type="file" name="filesiswa" id="filesiswa" class="width-100" required/>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline"></div>
																</div>
																
															</div>
																
																
																	<div class="padding-8">
																		<center>
																			<div class="btn-group">
																				<input type="submit" name="submit" value="OK" class="btn btn-primary">
																			</div>
																		</center>
																	</div>
																	<hr>
																	<h6><font color="purple">(Isi dari File Excel berupa Tabel, dengan data sbb: NIS, Nama Siswa, Jenis_Kelamin, Telepon, Agama dan Alamat)</font></h6>
																	<font color="purple">Lihat <a href="../../pictures/contoh_tabel_siswa.png">gambar ini</a> sebagai contoh</font>
																	
																	<?php
																		//memanggil file excel_reader
																		require "../tambah/excel_reader.php";

																		//jika tombol import ditekan
																		if(isset($_POST['submit'])){

																			$target = basename($_FILES['filesiswa']['name']) ;
																			move_uploaded_file($_FILES['filesiswa']['tmp_name'], $target);
																			
																			$data = new Spreadsheet_Excel_Reader($_FILES['filesiswa']['name'],false);
																			
																			
																		//    menghitung jumlah baris file xls
																			$baris = $data->rowcount($sheet_index=0);
																			
																			
																		//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
																			for ($i=2; $i<=$baris; $i++)
																			{
																				
																		//       membaca data (kolom ke-1 sd terakhir)
																			  $id_siswa		= $data->val($i, 1);
																			  $nama_siswa	= $data->val($i, 2);
																			  $jk_siswa		= $data->val($i, 3);
																			  $telp_siswa	= $data->val($i, 4);
																			  $agama_siswa	= $data->val($i, 5);
																			  $alamat_siswa	= $data->val($i, 6);
																			  $kelas_siswa	= $_POST['kelas_siswa'];
																					
																		//      setelah data dibaca, masukkan ke tabel siswa sql
																			  $query = "INSERT into tbl_siswa(id_siswa,nama_siswa,jk_siswa,telp_siswa,agama_siswa,alamat_siswa,kelas_siswa,foto_siswa) 
																						values('$id_siswa','$nama_siswa','$jk_siswa','$telp_siswa','$agama_siswa','$alamat_siswa','$kelas_siswa','')";
																			  $hasil = mysqli_query($conn, $query);
																			}
																			
																			
																			
																			if(!$hasil){
																		//  	jika import gagal
																				//echo mysqli_error();
																				echo"<script>alert('Data GAGAL di-Import-kan');
																					window.location='../tambah/tambahSiswa.php';</script>";
																			  }else{
																		//      jika impor berhasil
																				echo"<script>alert('Data BERHASIL di-Import-kan');
																					window.location='../tabel/tabelDataSiswa.php';</script>";
																			}
																		}
																	?>
														
													</div>
												</div>
												</form>
											</div>
										</div>
									</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">BN</span>
							e-Report &copy; 2020
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="../../assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../../assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="../../assets/js/ace-elements.min.js"></script>
		<script src="../../assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 var $sidebar = $('.sidebar').eq(0);
			 if( !$sidebar.hasClass('h-sidebar') ) return;
			
			 $(document).on('settings.ace.top_menu' , function(ev, event_name, fixed) {
				if( event_name !== 'sidebar_fixed' ) return;
			
				var sidebar = $sidebar.get(0);
				var $window = $(window);
			
				//return if sidebar is not fixed or in mobile view mode
				var sidebar_vars = $sidebar.ace_sidebar('vars');
				if( !fixed || ( sidebar_vars['mobile_view'] || sidebar_vars['collapsible'] ) ) {
					$sidebar.removeClass('lower-highlight');
					//restore original, default marginTop
					sidebar.style.marginTop = '';
			
					$window.off('scroll.ace.top_menu')
					return;
				}
			
			
				 var done = false;
				 $window.on('scroll.ace.top_menu', function(e) {
			
					var scroll = $window.scrollTop();
					scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
					if (scroll > 17) scroll = 17;
			
			
					if (scroll > 16) {			
						if(!done) {
							$sidebar.addClass('lower-highlight');
							done = true;
						}
					}
					else {
						if(done) {
							$sidebar.removeClass('lower-highlight');
							done = false;
						}
					}
			
					sidebar.style['marginTop'] = (17-scroll)+'px';
				 }).triggerHandler('scroll.ace.top_menu');
			
			 }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			
			 $(window).on('resize.ace.top_menu', function() {
				$(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed' , $sidebar.hasClass('sidebar-fixed')]);
			 });
			
			
			});
		</script>
	</body>
</html>
<?php
}
?>