<?php  
	/**
	 * 
	 */
	class Koneksi
	{
		var $host = "";
		var $view = "http://localhost/ukk-pengaduan/";
		function __construct()
		{
			$this->host = mysqli_connect("localhost","root","","ukk-pengaduan");
			if (mysqli_connect_errno()) {
				echo "gagal konek : ".mysqli_connect_errno();
			}
		}

		function lihat($table){
			$data = $this->host->query("SELECT * FROM $table");
			while ($lihat = mysqli_fetch_assoc($data)) {
				$hasil[] = $lihat;
			}
			if (!empty($hasil)) {
				return $hasil;
			}else{
				return NULL;
			}
		}

		function lihat_satu($table, $where, $id){
			$data = $this->host->query("SELECT * FROM $table WHERE $where = '$id'");
			$lihat = mysqli_fetch_assoc($data);
			return $lihat;
		}

		function cek_data($table, $where, $id){
			$data = mysqli_num_rows($this->host->query("SELECT * FROM $table WHERE $where = '$id' "));
			return $data;
		}

		function hitung_data($table){
			$data = mysqli_num_rows($this->host->query("SELECT * FROM $table"));
			return $data;
		}

		function create($table, $isi = array()){
			$Sisi = implode("','", $isi);
			$data = $this->host->query("INSERT INTO $table VALUES('$Sisi')");
			if ($data) {
				return TRUE;
			}else{
				return FALSE;
			}
		}

		function delete($id, $nama_id, $table){
			$data = $this->host->query("DELETE FROM $table WHERE $nama_id = '$id'");
			if ($data) {
				return TRUE;
			}else{
				return FALSE;
			}
		}

		function edit($table, $isi, $where, $id){
			$Sisi = implode("',", $isi);
			$pecah = explode("=",$Sisi);
			$tempel = implode("='",$pecah)."'";
			$data = $this->host->query("UPDATE $table SET $tempel WHERE $where = '$id'");
			if ($data) {
				return TRUE;
			}else{
				return FALSE;
			}
		}

		function pesan($pesan){
			?><script type="text/javascript">
				alert('<?php echo $pesan ?>');
			</script><?php
		}

		function kembali($link){
			?><script type="text/javascript"> 
				window.location = '<?php echo $this->view.$link ?>';
			</script><?php
		}
	}
?>
<!-- DEVELOPED BY KODE-MAN[MA'S IRFANI] : maksirfani.github.io -->