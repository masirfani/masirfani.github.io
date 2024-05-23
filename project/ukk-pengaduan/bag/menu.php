
<h1 align="center" style="background-color: pink;color: white">SISTEM PENGADUAN MASYARAKAT</h1>
<link rel="stylesheet" href="assets/css/style.css">
<section class="menu">
	<ul style="list-style-type: none;margin: 0px;padding: 0px">
		<!-- menu admin -->
		<?php if (!empty($_SESSION['level'])) { ?>
			<?php if ($_SESSION['level'] == "admin") {?>
				<li><a href="index.php">home</a> |</li>
				<li><a href="data-petugas.php">data petugas</a> |</li>
				<li><a href="data-pengaduan.php">data pengaduan</a> |</li>
				<li><a href="data-tanggapan.php">data tanggapan</a> |</li>
				<li><a href="tambah-petugas.php">register petugas</a> |</li>
				<li><a href="report.php">generate laporan excel</a> |</li>
				<li><a href="report-pdf.php">generate laporan pdf</a> |</li>
				<?php if (empty($_SESSION['level'])){ ?>
				<li><a href="login.php">login</a> |</li>
				<?php }else{ ?>
				<li><a href="crud/auth.php?logout">logout</a> |</li>
				<?php } ?>
			<?php }elseif ($_SESSION['level'] == "petugas") {?>
				<?php if (empty($_SESSION['level'])){ ?>
				<li><a href="login.php">login</a> |</li>
				<?php }else{ ?>
				<li><a href="crud/auth.php?logout">logout</a> |</li>
				<?php } ?>
				<li><a href="data-pengaduan.php">data pengaduan</a> |</li>
			<?php }elseif ($_SESSION['level'] == "masyarakat") {?>
				<li><a href="pengaduan.php">pengaduan</a> |</li>
				<li><a href="pengaduan.php">pengaduan saya</a> |</li>
				<?php if (empty($_SESSION['level'])){ ?>
				<li><a href="login.php">login</a> |</li>
				<?php }else{ ?>
				<li><a href="crud/auth.php?logout">logout</a> |</li>
				<?php } ?>
			<?php }else{ ?>
				<li><a href="tambah-masyarakat.php">register masyarakat</a> |</li>
				<li><a href="tambah-petugas.php">register petugas</a> |</li>
			<?php } ?>
		<?php }else{ ?>
				<li><a href="login.php">login</a> |</li>
				<li><a href="tambah-masyarakat.php">register masyarakat</a> |</li>
		<?php } ?>
	</ul>
</section>