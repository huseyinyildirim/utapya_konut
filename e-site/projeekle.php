<?
header ('Content-type: text/html; charset=utf-8');
session_start();
?>
<?
include("baglan.php");

$proje_adi=$_POST["padi"];
$oda_adi=$_POST["poda"];
$birlik=$_POST["pbirlik"];
$butce=$_POST["pbutce"];
$proje_turu=$_POST["pturu"];
$tarih=$_POST["ptarih"];
$para_birimi=$_POST["ppara"];
$giris_kodu=$_POST["pgiris_kodu"];


$sql=mysql_query("
insert into 
umt_proje
(proje_adi,oda_adi,birlik,butce,proje_turu,tarih,giris_kodu,para_birimi)
values
('$proje_adi','$oda_adi','$birlik','$butce','$proje_turu','$tarih','$giris_kodu','$para_birimi')",$bagla) or die(mysql_error());


?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
Bilgiler Sisteme Başarıyla Eklenmiştir.<br><br>
Yeni İşlem için Lütfen Yukardaki Menüyü Kullanınız.
</font></b><br>
		</td>
	</tr>
</table>