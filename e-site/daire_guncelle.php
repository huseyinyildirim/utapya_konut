<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$daireno=$_POST["ubdaireno"];
$ad_soyad=$_POST["ubadsoyad"];
$telefon=$_POST["ubtelefon"];
$eposta=$_POST["ubeposta"];
$sifre=$_POST["ubsifre"];
$teb_adres=$_POST["ubteb_adres"];
$telefon2=$_POST["ubtelefon2"];
$istel=$_POST["ubistel"];
$evtel=$_POST["ubevtel"];

mysql_query("UPDATE sitesakin SET ad_soyad='$ad_soyad',telefon='$telefon',eposta='$eposta',sifre='$sifre',teb_adres='$teb_adres',telefon2='$telefon2',istel='$istel',evtel='$evtel' WHERE daire_no='$daireno'");

?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
<font color="#FF0000"><?echo $daireno;?> </font>
</font><font face="Arial" size="2">Dairesine Ait Bilgiler Başarıyla Güncellenmiştir.</font><font face="Arial" size="2" color="#FF0000"><br>
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