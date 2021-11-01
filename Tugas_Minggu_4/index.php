<?php
include 'autentikasi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<!-- security Token -->
	<meta name="security_token" content="<?= $_SESSION['security_token'] ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Minggu 4 Praktikum Pemrograman Web</title>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

		<!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- DataTable -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>

		

		body{
			background-image: url("bg.JPG");
			background-size: cover;
			background-repeat: no-repeat;
			font-family: evogria;
		}
		textarea{
			margin-left: 20px;
			margin-right: 20px;
		}
	</style>
</head>
<body>

	<nav>
	  <a class="navbar-brand" href="index.php" style="color: white; text-align: right; margin-left: 750px;">
	    Praktikum Pemrograman Web
	  </a>
	</nav>

	
		<h2 align="center" style="margin: 120px; font-style: italic; font-variant: small-caps;">PENDATAAN MAHASISWA BARU</h2>

	  
	  		<form method="post" class="form-data" id="form-data"> 
			<input type="hidden" name="id" id="id"> 
			<div class="col">
				<div class="row-sm-3">
					<div class="form_data">
						<label>Nama Mahasiswa</label>
						<input type="hidden" name="id" id="id">
						<input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" required="true">
						<p class="text-danger" id="err_nama_mahasiswa"></p>
					</div>
				</div>				
			<div class="row-sm-3">
				<div class="form_data">
						<label>Jurusan</label>
						<select name="jurusan" id="jurusan" class="form-control" required="true">
							<option value=""></option>
							<option value="Perencanaan Wilayah Kota">Perencanaan Wilayah Kota</option>
							<option value="Teknik Elektro">Teknik Elektro</option>
							<option value="Teknik Informatika">Teknik Informatika</option>
							<option value="Farmasi">Farmasi</option>
							<option value="Teknik Kimia">Teknik Kimia</option>
							<option value="Teknik Material">Teknik Material</option>
						</select>
						<p class="text-danger" id="err_jurusan"></p>
					</div>
			</div>
			<div class="row-sm-3">
				<div class="form_data">
						<label>Tanggal Masuk</label>
						<input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" required="true">
						<p class="text-danger" id="err_tanggal_masuk"></p>
					</div>
			</div>
			<div class="row-sm-3">
				<div class="form_data">
						<label>Jenis Kelamin</label><br>
						<input type="radio" name="jenkel" id="jenkel1" value="Laki-laki" required="true"> Laki-laki
						<input type="radio" name="jenkel" id="jenkel2" value="Perempuan"> Perempuan
					</div>
					<p class="text-danger" id="err_jenkel"></p>
			</div>
			</div>
			
			<div class="form_data">
				<label style="margin-left: 20px;">Alamat</label>
				<textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
				<p class="text-danger" id="err_alamat"></p>
			</div>
			
			<div class="form_data">
				<button type="button" name="simpan" id="simpan" class="btn btn-primary" style="background-color: green;">
					<i class="fa fa-save"></i> Simpan
				</button>
			</div>
		</form>

		<p class="text-danger" id="err_nama_mahasiswa"></p>
	  

	  <br>
	  <br>
	  <br>
	  <br>
	 
	  		<div class="data"></div>
	  

	<hr>
    <div class="text-center">Copyright <?php echo date('Y'); ?> ©
	    <a href=""> Gilang Rizky Ramadhan</a>
	</div>


	<script type="text/javascript">
	$(document).ready(function(){
	    //Data Mengirim Token Keamanan
	    $.ajaxSetup({
		headers : {
		    'security_token': $('meta[name="security_token"]').attr('content')
		}
	    });

	    $('.data').load("data.php");
	    $("#simpan").click(function(){
		var data = $('.form-data').serialize();
		var jenkel1 = document.getElementById("jenkel1").value;
		var jenkel2 = document.getElementById("jenkel2").value;
		var nama_mahasiswa = document.getElementById("nama_mahasiswa").value;
		var tanggal_masuk = document.getElementById("tanggal_masuk").value;
		var alamat = document.getElementById("alamat").value;
		var jurusan = document.getElementById("jurusan").value;


		if (nama_mahasiswa=="") {
			document.getElementById("err_nama_mahasiswa").innerHTML = "Form Harus Diisi";
		} else {
			document.getElementById("err_nama_mahasiswa").innerHTML = "";
		}
		if (alamat=="") {
			document.getElementById("err_alamat").innerHTML = "Form Harus Diisi";
		} else {
			document.getElementById("err_alamat").innerHTML = "";
		}
		if (jurusan=="") {
			document.getElementById("err_jurusan").innerHTML = "Form Harus Diisi";
		} else {
			document.getElementById("err_jurusan").innerHTML = "";
		}
		if (tanggal_masuk=="") {
			document.getElementById("err_tanggal_masuk").innerHTML = "Form Harus Diisi";
		} else {
			document.getElementById("err_tanggal_masuk").innerHTML = "";
		}
		if (document.getElementById("jenkel1").checked==false && document.getElementById("jenkel2").checked==false) {
			document.getElementById("err_jenkel").innerHTML = "Jenis Kelamin Harus Dipilih";
		} else {
			document.getElementById("err_jenkel").innerHTML = "";
		}

		if (nama_mahasiswa!="" && tanggal_masuk!=""  && alamat!=""  && jurusan!=""  && (document.getElementById("jenkel1").checked==true || document.getElementById("jenkel2").checked==true)) {
			$.ajax({
			    type: 'POST',
			    url: "form_data.php",
			    data: data,
			    success: function() {
				$('.data').load("data.php");
				document.getElementById("id").value = "";
				document.getElementById("form-data").reset();
			    }, error: function(response){
				console.log(response.responseText);
			    }
			});
		}
		
	    });
	});
	</script>
</body>
</html>

