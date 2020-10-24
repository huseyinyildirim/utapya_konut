<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$ay=date('m');
$yil=date('Y');
$yapildi="1";

$dairesor=("SELECT daire_no FROM sitesakin");
$dairesor=mysql_query($dairesor) or die("Sorguda Hata : ".mysql_error());

while ($daireci=mysql_fetch_array($dairesor))
{
$daire_no=$daireci['daire_no'];
$borc_turu="Site Aidatı";
$borc_tutar=300;
$borc_donemay=date('m');
$borc_donemyil=date('Y');

$sql=mysql_query("
insert into 
borclar
(daire_no,borc_turu,borc_donemay,borc_donemyil,borc_tutar)
values
('$daire_no','$borc_turu','$borc_donemay','$borc_donemyil','$borc_tutar')",$bagla) or die(mysql_error());
}

$sql=mysql_query("
insert into 
aylik_aidat
(ay,yil,yapildi)
values
('$ay','$yil','$yapildi')",$bagla) or die(mysql_error());

$yonetim="Yonetim";
mysql_query("DELETE FROM borclar WHERE daire_no='$yonetim'");


?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
(<?echo $yil?> / <?echo $yil?>) Dönemi Toplu Aidat Borçlandırması Başarıyla Yapılmıştır..<br><br>
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