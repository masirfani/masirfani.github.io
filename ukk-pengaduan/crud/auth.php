<?php  
	include '../db/Koneksi.php';
	session_start();
	$host = new Koneksi();
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($host->cek_data("petugas", "username", $username)>0) {
			$lihat = $host->lihat_satu("petugas", "username", $username);
			if (password_verify($password, $lihat['password'])) {
				$_SESSION['nama_petugas'] = $lihat['nama_petugas'];
				$_SESSION['username'] = $lihat['username'];
				$_SESSION['password'] = $password;
				$_SESSION['telp'] = $lihat['telp'];
				$_SESSION['level'] = $lihat['level'];
				$host->kembali("index.php");
			}else{
				$host->pesan("password salah");
				// $host->kembali("login.php");
			}
		}elseif ($host->cek_data("masyarakat", "username", $username) > 0) {
			$lihat = $host->lihat_satu("masyarakat", "username", $username);
			if (password_verify($password, $lihat['password'])) {
				$_SESSION['nama'] = $lihat['nama'];
				$_SESSION['username'] = $lihat['username'];
				$_SESSION['password'] = $password;
				$_SESSION['telp'] = $lihat['telp'];
				$_SESSION['level'] = "masyarakat";
				$host->kembali("index.php");
			}else{
				$host->pesan("password salah");
				$host->kembali("login.php");
			}
		}else{
			$host->pesan("username salah");
			$host->kembali("login.php");
		}
	}elseif(isset($_GET['logout'])){
		session_destroy();
		$_SESSION['level'] = "";
		$host->kembali("login.php");
	}
?>
<!-- DEVELOPED BY KODE-MAN[MA'S IRFANI] : maksirfani.github.io -->