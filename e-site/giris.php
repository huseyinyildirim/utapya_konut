<?
header ('Content-type: text/html; charset=utf-8');
ob_start();
session_start();
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			</head>
				<body>
<?php
include("baglan.php");
$daire=$_POST["daire"];
$sifre=$_POST["sifre"];

if(($daire=="")or($sifre=="")){ 
Header("Location: index.php");
Exit();
}

		$sorgu=
		("
			SELECT 
			* 
			FROM sitesakin
			WHERE daire_no='$daire' and sifre='$sifre' 
		");
         
	$sorgu=mysql_query($sorgu) or die("Sorguda Hata : ".mysql_error());

$sayi=mysql_num_rows($sorgu);
if($sayi>0){ 
$_SESSION["kullanici_adi"]=$daire;
echo $_SESSION["kullanici_adi"];
Header("Location: admin.php");
}else{ 
Header("Location: index.php");
}
?>
	</body>
</html>