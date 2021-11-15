<!DOCTYPE html>
<html>
<head>
	<title>tugas minggu 6</title>
	<link href="style.css" rel="stylesheet" media="all">

</head>
<body id="body">
	<div class="background">
		<br>
		<br>
		<br>
		<br>
		<br>
		<div style="background-color: red; border-radius: 40px;">

			<h2 class="title" style="text-align: center;">DAFTAR BELANJA</h2>
            <form action="minggu6.php" method="POST" id="belanja" name="belanja" enctype="multipart/form">
                                
                    <div class="" style="text-align: center;">
                        <label for="">Mangga    Rp 15.000 </label>
                        <input class="" type="number" id="mangga" onchange="setValue()" name="mangga"> <br>
                    </div>
                    <br>
                     
                    <div class="" style="text-align: center;">
                        <label for="">Salak   Rp 10.000 </label>
                        <input class="" type="number" id="salak" onchange="setValue()" name="salak"> <br>
                    </div>
                    <br>



                    <div class="" style="text-align: center;">
                        <label for="">Jambu    Rp 13.000 </label>
                        <input class="" type="number" id="jambu" onchange="setValue()" name="jambu"> <br>
                    </div>
                    <br>
                                
                    

                <div class="" style="text-align: center;">
                    <label for="">Total Harga  </label>
                    <input class="" type="text" id="total" name="total" readonly> <br>
                </div>
                <br>

            <center><button type="submit" class="";>Submit</button>
            </center>
            </form>
            <br>

          </div>
        </div>



</body>
</html>