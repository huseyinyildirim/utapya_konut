<?
header ('Content-type: text/html; charset=utf-8');
session_start();
include("baglan.php");
$daire=$_SESSION["kullanici_adi"];
$site_cevap=0;
$bekmesaj=("SELECT * FROM ank_mesajlar WHERE site_cevap='$site_cevap'");
$bekmesaj=mysql_query($bekmesaj) or die("Sorguda Hata : ".mysql_error());
$sayibekmesaj=mysql_num_rows($bekmesaj);
?>
		
<head>
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
  <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="800" id="AutoNumber1" height="35">
 
    <tr>
      <td colspan="6" align="center" bgcolor="#7BA3D7" style="height: 1" class="style1">
      <font face="Arial" size="2">Cevap Bekleyen Mesajlar</font></td>
    </tr>
</table>

  <div align="center">
    <center>
    <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="800">
<?
if($sayibekmesaj==""){
?> 

      <tr>
        <td width="800" height="19" colspan="4">
        <p align="center"><br>
        <b><font face="Arial" size="2" color="#FF0000">Sistemde Cevap Bekleyen Bir Mesaj Bulunmamaktadır.</font></b><br>
&nbsp;</td>
      </tr>
<?
}
else
{
?>      

      <tr>
        <td width="400" height="19">
        <font face="Arial" style="font-size: 9pt; font-weight: 700">Mesaj</font></td>
        <td width="150" height="19">
        <font face="Arial" style="font-size: 9pt; font-weight: 700">Gönderim 
        tarihi</font></td>
        <td width="150" height="19" align="center">
        <span style="font-weight: 700">
        <font face="Arial" style="font-size: 9pt">Gönderen</font></span></td>
        <td width="100" height="19" align="center">
        &nbsp;</td>
      </tr>
<?
while ($bekleyen=mysql_fetch_array($bekmesaj))
{
?>      
      <tr>
        <td height="19"><font face="Arial" style="font-size: 9pt"><?echo $bekleyen['mesaj'];?></font></td>
        <td height="19"><font face="Arial" style="font-size: 9pt"><?echo $bekleyen['gonderme_tarihi'];?></font></td>
        <td height="19" align="center"><font face="Arial" style="font-size: 9pt"><?echo $bekleyen['gonderen'];?>
        <input type="hidden" value="<?echo $bekleyen['id'];?>" name="mesaj_id" id="mesaj_id" size="20" ></font></td>
        <td height="19" align="center"><font face="Arial" style="font-size: 9pt">  <input type="button" value="Cevapla" name="cev" onClick="return cevapla()" >  </font></td>
      </tr>
<?
}
}
?>      
    </table>
    </center>
  </div>
  </center>
</div>