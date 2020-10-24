<?
header ('Content-type: text/html; charset=utf-8');
session_start();
include("baglan.php");
$daire_no=$_SESSION["kullanici_adi"];
$cevap=0;

$bekmesaj=("SELECT * FROM mesajlar WHERE cevap='$cevap' and daire_no='$daire_no'");
$bekmesaj=mysql_query($bekmesaj) or die("Sorguda Hata : ".mysql_error());
$sayibekmesaj=mysql_num_rows($bekmesaj);


?><head>
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
    <table border="1" cellspacing="1" style="border-collapse: collapse" width="940">


<?
if($sayibekmesaj>0)
{
?> 

      <tr>
        <td width="930" height="19" colspan="4">
        <p align="center"><br><br>
        <b><font face="Arial" size="2">UYARI !!!</font><font face="Arial" size="2" color="#FF0000"> 
        Sistemde  Yönetiminin Size Gönderdiği Mesaj(lar) Bulunmaktadır.</font></b><br>
&nbsp;</td>
      </tr>
<?
}
?>      

      
    </table>
    </center>
  </div>
  </center>
</div>