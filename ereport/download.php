<?php	
if(isset($_GET['surat_plg'])){
	$file = "surat_pelanggaran/".$_GET['surat_plg'];
	
	if (file_exists($file)){
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename($file));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: private');
		header('Pragma: private');
		header('Content-Length: ' . filesize($file));
		ob_clean();
		flush();
		readfile($file);
		exit;

	} else {
		if($file == "Tidak Ada Surat Pelanggaran"){
			echo"<script>alert('Maaf, Proses Download Surat Pernyataan Gagal.');
			window.location='ortu/lihatPelanggaran.php';</script>";
		}else{
			echo"<script>alert('Maaf, Proses Download Surat Pernyataan Gagal.');
			window.location='ortu/lihatPelanggaran.php';</script>";
			
			//echo "file {$_GET['surat_plg']} sudah tidak ada.";
		}
		
	}
	
}
?>