<?php 
	require 'fungsi.php';


	$NIM = $_GET["NIM"];


	if( hapus($NIM) > 0 ){
		echo "
				<script>
					alert('Data Dihapus');
					document.location.href = 'index.php';
				</script>
			";
	}
	else{
		echo "
				<script>
					alert('Terjadi Kesalahan');
					document.location.href = 'index.php';
				</script>
			";
	}
?>