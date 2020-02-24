<!DOCTYPE html>
<html lang="en">
	<?php include 'bag/head-admin.php' ?>
<body>
	<?php include 'bag/menu.php' ?>
	<h2>DATA PETUGAS</h2>
	<table border="1">
		<thead>
			<th>no</th>
			<th>nama petugas</th>
			<th>username</th>
			<!-- <th>password</th> -->
			<th>telp</th>
			<th>level</th>
			<th>aksi</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			if (!is_array($host->lihat("petugas"))) {
				echo "<tr><td colspan='6'>data kosong</td></tr>";
			}else{
				foreach ($host->lihat('petugas') as $lihat){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $lihat['nama_petugas'] ?></td>
				<td><?php echo $lihat['username'] ?></td>
				<!-- <td><?php echo $lihat['password'] ?></td> -->
				<td><?php echo $lihat['telp'] ?></td>
				<td><?php echo $lihat['level'] ?></td>
				<td>
					<a href="edit-petugas.php?id=<?php echo $lihat['id_petugas'] ?>">edit</a>
					<a href="crud/delete.php?hapus_petugas=<?php echo $lihat['id_petugas'] ?>" onclick="javascript : return confirm('Apakah anda yakin?')">delete</a>
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
<!-- DEVELOPED BY KODE-MAN[MA'S IRFANI] : maksirfani.github.io -->