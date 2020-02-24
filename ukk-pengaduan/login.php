<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>masuklah</title>
</head>
	<?php  
		include 'db/Koneksi.php';
		$host = new Koneksi();
		session_start();
		if (!empty($_SESSION['level'])) {
			$host->kembali("index.php");
		}
	?>
<body>
	<?php include 'bag/menu.php'; ?>
	<h2>FORM LOGIN</h2>
	<form action="crud/auth.php" method="POST">
		<input type="text" name="username" placeholder="masukkan username">
		<br>
		<input type="password" name="password" placeholder="masukkan password">
		<br>
		<input type="submit" name="login" value="login">
	</form>
</body>
</html>
<!-- DEVELOPED BY KODE-MAN[MA'S IRFANI] : maksirfani.github.io -->