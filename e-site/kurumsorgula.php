<?php
header ('Content-type: text/html; charset=utf-8');
?>
<?
include("baglan.php");
$kurumsor=mysql_query("select * from kurumlar"); 
?>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="800" id="AutoNumber1" height="88">
  <tr>
    <td bgcolor="#7BA3D7" colspan="3" width="794" height="19">
    <p align="center"><b><font face="Arial" style="font-size: 11pt">Kurum 
    Sorgulama</font></b></td>
  </tr>
  <tr>
    
    </td>
    <td width="200" align="center" height="26">
        
    <font face="Arial" size="2">Kurum Seçin :</font></td>
    
    <td width="200" align="center" height="26">
        
 <select size="1" name="kurum_adi1" id="kurum_adi1" style="font-family: Arial; font-size: 10pt">
  <option selected value="999">Lütfen Kurum Bilgisini Seçiniz</option>
  <?php          
while ($kurumcu=mysql_fetch_array($kurumsor))
{
?> 
  <option value="<?echo $kurumcu['kurum']?>"><?echo $kurumcu['kurum']?></option>
<?php          
}
?>   
  </select>    
    
    </td>
    
    <td width="400" align="center" height="26">
    <p align="center">
    
          <input type="button" width="40" value="Kurum Bilgisini Getir" onClick="kbilgigetir()" style="font-family: Arial; font-size: 10pt"></td>
    
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