<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$daire_no=$_POST["daire_no"];
$isim=$_POST["isim"];
$ceptel=$_POST["ceptel"];
$isadres=$_POST["isadres"];
$ceptel2=$_POST["ceptel2"];
$eposta=$_POST["eposta"];
$evtel=$_POST["evtel"];
$istel=$_POST["istel"];

mysql_query("UPDATE kiraci SET isim='$isim',ceptel='$ceptel',isadres='$isadres',ceptel2='$ceptel2',eposta='$eposta',evtel='$evtel',istel='$istel' WHERE daire_no='$daire_no'");

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