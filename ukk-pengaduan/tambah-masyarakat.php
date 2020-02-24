<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tambah kehidupan</title>
</head>
<body>
	<?php include 'bag/menu.php'; ?>
	<h2>FORM REGISTER MASYARAKAT</h2>
	<form action="crud/create.php" method="POST">
		<input type="text" name="nik" placeholder="masukkan nik">
		<br>
		<input type="text" name="nama" placeholder="masukkan nama">
		<br>
		<input type="text" name="username" placeholder="masukkan username">
		<br>
		<input type="password" name="password" placeholder="masukkan password">
		<br>
		<input type="number" name="telp" placeholder="masukkan telp">
		<br>
		<input type="submit" name="tambah-masyarakat">
	</form>
</body>
</html>