<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>boleh kah?</title>
</head>
<body>
	<?php include 'bag/menu.php'; ?>
	<h2>FORM EDIT MASYARAKAT</h2>
	<?php  
		include 'db/koneksi.php';
		$host = new Koneksi;
		$id = $_GET['id'];
		$lihat = $host->lihat_satu("masyarakat", "nik", $id);
	?>
	<form action="crud/update.php?id=<?php echo $lihat['nik'] ?>" method="POST">
		<input required type="text" name="nik" placeholder="masukkan nik" value="<?php echo $lihat['nik'] ?>">
		<br>
		<input required type="text" name="nama" placeholder="masukkan nama" value="<?php echo $lihat['nama'] ?>">
		<br>
		<input required type="text" name="username" placeholder="masukkan username" value="<?php echo $lihat['username'] ?>">
		<br>
		<input required type="password" name="password" placeholder="masukkan password">
		<br>
		<input required type="number" name="telp" placeholder="masukkan telp" value="<?php echo $lihat['telp'] ?>">
		<br>
		<input required type="submit" name="edit-masyarakat">
	</form>
</body>
</html>
<!-- DEVELOPED BY KODE-MAN[MA'S IRFANI] : maksirfani.github.io -->