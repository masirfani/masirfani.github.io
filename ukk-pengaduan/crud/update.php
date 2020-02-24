<?php  
	include '../db/koneksi.php';
	$host = new Koneksi();
	if (isset($_POST['edit-masyarakat'])) {
		$id = $_GET['id'];
		$data[0] = "nik =".$_POST['nik'];
		$data[1] = "nama =".$_POST['nama'];
		$data[2] = "username =".$_POST['username'];
		$data[3] = "password =".password_hash($_POST['password'], PASSWORD_BCRYPT);
		$data[4] = "telp =".$_POST['telp'];
		$edit = $host->edit("masyarakat", $data, "nik", $id);
		if ($edit) {
			$host->pesan("Berhasil Edit Masyarakat");
			$host->kembali("data-masyarakat.php");
		}else{
			$host->pesan("Gagal Edit Masyarakat");
			$link = "edit-masyarakat.php?id=".$id;
			$host->kembali($link);
		}
	}elseif (isset($_POST['edit-petugas'])) {
		$id = $_GET['id'];
		$data[0] = "nama_petugas =".$_POST['nama_petugas'];
		$data[1] = "username =".$_POST['username'];
		$data[2] = "password =".password_hash($_POST['password'], PASSWORD_BCRYPT);
		$data[3] = "telp =".$_POST['telp'];
		$data[4] = "level =".$_POST['level'];
		$edit = $host->edit("petugas", $data, "id_petugas", $id);
		if ($edit) {
			$host->pesan("Berhasil Edit petugas");
			$host->kembali("data-petugas.php");
		}else{
			$host->pesan("Gagal Edit petugas");
			$link = "edit-petugas.php?id=".$id;
			$host->kembali($link);
		}
	}elseif (!empty($_GET['terima-pengaduan'])) {
		$id_pengaduan = $_GET['terima-pengaduan'];
		$data[0] = "status =proses";
		$edit = $host->edit("pengaduan", $data, "id_pengaduan", $id_pengaduan);
		if ($edit) {
			$host->pesan("Berhasil menerima pengaduan");
			$host->kembali("data-pengaduan.php");
		}else{
			$host->pesan("Gagal menerima pengaduan");
			$host->kembali("data-pengaduan.php");
		}
	}else{
		// $host->kembali("index.php");
	}
?>
<!-- DEVELOPED BY KODE-MAN[MA'S IRFANI] : maksirfani.github.io -->