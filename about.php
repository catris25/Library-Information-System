<?php
	include ("cek.php");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="jquery/jquery-1.11.2.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>

	<style type="text/css">

		/*to make the background image responsive and cover the page*/
		body{
			background-size: cover;
		}
	</style>

	<title>About Page</title>

</head>
<body background="img/bg_lib.jpg">
	<!-- navigation bar -->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">UNS Library Automation</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li><a href="index.php">Home</a></li>
	        <li><a href="search.php">Daftar Buku</a></li>
	        <li class="active"><a href="">About</a></li>

	      </ul>
		  <ul class="nav navbar-nav navbar-right">

			<a href="login-page.php">
				<button type="button" class="btn btn-primary btn-md">
				<span class="glyphicon glyphicon-log-in"></span> Login Admin
				</button>
			</a>
		  
	     </ul>
	    </div>
	  </div>
	</nav>


	<div class="container">
		<!-- body text -->
		<div class="jumbotron" style="background: white">
	
			<h1 class="page-header">About Us</h1>
			<p>UNSLA adalah sistem informasi Perpustakaan yang terintegrasi, meliputi katalog buku secara online dan inventori perpustakaan 
			milik Universitas Sebelas Maret Surakarta (UNS). Salah satu tujuan didirikannya UNSLA adalah untuk memenuhi kebutuhan akademis para civitas akademika UNS
			berupa buku-buku referensi ilmiah yang diperlukan guna menunjang studi mereka di universitas.</p>
			<p><b>Alamat kami:</b>
			<br>UPT Perpustakaan Universitas Sebelas Maret
			<br>Jln. Ir. Sutami 36 A Kentingan Jebres Surakarta 57126 Indonesia
			<br>Telp / Faks : + 62 0271 654311
			<br>e-mail : pustaka@uns.ac.id></p>
			<br>
			<div class="alert alert-warning">
			<p><strong>DISCLAIMER : </strong></p>
			<p>Aplikasi web ini <strong>bukan situs sebenarnya</strong>. Aplikasi ini dibuat oleh mahasiswa Jurusan Informatika FMIPA UNS untuk memenuhi 
			tugas mata kuliah Rekayasa Perangkat Lunak tahun 2015.</p>
			</div>
	
		</div>
	</div>
</body>
</html>