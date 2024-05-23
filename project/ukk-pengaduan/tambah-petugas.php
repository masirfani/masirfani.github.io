<!DOCTYPE html>
<html lang="en">
	<?php include 'bag/head-admin.php'; ?>
<body>
	<?php include 'bag/menu.php'; ?>
	<h2>FORM TAMBAH PETUGAS</h2>
	<form action="crud/create.php" method="POST">
		<input required type="text" name="nama_petugas" placeholder="masukkan nama">
		<br>
		<input required type="text" name="username" placeholder="masukkan username">
		<br>
		<input required type="password" name="password" placeholder="masukkan password">
		<br>
		<input required type="number" name="telp" placeholder="masukkan telp">
		<br>
		<select name="level">
			<option disabled="">Pilih Level....</option>
			<option value="admin">admin</option>
			<option value="petugas">petugas</option>
		</select>
		<br>
		<input required type="submit" name="tambah-petugas">
	</form>
</body>
</html>