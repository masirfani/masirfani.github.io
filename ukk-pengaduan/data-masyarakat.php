<?php  
	include 'db/Koneksi.php';
	$host = new Koneksi();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>namamu siapa?</title>
</head>
<body>
	<?php include 'bag/menu.php' ?>
	<h2>DATA MASYARAKAT</h2>
	<table border="1">
		<thead>
			<th>no</th>
			<th>nik</th>
			<th>nama</th>
			<th>username</th>
			<th>password</th>
			<th>telp</th>
			<th>aksi</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			if (!is_array($host->lihat("masyarakat"))) {
				echo "<tr><td colspan='6'>data kosong</td></tr>";
			}else{
				foreach ($host->lihat("masyarakat") as $lihat){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $lihat['nik'] ?></td>
				<td><?php echo $lihat['nama'] ?></td>
				<td><?php echo $lihat['username'] ?></td>
				<td><?php echo $lihat['password'] ?></td>
				<td><?php echo $lihat['telp'] ?></td>
				<td>
					<a href="edit-masyarakat.php?id=<?php echo $lihat['nik'] ?>">edit</a>
					<a href="crud/delete.php?hapus_masyarakat=<?php echo $lihat['nik'] ?>" onclick="javascript : return confirm('Apakah anda yakin?')">delete</a>
				</td>
			</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>
</body>
</html>