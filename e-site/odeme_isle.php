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

if ($ay==Ocak)
{
$ayno=1;
}
if ($ay==Şubat)
{
$ayno=2;
}
if ($ay==Mart)
{
$ayno=3;
}
if ($ay==Nisan)
{
$ayno=4;
}
if ($ay==Mayıs)
{
$ayno=5;
}
if ($ay==Haziran)
{
$ayno=6;
}
if ($ay==Temmuz)
{
$ayno=7;
}
if ($ay==Ağustos)
{
$ayno=8;
}
if ($ay==Eylül)
{
$ayno=9;
}
if ($ay==Ekim)
{
$ayno=10;
}
if ($ay==Kasım)
{
$ayno=11;
}
if ($ay==Aralık)
{
$ayno=12;
}

$sql=mysql_query("
insert into 
siteodeme
(gun,ay,yil,tutar,aciklama,ayno)
values
('$gun','$ay','$yil','$tutar','$aciklama','$ayno')",$bagla) or die(mysql_error());


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