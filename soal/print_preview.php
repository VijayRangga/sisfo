<?php session_start(); ?>

<html>

<body onload='javascript:window.print()'>
<div id=wrap>
<h3>Laporan Hasil Test</h3>


<h3>Data Peserta</h3>

<?php

	 echo " <p>Nama  : <b>$_SESSION[username]</b></br>
			<p>NIM  : <b>$_SESSION[nim]</b></br>
			<p>Email : <b>$_SESSION[email]</b>";
			"<p>POIN ANDA : <b>$_SESSION[point]</b>";
?>
<br><br>
<?php
		echo "<table border=1>"."<tr>"."<td align=center><h2>"."Hasil Test"."</h2></td></tr>";	
		echo "<tr><td>";
		echo "</b>"."''<font size=5><i>". $_SESSION['hasiltes']."</i></font>''</td></tr></table>";
		
?>
</body>		
</html>