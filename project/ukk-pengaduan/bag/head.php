<?php  
	session_start();
	include 'db/Koneksi.php';
	$host = new Koneksi();
	if (empty($_SESSION['level'])) {
		$host->kembali("login.php");
	}
?>