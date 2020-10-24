<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");
$tarihay=date('m');
$tarihyil=date('Y');
$yapildi="1";
$toplusor=("SELECT * FROM aylik_aidat WHERE ay='$tarihay' and yil='$tarihyil' and yapildi='$yapildi'");
$toplusor=mysql_query($toplusor) or die("Sorguda Hata : ".mysql_error());
$sayitoplusor=mysql_num_rows($toplusor);
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
        <td width="900" colspan="2" align="center" height="24" class="style2">
        <font face="Arial" size="2">Toplu Aidat Borçlandırma</font></td>
      </tr>
       
      <tr>
        <td width="900" height="114">
        <div align="center">
          <center>
          <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="592" height="75">
          
          
<?
if($sayitoplusor==0)
{
?>          
            <tr>
              <td width="578" align="center" height="34"><b><font face="Arial" size="2">
            (<?echo $tarihyil?> - <?echo $tarihay?>) Dönemi İçin Toplu Aidat Borçlandırması Yapmanız Gerekmektedir</font></b></td>
            </tr>
            <tr>
              <td align="center" height="34" width="578"><font face="Arial" size="2">
              <input type="button" value="Bu Döneme Ait Toplu Borçlandırmayı Yap" name="B1" onClick="return toplu_borcisle()" ></font></td>
            </tr>            
<?
}
else
{
?>             
            <tr>
              <td width="578" align="center" height="34"><b><font face="Arial" size="2">
            (<?echo $tarihyil?> - <?echo $tarihay?>) Dönemi İçin Toplu Aidat Borçlandırması Yapılmıştır.</font></b></td>
            </tr>            
<?
}
?>            

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