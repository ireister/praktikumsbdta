<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Halaman Sukses Login</title>
<div align='center'>
   Selamat datang cok, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
   <br></br>
   <a href="pegawai_admin.php">Ke Daftar Pegawai</a><br/><br/>
	<a href="penyewa_admin.php">Ke Daftar Penyewa </a><br/><br/>
	<a href="penyewaan_admin.php">Ke Menu Penyewaan</a><br/><br/>
	<a href="melayani_admin.php">Daftar Pelayanan</a><br/><br/>
	<a href="memesan_admin.php">Daftar Pemesanan</a><br/><br/>
</div>