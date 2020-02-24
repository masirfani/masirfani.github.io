<!DOCTYPE html>
<html lang="en">
	<?php include 'bag/petugas.php' ?>
<body>
	<?php include 'bag/menu.php' ?>
	<h2>DATA PENGADUAN</h2>
	<table border="1">
		<thead>
			<th>no</th>
			<th>tanggal pengaduan</th>
			<th>isi laporan</th>
			<th>foto</th>
			<th>status</th>
			<th>aksi</th>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			if (!is_array($host->lihat("pengaduan"))) {
				echo "<tr><td colspan='6'>data kosong</td></tr>";
			}else{
				foreach ($host->lihat("pengaduan") as $lihat){ ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $lihat['tgl_pengaduan'] ?></td>
				<td><?php echo $lihat['isi_laporan'] ?></td>
				<td><img src="assets/foto-pengaduan/<?php echo $lihat['foto'] ?>" alt="" width="100" height="100"></td>
				<td>
					<?php  
						if ($lihat['status'] == "0") {
							echo "dicek petugas";
						}else if ($lihat['status'] == "proses") {
							echo "diproses";
						}else{
							echo "selesai";
						}
					?>
				</td>
				<td>
					<?php if ($lihat['status'] == "0") {?>
						<a href="crud/update.php?terima-pengaduan=<?php echo $lihat['id_pengaduan'] ?>">terima pengaduan</a>
					<?php }elseif($lihat['status'] == "proses"){?>
							<a href="tanggapan.php?id_pengaduan=<?php echo $lihat['id_pengaduan'] ?>">beri tanggapan</a>
					<?php }else{ ?>
						selesai
					<?php } ?>
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