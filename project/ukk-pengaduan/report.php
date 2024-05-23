<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<style>
		body{
			font-family: sans-serif;
		}
	</style>
	<?php  
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Laporan pengaduan.xls");
	?>
	<center>DATA PENGADUAN</center>
	<table border="1">
		<thead>
			<th>No</th>
			<th>Nama Pengadu</th>
			<th>Isi Pengaduan</th>
			<th>Foto Pengaduan</th>
			<th>Tanggal Pengaduan</th>
			<th>Nama Petugas</th>
			<th>Tanggapan</th>
			<th>Tanggal Tanggapan</th>
		</thead>
		<tbody>
			<?php  
				include 'db/koneksi.php';
				$host = new Koneksi();
				$data = $host->host->query("
					SELECT * FROM petugas INNER JOIN tanggapan
					ON petugas.id_petugas = tanggapan.id_petugas
					INNER JOIN pengaduan ON tanggapan.id_pengaduan = pengaduan.id_pengaduan
					INNER JOIN masyarakat ON pengaduan.nik = masyarakat.nik
					");
				$no = 1;
				if (mysqli_num_rows($data) == 0) {
				echo "<tr><td colspan='8'>data kosong</td></tr>";
				}else{
					while ($lihat = mysqli_fetch_assoc($data)){ 

			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $lihat['nama'] ?></td>
				<td><?php echo $lihat['isi_laporan'] ?></td>
				<td><?php echo $lihat['foto'] ?></td>
				<td><?php echo $lihat['tgl_pengaduan'] ?></td>
				<td><?php echo $lihat['nama_petugas'] ?></td>
				<td><?php echo $lihat['tanggapan'] ?></td>
				<td><?php echo $lihat['tgl_tanggapan'] ?></td>
			</tr>
			<?php 
					}
				} 
			?>
		</tbody>
	</table>
</body>
</html>