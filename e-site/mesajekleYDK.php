<?
header ('Content-type: text/html; charset=utf-8');
session_start();
?>
<?
include("baglan.php");

$gonderen=$_POST["gonderen"];
$mesaj=$_POST["mesaj"];
$gonderme_tarihi=date('Y-m-d H:i');
$ip=$_SERVER['REMOTE_ADDR'];


$sql=mysql_query("
insert into 
ank_mesajlar
(mesaj,gonderen,gonderme_tarihi,ip)
values
('$mesaj','$gonderen','$gonderme_tarihi','$ip')",$bagla) or die(mysql_error());


?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
Mesajınız Yönetimimize Başarıyla Gönderilmiştir.<br><br>
Yeni İşlem için Lütfen Yukardaki Menüyü Kullanınız.
</font></b><br>
		</td>
	</tr>
</table>