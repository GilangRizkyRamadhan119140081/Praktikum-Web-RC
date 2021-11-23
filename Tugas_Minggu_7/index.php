<?php  
	//koneksi ke database
	require 'fungsi.php';
	require 'bootstrap.html';
	$data_diri = query("SELECT * FROM data_diri ORDER BY nim ASC");

	//tombol cari diklik
	if ( isset($_POST["cari"]) ) {
		$data_diri = cari($_POST["keyword"]);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TARGET</title>
</head>
<body style="background-color: gold;">

	<center>
	<h1><img src="img/Logo_ITERA.png" width="80px;"> Daftar Mahasiswa</h1>
	</center>

	<a href="tambah.php" style="background-color: white; border-radius: 20px; font-family: evogria; font-size: 14px">Tambah Data Mahasiswa</a>
	<br><br>

	<form action="" method="post" style="float: right;">
		<button type="submit" name="cari">Cari</button>
		<input type="text" name="keyword" size="30" autofocus placeholder="Searching..." autocomplete="off">

	</form>
	<br>

	<table class="table table-dark table-sm">

		<thead>
		<tr>
			<th scope="col">NIM</th>
			<th scope="col">NAMA</th>
			<th scope="col">PRODI</th>
			<th scope="col">ALAMAT</th>
			<th scope="col">EMAIL</th>
			<th scope="col">Gambar</th>
			<th scope="col">OPSI</th>
		</tr>
		</thead>

		<tbody>
		<?php $i = 1; ?>
		<?php foreach ( $data_diri as $row ):?>

		<tr>
			<td><?= $row["NIM"]; ?></td>
			
			
			
			<td><?= $row["NAMA"]; ?></td>
			<td><?= $row["PRODI"]; ?></td>
			<td><?= $row["ALAMAT"]; ?></td>
			<td><?= $row["EMAIL"]; ?></td>
			<td><img src="img/<?= $row["GAMBAR"]; ?>" width="80"></td>

			<td>
				<a href="ubah.php?NIM=<?= $row["NIM"]; ?>">Edit</a> |
				<a href="hapus.php?NIM=<?= $row["NIM"]; ?>" onclick="return confirm('Anda akan menghapus data! ')">Delete</a>
			</td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>