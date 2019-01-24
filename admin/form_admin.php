<?php
include('cekadmin.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>LOGIN ADMIN</title>
</head>

<body>

<?php include'cek_loguser.php'; ?>

<center><div style="width:399px; margin-top: 15px; background-color:black; border-radius:3px;font-family: Rockwell; font-size: 15px;font-size; " >
               
                <hr>
                <form class="f1" name="b_soal" action="">
				<a href="tmb_user.php"><input  class="its" type="button" name="buat_soal" value="Tambah User"></a>
				</form><br>

				<form name="e_soal" action="">
				<a href="edit_user.php"><input class="its" type="button" name="edit_soal" value="Edit User"></a>
				</form><br>

				<form name="x_soal" action="">
				<a href="edit_ptybts.php"><input class="its" type="button" name="edit_bts" value="Edit Pertanyaan & Batas"></a>
				</form><br><hr>
				
               <a href="../logout.php"><button>LOGOUT</button></a> 
               <hr>
          </div>
    </div>

</body>
</html>