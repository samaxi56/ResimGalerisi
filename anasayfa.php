<html>
<body background="Resim/Arka/resimarka.jpg">

</body>
<?php
if( ! isset($_GET[‘pic’]))
{$pic=1;}

if(isset($_GET[‘pic’]))
{
$pic=$_GET[‘pic’];
}

echo ”;
$nextpic = $pic + 1;
$prevpic = $pic – 1;

if( $prevpic> 0 )
{
echo ‘Previous’;
}
//sonraki butonu
if( $nextpic <= 19 )
{
echo ‘Next’;
}

?>
?>
<center>
</center>
<form action="index.php" method="post">
<button type="submit" name="Cikis" id="cikis">Çıkış</button>
<hr>

</form>
</html>