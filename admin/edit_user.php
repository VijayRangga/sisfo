<?php
error_reporting(0);
//membuat koneksi ke database
include "../connection.php";
?>
 
 <html>
 <title> Data User </title>
 
 <script language="javascript">
 function tanya() {
 if (confirm ("Apakah Anda yakin akan menghapus data ini ?")) {
 return true;
  } else {
   return false;
  }
  }
</script>
<body>
<center> 
<h1>MENAMPILKAN DATA USER</h1> 

<a href="form_admin.php"><button style=" margin-top: 5px; background:#2C97DF; margin-left: 3px; color:white; border-top:0; border-left:1; border-right:0; border-bottom:5px solid #2A80B9; padding:5px 29px; text-decoration:none; font-family:sans-serif; font-size:11pt; ">Home</button></a> 

<a href="../logout.php"><button style=" margin-top: 5px; background:#2C97DF; margin-left: 3px; color:white; border-top:0; border-left:1; border-right:0; border-bottom:5px solid #2A80B9; padding:5px 29px; text-decoration:none; font-family:sans-serif; font-size:11pt; ">Logout</button></a> 

<hr>

  <div class="container">

        <!-- Page Heading -->
        <div class="row">
  <div class="col-md-8">
<!-- /////////////////////////////tombol untuk menambah data//////////////////////////////////-->
<form action='tmb_user.php' method='POST'>
<table >
 <tr>
 <center><td> <input class="its" type='submit' name='tambah' value='Tambah User'> </td> 
 </tr>
</table>
</form>


<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='600' >  
<tr>
 <th> ID </th>
 <th> Username </th>
 <th> Password </th>
 <th> Level </th>
 <th> NIM </th>
 <th> Email </th>
  <th> Nilai </th>
 <th colspan='2'> Action </th>
 
</tr>
 
<?php  
// Perintah untuk menampilkan data
$queri="Select * From tabel_pakar order by id" ;  //menampikan SEMUA data dari pakar

$hasil=MySQLi_query ($connection, $queri);    //fungsi untuk SQL

// nilai awal variabel untuk no urut
$i = 1;

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil)){
$id = $data['id'];
 echo "  
  <tr>
  <td><center>".$i."</center></td> 
  <td>".$data['username']."</td>
  <td>".$data['password']."</td>
  <td>".$data['level']."</td>
  <td>".$data['nim']."</td>
  <td>".$data['email']."</td>
  <td>".$data['nilai']."</td>
  
  <td> <form action = 'cek_edituser.php' method = 'GET'>
  <input type = 'hidden' name = 'id' value = '".$data['id']."'>
  <input type = 'hidden' name = 'usn' value = '".$data['username']."'>
  <input type = 'submit' name = 'tombol' value = 'Edit' class = 'edit'>";

echo " <input type = 'hidden' name = 'id' value = '".$data['id']."'> <input type = 'hidden' name = 'usn' value = '".$data['username']."'> <input type = 'hidden' name = 'psw' value = '".$data['password']."'> <input type = 'hidden' name = 'lvl' value = '".$data['level']."'><input type = 'hidden' name = 'nim' value = '".$data['nim']."'>
  <input type = 'hidden' name = 'imel' value = '".$data['email']."'><input type = 'hidden' name = 'nilai' value = '".$data['nilai']."'>
  </form></td>
  
  
  <td> <form action = 'delete.php' method = 'GET'>
  <input type = 'hidden' name = 'id' value = '".$data['id']."'>
  <input type = 'hidden' name = 'usn' value = '".$data['username']."'>
  <input type = 'submit' name = 'tombol2' value = 'Delete' class = 'delete'
  onclick='return tanya(". $data['id'].")'>
  
  </form></td>
  
  </tr> 
  ";
 $i++; 
}

?>

</table>
</div>
<br><br>
</body>
</html>