<?
header ('Content-type: text/html; charset=utf-8');
session_start();

include("baglan.php");

$gonderen=$_POST["gonderen"];
$sifre=$_POST["sifre"];
$kod="1";

mysql_query("UPDATE ank_uyeler SET sifre='$sifre',kod ='$kod' WHERE daire='$gonderen'");



?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000">Sistem Giriş Şifreniz Başarıyla Değiştirilmiştir.</font></b><p align="center">
<b><font face="Arial" size="2" color="#FF0000">Sisteme Girişte Sorun Yaşarsanız 
Lütfen Site Müdürü İle İrtibat Kurunuz.</font></b><br>
		</td>
	</tr>
</table>