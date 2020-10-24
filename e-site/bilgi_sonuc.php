<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
?>
		<meta http-equiv="Content-Language" content="tr">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<div align="center">
  <center>
  <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="800" id="AutoNumber1" height="49">
    <tr>
      <td colspan="6" align="center" height="18" bgcolor="#7BA3D7"><b>
      <font face="Arial" size="2">Sorgu Sonucu</font></b></td>
    </tr>
    <tr>
      <td width="200" height="16"><u><b><font face="Arial" size="2">Adı</font></b></u></td>
      <td width="200" height="16"><u><b><font face="Arial" size="2">Kurum</font></b></u></td>
      <td width="180" height="16"><u><b><font face="Arial" size="2">Unvan</font></b></u></td>
      <td width="90" height="16"><u><b><font face="Arial" size="2">Otel</font></b></u></td>
      <td width="100" height="16"><u><b><font face="Arial" size="2">Giriş Tarihi</font></b></u></td>      
      <td width="30" height="16"><u><b><font face="Arial" size="2">Oda</font></b></u></td>
    </tr>
<?php          
while ($ggg=mysql_fetch_array($bilgisor))
{
$otel_id=$ggg['otel'];
$otelsor=mysql_query("select * from oteller where id='$otel_id'"); 
while ($ooo=mysql_fetch_array($otelsor))
{
$otel=$ooo['otel'];
}
?>     
    <tr>
      <td height="15"><font face="Arial" style="font-size: 9pt"><?echo $ggg['adi']?></font></td>
      <td height="15"><font face="Arial" style="font-size: 9pt"><?echo $ggg['kurum']?></font></td>
      <td height="15"><font face="Arial" style="font-size: 9pt"><?echo $ggg['unvan']?></font></td>
      <td height="15"><font face="Arial" style="font-size: 9pt"><?echo $otel;?></font></td>
      <td height="15"><font face="Arial" style="font-size: 9pt"><?echo $ggg['tarih']?></font></td>      
      <td height="15"><font face="Arial" style="font-size: 9pt"><?echo $ggg['oda']?></font></td>
    </tr>
          <?php
          $otel="";
          }
          ?>      
  </table>
  </center>
</div>
<?php
}
else {
Header("Location: index.php");
}
?>