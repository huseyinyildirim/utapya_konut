<?
header ('Content-type: text/html; charset=utf-8');
session_start();

include("baglan.php");

$gonderen=$_POST["gonderen"];
$eposta=$_POST["eposta"];
$kod="1";

mysql_query("UPDATE ank_uyeler SET eposta='$eposta',kodeposta ='$kod' WHERE daire='$gonderen'");

?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000">( <?echo $eposta;?> ) E-Posta Adresiniz Sisteme Başarıyla Kaydedilmiştir.</font></b><p align="center">
<b><font face="Arial" size="2" color="#0000FF">! DİKKAT</font><font face="Arial" size="2" color="#FF0000"> Size Özel Olarak Gönderilecek Mesajlar, Bu Mail Adresine Bildirilecektir. 
<br>
Spam Mail Klasörünü Kontrol Etmeyi Unutmayınız.</font></b><br>
		</td>
	</tr>
</table>