<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['password'])){
	header("location: index.php");
}else{
	include "../config/koneksi.php";
	$user = $_SESSION['username'];
	$result = mysqli_query($conn, "SELECT * FROM tbl_pembina WHERE username='$user'");
	$level = mysqli_fetch_assoc($result);
	//$id_ortu 	= $_GET['id_ortu'];
	
?>


<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<link rel="icon" type="image/png" href="../assets/images/logo_bn.png">
		<title>eReport</title>

		<meta name="description" content="3 styles with inline editable feature" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="../assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="../assets/css/jquery.gritter.min.css" />
		<link rel="stylesheet" href="../assets/css/select2.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="../assets/css/bootstrap-editable.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="../assets/js/ace-extra.min.js"></script>

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
							eReport Pembina
						</small>
					</a>

					<button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
						<span class="sr-only">Toggle user menu</span>

						<img src="../assets/images/avatars/user.jpg" alt="Jason's Photo" />
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
								<img class="nav-user-photo" src="../pictures/<?php echo $level['foto_pembina']; ?>" />
								<span class="user-info">
									<small>Selamat Datang,</small>
									<?php echo $level['username'];?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="../pembina/profile.php">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="../config/proses_logout_pembina.php">
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

				<div class="sidebar-shortcuts active open" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active open hover">
						<a href="#">
							<i class="menu-icon fa fa-home"></i>
							<span class="menu-text"> Home </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file green"></i>
							<span class="menu-text">
								Nilai Akademik
							</span>
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="../pembina/tambah/tambahNiak.php">
									<i class="menu-icon fa fa-plus purple"></i>
									Tambah Data
								</a>
							</li>

							<li class="hover">
								<a href="../pembina/tabel/tabelDataNiak.php">
									<i class="menu-icon fa fa-eye pink"></i>
									Lihat Data
								</a>
							</li>
						</ul>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-user red"></i>
							<span class="menu-text"> Nilai Karakter </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="../pembina/tambah/tambahNikar.php">
									<i class="menu-icon fa fa-plus purple"></i>
									Tambah Data
								</a>
							</li>

							<li class="hover">
								<a href="../pembina/tabel/tabelDataNikar.php">
									<i class="menu-icon fa fa-eye pink"></i>
									Lihat Data
								</a>
							</li>
						</ul>
					</li>
					
					<li class="hover">
						<a href="#">
							<i class="menu-icon fa fa-pencil-square blue"></i>
							<span class="menu-text"> Pelanggaran </span>
						</a>

						<b class="arrow"></b>
						
						<ul class="submenu">
							<li class="hover">
								<a href="../pembina/tambah/tambahPelanggaranSiswa.php">
									<i class="menu-icon fa fa-plus purple"></i>
									Tambah Data
								</a>
							</li>

							<li class="hover">
								<a href="../pembina/tabel/tabelDataPelanggaranSiswa.php">
									<i class="menu-icon fa fa-eye pink"></i>
									Lihat Data
								</a>
							</li>
						</ul>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-book orange"></i>
							<span class="menu-text"> Catatan Khusus </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="../pembina/tambah/tambahCatKhusus.php">
									<i class="menu-icon fa fa-plus purple"></i>
									Tambah Data
								</a>
							</li>

							<li class="hover">
								<a href="../pembina/tabel/tabelDataCatKhusus.php">
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
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								Profil <?php echo $level['username'];?>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="clearfix">
									&nbsp;
								</div>

								<div class="hr dotted"></div>

								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Foto Profil" src="../pictures/<?php echo $level['foto_pembina']; ?>" />
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															<span class="white"><?php echo $level['username'];?></span>
														</a>

														
													</div>
												</div>
											</div>

											<div class="space-6"></div>

											<div class="profile-contact-info">
												

												<div class="space-6"></div>

												
											</div>

											<div class="hr hr12 dotted"></div>

											<div class="clearfix">
												
											</div>

											<div class="hr hr16 dotted"></div>
										</div>

										<div class="col-xs-12 col-sm-9">
											<div class="space-12"></div>

										
											<div class="form-group col-md-12 profile-user-info profile-user-info-striped">
											<form action="../pembina/update_pembina.php" method="POST" enctype="multipart/form-data" autocomplete="off">	
												<input type="hidden" name="id_pembina" value="<?php echo $level['id_pembina'];?>" readonly />
												
												
												<div class="col-sm-12">
													<div class="col-sm-3 profile-info-name"> Nama </div>

													<div class="col-sm-9 profile-info-value">
														<span id="nama"><?php echo $level['nama_pembina'];?></span>
													</div>
												</div>

												<div class="col-sm-12">
													<div class="col-sm-3 profile-info-name"> Username </div>

													<div class="col-sm-9 profile-info-value">
														<span><?php echo $level['username'];?></span>
													</div>
												</div>
												
												<div class="col-sm-12">
													<div class="col-sm-3 profile-info-name"> Password </div>

													<div class="col-sm-9 profile-info-value">
														<span class="editable"><?php echo $level['password'];?></span>
													</div>
												</div>
												
												<div class="col-sm-12">
													<div class="col-sm-3 profile-info-name"> Tentang Saya </div>

													<div class="col-sm-9 profile-info-value">
														<span class="editable" id="about">Ketikkan sesuatu mengenai diri Anda disini</span>
													</div>
												</div>
											
											
												<div class="col-sm-12">
													<div class="col-sm-3 profile-info-name">
														 Jenis Kelamin
													</div>
														
													<div class="col-sm-9">
														<select id="form-input-select" name="jk_pembina" class="col-sm-5" disabled />
															<option value="<?php echo $level['jk_pembina']; ?>">
																<?php 
																	if($level['jk_pembina']=="L"){
																		echo "Laki-Laki";
																	}else{
																		echo "Perempuan";
																		};
																?>
															</option>
															<option value="L">Laki-Laki</option>
															<option value="P">Perempuan</option>
														</select>
														<input type="hidden" name="jk_pembina" value="<?php echo $level['jk_pembina']; ?>">
														&emsp;
														<label class="middle">
															<input class="ace" type="checkbox" id="id-disable-select"/>
															<span class="lbl"> Centang untuk Ubah</span>
														</label>
													</div>
												</div>
												
												<div class="col-sm-12">
													<div class="col-sm-3 profile-info-name">
														 TTL
													</div>
														
													<div class="col-sm-9">
														<input type="date" name="ttl_pembina" value="<?php echo $level['ttl_pembina']; ?>">
													</div>
												</div>
												
												<div class="col-sm-12">
													<div class="col-sm-3 profile-info-name">
														 Telepon
													</div>
														
													<div class="col-sm-9">
														<input type="text" name="telp_pembina" class="col-xs-10 col-sm-5" value="<?php echo $level['telp_pembina'];?>" id="form-input-readonly" pattern="^\d{4}-\d{4}-\d{4}$" placeholder="XXXX-XXXX-XXXX" readonly />
														&emsp;
														<label class="middle">
															<input class="ace" type="checkbox" id="id-disable-check"/>
															<span class="lbl"> Centang untuk Ubah</span>
														</label>
													</div>
												</div>
												
												<div class="col-sm-12">&nbsp;</div>
												
												<div class="col-sm-12">
													<div class="col-sm-3 profile-info-name">
														 Alamat
													</div>
														
													<div class="col-sm-5">
														<textarea name="alamat_pembina" rows="3" placeholder="Nama Jalan, RT / RW, Desa, Kec, Kota" class="autosize-transition form-control" id="form-input-readonly-2" readonly /><?php echo $level['alamat_pembina'];?></textarea>
														
														<label class="middle">
															<input class="ace" type="checkbox" id="id-disable-check-2"/>
															<span class="lbl"> Centang untuk Ubah</span>
														</label>
													</div>
												</div>
												
												
												<div class="col-sm-12">
													<div class="col-sm-3 profile-info-name">
														 Foto
													</div>
														
													<div class="col-sm-9">
														<input type="file" name="foto_pembina" class="width-100">
														<input type="hidden" value="<?php echo $level['foto_pembina']; ?>" name="foto">
													</div>
												</div>
												
												<div class="profile-info-row">&nbsp;</div>
												
												<div class="form-group cols-md-12">
													<div class="col-md-6">&nbsp;</div>
													<div class="btn-group">
														<input type="submit" class="btn btn-md btn-info" value="OK">
													</div>
												</div>
											</form>	
											</div>

											<div class="profile-info-row">
												<div class="profile-info-value"><font color="red">Ingin melakukan pengubahan username??</font></div>
											</div>
											<form action="../pembina/update_username.php" method="POST" enctype="multipart/form-data" autocomplete="off">
												
												<input type="hidden" name="id_pembina" value="<?php echo $level['id_pembina'];?>" readonly />
												
												<div class="form-group has-success col-md-12">
													<label for="inputInfo"  class="col-sm-2 control-label no-padding-right">Username Baru</label>

													<div class="col-xs-12 col-sm-5">
														<span class="block input-icon input-icon-right">
															<input type="text" name="username_baru" class="width-100" required/>
																<i class="ace-icon fa fa-adjust"></i>
														</span>
													</div>
													<div class="btn-group">
														<input type="submit" class="btn btn-sm btn-success" value="OK">
													</div>
												</div>
												
											</form>
											
											
											
											<div class="space-20"></div>
											
											<div class="profile-info-row">
												<div class="profile-info-value"><font color="red">Ingin melakukan pengubahan password??</font></div>
											</div>
											<div class="profile-info-row">&nbsp;</div>
											
											<form action="../pembina/update_password.php" method="POST" enctype="multipart/form-data" autocomplete="off">
												
												<input type="hidden" name="id_pembina" value="<?php echo $level['id_pembina'];?>" readonly />
												
												<div class="form-group has-error col-md-12">
													<label for="inputInfo"  class="col-sm-2 control-label no-padding-right">Password Lama</label>

													<div class="col-xs-12 col-sm-5">
														<span class="block input-icon input-icon-right">
															<input type="password" name="pass_lama" class="width-100" required/>
																<i class="ace-icon fa fa-check-circle"></i>
														</span>
													</div>
												</div>
												
												<div class="form-group has-info col-md-12">
													<label for="inputInfo"  class="col-sm-2 control-label no-padding-right">Password Baru</label>

													<div class="col-xs-12 col-sm-5">
														<span class="block input-icon input-icon-right">
															<input type="password" name="pass_baru" class="width-100" required/>
																<i class="ace-icon fa fa-check-circle"></i>
														</span>
													</div>
												</div>
												
												<div class="form-group has-info col-md-12">
													<label for="inputInfo"  class="col-sm-2 control-label no-padding-right">Masukkan Ulang Password Baru</label>

													<div class="col-xs-12 col-sm-5">
														<span class="block input-icon input-icon-right">
															<input type="password" name="pass_baru_ulang" class="width-100" required/>
																<i class="ace-icon fa fa-check-square-o"></i>
														</span>
													</div>
												</div>
												
												
												<div class="form-group cols-md-12">
													<div class="col-xs-12 col-md-6"></div>
													<div class="btn-group">
														<input type="submit" class="btn btn-sm btn-info" value="OK">
													</div>
												</div>
												
												<div class="profile-info-row">
													<div class="profile-info-name"> &nbsp; </div>
												</div>
												
											</form>
											
											
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
							<span class="blue bolder">Ace</span>
							Application &copy; 2013-2014
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

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
		<script src="../assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="../assets/js/jquery-ui.custom.min.js"></script>
		<script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="../assets/js/jquery.gritter.min.js"></script>
		<script src="../assets/js/bootbox.js"></script>
		<script src="../assets/js/jquery.easypiechart.min.js"></script>
		<script src="../assets/js/bootstrap-datepicker.min.js"></script>
		<script src="../assets/js/jquery.hotkeys.index.min.js"></script>
		<script src="../assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="../assets/js/select2.min.js"></script>
		<script src="../assets/js/spinbox.min.js"></script>
		<script src="../assets/js/bootstrap-editable.min.js"></script>
		<script src="../assets/js/ace-editable.min.js"></script>
		<script src="../assets/js/jquery.maskedinput.min.js"></script>

		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('readonly')) {
						inp.setAttribute('enabled' , 'true');
						inp.removeAttribute('readonly');
					}
					else {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('enabled');
						
					}
				});
				
				$('#id-disable-check-2').on('click', function() {
					var inp = $('#form-input-readonly-2').get(0);
					if(inp.hasAttribute('readonly')) {
						inp.setAttribute('enabled' , 'true');
						inp.removeAttribute('readonly');
					}
					else {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('enabled');
						
					}
				});
				
			
				$('#id-disable-select').on('click', function() {
					var inp = $('#form-input-select').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('enabled' , 'true');
						inp.removeAttribute('disabled');
						
					}
					else {
						inp.setAttribute('disabled' , 'true');
						inp.removeAttribute('enabled');
						
					}
				});
			
				
				
			
			
				//editables on first profile page
				$.fn.editable.defaults.mode = 'inline';
				$.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
			    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
			                                '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';    
				
				//editables 
				
				//text editable
			    $('#username')
				.editable({
					type: 'text',
					name: 'username'		
			    });
			
			
				
				//select2 editable
				var countries = [];
			    $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
			        countries.push({id: k, text: v});
			    });
			
				var cities = [];
				cities["CA"] = [];
				$.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
					cities["CA"].push({id: v, text: v});
				});
				cities["IN"] = [];
				$.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
					cities["IN"].push({id: v, text: v});
				});
				cities["NL"] = [];
				$.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
					cities["NL"].push({id: v, text: v});
				});
				cities["TR"] = [];
				$.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
					cities["TR"].push({id: v, text: v});
				});
				cities["US"] = [];
				$.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
					cities["US"].push({id: v, text: v});
				});
				
				var currentValue = "NL";
			    $('#country').editable({
					type: 'select2',
					value : 'NL',
					//onblur:'ignore',
			        source: countries,
					select2: {
						'width': 140
					},		
					success: function(response, newValue) {
						if(currentValue == newValue) return;
						currentValue = newValue;
						
						var new_source = (!newValue || newValue == "") ? [] : cities[newValue];
						
						//the destroy method is causing errors in x-editable v1.4.6+
						//it worked fine in v1.4.5
						/**			
						$('#city').editable('destroy').editable({
							type: 'select2',
							source: new_source
						}).editable('setValue', null);
						*/
						
						//so we remove it altogether and create a new element
						var city = $('#city').removeAttr('id').get(0);
						$(city).clone().attr('id', 'city').text('Select City').editable({
							type: 'select2',
							value : null,
							//onblur:'ignore',
							source: new_source,
							select2: {
								'width': 140
							}
						}).insertAfter(city);//insert it after previous instance
						$(city).remove();//remove previous instance
						
					}
			    });
			
				$('#city').editable({
					type: 'select2',
					value : 'Amsterdam',
					//onblur:'ignore',
			        source: cities[currentValue],
					select2: {
						'width': 140
					}
			    });
			
			
				
				//custom date editable
				$('#signup').editable({
					type: 'adate',
					date: {
						//datepicker plugin options
						    format: 'yyyy/mm/dd',
						viewformat: 'yyyy/mm/dd',
						 weekStart: 1
						 
						//,nativeUI: true//if true and browser support input[type=date], native browser control will be used
						//,format: 'yyyy-mm-dd',
						//viewformat: 'yyyy-mm-dd'
					}
				})
			
			    $('#age').editable({
			        type: 'spinner',
					name : 'age',
					spinner : {
						min : 16,
						max : 99,
						step: 1,
						on_sides: true
						//,nativeUI: true//if true and browser support input[type=number], native browser control will be used
					}
				});
				
			
			    $('#login').editable({
			        type: 'slider',
					name : 'login',
					
					slider : {
						 min : 1,
						  max: 50,
						width: 100
						//,nativeUI: true//if true and browser support input[type=range], native browser control will be used
					},
					success: function(response, newValue) {
						if(parseInt(newValue) == 1)
							$(this).html(newValue + " hour ago");
						else $(this).html(newValue + " hours ago");
					}
				});
			
				$('#about').editable({
					mode: 'inline',
			        type: 'wysiwyg',
					name : 'about',
			
					wysiwyg : {
						//css : {'max-width':'300px'}
					},
					success: function(response, newValue) {
					}
				});
				
				
				
				// *** editable avatar *** //
				try {//ie8 throws some harmless exceptions, so let's catch'em
			
					//first let's add a fake appendChild method for Image element for browsers that have a problem with this
					//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
					try {
						document.createElement('IMG').appendChild(document.createElement('B'));
					} catch(e) {
						Image.prototype.appendChild = function(el){}
					}
			
					var last_gritter
					$('#avatar').editable({
						type: 'image',
						name: 'avatar',
						value: null,
						//onblur: 'ignore',  //don't reset or hide editable onblur?!
						image: {
							//specify ace file input plugin's options here
							btn_choose: 'Change Avatar',
							droppable: true,
							maxSize: 110000,//~100Kb
			
							//and a few extra ones here
							name: 'avatar',//put the field name here as well, will be used inside the custom plugin
							on_error : function(error_type) {//on_error function will be called when the selected file has a problem
								if(last_gritter) $.gritter.remove(last_gritter);
								if(error_type == 1) {//file format error
									last_gritter = $.gritter.add({
										title: 'File is not an image!',
										text: 'Please choose a jpg|gif|png image!',
										class_name: 'gritter-error gritter-center'
									});
								} else if(error_type == 2) {//file size rror
									last_gritter = $.gritter.add({
										title: 'File too big!',
										text: 'Image size should not exceed 100Kb!',
										class_name: 'gritter-error gritter-center'
									});
								}
								else {//other error
								}
							},
							on_success : function() {
								$.gritter.removeAll();
							}
						},
					    url: function(params) {
							// ***UPDATE AVATAR HERE*** //
							//for a working upload example you can replace the contents of this function with 
							//examples/profile-avatar-update.js
			
							var deferred = new $.Deferred
			
							var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
							if(!value || value.length == 0) {
								deferred.resolve();
								return deferred.promise();
							}
			
			
							//dummy upload
							setTimeout(function(){
								if("FileReader" in window) {
									//for browsers that have a thumbnail of selected image
									var thumb = $('#avatar').next().find('img').data('thumb');
									if(thumb) $('#avatar').get(0).src = thumb;
								}
								
								deferred.resolve({'status':'OK'});
			
								if(last_gritter) $.gritter.remove(last_gritter);
								last_gritter = $.gritter.add({
									title: 'Avatar Updated!',
									text: 'Uploading to server can be easily implemented. A working example is included with the template.',
									class_name: 'gritter-info gritter-center'
								});
								
							 } , parseInt(Math.random() * 800 + 800))
			
							return deferred.promise();
							
							// ***END OF UPDATE AVATAR HERE*** //
						},
						
						success: function(response, newValue) {
						}
					})
				}catch(e) {}
				
				/**
				//let's display edit mode by default?
				var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
				if(blank_image) {
					$('#avatar').editable('show').on('hidden', function(e, reason) {
						if(reason == 'onblur') {
							$('#avatar').editable('show');
							return;
						}
						$('#avatar').off('hidden');
					})
				}
				*/
			
				//another option is using modals
				$('#avatar2').on('click', function(){
					var modal = 
					'<div class="modal fade">\
					  <div class="modal-dialog">\
					   <div class="modal-content">\
						<div class="modal-header">\
							<button type="button" class="close" data-dismiss="modal">&times;</button>\
							<h4 class="blue">Change Avatar</h4>\
						</div>\
						\
						<form class="no-margin">\
						 <div class="modal-body">\
							<div class="space-4"></div>\
							<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
						 </div>\
						\
						 <div class="modal-footer center">\
							<button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
							<button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
						 </div>\
						</form>\
					  </div>\
					 </div>\
					</div>';
					
					
					var modal = $(modal);
					modal.modal("show").on("hidden", function(){
						modal.remove();
					});
			
					var working = false;
			
					var form = modal.find('form:eq(0)');
					var file = form.find('input[type=file]').eq(0);
					file.ace_file_input({
						style:'well',
						btn_choose:'Click to choose new avatar',
						btn_change:null,
						no_icon:'ace-icon fa fa-picture-o',
						thumbnail:'small',
						before_remove: function() {
							//don't remove/reset files while being uploaded
							return !working;
						},
						allowExt: ['jpg', 'jpeg', 'png', 'gif'],
						allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
					});
			
					form.on('submit', function(){
						if(!file.data('ace_input_files')) return false;
						
						file.ace_file_input('disable');
						form.find('button').attr('disabled', 'disabled');
						form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");
						
						var deferred = new $.Deferred;
						working = true;
						deferred.done(function() {
							form.find('button').removeAttr('disabled');
							form.find('input[type=file]').ace_file_input('enable');
							form.find('.modal-body > :last-child').remove();
							
							modal.modal("hide");
			
							var thumb = file.next().find('img').data('thumb');
							if(thumb) $('#avatar2').get(0).src = thumb;
			
							working = false;
						});
						
						
						setTimeout(function(){
							deferred.resolve();
						} , parseInt(Math.random() * 800 + 800));
			
						return false;
					});
							
				});
			
				
			
				//////////////////////////////
				$('#profile-feed-1').ace_scroll({
					height: '250px',
					mouseWheelLock: true,
					alwaysVisible : true
				});
			
				$('a[ data-original-title]').tooltip();
			
				$('.easy-pie-chart.percentage').each(function(){
				var barColor = $(this).data('color') || '#555';
				var trackColor = '#E2E2E2';
				var size = parseInt($(this).data('size')) || 72;
				$(this).easyPieChart({
					barColor: barColor,
					trackColor: trackColor,
					scaleColor: false,
					lineCap: 'butt',
					lineWidth: parseInt(size/10),
					animate:false,
					size: size
				}).css('color', barColor);
				});
			  
				///////////////////////////////////////////
			
				//right & left position
				//show the user info on right or left depending on its position
				$('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
					var $this = $(this);
					var $parent = $this.closest('.tab-pane');
			
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $this.offset();
					var w2 = $this.width();
			
					var place = 'left';
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
					
					$this.find('.popover').removeClass('right left').addClass(place);
				}).on('click', function(e) {
					e.preventDefault();
				});
			
			
				///////////////////////////////////////////
				$('#user-profile-3')
				.find('input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Change avatar',
					btn_change:null,
					no_icon:'ace-icon fa fa-picture-o',
					thumbnail:'large',
					droppable:true,
					
					allowExt: ['jpg', 'jpeg', 'png', 'gif'],
					allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
				})
				.end().find('button[type=reset]').on(ace.click_event, function(){
					$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
				})
				.end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				})
				$('.input-mask-phone').mask('(999) 999-9999');
			
				$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);
			
			
				////////////////////
				//change profile
				$('[data-toggle="buttons"] .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('.user-profile').parent().addClass('hide');
					$('#user-profile-'+which).parent().removeClass('hide');
				});
				
				
				
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					try {
						$('.editable').editable('destroy');
					} catch(e) {}
					$('[class*=select2]').remove();
				});
			});
		</script>
	</body>
</html>
<?php
}
?>