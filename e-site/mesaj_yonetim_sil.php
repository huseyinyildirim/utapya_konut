<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");
$mesaj_id=$_GET["mesaj_id"];
$okundu=1;
mysql_query("UPDATE mesajlar SET okundu='$okundu' WHERE id='$mesaj_id'");
$silmesaj=("SELECT * FROM mesajlar WHERE id='$mesaj_id'");
$silmesaj=mysql_query($silmesaj) or die("Sorguda Hata : ".mysql_error());
while ($mesajici=mysql_fetch_array($silmesaj))
{
$mesaj_icerik1=$mesajici['mesaj'];
}
?><head>
		<meta http-equiv="Content-Language" content="tr">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<table width="100%" cellpadding="1" cellspacing="1" border="1">
<tr>
<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
Yönetiminin Size Göndermiş Olduğu (  </font><font face="Arial" size="2"> <?echo $mesaj_icerik1?> 
</font><font face="Arial" size="2" color="#FF0000">) Mesajı Başarıyla Silinmiştir.<br>
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