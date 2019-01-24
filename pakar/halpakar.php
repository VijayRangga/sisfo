<?php
include('cekpakar.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAKAR</title>       
</head>

<body bgcolor="white">
<div>
<center><div style="width:555px; margin-top: 173px; background-color:black; border-radius:3px;font-family: Rockwell; font-size: 15px;font-size; box-shadow: 7px 7px 10px 2px black;" ><hr>
                <h1 style=".background-color: #232323; text-shadow: 0 0 5px white, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #FFF, 0 0 30px black, 0 0 40px #FFF, 0 0 55px black, 0 0 75px black; text-decoration:underline; text-transform:uppercase; padding-bottom:7px;">LOGIN SEBAGAI PAKAR</h1>

                <hr><br>

                <form class="f1" name="b_soal" action="">
				<form name="e_soal" action="">
				<a href="edit_soal.php"><input class="its" type="button" name="edit_soal" value="Edit Pertanyaan"></a>
				</form><br>

				<form name="x_soal" action="">
				<a href="edit_batas.php"><input class="its" type="button" name="edit_bts" value="Edit Batas"></a>
				</form><br>
			
               <a href="../logout.php"><button>LOGOUT</button></a>
               <br><br><hr>
          </div>
    </div></center>  
</body>
</html>