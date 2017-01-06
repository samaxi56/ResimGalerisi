<html lang="tr">
<head>
<link rel="stylesheet" href="renk.css">
<title>--Resim Galerisi--</title>
</head>
<body bgcolor="bisque">
<center>
<div id="arka">
<?php

if(isset($_POST["kulad"])&& (isset($_POST["sifre"]))){
	if($_POST["kulad"]=="osman" && $_POST["sifre"]=="1995")
	echo "Hoş Geldiniz";
	else
	echo "Kullanıcı adı veya şifre yalnış";
}
?>


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
<button type="submit" name="giriş" id="tikla">Giriş</button>
</td>
</tr>
</form>
</table>
</div>
</body>
</center>
</body>
</html>