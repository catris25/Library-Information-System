<?php
	require "cekAdmin.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../jquery/jquery-1.11.2.min.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
	<title>Admin - Tambah Anggota</title>
</head>
<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">UNSLA Admin</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li><a href="index.php">Home</a></li>
	        <li class="dropdown">
	          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Peminjaman<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="tambah-peminjaman.php">Pinjam - Kembali</a></li>
	            <li><a href="daftar-peminjaman.php">Daftar Peminjaman</a></li>  
	          </ul>
	        </li>
	        <li class="dropdown active">
	       		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Anggota<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li class="active"><a href="tambah-anggota.php">Tambah Anggota</a></li>
	            <li><a href="daftar-anggota.php">Daftar Anggota</a></li>  
	          </ul>
	        </li> 
	        <li class="dropdown">
	        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Buku<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="tambah-buku.php">Tambah Buku</a></li>
	            <li><a href="daftar-buku.php">Daftar Buku</a></li> 
	          </ul>
	        </li> 
	      </ul>
	    	<ul class="nav navbar-nav navbar-right">
        		<li class="dropdown">
        			<a class="dropdown-toggle" data-toggle="dropdown">
        				<span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["username"]; ?> <span class="caret"></span>
        			</a> 
        			<ul class="dropdown-menu">
        				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
        			</ul>
        		</li>
        	</ul>	    	
	    </div>
	  </div>
	</nav>


	<div class="container">
		<div class="well well-md" id="notif">
			<!-- Message is show here -->
		</div>
		<div class="well well-lg">
			<h3>Tambah Anggota</h3>
			<h5 class="text-info">Petunjuk : Silahkan isi data dengan lengkap dan benar.</h5>
			<form role="form" class="form-horizontal" method="POST">

			  	<div class="form-group">
					<label for="nama">Nama lengkap :</label><br>
					<input type="text" maxlength="50" name="nama" placeholder="Nama lengkap" class="form-control" id="nama" required>
				</div>

				<div class="form-group">
					<label for="nim_nip">NIM/NIP :</label><br>
					<input type="text" maxlength="30" name="nim_nip" placeholder="NIM (untuk mahasiswa) / NIP (untuk pengajar)" class="form-control" id="nim_nip" required>
				</div>

				<div class="form-group">
					<label for="jenis_kelamin">Jenis kelamin :</label><br>
					<select name="jenis_kelamin">
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>

				<div class="form-group">
					<label for="pekerjaan">Pekerjaan :</label><br>
					<select name="pekerjaan">
						<option value="Mahasiswa">Mahasiswa</option>
						<option value="Pengajar">Pengajar</option>
						<option value="Lainnya">Lainnya</option>
					</select>
				</div>
				<div class="form-group">
					<label for="fakultas">Fakultas :</label><br>
					<select name="fakultas">
						<option value="F. Pertanian">F. Pertanian</option>
						<option value="F. Kedokteran">F. Kedokteran</option>
						<option value="F. MIPA">F. MIPA</option>
						<option value="F. Teknik">F. Teknik</option>
						<option value="F. Seni Rupa">F. Seni Rupa</option>
						<option value="F. Ilmu Budaya">F. Ilmu Budaya</option>
						<option value="F. Ekonomi dan Bisnis">F. Ekonomi dan Bisnis</option>
						<option value="F. Hukum">F. Hukum</option>
						<option value="FISIP">FISIP</option>
						<option value="FKIP">FKIP</option>
					</select>
				</div>

				<div class="form-group">
					<label for="jurusan">Jurusan :</label><br>
					<input type="text" maxlength="30" name="jurusan" placeholder="Jurusan" class="form-control" id="jurusan" required>
				</div>
				
				<input type="submit" class="btn btn-success" value="Submit" name="insertAnggota">
			
			</form>

		</div>
	</div>

</body>
</html>

<?php
	//first check if post insertAnggota has value
	if(isset($_POST['insertAnggota'])){
		//if it is, then proceed to the following
		$nama = $_POST["nama"];
		$nim_nip = $_POST["nim_nip"];
		$jenis_kelamin = $_POST["jenis_kelamin"];
		$jurusan = $_POST["jurusan"];
		$fakultas = $_POST["fakultas"];
		$pekerjaan = $_POST["pekerjaan"];

		$sql = "INSERT INTO anggota (nama, nim_nip, jenis_kelamin, jurusan, fakultas, pekerjaan, tgl_masuk) VALUES ('$nama', '$nim_nip', '$jenis_kelamin', '$jurusan', '$fakultas', '$pekerjaan', NOW() );";
		
		$result = mysqli_query($connection, $sql); 

		if($result){
?>

<script type="text/javascript">
	var notif = document.getElementById("notif");

	var show = "<div class='alert alert-success'><p><strong>Sukses!</strong> Data berhasil masuk.</p>";
	show+="<p><a href='daftar-anggota.php' class='btn btn-success'> Lihat semua anggota.</a></p></div>";
	notif.innerHTML = show;
</script>

<?php
		}else{
		//if inserting data fails, show error notification	
?>

<script type="text/javascript">
	var notif = document.getElementById("notif");
	var show = "<div class='alert alert-warning'><p><strong>Gagal!</strong> Terjadi kesalahan. Data tidak berhasil masuk.</p>";
	show+="<a href='daftar-anggota.php'>Lihat semua anggota.</a>";
	notif.innerHTML = show;
</script>
	</div>
</body>
</html>

<?php
		}
	}
?>