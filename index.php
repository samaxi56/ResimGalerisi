<html>
<head>
<link rel="stylesheet" type="text/css" href="ResimGalerisi/arkaplan.css">
</head>
<body bgcolor="bisque">
<center>

<?php

if(isset($_POST["kulad"])&& (isset($_POST["sifre"]))){
	if($_POST["kulad"]=="osman" && $_POST["sifre"]=="1995")
	include_once("ResimGalerisi/anasayfa.php");
	else
	echo "Kullanıcı adı veya şifre yalnış<hr>";
}
?>

<div id="arkaplan">
<body bgcolor="#FF0000">

<label>ÜYE GİRİŞİ</label>
<hr>
<form method="post">
<input type="text" name="kulad" placeholder="kullanıcı adı"/><br/>
<input type="password" name="sifre" placeholder="şifre"/><br/>
<button type="submit" name="giris">Giriş</button>
</form>
</div>
</body>
</center>
</body>
</html>