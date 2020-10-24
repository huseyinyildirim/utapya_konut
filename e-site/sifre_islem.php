<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");
$uyesor1=("SELECT * FROM ank_uyeler");
$uyesor1=mysql_query($uyesor1) or die("Sorguda Hata : ".mysql_error());
$kod=1;
$degistirensor=("SELECT * FROM ank_uyeler where kod='$kod'");
$degistirensor=mysql_query($degistirensor) or die("Sorguda Hata : ".mysql_error());
$degissayi=mysql_num_rows($degistirensor);
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
    <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="800" id="AutoNumber1" height="153">
      <tr>
        <td width="800" colspan="2" align="center" height="24" class="style2">
        <font face="Arial" size="2">Şifre İşlemleri</font></td>
      </tr>
       
      <tr>
        <td width="790" height="114">
        <div align="center">
          <center>
          <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="450" height="75">
            <tr>
              <td width="150" align="center" height="34"><b><font face="Arial" size="2">
              1-Daireyi 
              Seçin</font></b></td>
              <td width="150" align="center" height="34"><b><font face="Arial" size="2">
              2-Yeni 
              Şifreyi Girin</font></b></td>
              <td width="150" align="center" height="34"><b><font face="Arial" size="2">
              3-Butona 
              Basın</font></b></td>
            </tr>
            <tr>
              <td align="center" height="34"><font face="Arial" size="2">
<select size="1" name="daire" id="ydaire">
<option selected value="Daire No">Daire No</option>
<?
while ($uyeler=mysql_fetch_array($uyesor1))
{
?>
<option value="<?echo $uyeler['daire'];?>"><?echo $uyeler['daire'];?></option>
<?
}
?>              
</select>              
              </font></td>
              <td align="center" height="34"><font face="Arial" size="2"><input type="text" name="sifre" id="ysifre" size="10"></font></td>
              <td align="center" height="34"><font face="Arial" size="2"><input type="button" value="Şifreyi Değiştir" name="B1" onClick="return ysifre_degistir()" ></font></td>
            </tr>
          </table>
          </center>
        </div>
        
<div align="center">
          <center>
          <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="450">
            <tr>
              <td width="450" align="center" colspan="3"><b>
              <font face="Arial" size="2">Şifresini Değiştirenlerin Sayısı : <?echo $degissayi;?></font></b></td>
            </tr>
          </table>
          </center>
        </div>        
        
        
        </td>
        
      </tr>
    
      <tr>
        <td width="800" align="center" colspan="2" height="4">
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