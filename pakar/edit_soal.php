<?php
error_reporting(0);
//membuat koneksi ke database
include "../connection.php";
?>
 
 <html>
 <title> Data Pertanyaan </title>
   <!--<link href="css/bootstrap.min.css" rel="stylesheet">

     !!!!Custom CSS!!!! 
    <link href="css/body.css" rel="stylesheet">-->
 
 
 <script language="javascript">
 function tanya() {
 if (confirm ("Apakah Anda yakin akan menghapus data ini ?")) {
 return true;
  } else {
   return false;
  }
  }
</script>
<body width='900px'>
<center> 
<h1>MENAMPILKAN DATA PERTANYAAN</h1> 
<a href="halpakar.php" style="text-decoration: none"><input type="button" name="back" value="Kembali"></a>

<hr>

  <div class="container">

        <!-- Page Heading -->
        <div class="row">
  <div class="col-md-8">
<!-- /////////////////////////////tombol untuk menambah data//////////////////////////////////-->
<form action='insert_soal.php' method='POST'>
<table >
 <tr>
 <center><td> <input type='submit' name='tambah' value='Tambah Pertanyaan'> </td> 
 </tr>
</table>
</form>


<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='600' >  
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
  
  
  <td> <form action = 'delete.php' method = 'GET'>
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
</div>

<br><br>
</body>
</html>