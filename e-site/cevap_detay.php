<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");
$mesaj_id=$_GET["mesaj_id"];

$mesajci=("SELECT * FROM mesajlar WHERE id='$mesaj_id'");
$mesajci=mysql_query($mesajci) or die("Sorguda Hata : ".mysql_error());

while ($mesajd=mysql_fetch_array($mesajci))
{
$mesaj_icerik=$mesajd['mesaj'];
$mesaj_tarih=$mesajd['tarih'];
}
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

        



		<div align="center">
    <center>
    <table border="1" cellspacing="1" style="border-collapse: collapse" width="930" id="AutoNumber1" >
      <tr>
        <td width="800" colspan="2" align="center" height="1" class="style2">
        <font face="Arial" size="2">Mesaj Detayı</font></td>
      </tr>
       
      <tr>
        <td width="229" height="56"><b><font face="Arial" size="2">Mesaj</font></b></td>
        <td width="567" height="56"><font face="Arial" size="2"><?echo $mesaj_icerik;?></font></td>
      </tr>
    
      <tr>
        <td width="229" height="56"><b><font face="Arial" size="2">Gönderim Tarihi</font></b></td>
        <td width="567" height="56"><font face="Arial" size="2"><?echo $mesaj_tarih;?></font></td>
      </tr>
    
      <tr>
        <td width="229" height="56"><b><font face="Arial" size="2">Cevabı Bu Alana Yazınız</font></b></td>
        <td width="567" height="56">
        
        <font face="Arial">
        
        <textarea rows="4" name="mesaj" id="cevap" cols="50"></textarea><font size="2">
        </font>
        <input type="hidden" value="<?echo $mesaj_id?>" name="mesaj_id" id="cevap_id" size="20" ></font>
        
        </td>
      </tr>
    
      <tr>
        <td width="800" align="center" colspan="2" height="10">
        <font face="Arial">
        <input type="button" value="Mesajı Cevapla" name="B1" onClick="return cevabi_kaydet()" ></font></td>
      </tr>
    </table>
    </center>
  </div>
  <?php
}
else {
Header("Location: index.php");
}
?>