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
			$kirim = $host->create("masyarakat",$data);
			if ($kirim) {
				$host->pesan("Berhasil Tambah Masyarakat");
				$host->kembali("login.php");
			}else{
				$host->pesan("Gagal Tambah Masyarakat");
				$host->kembali("tambah-masyarakat.php");
			}
		}else{
			$host->pesan("gagal tambah karena NIK SAMA");
			$host->kembali("tambah-masyarakat.php");
		}
	}elseif (isset($_POST['tambah-petugas'])) {
		$data[0] = NULL;
		$data[1] = $_POST['nama_petugas'];
		$data[2] = $_POST['username'];
		$data[3] = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$data[4] = $_POST['telp'];
		$data[5] = $_POST['level'];
		$kirim = $host->create("petugas", $data);
		if ($kirim) {
			$host->pesan("Berhasil Tambah Petugas");
			$host->kembali("data-petugas.php");
		}else{
			$host->pesan("Gagal Tambah Petugas");
			$host->kembali("tambah-petugas.php");
		}
	}elseif (isset($_POST['tambah-pengaduan'])) {
		$namaFile = $_FILES['foto-pengaduan']['name'];
		$file = $_FILES['foto-pengaduan']['tmp_name'];

		$data[0] = NULL;
		$data[1] = date('Y-m-d');
		$data[2] = "123";
		$data[3] = $_POST['isi_laporan'];
		$data[4] = $namaFile;
		$data[5] = "0";
		$kirim = $host->create("pengaduan", $data);
		$kirim = move_uploaded_file($file, "../assets/foto-pengaduan/".$namaFile);
		if ($kirim) {
			$host->pesan("Berhasil melakukan pengaduan");
			$host->kembali("data-pengaduan.php");
		}else{
			$host->pesan("Gagal melakukan pengaduan");
			$host->kembali("pengaduan.php");
		}
	}elseif(isset($_POST['tambah-tanggapan'])){
		$data[0] = "NULL";
		$data[1] = $_GET['id_pengaduan'];
		$data[2] = date('Y-m-d');
		$data[3] = $_POST['tanggapan'];
		$data[4] = 1;

		$ganti_status[0] = "status=selesai";

		$kirim = $host->create("tanggapan", $data);
		if ($kirim) {
			$edit = $host->edit("pengaduan", $ganti_status, "id_pengaduan", $data[1]);
			$host->pesan("Berhasil memberikan tanggapan");
			$host->kembali("data-pengaduan.php");
		}else{
			$host->pesan("Gagal memberikan tanggapan");
			$link = "tanggapan.php?id_pengaduan=".$data[1];
			$host->kembali($link);
		}
	}else{
		$host->kembali("index.php");
	}
?>
<!-- DEVELOPED BY KODE-MAN[MA'S IRFANI] : maksirfani.github.io -->