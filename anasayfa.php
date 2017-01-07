<html>
<body bgcolor="#666666">

</body>
<style type="text/css">

img{
	border: 1px solid #000;
	width:250px;
	height:250px;
	margin:7px;
	border-radius:5px;
	box-shadow: 5px 5px 5px #000;
}

</style>
<form action="anasayfa.php" method="post" enctype="multipart/form-data">
<input type="file" name="Resim" id="" />
<input type="submit" value="resim yukle" id="" />
<hr>
</form>
<?php


$maxboyut = 1000000;
$dosyauzantisi = substr($_FILES["Resim"]["name"],-4,4);
$dosyaadi = rand(0,99999).$dosyauzantisi;
$dosyayolu =  "Resim/".$dosyaadi;

if($_FILES["Resim"]["size"]> $maxboyut){
	
	
	echo "dosya boyutu 1mb dan buyuk olamaz...";
	echo "<hr>";
	
	
}else{
	
	$d = $_FILES["Resim"]["type"];
	
	if($d == "image/jpeg" || $d == "image/png" || $d == "image/gif"){
		
		if(is_uploaded_file($_FILES["Resim"]["tmp_name"])){
			
			$x = move_uploaded_file($_FILES["Resim"]["tmp_name"],$dosyayolu);
			
			if($x){
				
				echo "Başarılı bir şekilde resmi yüklediniz..<br/>";
				
				echo "Eklenen yer.".$dosyayolu;
				echo "<hr>";
			}
			
		}else{		
			echo "yuklenirken bir hata olustu";
			echo "<hr>";		
		}		
	}	
}
$yol = "Resim/";
$ac = opendir($yol);

while ($a = readdir($ac)){
	if($a != "." && $a != ".." && $a != "Arka"){
		echo "<a href='Resim/$a'><img src='Resim/{$a}'/></a>";
	}
}
?>
<center>
</center>

</html>