<?php
error_reporting(0);
//membuat koneksi ke database
include "../connection.php";
?>
 
 <html>
 <title> Data Batas </title>
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
<h1>MENAMPILKAN DATA BATAS</h1> 

<hr>

  <div class="container">

        <!-- Page Heading -->
        <div class="row">
  <div class="col-md-8">
<!-- /////////////////////////////tombol untuk menambah data//////////////////////////////////-->

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->
<form action='ibatas_tmb.php' method='POST'>
<table >
 <tr>
 <center><td> <input type='submit' name='tambah' value='Tambah Batas'> </td> 
 </tr>
</table>
</form>
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
   <td> <form action = 'delete2.php' method = 'GET'>
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
</div>
<a href="halpakar.php" style="text-decoration: none"><input type="button" name="back" value="Kembali"></a>
<!-- row -->
<br><br>


</body>
</html>