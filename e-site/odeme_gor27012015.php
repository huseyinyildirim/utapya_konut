<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$ay=$_POST["odemegor_ay"];
$yil=$_POST["odemegor_yil"];

$odemesor=("SELECT * FROM siteodeme where ay='$ay' and yil='$yil'");
$odemesor=mysql_query($odemesor) or die("Sorguda Hata : ".mysql_error());

$query = mysql_query("SELECT SUM(tutar) FROM siteodeme");  
$row = mysql_fetch_array($query); 
$odeme_toplami=$row['SUM(tutar)'];

?><head>

		<meta http-equiv="Content-Language" content="tr">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style type="text/css">
.style2 {
				font-weight: bold;
				border-width: 1px;
				background-color: #FFCC99;
}
        </style>
</head>




		<form method="POST" action="--WEBBOT-SELF--">
<div align="center">
    <center>
    <table border="1" cellspacing="1" style="border-collapse: collapse" width="940" id="AutoNumber1">
             
      <tr>
        <td width="930">


        <div align="center">
          <center>
          <table border="1" cellspacing="1"  style="border-collapse: collapse"  width="900" height="70">
            <tr>
              <td colspan="3" align="center" bgcolor="#FFCC99" width="890" height="25">
              <b><font face="Arial" size="2"><?echo $ay?> / <?echo $yil?> Dönemine Ait 
              Site Ödemeleri </font></b></td>
            </tr>
            <tr>
              <td width="119" height="16"><b><font face="Arial" size="2">Tarih</font></b></td>
              <td width="424" align="left" height="16"><b>
              <font face="Arial" size="2">Açıklama</font></b></td>
              <td align="center" width="82" height="16">
              <p align="center"><b><font face="Arial" size="2">Tutar</font></b></td>
            </tr>

<?
while ($odemeci=mysql_fetch_array($odemesor))
{
?> 
            
            <tr>
              <td width="119" height="19"><font face="Arial" style="font-size: 9pt"><?echo $odemeci['gun'];?> <?echo $odemeci['ay'];?> <?echo $odemeci['yil'];?></font>&nbsp;</td>
              <td width="424" align="left" height="19"><font face="Arial" style="font-size: 9pt"><?echo $odemeci['aciklama'];?></font>&nbsp;</td>
              <td align="center" width="82" height="19"><font face="Arial" style="font-size: 9pt"><?echo $odemeci['tutar'];?> TL</font>&nbsp;</td>
            </tr>
<?
$toplam=$toplam+$odemeci['tutar'];
}
?>            
            </table>
          </center>
        </div>



        </td>
        
      </tr>
    
      <tr>
        <td width="930" align="center">

        </td>
      </tr>
    </table>
    </center>
  </div>
</form>
<?php
}
else {
Header("Location: index.php");
}
?>