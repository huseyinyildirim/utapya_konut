<?
header ('Content-type: text/html; charset=utf-8');
?>
<?
include("baglan.php");
$misafir="";
$adi=$_POST["adi"];
$bos="";

$bilgisor=mysql_query("select * from delegeler where adi like '%$adi%' and misafir='$misafir' and cifti='$bos'");

$sayi=mysql_num_rows($bilgisor);

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div align="center">
  <center>
  <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse"  width="800" id="AutoNumber1">
    <tr>
      <td align="center" colspan="4" bgcolor="#7BA3D7"><b>
      <font face="Arial" size="2">Sorgu Sonucu (<?echo $sayi;?>) kayit bulunmustur.</font></b></td>
    </tr>
    <?php
if($sayi>0){ 
?> 
    <tr>
      <td width="250"><u><b><font face="Arial" size="2">Adi</font></b></u></td>
      <td width="250"><u><b><font face="Arial" size="2">Kurumu</font></b></u>&nbsp;</td>
      <td width="250"><u><b><font face="Arial" size="2">Gorevi</font></b></u>&nbsp;</td>
      <td width="50" align="center"><u><b><font face="Arial" size="2">Islem</font></b></u></td>
    </tr>
<?php          
while ($ggg=mysql_fetch_array($bilgisor))
{
?>     
    <tr>
      <td><font face="Arial" style="font-size: 9pt"><?echo $ggg['adi']?></font>&nbsp;</td>
      <td><font face="Arial" style="font-size: 9pt"><?echo $ggg['kurum']?></font>&nbsp;</td>
      <td><font face="Arial" style="font-size: 9pt"><?echo $ggg['unvan']?></font>&nbsp;</td>
      <td align="center"><font face="Arial" size="2"><a href="Javascript:detay(<?echo $ggg['id']?>)">getir</a>
      </font></td>
    </tr>
<?php          
}
}
else
{
?>     
    <tr>
      <td align="center" colspan="4"><b>
      <font face="Arial" color="#FF0000" style="font-size: 10pt">Belirtmis Oldugunuz Kritere 
      Uygun Kayit Bulunamamistir.</font></b></td>
    </tr>
          <?php
          }
          ?>    
  </table>
  </center>
</div>