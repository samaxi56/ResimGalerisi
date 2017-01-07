<html>
<body background="Resim/Arka/resimarka.jpg">

</body>
<?php
$yol = "Resim/";
$ac = opendir($yol);

while ($a = readdir($ac)){
	if($a != "." && $a != ".." && $a != "Arka"){
		echo $a."<br>";
	}
}
?>
<center>
</center>
<form action="index.php" method="post">
<button type="submit" name="Cikis" id="cikis">Çıkış</button>
<hr>

</form>
</html>