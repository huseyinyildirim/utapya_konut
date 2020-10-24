<?php
header ('Content-type: text/html; charset=utf-8');
?>
<?php
include("baglan.php");
$otelsor=mysql_query("select * from oteller"); 

?>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="800" id="AutoNumber1">
  <tr>
    <td bgcolor="#7BA3D7" width="794">
    <p align="center"><b><font face="Arial" style="font-size: 11pt">Otel Durumu</font></b></td>
  </tr>
  <tr>
    
    <td width="800" align="center">
        
    <div align="center">
      <center>
      <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="600" id="AutoNumber2">
        <tr>
          <td align="left"><u><b><font face="Arial" size="2">Otel</font></b></u></td>
          <td width="100" align="center"><u><b><font face="Arial" size="2">Tek 
          Oda</font></b></u></td>
          <td width="100" align="center"><u><b><font face="Arial" size="2">Çift 
          Oda</font></b></u></td>
          <td width="100" align="center"><u><b><font face="Arial" size="2">
          Toplam</font></b></u></td>
        </tr>
<?php          
while ($ggg=mysql_fetch_array($otelsor))
{
$otel_id=$ggg['id'];
$tek="Tek";
$cift="Çift";
$bos="";
$teksor=mysql_query("select * from delegeler where otel='$otel_id' and oda='$tek' and cifti='$bos'");
$teksayi=mysql_num_rows($teksor);
$ciftsor=mysql_query("select * from delegeler where otel='$otel_id' and oda='$cift' and cifti='$bos'");
$ciftsayi=mysql_num_rows($ciftsor);
$otel_toplam=mysql_query("select * from delegeler where otel='$otel_id' and cifti='$bos'");
$otelsayi=mysql_num_rows($otel_toplam);
?>        
        <tr>
          <td align="left"><font face="Arial" size="2">
          <a target="_blank" href="otel_bilgi.php?otel_id=<?echo $otel_id?>&otel=<?echo $ggg['otel']?>"><?echo $ggg['otel']?></a></font>&nbsp;</td>
          <td align="center"><font face="Arial" size="2"><?echo $teksayi?></font>&nbsp;</td>
          <td align="center"><font face="Arial" size="2"><?echo $ciftsayi?></font>&nbsp;</td>
          <td align="center"><font face="Arial" size="2"><?echo $otelsayi?></font>&nbsp;</td>
        </tr>
<?php          
}
?>
<?php          
$tek="Tek";
$cift="Çift";
$bos="";
$tektoplam=mysql_query("select * from delegeler where oda='$tek' and cifti='$bos'");
$tektoplamsayi=mysql_num_rows($tektoplam);
$cifttoplam=mysql_query("select * from delegeler where oda='$cift' and cifti='$bos'");
$cifttoplamsayi=mysql_num_rows($cifttoplam);
$genel_toplam=mysql_query("select * from delegeler where (oda='$tek' or oda='$cift') and cifti='$bos'");
$genel_sayi=mysql_num_rows($genel_toplam);
?>         
        <tr>
          <td align="left"><b><font face="Arial" size="2">Toplam</font></b></td>
          <td align="center"><b><font face="Arial" size="2"><?echo $tektoplamsayi?></font></b>&nbsp;</td>
          <td align="center"><b><font face="Arial" size="2"><?echo $cifttoplamsayi?></font></b>&nbsp;</td>
          <td align="center"><b><font face="Arial" size="2"><?echo $genel_sayi?></font></b>&nbsp;</td>
        </tr>
      </table>
      </center>
    </div>
    </td>
    
  </tr>
  <tr>
    
    </td>
    
  </tr>
  <tr>
    <td width="794">
    <p align="center">
    
    
<div id="sorgu_Yukleniyor" style="display:none;">
<img src="image/indicator.gif" width="32" height="32"></div>
<div id="sorgu_Sonuc"></div>    
    
    
    </td>
  </tr>
</table>