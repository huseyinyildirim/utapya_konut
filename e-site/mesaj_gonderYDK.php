<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");
$uyesor1=("SELECT * FROM sitesakin");
$uyesor1=mysql_query($uyesor1) or die("Sorguda Hata : ".mysql_error());
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
    <table border="1" cellspacing="1" style="border-collapse: collapse" width="940" id="AutoNumber1" height="153">
      <tr>
        <td width="800" colspan="2" align="center" height="24" class="style2">
        <font face="Arial" size="2">Daireye Mesaj Gönder</font></td>
      </tr>
       
      <tr>
        <td width="790" height="114">
        <div align="center">
          <center>
          <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="587" height="75">
            <tr>
              <td width="153" align="center" height="34"><b><font face="Arial" size="2">
              Daireyi 
              Seçin</font></b></td>
              <td width="278" align="center" height="34"><b>
              <font face="Arial" size="2">Mesajınız</font></b></td>
              <td width="142" align="center" height="34">&nbsp;</td>
            </tr>
            <tr>
              <td align="center" height="34" width="153"><font face="Arial" size="2">
              
<select size="1" name="daire" id="ddaire">
              <option selected value="Daire No">Daire No</option>
<?
while ($uyeler=mysql_fetch_array($uyesor1))
{
?>
              <option value="<?echo $uyeler['daire_no'];?>"><?echo $uyeler['daire_no'];?></option>
<?
}
?>              
              </select>              
              
              
              </font></td>
              <td align="center" height="34" width="278"><font face="Arial" size="2">
              <textarea rows="3" name="S1" id="dmesaj" cols="30"></textarea></font></td>
              <td align="center" height="34" width="142"><font face="Arial" size="2">
              <input type="button" value="Mesajı Gönder" name="B1" onClick="return dmesaj_gonder()" ></font></td>
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