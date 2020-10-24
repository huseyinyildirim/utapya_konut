<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");
$sorgumesaj=("SELECT * FROM sitesakin where kod='0'");
$sorgumesaj=mysql_query($sorgumesaj) or die("Sorguda Hata : ".mysql_error());
?><head>

		<meta http-equiv="Content-Language" content="tr">
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


<div align="center">
  <center>
  <table border="1" cellspacing="1" cellpadding="1" bordercolor="#111111" width="900" height="71">
    <tr>
      <td colspan="5" align="center" width="892" height="24">
      <font face="Arial" size="3">TÜM DAİRELER BORÇ-ÖDEME LİSTESİ  (<?echo date('d/m/y  H:i');?>)</font></td>
    </tr>
    <tr>
      <td width="80" align="center" height="16" bgcolor="#C0C0C0"><b>
      <font face="Arial" size="2">Daire No</font></b></td>
      <td width="420" height="16" bgcolor="#C0C0C0"><b>
      <font face="Arial" size="2">Konut Sahibi</font></b></td>      
      <td width="150" height="16" align="center" bgcolor="#C0C0C0"><b>
      <font face="Arial" size="2">Borç Toplamı</font></b></td>
      <td width="150" height="16" align="center" bgcolor="#C0C0C0"><b>
      <font face="Arial" size="2">Ödeme Toplamı</font></b></td>
      <td width="100" height="16" align="center" bgcolor="#C0C0C0"><b>
      <font face="Arial" size="2">Bakiye</font></b></td>
    </tr>
<?
$toplam_bakiye=0;
while ($birim=mysql_fetch_array($sorgumesaj))
{
$daire=$birim['daire_no'];

$query = mysql_query("SELECT SUM(borc_tutar) FROM borclar where daire_no='$daire'");  
$row = mysql_fetch_array($query); 
$borc_toplam=$row['SUM(borc_tutar)'];

$queryode = mysql_query("SELECT SUM(tutar) FROM odemeler where daire_no='$daire'");  
$row = mysql_fetch_array($queryode); 
$odeme_toplam=$row['SUM(tutar)'];

$bakiye=$borc_toplam - $odeme_toplam;

$toplam_bakiye=$toplam_bakiye+$bakiye;

?>    
    <tr>
      <td width="80" align="center" height="16"><b><font face="Arial" size="2"><?echo $birim['daire_no'];?></font></b></td>
      <td width="420" height="16"><font face="Arial" size="2"><?echo $birim['ad_soyad'];?> - <?echo $birim['telefon'];?></font></td>      
      <td width="150" height="16" align="center"><font face="Arial" size="2"><?echo $borc_toplam;?> 
      TL</font></td>
      <td width="150" height="16" align="center"><font face="Arial" size="2"><?echo $odeme_toplam;?> 
      TL</font></td>
      <td width="100" height="16" align="center"><b><font face="Arial" size="2"><?echo $bakiye;?> 
      TL</font></b></td>
    </tr>
<?
}
?> 
    <tr>
      <td width="80" align="center" height="16"><b><font face="Arial" size="2"></font></b></td>
      <td width="420" height="16"><font face="Arial" size="2"></font></td>      
      <td width="300" height="16" align="center" colspan="2"><b>
      <font face="Arial" size="3">Bakiye Toplamı</font></b></td>
      <td width="100" height="16" align="center"><b><font face="Arial" size="3"><?echo $toplam_bakiye;?> 
      TL</font></b></td>
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