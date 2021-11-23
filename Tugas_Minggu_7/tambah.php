<?php 

	require 'fungsi.php';

	//koneksi database
	$koneksi = mysqli_connect("localhost", "root", "", 'mydatabase');

	//cek tombol submit
	if(isset($_POST["submit"])){

		//cek data berhasil di kirim
		if ( tambah($_POST) > 0 ) {
			echo "
				<script>
					alert('Berhasil');
					document.location.href = 'index.php';
				</script>
			";
		}
		else{
			echo "
				<script>
					alert('Gagal');
					document.location.href = 'index.php';
				</script>
			";
		}

	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">


	<title>TAMBAH DATA</title>


	<style type="text/css">
		.formstyle{
			background-color: black;
			color: white;
			border-radius: 20px;
		}
	</style>
</head>
<body style="background-color: gold;">
	<center>
	<h1><img src="img/Logo_ITERA.png" width="80px;">Tambah Data Mahasiswa</h1>
	</center>

	<form action="" method="post" enctype="multipart/form-data" >
		<div class="formstyle">
		<ul>
			<li>
				<label for="nim">NIM : </label><input type="text" name="nim" id="nim" required>
			</li><br>

			<li>
				<label for="nama">Nama : </label><input type="text" name="nama" id="nama" required>
			</li><br>

			<li>
				<label for="jurusan">Prodi : </label><input type="text" name="jurusan" id="jurusan" required>
			</li><br>

			<li>
				<label for="alamat">Alamat : </label><input type="text" name="alamat" id="alamat" required>
			</li><br>

			<li>
				<label for="email">Email : </label><input type="text" name="email" id="email" required>
			</li><br>

			<li>
				<label for="gambar">Gambar : </label><input type="file" name="gambar" id="gambar">
			</li><br>
		</div>

			
			<button type="submit" name="submit">Kirim</button>
			

		</ul>

	</form>


</body>
</html>