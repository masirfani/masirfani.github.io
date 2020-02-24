<!DOCTYPE html>
<html lang="en">
<?php include 'bag/petugas.php' ?>
<body>
	<?php include 'bag/menu.php' ?>
	<h2>DATA TANGGAPAN</h2>
	<table border="1">
		<thead>
			<th>no</th>
			<th>nama</th>
			<th>pengaduan</th>
			<th>foto pengaduan</th>
			<th>tanggal pengaduan</th>
			<th>petugas</th>
			<th>tanggal tanggapan</th>
			<th>tanggapan</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = $host->host->query("SELECT * FROM pengaduan INNER JOIN tanggapan ON pengaduan.id_pengaduan = tanggapan.id_pengaduan INNER JOIN petugas ON tanggapan.id_petugas = petugas.id_petugas INNER JOIN masyarakat ON pengaduan.nik = masyarakat.nik");
			if (mysqli_num_rows($data) == 0) {
				echo "<tr><td colspan='8'>data kosong</td></tr>";
			}else{
				while ($lihat = mysqli_fetch_assoc($data)){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $lihat['nama'] ?></td>
				<td><?php echo $lihat['isi_laporan'] ?></td>
				<td><img src="assets/foto-pengaduan/<?php echo $lihat['foto'] ?>" alt="" width="100" height="100"></td>
				<td><?php echo $lihat['tgl_pengaduan'] ?></td>
				<td><?php echo $lihat['nama_petugas'] ?></td>
				<td><?php echo $lihat['tgl_tanggapan'] ?></td>
				<td><?php echo $lihat['tanggapan'] ?></td>
			</tr>
			<?php
					}
				}
			?>
		</tbody>
	</table>
</body>
</html>