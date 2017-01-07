<html>
<head>
<link rel="stylesheet" type="text/css" href="ResimGalerisi/renk.css">
</head>
<body bgcolor="bisque">
<center>

<?php

if(isset($_POST["kulad"])&& (isset($_POST["sifre"]))){
	if($_POST["kulad"]=="osman" && $_POST["sifre"]=="1995")
	include("anasayfa.php");
	else
	echo "Kullanıcı adı veya şifre yalnış<hr>";
}
?>

<div id="arka">
<body bgcolor="#FF0000">

<label>ÜYE GİRİŞİ</label>
<hr>
<table>
<form method="post">
<tr>
<td>
<input type="text" name="kulad" placeholder="kullanıcı adı"/><br/>
</td>
</tr>
<tr>
<td>
<input type="password" name="sifre" placeholder="şifre"/><br/>
</td>
</tr>
<tr>
<td>
<button type="submit" name="giris">Giriş</button>
</td>
</tr>
</form>
</table>
</div>
</body>
</center>
</body>
</html>