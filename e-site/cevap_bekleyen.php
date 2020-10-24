<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");
$daire_no=$_SESSION["kullanici_adi"];
$cevap=0;
$yonetim="Yonetim";
$bekmesaj=("SELECT * FROM mesajlar WHERE cevap='$cevap' and daire_no='$yonetim'");
$bekmesaj=mysql_query($bekmesaj) or die("Sorguda Hata : ".mysql_error());
$sayibekmesaj=mysql_num_rows($bekmesaj);

$daire_no=$_SESSION["kullanici_adi"];
$cevap=1;
$mmesaj=("SELECT * FROM mesajlar WHERE cevap='$cevap'");
$mmesaj=mysql_query($mmesaj) or die("Sorguda Hata : ".mysql_error());
$sayimmesaj=mysql_num_rows($mmesaj);



?><head>
		<meta http-equiv="Content-Language" content="tr">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.style1 {
				font-weight: bold;
				border-width: 1px;
}
.style2 {
				text-align: center;
				font-family: Arial;
				font-size: small;
				color: #FF0000;
}
.style3 {
				font-size: 11pt;
}
.style4 {
				text-align: center;
}
.style5 {
				font-size: 11pt;
				color: #FF0000;
}
.style6 {
				color: #FF0000;
}
        </style>
</head>


		
<div align="center">
  <center>
  <table border="1" cellspacing="1" style="border-collapse: collapse" width="940" id="AutoNumber1" height="35">
 
    <tr>
      <td colspan="6" align="center" bgcolor="#7BA3D7" style="height: 1" class="style1">
      <font face="Arial" size="2">Cevap Bekleyen Mesajlar</font></td>
    </tr>
</table>

  <div align="center">
    <center>
    <table border="1" cellspacing="1" style="border-collapse: collapse" width="940">
<?
if($sayibekmesaj==""){
?> 

      <tr>
        <td width="930" height="19" colspan="4">
        <p align="center"><br>
        <b><font face="Arial" size="2" color="#FF0000">Sistemde Cevap Bekleyen Mesaj Bulunmamaktadır.</font></b><br>
&nbsp;</td>
      </tr>
<?
}
else
{
?>      

      <tr>
        <td width="400" height="19">
        <font face="Arial" style="font-size: 9pt; font-weight: 700">Mesaj</font></td>
        <td width="150" height="19">
        <font face="Arial" style="font-size: 9pt; font-weight: 700">Gönderim 
        tarihi</font></td>
        <td width="150" height="19" align="center">
        <span style="font-weight: 700">
        <font face="Arial" style="font-size: 9pt">Gönderen</font></span></td>
        <td width="100" height="19" align="center">&nbsp;
        </td>
      </tr>
<?
while ($bekleyen=mysql_fetch_array($bekmesaj))
{
?>      
      <tr>
        <td height="19"><font face="Arial" style="font-size: 9pt"><?echo $bekleyen['mesaj'];?></font></td>
        <td height="19"><font face="Arial" style="font-size: 9pt"><?echo $bekleyen['tarih'];?></font></td>
        <td height="19" align="center"><font face="Arial" style="font-size: 9pt"><?echo $bekleyen['gonderen'];?>
        <input type="hidden" value="<?echo $bekleyen['id'];?>" name="mesaj_id" id="mesaj_id" size="20" ></font></td>
        <td height="19" align="center"><font face="Arial" style="font-size: 9pt">  <input type="button" value="Cevapla" name="cev" onClick="return cevapla(<?echo $bekleyen['id'];?>)" >  </font></td>
      </tr>
<?
}
}
?>      
    </table>
    </center>
  </div>
  </center>
</div>





<div align="center">
  <center>
  <table border="1" cellspacing="1" style="border-collapse: collapse" width="940" id="AutoNumber1" height="30">
 
    <tr>
      <td colspan="6" align="center" bgcolor="#7BA3D7" style="height: 1" class="style1">
      <font face="Arial" size="2">Mesaj Arşivi</font></td>
    </tr>
</table>

  <div align="center">
    <center>
    <table border="1" cellspacing="1" cellspacing="1" style="border-collapse: collapse" width="930">
      <tr>
        <td width="60" align="center"><b><font face="Arial" size="2">Kimden</font></b></td>
        <td width="250" align="left"><b><font face="Arial" size="2">Mesaj</font></b></td>
        <td width="80" align="center"><b><font face="Arial" size="2">Gönd. 
        Tarih</font></b></td>
        <td width="250" align="left"><b><font face="Arial" size="2">Verilen 
        Cevap</font></b></td>
        <td width="80" align="center"><b><font face="Arial" size="2">Cvp. Tarih</font></b></td>
        <td width="50" align="center"><b><font face="Arial" size="2">İşlem</font></b></td>
      </tr>
<?
while ($marsiv=mysql_fetch_array($mmesaj))
{
?>       
      <tr>
        <td width="60" align="center">
        <font face="Arial" style="font-size: 10pt; font-weight: 700"><?echo $marsiv['gonderen'];?></font>&nbsp;</td>
        <td width="250" align="left"><font face="Arial" style="font-size: 9pt"><?echo $marsiv['mesaj'];?></font>&nbsp;</td>
        <td width="80" align="center">
        <font face="Arial" style="font-size: 9pt"><?echo $marsiv['tarih'];?></font>&nbsp;</td>
        <td width="250" align="left"><font face="Arial" style="font-size: 9pt"><?echo $marsiv['cevap_metni'];?></font>&nbsp;</td>
        <td width="80" align="center">
        <font face="Arial" style="font-size: 9pt"><?echo $marsiv['cevap_tarih'];?></font>&nbsp;</td>
        <td width="50" align="center"><font face="Arial" style="font-size: 9pt">
        <input type="button" value="Cvp Sil" name="csil" onClick="return csil(<?echo $marsiv['id'];?>)" >
        </font></td>
      </tr>
<?
}
?>      
    </table>
    </center>
  </div>
&nbsp;</center>
</div>






<?php
}
else {
Header("Location: index.php");
}
?>