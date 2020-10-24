<?
header ('Content-type: text/html; charset=utf-8');
session_start();
include("baglan.php");
$daire=$_SESSION["kullanici_adi"];
$sorgumesaj=("SELECT * FROM mesajlar WHERE gonderen='$daire'");
$sorgumesaj=mysql_query($sorgumesaj) or die("Sorguda Hata : ".mysql_error());
$sayimesaj=mysql_num_rows($sorgumesaj);
$okundu=0;
$sorgumesaj3=("SELECT * FROM mesajlar WHERE daire='$daire' and okundu='$okundu'");
$sorgumesaj3=mysql_query($sorgumesaj3) or die("Sorguda Hata : ".mysql_error());
$sayimesaj3=mysql_num_rows($sorgumesaj3);
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
  <table border="1" cellspacing="1" style="border-collapse: collapse" width="940" id="AutoNumber1">
 
    <tr>
      <td colspan="6" align="center" bgcolor="#7BA3D7" style="height: 35" class="style1">
      <font face="Arial" size="2">Gelen ve Giden Mesajlarınız</font></td>
    </tr>
<?
if(($sayimesaj==0)and($sayimesaj3==0)){
?>     
    <tr>
      <td colspan="6" align="center" height="53" >
      <b><font face="Arial" size="2" color="#FF0000">Sistemde Size Ait Herhangi Bir Mesaj Bulunmamaktadır.</font></b></td>
    </tr>
<?
}
?>    
</table>




<?
if($sayimesaj3!=0)
{
?>


<div align="center">
  <center>
  <table border="1" cellspacing="1" style="border-collapse: collapse" width="940" height="76">
    <tr>
      <td colspan="4" align="center" height="25" bgcolor="#CEDDF0"><b><font face="Arial" size="2">
      Yönetimden Gelen Mesajlar</font></b></b></td>
    </tr>
    <tr>
      <td width="150" height="16"><b><font face="Arial" size="2">Gönderen</font></b></td>
      <td width="590" height="16"><b><font face="Arial" size="2">Mesaj İçeriği</font></b></td>
      <td height="16" width="150"><b><font face="Arial" size="2">Gönderilme Tarihi</font></b></td>
      <td height="16" width="50" align="center"><b><font face="Arial" size="2">İşlem</font></b></td>      
    </tr>
<?
while ($mesaj_yonetim=mysql_fetch_array($sorgumesaj3))
{
?>     
    <tr>
      <td width="150" height="16"><b>
      <font face="Arial" size="2" color="#FF0000">Site Yönetimi</font></b></td>
      <td width="590" height="16"><font face="Arial" size="2"><?echo $mesaj_yonetim['mesaj'];?></font></td>
      <td height="16" width="150"><font face="Arial" size="2"><?echo $mesaj_yonetim['tarih'];?></font></td>
      <td height="16" width="50" align="center"><input type="button" value=" Sil " name="msil" onClick="return yonetim_mesaj_sil(<?echo $mesaj_yonetim['id'];?>)" ></td>      
    </tr>
<?
}
?>   
  </table>
  </center>
</div>
<?
}
?>



<?
if($sayimesaj!=0)
{
?>
  <div align="center">
    <center>
    <table border="1" cellspacing="1" style="border-collapse: collapse" width="940" height="75">
      <tr>
        <td width="800" height="10" colspan="4">
        &nbsp;</td>
      </tr>
      <tr>
        <td width="800" height="25" colspan="4" bgcolor="#CEDDF0">
        <p align="center"><b><font face="Arial" size="2">Sizin Gönderdiğiniz 
        Mesajlar ve Cevapları</font></b></td>
      </tr>
      <tr>
        <td width="270" height="25">
        <font face="Arial" style="font-size: 9pt; font-weight: 700; ">Mesajınız</font></td>
        <td width="130" height="25">
        <font face="Arial" style="font-size: 9pt; font-weight: 700; ">Gönderim 
        Tarihi</font></td>
        <td width="270" height="25">
        <font face="Arial" style="font-size: 9pt; font-weight: 700">Yönetimin Cevabı</font></td>
        <td width="130" height="25">
        <font face="Arial" style="font-size: 9pt; font-weight: 700; ">Cevap Tarihi</font></td>
      </tr>
<?
while ($mesajlari=mysql_fetch_array($sorgumesaj))
{
$cevap=$mesajlari['cevap'];
if($cevap==""){ 
$cevap="BU MESAJ HENÜZ CEVAPLANMAMIŞ";
}
?>      
      <tr>
        <td height="17"><font face="Arial" style="font-size: 9pt"><?echo $mesajlari['mesaj'];?></font></td>
        <td height="17"><font face="Arial" style="font-size: 9pt"><?echo $mesajlari['gonderme_tarihi'];?></font></td>
        <td height="17"><font face="Arial" style="font-size: 9pt"><?echo $cevap;?></font></td>
        <td height="17"><font face="Arial" style="font-size: 9pt"><?echo $mesajlari['cevap_tarihi'];?></font></td>
      </tr>
<?
}
?>      
    </table>
    </center>
  </div>
  </center>
</div>
<?
}
?>