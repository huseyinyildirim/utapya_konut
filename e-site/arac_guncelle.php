<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$daire_no=$_POST["daire_no"];
$plaka1=$_POST["plaka1"];
$plaka2=$_POST["plaka2"];
$plaka3=$_POST["plaka3"];
$plaka4=$_POST["plaka4"];
$mmodel1=$_POST["mmodel1"];
$mmodel2=$_POST["mmodel2"];
$mmodel3=$_POST["mmodel3"];
$mmodel4=$_POST["mmodel4"];
$tagno1=$_POST["tagno1"];
$tagno2=$_POST["tagno2"];
$tagno3=$_POST["tagno3"];
$tagno4=$_POST["tagno4"];
$tagseri1=$_POST["tagseri1"];
$tagseri2=$_POST["tagseri2"];
$tagseri3=$_POST["tagseri3"];
$tagseri4=$_POST["tagseri4"];
$elektrik=$_POST["elektrik"];
$su=$_POST["su"];
$dogalgaz=$_POST["dogalgaz"];
$isipay=$_POST["isipay"];
$internet=$_POST["internet"];
$acil=$_POST["acil"];
$evcil=$_POST["evcil"];


mysql_query("UPDATE aracsayac SET plaka1='$plaka1',plaka2='$plaka2',plaka3='$plaka3',plaka4='$plaka4' WHERE daire_no='$daire_no'");
mysql_query("UPDATE aracsayac SET mmodel1='$mmodel1',mmodel2='$mmodel2',mmodel3='$mmodel3',mmodel4='$mmodel4' WHERE daire_no='$daire_no'");
mysql_query("UPDATE aracsayac SET tagno1='$tagno1',tagno2='$tagno2',tagno3='$tagno3',tagno4='$tagno4' WHERE daire_no='$daire_no'");
mysql_query("UPDATE aracsayac SET tagseri1='$tagseri1',tagseri2='$tagseri2',tagseri3='$tagseri3',tagseri4='$tagseri4' WHERE daire_no='$daire_no'");
mysql_query("UPDATE aracsayac SET elektrik='$elektrik',su='$su',dogalgaz='$dogalgaz',isipay='$isipay',internet='$internet',acil='$acil',evcil='$evcil' WHERE daire_no='$daire_no'");

?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
<font color="#FF0000"><?echo $daireno;?> </font>
</font><font face="Arial" size="2">Dairesine Ait Araç ve Sayaç Bilgileri Başarıyla Güncellenmiştir.</font><font face="Arial" size="2" color="#FF0000"><br>
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