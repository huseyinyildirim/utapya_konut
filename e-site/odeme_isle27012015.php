<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$gun=$_POST["odeme_gun"];
$ay=$_POST["odeme_ay"];
$yil=$_POST["odeme_yil"];
$tutar=$_POST["odeme_tutar"];
$aciklama=$_POST["odeme_aciklama"];
$tutar=str_replace(',','.',$tutar);

$sql=mysql_query("
insert into 
siteodeme
(gun,ay,yil,tutar,aciklama)
values
('$gun','$ay','$yil','$tutar','$aciklama')",$bagla) or die(mysql_error());


?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
</font><font face="Arial" size="2" color="#FF0000">
Açıklaması   <font face="Arial" size="2" color="#000000"><?echo $aciklama?></font>   olan   <font face="Arial" size="2" color="#000000"><?echo $tutar?></font> TL   tutarındaki ödeme sisteme eklenmiştir.<br><br>
Yeni İşlem için Lütfen Yukardaki Menüyü Kullanınız.
</font></b><br>
		</td>
	</tr>
</table>
<?php
}
else {
Header("Location: index.php");
}
?>