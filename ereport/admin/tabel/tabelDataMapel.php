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
					
					<li class="hover">
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

							<li class="hover">
								<a href="../tabel/tabelDataSiswa.php">
									<i class="menu-icon fa fa-eye pink"></i>
									Lihat Data
								</a>
							</li>
						</ul>
					</li>

					<li class="active open hover">
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

							<li class="active open hover">
								<a href="#">
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
									Tabel Data Mata Pelajaran
								</small>
							</h1>
						</div><!-- /.page-header -->
						
						
						<div class="row">
							<div class="col-xs-10">
								<!-- PAGE CONTENT BEGINS -->
								<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											<font size="4px">Data Mata Pelajaran</font>
										</div>
								
								<div>
											
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														
														<th class="center"><font size="3px">Nama Mata Pelajaran</font></th>
														<th class="center"><font size="3px">Jenis Mata Pelajaran</font></th>
														<th class="center"><font size="3px">Aksi Data</font></th>
																												
													</tr>
												</thead>

												<tbody>
												<?php
									
													$query = mysqli_query($conn, "SELECT * FROM tbl_mapel");
													while($rerow = mysqli_fetch_assoc($query)){
												?>
												<tr>
													<td width="50px" class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace" />
															<span class="lbl"></span>
														</label>
													</td>
															
													<td class="center" width="300px">
														<font size="3px"><?php echo $rerow['nama_mapel'];?></font>
													</td>
													<td class="center" width="200px">
														<font size="3px"><?php echo $rerow['jenis_mapel'];?></font>
													</td>
													<td class="center">
														<a class="btn btn-sm btn-success" href='../ubah/ubahMapel.php?id_mapel=<?php echo $rerow['id_mapel'];?>'>
														<i class="ace-icon fa fa-pencil bigger-120 align-top icon-on-right"></i> Ubah</a>
															
														<a class="btn btn-sm btn-danger" href='../hapus/deleteMapel.php?id_mapel=<?php echo $rerow['id_mapel'];?>' onClick='return konfrim()'>
														<i class="ace-icon fa fa-trash bigger-120 align-top icon-on-right"></i> Hapus</a>
													</td>
												</tr>

													
													<?php } ?>
												</tbody>
											</table>
											
										</div>

								<!-- PAGE CONTENT ENDS -->
							</div>
							
							<!-- /.col -->
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
		<script src="../../assets/js/jquery.dataTables.min.js"></script>
		<script src="../../assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="../../assets/js/dataTables.buttons.min.js"></script>
		<script src="../../assets/js/buttons.flash.min.js"></script>
		<script src="../../assets/js/buttons.html5.min.js"></script>
		<script src="../../assets/js/buttons.print.min.js"></script>
		<script src="../../assets/js/buttons.colVis.min.js"></script>
		<script src="../../assets/js/dataTables.select.min.js"></script>

		<!-- ace scripts -->
		<script src="../../assets/js/ace-elements.min.js"></script>
		<script src="../../assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			function konfrim(){
				var pesan;
				pesan = "Apakah Anda Yakin Akan Menghapus Data Ini?";
				var agree = confirm(pesan);
				if(agree)
					return true;
				else
					return false;
			}
		
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,/* Menandakan berapa bnyk kolom yang dpt ditampung di tabel, jumlahnya
														dapat diubah sesuai data yng ingin ditampilkan */
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
	</body>
</html>
<?php
}
?>