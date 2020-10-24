<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$id=$_GET["mesaj_id"];
$cevap="";
$cevap="0";
$cevap_tarih="0000-00-00 00:00:00";


mysql_query("UPDATE mesajlar SET cevap_metni='$cevap',cevap='$cevap',cevap_tarih='$cevap_tarih' WHERE id='$id'");


?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
Mesaja Ait Cevap Başarıyla Silinmiştir.<br>
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