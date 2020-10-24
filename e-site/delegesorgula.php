<?php
header ('Content-type: text/html; charset=utf-8');

?>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="800" id="AutoNumber1">
  <tr>
    <td bgcolor="#7BA3D7" colspan="3" width="794">
    <p align="center"><b><font face="Arial" style="font-size: 11pt">Delege 
    Sorgulama</font></b></td>
  </tr>
  <tr>
    
    </td>
    <td width="200" align="center">
        
    <font face="Arial" size="2">Delege Adı :</font></td>
    
    <td width="200" align="center">
        
    <input type="text" name="adibilgi" id="adibilgi" size="30" style="font-family: Arial; font-size: 10pt"></td>
    
    <td width="400" align="center">
    <p align="center">
    
          <input type="button" width="40" value="Delege Bilgisini Getir" onClick="bilgigetir()" style="font-family: Arial; font-size: 10pt"></td>
    
  </tr>
  <tr>
    <td colspan="3" width="794">
    <p align="center">
    
    
<div id="sorgu_Yukleniyor" style="display:none;">
<img src="image/indicator.gif" width="32" height="32"></div>
<div id="sorgu_Sonuc"></div>    
    
    
    </td>
  </tr>
</table>