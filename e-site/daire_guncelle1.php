<?
header ('Content-type: text/html; charset=utf-8');
//session_start();

include("baglan.php");

$daireno=$_POST["ubdaireno"];

echo $daireno;

//mysql_query("UPDATE ank_mesajlar SET cevap='$cevap',site_cevap='$site_cevap',cevap_tarihi='$cevap_tarihi' WHERE id='$id'");


?>