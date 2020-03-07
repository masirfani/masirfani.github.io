<?php  
	include '../db/koneksi.php';
	$host = new Koneksi();
	if (!empty($_GET['hapus_masyarakat'])) {
		$id = $_GET['hapus_masyarakat'];
		$hapus = $host->delete($id, "nik", "masyarakat");
		if ($hapus) {
			$host->pesan("Berhasil Hapus Masyarakat");
			$host->kembali("data-masyarakat.php.php");
		}else{
			$host->pesan("Gagal Hapus Masyarakat");
			$host->kembali("data-masyarakat.php.php");
		}
	}elseif (!empty($_GET['hapus_petugas'])) {
		$id = $_GET['hapus_petugas'];
		$hapus = $host->delete($id, "id_petugas", "petugas");
		if ($hapus) {
			$host->pesan("Berhasil Hapus Petugas");
			$host->kembali("data-petugas.php");
		}else{
			$host->pesan("Gagal Hapus Petugas");
			$host->kembali("data-petugas.php");
		}
	}
?>