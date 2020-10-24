<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$yon_ad1=$_POST["yon_ad1"];
$yon_ad2=$_POST["yon_ad2"];
$yon_ad3=$_POST["yon_ad3"];
$yon_cep1=$_POST["yon_cep1"];
$yon_cep2=$_POST["yon_cep2"];
$yon_cep3=$_POST["yon_cep3"];
$yon_daire1=$_POST["yon_daire1"];
$yon_daire2=$_POST["yon_daire2"];
$yon_daire3=$_POST["yon_daire3"];
$per_ad1=$_POST["per_ad1"];
$per_ad2=$_POST["per_ad2"];
$per_ad3=$_POST["per_ad3"];
$per_ad4=$_POST["per_ad4"];
$per_ad5=$_POST["per_ad5"];
$per_ad6=$_POST["per_ad6"];
$per_ad7=$_POST["per_ad7"];
$per_gorev1=$_POST["per_gorev1"];
$per_gorev2=$_POST["per_gorev2"];
$per_gorev3=$_POST["per_gorev3"];
$per_gorev4=$_POST["per_gorev4"];
$per_gorev5=$_POST["per_gorev5"];
$per_gorev6=$_POST["per_gorev6"];
$per_gorev7=$_POST["per_gorev7"];
$banka_ad1=$_POST["banka_ad1"];
$banka_ad2=$_POST["banka_ad2"];
$banka_ad3=$_POST["banka_ad3"];
$banka_sube1=$_POST["banka_sube1"];
$banka_sube2=$_POST["banka_sube2"];
$banka_sube3=$_POST["banka_sube3"];
$banka_hesap1=$_POST["banka_hesap1"];
$banka_hesap2=$_POST["banka_hesap2"];
$banka_hesap3=$_POST["banka_hesap3"];
$iban1=$_POST["iban1"];
$iban2=$_POST["iban2"];
$iban3=$_POST["iban3"];
$den_ad1=$_POST["den_ad1"];
$den_ad2=$_POST["den_ad2"];
$den_ad3=$_POST["den_ad3"];
$hesap_ad1=$_POST["hesap_ad1"];
$hesap_ad2=$_POST["hesap_ad2"];
$hesap_ad3=$_POST["hesap_ad3"];


mysql_query("UPDATE genel_bilgiler SET yon_ad1='$yon_ad1',yon_ad2='$yon_ad2',yon_ad3='$yon_ad3',yon_cep1='$yon_cep1',yon_cep2='$yon_cep2',yon_cep3='$yon_cep3'");
mysql_query("UPDATE genel_bilgiler SET den_ad1='$den_ad1',den_ad2='$den_ad2',den_ad3='$den_ad3',den_cep1='$den_cep1',den_cep2='$den_cep2',den_cep3='$den_cep3'");
mysql_query("UPDATE genel_bilgiler SET den_daire1='$den_daire1',den_daire2='$den_daire2',den_daire3='$den_daire3'");
mysql_query("UPDATE genel_bilgiler SET yon_daire1='$yon_daire1',yon_daire2='$yon_daire2',yon_daire3='$yon_daire3',banka_ad1='$banka_ad1',banka_ad2='$banka_ad2',banka_ad3='$banka_ad3'");
mysql_query("UPDATE genel_bilgiler SET banka_sube1='$banka_sube1',banka_sube2='$banka_sube2',banka_sube3='$banka_sube3',banka_hesap1='$banka_hesap1',banka_hesap2='$banka_hesap2',banka_hesap3='$banka_hesap3'");
mysql_query("UPDATE genel_bilgiler SET iban1='$iban1',iban2='$iban2',iban3='$iban3',per_ad1='$per_ad1',per_ad2='$per_ad2',per_ad3='$per_ad3',hesap_ad1='$hesap_ad1',hesap_ad2='$hesap_ad2',hesap_ad3='$hesap_ad3'");
mysql_query("UPDATE genel_bilgiler SET per_ad4='$per_ad4',per_ad5='$per_ad5',per_ad6='$per_ad6',per_ad7='$per_ad7',per_gorev1='$per_gorev1',per_gorev2='$per_gorev2'");
mysql_query("UPDATE genel_bilgiler SET per_gorev3='$per_gorev3',per_gorev4='$per_gorev4',per_gorev5='$per_gorev5',per_gorev6='$per_gorev6',per_gorev7='$per_gorev7'");
?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
<font color="#FF0000"><?echo $daireno;?> </font>
</font><font face="Arial" size="2">Site Bilgileri Başarıyla Güncellenmiştir.</font><font face="Arial" size="2" color="#FF0000"><br>
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