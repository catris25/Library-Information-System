
<?php
	include ("cek.php");
?>

<!DOCTYPE html>
<html>
<head>
	
	<!-- This program is created to fulfill RPL class Jurusan Informatika FMIPA UNS	2015
	done by
	Fembi Rekrisna G. P. (M015019)
	Lia Ristiana (M0513027)
	Shafira Audreyna (M0513042) -->

	<title>UNSLA - Homepage</title>
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="jquery/jquery-1.11.2.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>

	<style type="text/css">

		/*to make the background image responsive and cover the page*/
		body{
			background-size: cover;
		}
	</style>

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
	        <li class="active"><a href="">Home</a></li>
	        <li><a href="search.php">Daftar Buku</a></li>
	        <li><a href="about.php">About</a></li>

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
		<div class="jumbotron">
			<img src="img/logo_uns.png" height="200px">
			<h1 class="page-header">WELCOME to UNSLA</h1>
			<p>UNSLA atau <strong>UNS Library Automation</strong> adalah layanan perpustakaan pusat Universitas Sebelas Maret
			yang ditujukan untuk melayani civitas akademika UNS.</p>
			<p>Untuk melakukan registrasi keanggotaan dan peminjaman serta pengembalian buku, kunjungi perpustakaan kami pada 
			hari kerja. Pencarian buku dapat dilakukan di bawah ini.</p>
		</div>

		<!-- form pencarian buku -->
		<div class="well well-lg text-center">
			<h2 class="text-info">Pencarian Buku</h2>

			<form role="form" action="search.php" class="form-horizontal" method="GET">
				
				<select name="category">
					<option value="judul">Judul buku</option>
					<option value="pengarang">Pengarang</option>
					<option value="penerbit">Penerbit</option>
					<option value="subyek">Subyek</option>
					<option value="thn_terbit">Tahun terbit</option>
					<option value="isbn">ISBN</option>
				</select>

				<input type="text" placeholder="Masukkan kata kunci" name="keyword" required>
				<input type="submit" name="search" value="cari" class="btn btn-info">
					
			</form>
			
		</div>
	</div>
</body>
</html>
