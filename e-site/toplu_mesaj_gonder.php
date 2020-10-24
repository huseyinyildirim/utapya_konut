<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$mesaj=$_POST["toplu_mesaj"];

$dairesor=("SELECT daire_no FROM sitesakin");
$dairesor=mysql_query($dairesor) or die("Sorguda Hata : ".mysql_error());

while ($daireci=mysql_fetch_array($dairesor))
{
$daire_no=$daireci['daire_no'];
$tarih=date('Y-m-d H:i');
$gonderen="Yönetim";

$sql=mysql_query("
insert into 
mesajlar
(mesaj,daire_no,tarih,gonderen)
values
('$mesaj','$daire_no','$tarih','$gonderen')",$bagla) or die(mysql_error());
}

?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
( <?echo $mesaj?> ) İçerikli Mesajınız Tüm Site Sakinlerine Başarıyla Gönderilmiştir..<br><br>
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