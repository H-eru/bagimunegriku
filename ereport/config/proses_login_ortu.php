<?php
include "../config/koneksi.php";

session_start();
$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($conn, "SELECT * FROM tbl_ortu WHERE username='$username' AND password='$password' AND level='Ortu'");
$cek = mysqli_num_rows($login);
$row = mysqli_fetch_assoc($login);

$_SESSION['username']=$username;
$_SESSION['password']=$password;

if($cek==0){
	echo"<script>alert('Username atau Password SALAH!! Mohon periksa dan inputkan data yang benar!');
		window.location='../index.php';</script>";
	}else{
		header('location: ../ortu/home.php');
	}
?>