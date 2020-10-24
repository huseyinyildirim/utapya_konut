<?
header ('Content-type: text/html; charset=utf-8');
session_start();
?>
<?

$bos="";
$otel_id=$_GET["otel_id"];
$otel=$_GET["otel"];


include("baglan.php");
$bilgisor=mysql_query("select * from delegeler where otel='$otel_id' and cifti='$bos'");

?>
		<meta http-equiv="Content-Language" content="tr">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div align="center">
  <center>
  <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="800" id="AutoNumber1" height="54">
    <tr>
      <td colspan="5" align="center" height="23" bgcolor="#7BA3D7">
      <p align="left"><b><font face="Arial" style="font-size: 11pt"><?echo $otel?></font></b></td>
    </tr>
    <tr>
      <td colspan="5" align="center" height="18" bgcolor="#7BA3D7"><b>
      <font face="Arial" size="2">Konaklayanlar Listesi</font></b></td>
    </tr>
    <tr>
      <td width="220" height="16"><u><b><font face="Arial" size="2">Adı</font></b></u></td>
      <td width="240" height="16"><u><b><font face="Arial" size="2">Kurum</font></b></u></td>
      <td width="240" height="16"><u><b><font face="Arial" size="2">Unvan</font></b></u></td>
      <td width="100" height="16"><u><b><font face="Arial" size="2">Giriş Tarihi</font></b></u></td>       
      <td width="30" height="16"><u><b><font face="Arial" size="2">Oda</font></b></u></td>
    </tr>
<?php          
while ($ggg=mysql_fetch_array($bilgisor))
{
?>     
    <tr>
      <td height="15"><font face="Arial" style="font-size: 9pt"><?echo $ggg['adi']?></font></td>
      <td height="15"><font face="Arial" style="font-size: 9pt"><?echo $ggg['kurum']?></font></td>
      <td height="15"><font face="Arial" style="font-size: 9pt"><?echo $ggg['unvan']?></font></td>
      <td height="15"><font face="Arial" style="font-size: 9pt"><?echo $ggg['tarih']?></font></td>      
      <td height="15"><font face="Arial" style="font-size: 9pt"><?echo $ggg['oda']?></font></td>
    </tr>
          <?php
          }
          ?>      
  </table>
  </center>
</div>