<?php 

	require 'fungsi.php';


	//ambil data di url
	$NIM = $_GET["NIM"];
	
	// query berdasarkan id
	$datadir = query("SELECT * FROM data_diri WHERE NIM = $NIM")[0];

	//cek tombol submit
	if(isset($_POST["submit"])){

		//cek data berhasil di update
		if ( ubah($_POST) > 0 ) {
			echo "
				<script>
					alert('Berhasil Diupdate');
					document.location.href = 'index.php';
				</script>
			";
		}
		else{
			echo "
				<script>
					alert('Gagal Diupdate');
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
	<title>UPDATE DATA</title>
</head>
<body style="background-color: gold;">

	<h1><img src="img/Logo_ITERA.png" width="80px;">Update Data Mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="nim" value="<?= $datadir["NIM"]; ?>">
		<input type="hidden" name="gambarlama" value="<?= $datadir["GAMBAR"]; ?>">
		<ul>
			<li>
				<label for="nama">Nama : </label><input type="text" name="nama" id="nama" required value="<?= $datadir["NAMA"] ?>">
			</li>

			<li>
				<label for="nim">NIM : </label><input type="text" name="nim" id="nim" required value="<?= $datadir["NIM"] ?>">
			</li>

			<li>
				<label for="email">Email : </label><input type="text" name="email" id="email" required value="<?= $datadir["EMAIL"] ?>">
			</li>

			<li>
				<label for="jurusan">Prodi : </label><input type="text" name="jurusan" id="jurusan" required value="<?= $datadir["PRODI"] ?>">
			</li>

			<li>
				<label for="gambar">Gambar : </label>
				<img src="img/<?= $datadir['GAMBAR']; ?>">
				<input type="file" name="gambar" id="gambar">
			</li>

			
			<button type="submit" name="submit">Update</button>
			

		</ul>

	</form>


</body>
</html>