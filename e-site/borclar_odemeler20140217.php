<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");
$daire=$_SESSION["kullanici_adi"];

$query = mysql_query("SELECT SUM(borc_tutar) FROM borclar where daire_no='$daire'");  
$row = mysql_fetch_array($query); 
$b_toplam=$row['SUM(borc_tutar)'];

$queryode = mysql_query("SELECT SUM(tutar) FROM odemeler where daire_no='$daire'");  
$row = mysql_fetch_array($queryode); 
$o_toplam=$row['SUM(tutar)'];

$borc_toplam=$b_toplam - $o_toplam;


$borcsor=("SELECT * FROM borclar WHERE daire_no='$daire' order by id DESC");
$borcsor=mysql_query($borcsor) or die("Sorguda Hata : ".mysql_error());

$odemesor=("SELECT * FROM odemeler WHERE daire_no='$daire' order by id DESC");
$odemesor=mysql_query($odemesor) or die("Sorguda Hata : ".mysql_error());

?>
		
<head>
		<meta http-equiv="Content-Language" content="tr">
		<meta http-equiv="Content-Language" content="tr">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body topmargin="0" leftmargin="0">

<div align="center">
  <center>
  <table border="1" cellpadding="0" cellspacing="1" style="border-collapse: collapse" width="940" height="97">
    <tr>
      <td align="center" height="25" bgcolor="#CEDDF0">
      <p align="right"><b><font face="Arial" style="font-size: 13pt">Toplam Borcunuz <?echo $borc_toplam;?> TL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </font></b>
      </td>
    </tr>
    <tr>
      <td align="center" height="29" bgcolor="#FFCC99"><b><font face="Arial">Borçlar ve Ödemeler Tablosu</font></b></td>
    </tr>
    <tr>
      <td align="center" height="41">
      <table border="1" cellpadding="0" cellspacing="1" style="border-collapse: collapse" width="900">
        <tr>
          <td valign="top" width="450" align="center" bgcolor="#CEDDF0"><b>
          <font face="Arial" size="2">Tahakkuk Eden Borçlarınız</font></b></td>
          <td valign="top" width="450" align="center" bgcolor="#CEDDF0"><b>
          <font face="Arial" size="2">Yapmış Olduğunuz Ödemeler</font></b></td>
        </tr>
        <tr>
          <td valign="top">
          <div align="center">
            <center>
            <table border="0" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="420">
              <tr>
                <td width="150" bgcolor="#CCCCCC"><b>
                <font face="Arial" size="2">Borç Türü</font></b></td>
                <td align="center" width="150" bgcolor="#CCCCCC"><b>
                <font face="Arial" size="2">Dönemi</font></b></td>
                <td align="center" width="120" bgcolor="#CCCCCC">
                <p align="right"><b>
                <font face="Arial" size="2">Tutar</font></b></td>
              </tr>
              
<?                
while ($borc=mysql_fetch_array($borcsor))
{

$i+=1;
if ($i%2==1)
{
$renk="#FFFFFF";
}
else
{
$renk="#EBEBEB";
}

?>              
              
              <tr>
                <td width="155"><font face="Arial" size="2"><?echo $borc['borc_turu'];?></font></td>
                <td align="center" width="181"><font face="Arial" size="2">
                <?echo $borc['borc_donemay'];?>-<?echo $borc['borc_donemyil'];?></font></td>
                <td align="right" width="120"><font face="Arial" size="2"><?echo $borc['borc_tutar'];?> TL</font></td>
              </tr>
<?
}
?>                
            </table>
            </center>
          </div>
          </td>
          <td valign="top">
          <div align="center">
            <center>
            <table border="0" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="400">
              <tr>
                <td width="200" bgcolor="#CCCCCC"><font face="Arial" size="2">
                Ödeme Tarihi</font></td>
                <td align="center" bgcolor="#CCCCCC">
                <p align="right"><font face="Arial" size="2">Tutar</font></td>
              </tr>
<?                
while ($odemeci=mysql_fetch_array($odemesor))
{
?>               
              <tr>
                <td><font face="Arial" size="2"><?echo $odemeci['gun'];?> <?echo $odemeci['ay'];?> <?echo $odemeci['yil'];?></font></td>
                <td align="right"><font face="Arial" size="2"><?echo $odemeci['tutar'];?> TL</font></td>
              </tr>
<?
}
?>              
            </table>
            </center>
          </div>
          </td>
        </tr>
      </table>
      </td>
    </tr>
  </table>
  </center>
</div>
<?php
}
else {
Header("Location: index.php");
}
?>