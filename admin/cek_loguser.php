<?php
error_reporting(0);
//membuat koneksi ke database
include "../connection.php";
?>
 
 <html>
 <title> Data User </title>
<style>
 .table-zebra-striping {
  width: 79%;
  border-collapse: collapse;
}

.table-zebra-striping th {
  background: black;
  color: #FFFFFF;
  padding: 1em;
  text-align: left;
  text-transform: uppercase;
}

.table-zebra-striping td {
  border-bottom: 1px solid #ddd;
  padding: 1em;
}
/* EVEN */

.table-zebra-striping tr:nth-child(even) {
  background: #F5F5F5;
}

/* ODD */

.table-zebra-striping tr:nth-child(odd) {
  background: #D5DDE8;
}

</style>

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

<CENTER><marquee direction="left" scrollamount="7" behavior="alternate" style="width:399px;background-color:black; border-radius:3px;font-family: Rockwell; font-size: 21px;font-size;. background-color: #232323; text-shadow: 0 0 5px white, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #FFF, 0 0 30px black, 0 0 40px #FFF, 0 0 55px black, 0 0 75px black; text-decoration:underline; text-transform:uppercase; padding-bottom:7px; box-shadow: 7px 7px 10px 2px black;">LOGIN SEBAGAI ADMIN</marquee></CENTER>

  <hr style=" border: 0; height: 5px; background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); background-image:    -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); background-image:     -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));
    background-image:      -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));">
  
<center> 
<h1 style="text-decoration: underline;">MENAMPILKAN DATA USER</h1>  
<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  class="table-zebra-striping" >  
<tr>
 <th> ID </th>
 <th> Username </th>
 <th> Password </th>
 <th> Level </th>
 <th> NIM </th>
 <th> Email </th>
  <th> Nilai </th>
 <th> Login Terakhir </th>
</tr>
 
<?php  
// Perintah untuk menampilkan data
$queri="Select * From tabel_pakar where level='USER' order by login_terakhir desc" ;  //menampikan SEMUA data dari pakar

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
  <td>".$data['login_terakhir']."</td>
  
  </tr> 
  ";
 $i++; 
}
?>
</table>
<br><br><br>

<h1 style="text-decoration: underline;">MENAMPILKAN DATA PAKAR</h1> 
<table class="table-zebra-striping" >  
<tr>
 <th> ID </th>
 <th> Username </th>
 <th> Password </th>
 <th> Level </th>
 <th> Email </th>
  <th> Login Terakhir </th>
</tr>
<?php   
// Perintah untuk menampilkan data
$queri2="Select * From tabel_pakar where level='PAKAR' order by login_terakhir desc" ;  //menampikan SEMUA data dari pakar

$hasil2=MySQLi_query ($connection, $queri2);    //fungsi untuk SQL

// nilai awal variabel untuk no urut
$i2 = 1;

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil2)){
$id2 = $data['id'];
 echo "  
  <tr>
  <td><center>".$i2."</center></td> 
  <td>".$data['username']."</td>
  <td>".$data['password']."</td>
  <td>".$data['level']."</td>
  <td>".$data['email']."</td>
  <td>".$data['login_terakhir']."</td>
  
  </tr> 
  ";
 $i2++; 
}
?>
</table>

</div>
<br><br>
</body>
</html>