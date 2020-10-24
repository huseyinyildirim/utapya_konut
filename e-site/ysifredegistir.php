<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$daire=$_POST["daire"];
$sifre=$_POST["sifre"];
$kod=0;

mysql_query("UPDATE ank_uyeler SET sifre='$sifre',kod='$kod' WHERE daire='$daire'");

?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
<?echo $daire ?> Numaralı Dairenin Şifresi <?echo $sifre ?> Olarak Başarıyla Değiştirilmiştir.<br>
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