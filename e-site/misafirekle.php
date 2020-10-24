<?
header ('Content-type: text/html; charset=utf-8');
session_start();
?>
<?
include("baglan.php");

$otel=$_POST["otel"];
$kurum=$_POST["kurum"];
$oda=$_POST["oda"];
$adi=$_POST["adi"];
$tarih=$_POST["tarih"];
$unvan="Misafir";
$misafir="1";


$sql=mysql_query("
insert into 
delegeler
(adi,kurum,unvan,otel,oda,misafir,tarih)
values
('$adi','$kurum','$unvan','$otel','$oda','$misafir','$tarih')",$bagla) or die(mysql_error());


?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
Misafire Ait Otel Bilgisi Sisteme Başarıyla Eklenmiştir.<br>
</font></b><br>
		</td>
	</tr>
</table>