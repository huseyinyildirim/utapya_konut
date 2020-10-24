<?
header ('Content-type: text/html; charset=utf-8');
session_start();
include("baglan.php");
$daire=$_SESSION["kullanici_adi"];

$gun=$_POST["gun1"];
$ay=$_POST["ay1"];
$yil=$_POST["yil1"];

$faaliyetsor=("SELECT * FROM ank_faaliyet WHERE gun='$gun' and ay='$ay' and yil='$yil' ORDER BY saat,dakika");
$faaliyetsor=mysql_query($faaliyetsor) or die("Sorguda Hata : ".mysql_error());
$sayifaal=mysql_num_rows($faaliyetsor);
//echo $sayifaal;
?>
		
<head>
		<meta http-equiv="Content-Language" content="tr">
		<meta http-equiv="Content-Language" content="tr">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.style1 {
				font-weight: bold;
				border-width: 1px;
}
.style2 {
				text-align: center;
				font-family: Arial;
				font-size: small;
				color: #FF0000;
}
.style3 {
				font-size: 11pt;
}
.style4 {
				text-align: center;
}
.style5 {
				font-size: 11pt;
				color: #FF0000;
}
.style6 {
				color: #FF0000;
}
        </style>
</head>

<div align="center">
  <center>
  <table border="1" cellspacing="1" style="border-collapse: collapse" width="800" id="AutoNumber1" height="27" bgcolor="#FFFFFF">
 
    <tr>
      <td align="center" class="style1" height="25" width="800">
      <div align="center">
        <center>
        <table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="700" height="45" bgcolor="#FFFFFF">
          <tr>
            <td width="697" align="center" height="22" colspan="2"><b>
            <font face="Arial" style="font-size: 11pt">GÜNLÜK FAALİYET RAPORU<br>
            (</font></b><font face="Arial"><span style="font-size: 12pt"> </span>
            <span style="font-size: 11pt; font-weight: 700"><?echo $gun?> / <?echo $ay?> / <?echo $yil?></span><span style="font-size: 12pt"> </span> </font><b>
            <font face="Arial" style="font-size: 11pt">)</font></b></td>
          </tr>
          <tr>
            <td width="6" align="center" height="18">&nbsp;</td>
            <td width="691" height="18" bgcolor="#FFFFFF"><b>
            <font face="Arial" size="2">Yapılan İş</font></b></td>
          </tr>
          
   <?php          
while ($faalci=mysql_fetch_array($faaliyetsor))
{
?>          
          
          <tr>
            <td width="6" align="center" height="16"></td>
            <td width="691" height="16"><font face="Arial" size="2"><?echo $faalci['aciklama']?></font></td>
          </tr>
          
<?php          
}
?>  
          <tr>
            <td width="697" align="center" height="18" colspan="2">
            
<?php
if($sayifaal==0)
{
?>
<br> 
            <font face="Arial" size="2"> 
<b>
            <font color="#0000FF">           
            Sistemde bugüne ait herhangi bir faaliyet kaydı bulunmamaktadır.</font></b><br>
<?php
}            
?>            
            <br>
&nbsp;<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
    <tr>
      <td width="67%">&nbsp;</td>
      <td width="33%" align="center"><b><font face="Arial" size="2">Kemal CİVAS</font></b></td>
    </tr>
    <tr>
      <td width="67%">&nbsp;</td>
      <td width="33%" align="center"><b><font face="Arial" size="2">SİTE MÜDÜRÜ</font></b></td>
    </tr>
  </table>
  </center>
</div>
            </td>
          </tr>        
          
        </table>
        </center>
      </div>
      </td>
    </tr>
</table>

</div>