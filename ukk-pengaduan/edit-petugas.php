<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tahta renata</title>
</head>
<body>
	<?php include 'bag/menu.php'; ?>
	<h2>FORM EDIT PETUGAS</h2>
	<?php  
		include 'db/Koneksi.php';
		$host = new Koneksi();
		$id_petugas = $_GET['id'];
		$lihat = $host->lihat_satu("petugas","id_petugas", $id_petugas);
	?>	
	<form action="crud/update.php?id=<?php echo $lihat['id_petugas'] ?>" method="POST">
		<input required type="text" name="nama_petugas" placeholder="masukkan nama" value="<?php echo $lihat['nama_petugas'] ?>">
		<br>
		<input required type="text" name="username" placeholder="masukkan username" value="<?php echo $lihat['username'] ?>">
		<br>
		<input required type="password" name="password" placeholder="masukkan password ulang">
		<br>
		<input required type="number" name="telp" placeholder="masukkan telp" value="<?php echo $lihat['telp'] ?>">
		<br>
		<select name="level">
			<option disabled="">Pilih Level....</option>
			<option value="admin" <?php ($lihat['level'] == "admin")? "selected" :"" ?>>admin</option>
			<option value="petugas" <?php ($lihat['level'] == "petugas")? "selected":"" ?>>petugas</option>
		</select>
		<br>
		<input type="submit" name="edit-petugas">
	</form>
</body>
</html>