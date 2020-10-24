<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");
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
        <font face="Arial" size="2">Raporlama</font></td>
      </tr>
       
      <tr>
        <td width="790" height="45" bgcolor="#CCCCCC">
        <font face="Arial" size="2">
        
        <div align="center">
          <center>
          <form>
          <table border="0" cellspacing="1" style="border-collapse: collapse" width="500">
            <tr>

              <td align="right" width="300">
              <p align="center"><font face="Arial" size="2">
        
              <input type="button" value="Tüm Daireler Borç - Ödeme Listesi" name="B1" onClick="return tumdaireborcodeme_getir()"></font></td>
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