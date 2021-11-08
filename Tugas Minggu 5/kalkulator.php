<?php

function operasi ($angka1, $angka2, $operasi){
	$hasil = 0;

	if($operasi == '+'){
		$hasil = $angka1 + $angka2;
	}elseif($operasi == '-'){
		$hasil = $angka1-$angka2;
	}elseif ($operasi == '*'){
		$hasil = $angka1 * $angka2;
	}elseif ($operasi == '%'){
		$hasil = $angka1 % $angka2;
	}elseif ($operasi == '/'){
		$hasil = $angka1 / $angka2;
	}

return $hasil;
}

if( isset($_POST["submit"])){
	$operator = ['+', '-', '*', '/','%'];
	$angka_1 = $_POST["bilangan1"];
	$angka_2 = $_POST["bilangan2"];

	for ($i=0; $i <5 ; $i++) { 
			if($operator[$i] == '+'){$penjumlahan =operasi($angka_1, $angka_2, $operator[$i]);}
			elseif($operator[$i] == '-'){$pengurangan =operasi($angka_1, $angka_2, $operator[$i]);}
			elseif($operator[$i] == '*'){$perkalian =operasi($angka_1, $angka_2, $operator[$i]);}
			elseif($operator[$i] == '/'){$pembagian =operasi($angka_1, $angka_2, $operator[$i]);}
			elseif($operator[$i] == '%'){$modulus = operasi($angka_1, $angka_2, $operator[$i]);}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Operasi</title>

</head>
<body>
	<div>
	 	<form action="" method="post">
		  <div class="mb-3">
		    <label for="bilangan1">Bilangan 1</label>
		    <input type="number" name="bilangan1" id="bilangan1">
		  </div>
		  <div class="mb-3">
		    <label for="bilangan2" class="form-label">Bilangan 2</label>
		    <input type="number" name="bilangan2" d="bilangan2">
		  </div>
		  
		  <button type="submit" name="submit">Hasil</button>
		</form>
	</div>

	<<div>
		<p style="font-weight:bold;">PENJUMLAHAN (+)</p>
	 	<p>Hasil : <?php if(isset($penjumlahan)){echo $penjumlahan;}else{echo 0;}; ?></p>
	</div>

	<div>
		<p style="font-weight:bold;">PENGURANGAN (-)</p>
	 	<p>Hasil : <?php if(isset($pengurangan)){echo $pengurangan;}else{echo 0;}; ?></p>
	</div>
	<br><br>

 	<div>
 		<p style="font-weight:bold;">PERKALIAN (*)</p>
	 	<p>Hasil : <?php if(isset($perkalian)){echo $perkalian;}else{echo 0;}; ?></p>
 	</div>

	<div>
		<p style="font-weight:bold;">PEMBAGIAN (:)</p>
	 	<p>Hasil : <?php if(isset($pembagian)){echo $pembagian;}else{echo 0;}; ?></p>
	</div>
	<br>

	<div>
		<p style="font-weight:bold;">MODULUS %</p>
	 	<p>Hasil : <?php if(isset($modulus)){echo $modulus;}else{echo 0;}; ?></p>
	</div>




</body>
</html>
