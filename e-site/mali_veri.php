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




		<form method="POST" action="--WEBBOT-SELF--">
<div align="center">
    <center>
    <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="800" id="AutoNumber1" height="88">
      <tr>
        <td width="800" align="center" height="25" class="style2">
        <font face="Arial" size="2">Günlük Faaliyet Raporu</font></td>
      </tr>
       
      <tr>
        <td width="790" height="45">
        <font face="Arial" size="2">
        
        <div align="center">
          <center>
          <table border="1" cellspacing="1" style="border-collapse: collapse" width="500">
            <tr>
              <td align="center" width="200"><font face="Arial" size="2">
        
<select size="1" name="odeme_gun" id="gunf">
              <option value="Gün">Gün</option>            
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
              </select> <select size="1" name="odeme_ay" id="ayf">
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
              </select> <select size="1" name="odeme_yil" id="yilf">
              <option selected value="Yıl">Yıl</option>            
              <option value="2013">2013</option>
              </select></font></td>
              <td align="right" width="300">
              <p align="center"><font face="Arial" size="2">
        
              <input type="button" value="Seçtiğim Güne Ait Faaliyetleri Listele" name="B1" onClick="return faaliyetf()"></font></td>
            </tr>
          </table>
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
</form>
<?php
}
else {
Header("Location: index.php");
}
?>