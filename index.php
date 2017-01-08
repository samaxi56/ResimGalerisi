<html>
<head>
<link rel="stylesheet" type="text/css" href="arkaplan.css">
</head>
<body background="Resim/Arka/resim.jpg">
<center>
<?php

if(isset($_POST["kulad"])&& (isset($_POST["sifre"]))){
	if($_POST["kulad"]=="osman" && $_POST["sifre"]=="1995"){
		include("anasayfa.php");
		header('refresh:0; url=anasayfa.php');
		}
		else
		echo "<hr>Kullanıcı adı veya şifre yanlış<hr>";
		}
?>
<div id="arkaplan">
  <body>
  
  <label>ÜYE GİRİŞİ</label>
<hr>
<form method="post">
<input type="text" name="kulad" placeholder="Üye adı"/><br/>
<input type="password" name="sifre" placeholder="Şifre"/><br/>
<button type="submit">Giriş</button>
</form>
</div>
</body>
</center>
</body>
</html>