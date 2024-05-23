<?php 
	session_start();
	include 'db/Koneksi.php';
	$host = new Koneksi();
	if (empty($_SESSION['level'])) {
		$host->kembali("login.php");
	}else{
		if ($_SESSION['level'] != "admin") {
			$host->kembali("index.php");
		}
	}
?>
<head>
	<meta charset="UTF-8">
	<title>ADMIN</title>
</head>