<!DOCTYPE html>
<html lang="en">
	<?php include 'bag/head-masyarakat.php' ?>
<body>
	<?php include 'bag/menu.php' ?>
	<h2>FORM PENGADUAN</h2>
	<form action="crud/create.php" method="POST" enctype="multipart/form-data">
		<textarea name="isi_laporan" id="" cols="30" rows="10" placeholder="masukkan isi laporan anda" required></textarea>
		<br>
		<label>masukkan foto :</label>
		<input type="file" accept="image/*" name="foto-pengaduan" required="">
		<br>
		<br>
		<input type="submit" name="tambah-pengaduan" value="kirim">
	</form>
</body>
</html>
<!-- DEVELOPED BY KODE-MAN[MA'S IRFANI] : maksirfani.github.io -->