<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$daire_no=$_POST["daire_no"];
$isim1=$_POST["isim1"];
$isim2=$_POST["isim2"];
$isim3=$_POST["isim3"];
$isim4=$_POST["isim4"];
$isim5=$_POST["isim5"];
$isim6=$_POST["isim6"];
$kan1=$_POST["kan1"];
$kan2=$_POST["kan2"];
$kan3=$_POST["kan3"];
$kan4=$_POST["kan4"];
$kan5=$_POST["kan5"];
$kan6=$_POST["kan6"];
$dtarih1=$_POST["dtarih1"];
$dtarih2=$_POST["dtarih2"];
$dtarih3=$_POST["dtarih3"];
$dtarih4=$_POST["dtarih4"];
$dtarih5=$_POST["dtarih5"];
$dtarih6=$_POST["dtarih6"];
$egitim1=$_POST["egitim1"];
$egitim2=$_POST["egitim2"];
$egitim3=$_POST["egitim3"];
$egitim4=$_POST["egitim4"];
$egitim5=$_POST["egitim5"];
$egitim6=$_POST["egitim6"];
$meslek1=$_POST["meslek1"];
$meslek2=$_POST["meslek2"];
$meslek3=$_POST["meslek3"];
$meslek4=$_POST["meslek4"];
$meslek5=$_POST["meslek5"];
$meslek6=$_POST["meslek6"];
$derece1=$_POST["derece1"];
$derece2=$_POST["derece2"];
$derece3=$_POST["derece3"];
$derece4=$_POST["derece4"];
$derece5=$_POST["derece5"];
$derece6=$_POST["derece6"];


mysql_query("UPDATE oturanlar SET isim1='$isim1',isim2='$isim2',isim3='$isim3',isim4='$isim4',isim5='$isim5',isim6='$isim6' WHERE daire_no='$daire_no'");
mysql_query("UPDATE oturanlar SET kan1='$kan1',kan2='$kan2',kan3='$kan3',kan4='$kan4',kan5='$kan5',kan6='$kan6' WHERE daire_no='$daire_no'");
mysql_query("UPDATE oturanlar SET dtarih1='$dtarih1',dtarih2='$dtarih2',dtarih3='$dtarih3',dtarih4='$dtarih4',dtarih5='$dtarih5',dtarih6='$dtarih6' WHERE daire_no='$daire_no'");
mysql_query("UPDATE oturanlar SET egitim1='$egitim1',egitim2='$egitim2',egitim3='$egitim3',egitim4='$egitim4',egitim5='$egitim5',egitim6='$egitim6' WHERE daire_no='$daire_no'");
mysql_query("UPDATE oturanlar SET meslek1='$meslek1',meslek2='$meslek2',meslek3='$meslek3',meslek4='$meslek4',meslek5='$meslek5',meslek6='$meslek6' WHERE daire_no='$daire_no'");
mysql_query("UPDATE oturanlar SET derece1='$derece1',derece2='$derece2',derece3='$derece3',derece4='$derece4',derece5='$derece5',derece6='$derece6' WHERE daire_no='$daire_no'");

?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
<font color="#FF0000"><?echo $daireno;?> </font>
</font><font face="Arial" size="2">Dairesine Ait Oturan Bilgileri Başarıyla Güncellenmiştir.</font><font face="Arial" size="2" color="#FF0000"><br>
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