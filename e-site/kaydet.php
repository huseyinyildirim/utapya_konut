<?
header ('Content-type: text/html; charset=utf-8');
session_start();
?>
<?
include("baglan.php");

$id=$_POST["id"];
$otel=$_POST["otel"];
$oda=$_POST["oda"];
$adi=$_POST["adi22"];
$sicil=$_POST["sicil"];
$sno2=$_POST["sno2"];
$tarih=$_POST["tarih"];
$cifti="1";

echo $tarih;
echo $adi;

mysql_query("UPDATE delegeler SET tarih='$tarih',otel ='$otel',oda='$oda' WHERE id='$id'");
mysql_query("UPDATE delegeler SET tarih='$tarih',otel ='$otel',oda='$oda',cifti=$cifti WHERE sno='$sno2'");



?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000">Delegeye Ait Otel Bilgisi Sisteme Başarıyla Eklenmiştir.</font></b><br>
		</td>
	</tr>
</table>