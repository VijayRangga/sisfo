<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-image: url(gambar/background.png);background-attachment:fixed;background-size:cover; cursor: url('img/cur.cur'), default">

<center><table width="799"  height="211" border="3" bgcolor="white" >
<form name="pty" method="post">
		<h3 style="text-decoration: underline;">JAWABLAH PERTANYAAN DIBAWAH INI...!</h3>
<?php
	
	session_start();
	include('../connection.php');
		
		$qtanya=mysqli_query($connection, "select * from soal_pakar where no='$_SESSION[urut]'");
		$baris=mysqli_fetch_array($qtanya);
		$a=$baris['soalx'];
		$e=$baris['pilihan_a'];
		$f=$baris['pilihan_b'];
		$g=$baris['pilihan_c'];
		$b=$baris['poin_a'];
		$c=$baris['poin_b'];
		$d=$baris['poin_c'];
		$id_pertanyaan=$baris['no'];

?>
		<tr>
		<td colspan="2"><?php echo $id_pertanyaan.". " .$a; ?></td>
		</tr>
		<p></p>
		
		<tr>
			<td height="100" colspan="2" class="back">
				<input type="submit" name="a" value="A">  <?php echo $e; ?><p>
				<input type="submit" name="b" value="B">  <?php echo $f; ?><p>
				
				<input type="submit" name="c" value="C">  <?php if($g==""){
			echo "<script>document.pty.c.hidden=true;</script>";
		}
		else{
			echo "<script>document.pty.c.hidden=false;</script>";
		} echo $g;
				 ?><p></form>

			</td>
		</tr> </table><br>

		<!-- <table width="211" border="3">
			<tr><td align="center" ><button style=" margin-top: 5px; background:#2C97DF; margin-left: 3px; color:white; border-top:0; border-left:1; border-right:0; border-bottom:5px solid #2A80B9; padding:5px 29px; text-decoration:none; font-family:sans-serif; font-size:11pt; ">Edit</button></td></tr>
		</table>-->
<?php
	
	if (isset($_POST['a']))
	{
	 $_SESSION['urut']= $_SESSION['urut']+1; ?>
			<script>
				document.location.href="soalnya.php";
			</script>
	<?php
	$_SESSION['point']=$_SESSION['point']+$b;	
	}
		if (isset($_POST['b']))
	{
	 $_SESSION['urut']= $_SESSION['urut']+1; ?>
			<script>
				document.location.href="soalnya.php";
			</script>
	<?php 
	$_SESSION['point']=$_SESSION['point']+$c;	
	}
	
		if (isset($_POST['c']))
	{
	 $_SESSION['urut']= $_SESSION['urut']+1; ?>
			<script>
				document.location.href="soalnya.php";
			</script>
	<?php 
	$_SESSION['point']=$_SESSION['point']+$d;	
	}
	if ($_SESSION['urut']>$_SESSION['jmlrecord'])
	{
		
		header('location:hasilnya.php');
	}

	?>
</form></center>


</body>
</html>		
		