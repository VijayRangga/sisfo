<?php
session_start();
include('../connection.php');
?>
<html>
<head>
<title>HASIL TES</title>
</head>
<script>
function on()
{
  document.btndl.download_send.hidden = true;
  document.btndl.downloadpdf.hidden = false;
  document.btndl.sendpdf.hidden = false;
}
</script>
<body>
<div id="HTMLtoPDF">
<center>
<h2>HASIL TES</h2>
<table border="0" >
<tr>
<td><font color="white">-------</font></td><td><font color="white">--</font></td><td><?php echo "<font color=white>"."------"; ?></td>
</tr>
<tr>
<td>- Nama</td><td>:</td><td><?php echo $_SESSION['username']; ?></td>
</tr>
<tr>
<td>- NIM</td><td>:</td><td><?php echo $_SESSION['nim']; ?></td>
</tr>
<tr>
<td>- Email</td> <td>:</td><td><?php echo $_SESSION['email']; ?></td>
</tr>
<tr><td>- Nilai</td><td>:</td><td><?php echo $_SESSION['point']; ?></td>
</tr>
</table>
<?php 
$qhasil=mysqli_query($connection, "select * from batas_pakar where batas_bawah <='$_SESSION[point]' and batas_atas >='$_SESSION[point]'");
$no=mysqli_fetch_array($qhasil);
{
	$_SESSION["hasiltes"]=$no['ciri_ciri'];
	echo "<font size=5>''". $_SESSION["hasiltes"]."''</font>"."<br><br>";
}
{
		mysqli_query($connection, "update tabel_pakar set nilai='$_SESSION[point]' where username='$_SESSION[username]'");
}
?>
</center>
</div>
<hr>
<center>
	<table border="0" >
<th  align="left" >
<form name="btndl">
<tr><td>
<input name="download_send" type="button" value="Download/Send" onclick="on()">
    <input name="downloadpdf" type="submit" value="Download PDF" onclick="HTMLtoPDF()" hidden="true"></td></tr>
    <tr><td>
    <a href="../phpmailer/examples/gmail.php" target="_blank"><input name="sendpdf" type="button" value="Kirim PDF      " action="" hidden="true"></a></td></tr>
    </th>
    <th align="left">
    <a href="print_preview.php" target="_blank"><input name="printing" type="button" value="Print Preview"></a>
    </th>
    </form>
    </table>
    <br>
    <a href="../logout.php"><h3>LOGOUT</h3></a>
    </center>
    <script src="../js/jspdf.js"></script>
  <script src="../js/jquery-2.1.3.js"></script>
  <script src="../js/pdfFromHTML.js"></script>
</body>
</html>