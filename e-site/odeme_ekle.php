<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$daire_no=$_POST["odemey_daireno"];
$gun=$_POST["odemey_gun"];
$ay=$_POST["odemey_ay"];
$yil=$_POST["odemey_yil"];
$tutar=$_POST["odemey_tutar"];
$tutar=str_replace(',','.',$tutar);

$sql=mysql_query("
insert into 
odemeler
(daire_no,gun,ay,yil,tutar)
values
('$daire_no','$gun','$ay','$yil','$tutar')",$bagla) or die(mysql_error());

?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br><br>

</font><font face="Arial" style="font-size: 11pt"><?echo $daire_no;?></font><font face="Arial" size="2" color="#FF0000"> Numaralı Daireye Ödeme Kaydı Yapılmıştır.<br><br>

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