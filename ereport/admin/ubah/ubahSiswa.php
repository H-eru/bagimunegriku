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

						<img src="../../assets/images/avatars/user.jpg" alt="Jason's Photo" />
					</button>

					<button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
						<span class="sr-only">Toggle sidebar</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="navbar-buttons navbar-header pull-right  collapse navbar-collapse" role="navigation">
					
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
								<a href="#">
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
							<li class="hover">
								<a href="../tambah/tambahSiswa.php">
									<i class="menu-icon fa fa-plus purple"></i>
									Tambah Data
								</a>
							</li>

							<li class="active hover">
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
									Ubah Data Siswa
								</small>
							</h1>
						</div><!-- /.page-header -->

						<?php
							$id_siswa = $_GET['id_siswa'];
							$query 		= mysqli_query($conn, "SELECT * FROM tbl_siswa WHERE id_siswa='$id_siswa'");
							$row		= mysqli_fetch_assoc($query);
						?>
						
						
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="col-sm-9 widget-box widget-color-blue2">
											<div class="widget-header"> <h5 class="widget-title">Isikan Data Siswa dengan Teliti dan Benar</h5> </div>

											<form role="form" action="../update/update_siswa.php" method="POST" enctype="multipart/form-data" autocomplete="off">
												<div class="widget-body">
													<div class="widget-main padding-8">
														<div class="form-group has-info">
															<div class="col-xs-12 col-sm-5">
																<span class="block input-icon input-icon-right">
																	<input type="hidden" value="<?php echo $row['id_siswa']; ?>" name="id_siswa" readonly/>
																</span>
															</div>
															<div class="help-block col-xs-12 col-sm-reset inline"></div>
														</div>
														
														
													
														<div class="form-group has-info">
															<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Nama Siswa</label>

															<div class="col-xs-12 col-sm-5">
																<span class="block input-icon input-icon-right">
																	<input type="text" name="nama_siswa" value="<?php echo $row['nama_siswa']; ?>" class="width-100" required/>
																		<i class="ace-icon fa fa-check-circle"></i>
																</span>
															</div>
															<div class="help-block col-xs-12 col-sm-reset inline"></div>
														</div>
														
														<div>&nbsp;</div>
														
														<div class="form-group has-info">
															<label for="inputInfo"  class="col-xs-12 col-sm-3 control-label no-padding-right">Jenis Kelamin</label>
															
															<div class="col-xs-12 col-sm-5">
																<select name="jk_siswa" class="form-control" required/>
																	<option value="<?php echo $row['jk_siswa']; ?>">
																		<?php 
																			if($row['jk_siswa']=="L"){
																				echo "Laki-Laki";
																			}else{
																				echo "Perempuan";
																			};
																		?>
																	</option>
																	<option value="L">Laki-Laki</option>
																	<option value="P">Perempuan</option>
																</select>
															</div>
															<div class="help-block col-xs-12 col-sm-reset inline"></div>
														</div>
														
														<div>&nbsp;</div>
														
														<div class="form-group has-info">
															<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Kelas</label>

															<div class="col-xs-12 col-sm-5">
																<select name="kelas_siswa" class="form-control" required/>
																	<option><?php echo $row['kelas_siswa'];?></option>
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
														
														<div>&nbsp;</div>
														
														<div class="form-group has-info">
															<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Telepon / WA</label>

															<div class="col-xs-12 col-sm-5">
																<span class="block input-icon input-icon-right">
																	<input type="text" value="<?php echo $row['telp_siswa']; ?>" name="telp_siswa" class="form-control" pattern="^\d{4}-\d{4}-\d{4}$" placeholder="XXXX-XXXX-XXXX" required/>
																		<i class="ace-icon fa fa-check-circle"></i>
																</span>
															</div>
															<div class="help-block col-xs-12 col-sm-reset inline"></div>
														</div>
														
														<div>&nbsp;</div>
														
														<div class="form-group has-info">
															<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Agama</label>

															<div class="col-xs-12 col-sm-5">
																<select name="agama_siswa" class="form-control" required/>
																	<option value="<?php echo $row['agama_siswa'];?>"><?php echo $row['agama_siswa'];?></option>
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
														
														<div>&nbsp;</div>
														
																
														<div class="form-group has-info">
															<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Alamat Siswa</label>
															
															<div class="col-xs-12 col-sm-5">
																<span class="block input-icon input-icon-right">
																	<input type="text" value="<?php echo $row['alamat_siswa']; ?>" name="alamat_siswa" class="width-100" placeholder="Nama Jalan, RT / RW, Desa, Kec, Kota" required/>
																	<i class="ace-icon fa fa-check-circle"></i>
																<span>
															</div>
															<div class="help-block col-xs-12 col-sm-reset inline"></div>
														</div>	
														
														<div>&nbsp;</div>
														
													</div>
													
													
													<div class="widget-toolbox padding-8 clearfix">
														<center>
															<div class="btn-group">
																<button type="submit" class="btn btn-sm btn-purple">
																	<i class="ace-icon fa fa-floppy-o bigger-125"></i>
																	SIMPAN
																</button>
																<a href="../tabel/tabelDataSiswa.php" class="btn btn-sm btn-info" title="Back">KEMBALI</a>
															</div>
														</center>
													</div>
												</div>
											</form>
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
						<?php date_default_timezone_set("Asia/Jakarta"); echo date("l, d F Y | H:i"); ?>
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
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="../assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		
		<!-- ace scripts -->
		<script src="../assets/js/ace-elements.min.js"></script>
		<script src="../assets/js/ace.min.js"></script>

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
			
			$('.input-mask-date').mask('(999) 999-9999');
			
			//});
			
			
			/////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
			
			//jQuery(function($) {
			
				$('#simple-colorpicker-1').ace_colorpicker({pull_right:true}).on('change', function(){
					var color_class = $(this).find('option:selected').data('class');
					var new_class = 'widget-box';
					if(color_class != 'default')  new_class += ' widget-color-'+color_class;
					$(this).closest('.widget-box').attr('class', new_class);
				});
			
			
				// scrollables
				$('.scrollable').each(function () {
					var $this = $(this);
					$(this).ace_scroll({
						size: $this.attr('data-size') || 100,
						//styleClass: 'scroll-left scroll-margin scroll-thin scroll-dark scroll-light no-track scroll-visible'
					});
				});
				$('.scrollable-horizontal').each(function () {
					var $this = $(this);
					$(this).ace_scroll(
					  {
						horizontal: true,
						styleClass: 'scroll-top',//show the scrollbars on top(default is bottom)
						size: $this.attr('data-size') || 500,
						mouseWheelLock: true
					  }
					).css({'padding-top': 12});
				});
				
				$(window).on('resize.scroll_reset', function() {
					$('.scrollable-horizontal').ace_scroll('reset');
				});
			
				
				$('#id-checkbox-vertical').prop('checked', false).on('click', function() {
					$('#widget-toolbox-1').toggleClass('toolbox-vertical')
					.find('.btn-group').toggleClass('btn-group-vertical')
					.filter(':first').toggleClass('hidden')
					.parent().toggleClass('btn-toolbar')
				});
			
				/**
				//or use slimScroll plugin
				$('.slim-scrollable').each(function () {
					var $this = $(this);
					$this.slimScroll({
						height: $this.data('height') || 100,
						railVisible:true
					});
				});
				*/
				
			
				/**$('.widget-box').on('setting.ace.widget' , function(e) {
					e.preventDefault();
				});*/
			
				/**
				$('.widget-box').on('show.ace.widget', function(e) {
					//e.preventDefault();
					//this = the widget-box
				});
				$('.widget-box').on('reload.ace.widget', function(e) {
					//this = the widget-box
				});
				*/
			
				//$('#my-widget-box').widget_box('hide');
			
				
			
				// widget boxes
				// widget box drag & drop example
			    $('.widget-container-col').sortable({
			        connectWith: '.widget-container-col',
					items:'> .widget-box',
					handle: ace.vars['touch'] ? '.widget-title' : false,
					cancel: '.fullscreen',
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'widget-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					start: function(event, ui) {
						//when an element is moved, it's parent becomes empty with almost zero height.
						//we set a min-height for it to be large enough so that later we can easily drop elements back onto it
						ui.item.parent().css({'min-height':ui.item.height()})
						//ui.sender.css({'min-height':ui.item.height() , 'background-color' : '#F5F5F5'})
					},
					update: function(event, ui) {
						ui.item.parent({'min-height':''})
						//p.style.removeProperty('background-color');
			
						
						//save widget positions
						var widget_order = {}
						$('.widget-container-col').each(function() {
							var container_id = $(this).attr('id');
							widget_order[container_id] = []
							
							
							$(this).find('> .widget-box').each(function() {
								var widget_id = $(this).attr('id');
								widget_order[container_id].push(widget_id);
								//now we know each container contains which widgets
							});
						});
						
						ace.data.set('demo', 'widget-order', widget_order, null, true);
					}
			    });
				
				
				///////////////////////
			
				//when a widget is shown/hidden/closed, we save its state for later retrieval
				$(document).on('shown.ace.widget hidden.ace.widget closed.ace.widget', '.widget-box', function(event) {
					var widgets = ace.data.get('demo', 'widget-state', true);
					if(widgets == null) widgets = {}
			
					var id = $(this).attr('id');
					widgets[id] = event.type;
					ace.data.set('demo', 'widget-state', widgets, null, true);
				});
			
			
				(function() {
					//restore widget order
					var container_list = ace.data.get('demo', 'widget-order', true);
					if(container_list) {
						for(var container_id in container_list) if(container_list.hasOwnProperty(container_id)) {
			
							var widgets_inside_container = container_list[container_id];
							if(widgets_inside_container.length == 0) continue;
							
							for(var i = 0; i < widgets_inside_container.length; i++) {
								var widget = widgets_inside_container[i];
								$('#'+widget).appendTo('#'+container_id);
							}
			
						}
					}
					
					
					//restore widget state
					var widgets = ace.data.get('demo', 'widget-state', true);
					if(widgets != null) {
						for(var id in widgets) if(widgets.hasOwnProperty(id)) {
							var state = widgets[id];
							var widget = $('#'+id);
							if
							(
								(state == 'shown' && widget.hasClass('collapsed'))
								||
								(state == 'hidden' && !widget.hasClass('collapsed'))
							) 
							{
								widget.widget_box('toggleFast');
							}
							else if(state == 'closed') {
								widget.widget_box('closeFast');
							}
						}
					}
					
					
					$('#main-widget-container').removeClass('invisible');
					
					
					//reset saved positions and states
					$('#reset-widgets').on('click', function() {
						ace.data.remove('demo', 'widget-state');
						ace.data.remove('demo', 'widget-order');
						document.location.reload();
					});
				
				})();
			
			});
		
			
			
		</script>
		
		
		
	</body>
</html>
<?php
}
?>