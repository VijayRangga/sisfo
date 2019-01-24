<?php
error_reporting(0);
//membuat koneksi ke database
include "../connection.php";
?>
 
 <html>
 <title> Data Pertanyaan & Batas </title>
 
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
<h1>MENAMPILKAN DATA PERTANYAAN & BATAS</h1> 

<a href="form_admin.php"><button style=" margin-top: 5px; background:#2C97DF; margin-left: 3px; color:white; border-top:0; border-left:1; border-right:0; border-bottom:5px solid #2A80B9; padding:5px 29px; text-decoration:none; font-family:sans-serif; font-size:11pt; ">Home</button></a> 

<a href="ibatas_tmb.php"><button style=" margin-top: 5px; background:#2C97DF; margin-left: 3px; color:white; border-top:0; border-left:1; border-right:0; border-bottom:5px solid #2A80B9; padding:5px 29px; text-decoration:none; font-family:sans-serif; font-size:11pt; ">Tambah Pertanyaan</button></a> 

<a href="insert_soal.php"><button style=" margin-top: 5px; background:#2C97DF; margin-left: 3px; color:white; border-top:0; border-left:1; border-right:0; border-bottom:5px solid #2A80B9; padding:5px 29px; text-decoration:none; font-family:sans-serif; font-size:11pt; ">Tambah Batas</button></a> 

<a href="../logout.php"><button style=" margin-top: 5px; background:#2C97DF; margin-left: 3px; color:white; border-top:0; border-left:1; border-right:0; border-bottom:5px solid #2A80B9; padding:5px 29px; text-decoration:none; font-family:sans-serif; font-size:11pt; ">Logout</button></a> 

<hr>
<!-- /////////////////////////////tombol untuk menambah data//////////////////////////////////-->
<form action='insert_soal.php' method='POST'>
<table >
 <tr>
 <center><td> <input type='submit' name='tambah' value='Tambah Pertanyaan'> </td> 
 </tr>
</table>
</form>


<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='799' >  
<tr>
 <th> NO </th>
 <th> Pertanyaan </th>
 <th> Pilihan_A </th>
 <th> Pilihan_B </th>
 <th> Pilihan_C </th>
  <th> Poin_A </th>
 <th> Poin_B </th>
 <th> Poin_C </th>
 <th colspan='2'> Action </th>
 
</tr>

 
<?php  
// Perintah untuk menampilkan data
$queri="Select * From soal_pakar order by no" ;  //menampikan SEMUA data dari pakar

$hasil=MySQLi_query ($connection, $queri);    //fungsi untuk SQL

// nilai awal variabel untuk no urut
$i = 1;

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil)){
$id = $data['no'];
 echo "  
  <tr>
  <td><center>".$i."</center></td> 
  <td>".$data['soalx']."</td>
  <td>".$data['pilihan_a']."</td>
  <td>".$data['pilihan_b']."</td>
  <td>".$data['pilihan_c']."</td>
  <td>".$data['poin_a']."</td>
  <td>".$data['poin_b']."</td>
  <td>".$data['poin_c']."</td>
  
  <td> <form action = 'cek_editsoal.php' method = 'GET'>
  <input type = 'hidden' name = 'id' value = '".$data['no']."'>
  <input type = 'hidden' name = 'soalxx' value = '".$data['soalx']."'>
  <input type = 'submit' name = 'tombol' value = 'Edit' class = 'edit'>";

echo " <input type = 'hidden' name = 'id' value = '".$data['no']."'> <input type = 'hidden' name = 'soalxx' value = '".$data['soalx']."'> <input type = 'hidden' name = 'pili_a' value = '".$data['pilihan_a']."'> <input type = 'hidden' name = 'pili_b' value = '".$data['pilihan_b']."'><input type = 'hidden' name = 'pili_c' value = '".$data['pilihan_c']."'>
  <input type = 'hidden' name = 'poina' value = '".$data['poin_a']."'><input type = 'hidden' name = 'poinb' value = '".$data['poin_b']."'><input type = 'hidden' name = 'poinc' value = '".$data['poin_c']."'>
  </form></td>
  
  
  <td> <form action = 'delete2.php' method = 'GET'>
  <input type = 'hidden' name = 'id' value = '".$data['no']."'>
  <input type = 'hidden' name = 'soalxx' value = '".$data['soalx']."'>
  <input type = 'submit' name = 'tombol2' value = 'Delete' class = 'delete'
  onclick='return tanya(". $data['no'].")'>
  
  </form></td>
  
  </tr> 
  ";
 $i++; 
}

?>
</table>
<br><br>
<form action='ibatas_tmb.php' method='POST'>
 <center>
 <input type='submit' name='tambah' value='Tambah Batas'>
</center>
</form>

</div>
<table  border='1' Width='600' >  
<tr>
 <th> ID </th>
 <th> Keterangan </th>
 <th> Batas Bawah </th>
 <th> Batas Atas </th>
 <th colspan='2'> Action </th>
 
</tr>
 
<?php  
// Perintah untuk menampilkan data
$queri="Select * From batas_pakar order by id_batas" ;  //menampikan SEMUA data dari pakar

$hasil=MySQLi_query ($connection, $queri);    //fungsi untuk SQL

// nilai awal variabel untuk no urut
$i = 1;

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil)){
$id = $data['id_batas'];
 echo "  
  <tr>
  <td><center>".$i."</center></td> 
  <td>".$data['ciri_ciri']."</td>
  <td>".$data['batas_bawah']."</td>
  <td>".$data['batas_atas']."</td>

  
  <td> <form action = 'ibatas_edit.php' method = 'GET'>
  <input type = 'hidden' name = 'id' value = '".$data['id_batas']."'>
  <input type = 'hidden' name = 'kterangan' value = '".$data['ciri_ciri']."'>
  <input type = 'submit' name = 'tombol' value = 'Edit' class = 'edit'>";

echo " <input type = 'hidden' name = 'id' value = '".$data['id_batas']."'> <input type = 'hidden' name = 'kterangan' value = '".$data['ciri_ciri']."'> <input type = 'hidden' name = 'bts_bw' value = '".$data['batas_bawah']."'> <input type = 'hidden' name = 'bts_at' value = '".$data['batas_atas']."'>
  </form></td>

     <td> <form action = 'delete3.php' method = 'GET'>
  <input type = 'hidden' name = 'id' value = '".$data['id_batas']."'>
  <input type = 'hidden' name = 'kterangan' value = '".$data['ciri_ciri']."'>
  <input type = 'submit' name = 'tombol2' value = 'Delete' class = 'delete'
  onclick='return tanya(". $data['id_batas'].")'>
  
  </form></td>
  </tr> 
  ";
 $i++; 
}

?>

</table>
<br>
<a href="form_admin.php" style="text-decoration: none"><input type="button" name="back" value="Kembali"></a>
<br><br><br><br>
</body>
</html>