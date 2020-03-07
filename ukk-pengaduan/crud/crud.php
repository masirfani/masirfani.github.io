<?php  
	include '../db/Koneksi.php';
	$host = new Koneksi();
	if (isset($_POST['tambah-masyarakat'])) {
		$data[0] = $_POST['nik'];
		$data[1] = $_POST['nama'];
		$data[2] = $_POST['username'];
		$data[3] = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$data[4] = $_POST['telp'];
		if ($host->cek_data("masyarakat", "nik", $data[0]) == 0) {
			$kirim = $host->tambah($data,"masyarakat");
			if ($kirim) {
				$host->pesan("Berhasil Tambah Masyarakat");
				$host->kembali("index.php");
			}else{
				$host->pesan("Gagal Tambah Masyarakat");
				$host->kembali("tambah-masyarakat.php");
			}
		}else{
			$host->pesan("gagal tambah karena NIK SAMA");
			$host->kembali("tambah-masyarakat.php");
		}
	}
?>