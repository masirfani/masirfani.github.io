<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>diaku</title>
</head>
<body>
	<?php include 'bag/menu.php'; ?>
	<h2>FORM TANGGAPAN PENGADUAN</h2>
	<?php  
		include 'db/Koneksi.php';
		$host = new Koneksi();
		$id_pengaduan = $_GET['id_pengaduan'];
		$lihat = $host->lihat_satu("pengaduan","id_pengaduan", $id_pengaduan);
	?>
	<p>isi pengaduan : <?php echo $lihat['isi_laporan'] ?></p>
	<p>foto pengaduan : <img src="assets/foto-pengaduan/<?php echo $lihat['foto'] ?>" alt="" width="100" height="100"></p>
	<form action="crud/create.php?id_pengaduan=<?php echo $id_pengaduan ?>" method="POST">
		<textarea name="tanggapan" id="" cols="30" rows="5" placeholder="masukkan tanggapan"></textarea>
		<br>
		<input type="submit" name="tambah-tanggapan" value="kirim tanggapan">
	</form>
</body>
</html>