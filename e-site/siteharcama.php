<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");
$sorgumesaj=("SELECT * FROM sitesakin");
$sorgumesaj=mysql_query($sorgumesaj) or die("Sorguda Hata : ".mysql_error());
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




		<div align="center">
    <center>
    <table border="1" cellspacing="1" style="border-collapse: collapse" width="940" id="AutoNumber1" height="88">
      <tr>
        <td width="800" align="center" height="25" class="style2">
        <font face="Arial" size="2">Site Yönetimince Yapılan Harcamalar</font></td>
      </tr>
       
      <tr>
        <td width="790" height="45" bgcolor="#CCCCCC">
        <font face="Arial" size="2">
        
        <div align="center">
          <center>
          <form>
          <table border="0" cellspacing="1" style="border-collapse: collapse" width="579">
            <tr>
              <td align="center" width="136"><font size="2">
              
<select size="1" name="gor_ay" id="gor_ay">
              <option selected value="Ay">Ay</option>            
              <option value="Ocak">Ocak</option>
              <option value="Şubat">Şubat</option>
              <option value="Mart">Mart</option>
              <option value="Nisan">Nisan</option>
              <option value="Mayıs">Mayıs</option>
              <option value="Haziran">Haziran</option>
              <option value="Temmuz">Temmuz</option>
              <option value="Ağustos">Ağustos</option>
              <option value="Eylül">Eylül</option>
              <option value="Ekim">Ekim</option>
              <option value="Kasım">Kasım</option>
              <option value="Aralık">Aralık</option>
              </select>              
              
              </font></td>
              <td align="center" width="116"><font size="2">
              
<select size="1" name="gor_yil" id="gor_yil">
              <option selected value="Yıl">Yıl</option>            
              <option value="2015">2015</option>
              <option value="2014">2014</option> 			              
              </select>              
              
              </font></td>
              <td align="right" width="227">
              <p align="center"><font face="Arial" size="2">
        
              <input type="button" value="Seçilen Döneme Ait Site Ödemelerini Getir" name="B1" onClick="return site_odeme_gor()"></font></td>
            </tr>
          </table>
          </form>
          </center>
        </div>        
        
        </font></td>
        
      </tr>
    
      <tr>
    <td colspan="3" width="794" height="32">
    <p align="center">
    
    
<div id="sorgu_Yukleniyor" style="display:none;">
<img src="image/indicator.gif" width="32" height="32"></div>
<div id="sorgu_Sonuc"></div>    
    
    
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