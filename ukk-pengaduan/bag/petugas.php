<?php 
	include 'db/Koneksi.php';
	session_start();
	$host = new Koneksi();
	if (empty($_SESSION['level'])) {
		$host->kembali("login.php");
	}else{
		if ($_SESSION['level'] != "petugas" AND $_SESSION['level'] != "admin") {
			$host->kembali("index.php");
		}
	}
?>
<head>
	<meta charset="UTF-8">
	<title>namaku irfan</title>
</head>