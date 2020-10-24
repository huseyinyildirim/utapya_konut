<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$daire_no=$_POST["daire_no"];
$mesaj=$_POST["mesaj"];
$tarih=date('Y-m-d H:i');
$gonderen="Yönetim";

$sql=mysql_query("
insert into 
mesajlar
(mesaj,daire_no,tarih,gonderen)
values
('$mesaj','$daire_no','$tarih','$gonderen')",$bagla) or die(mysql_error());
$gidecek_mail="umut@tesk.org.tr";

$epostasor=("SELECT * FROM sitesakin WHERE daire_no='$daire_no'");
$epostasor=mysql_query($epostasor) or die("Sorguda Hata : ".mysql_error());

while ($postaci=mysql_fetch_array($epostasor))
{
$gidecek_mail=$postaci['eposta'];
}


if($gidecek_mail!="")
{

		//mail gonderimi
		define("DISPLAY_XPM4_ERRORS", true);
		
		require_once "MAIL5.php";
		
		$m = new MAIL5;
		
		$m->From=array
		(
			"address"  => "info@utopyakonutlari.com", 
			"name"     => "Utopya Konutlari", 
			"charset"  => "ISO-8859-9", 
			"encoding" => "quoted-printable" 
		);
		
		$m->To[]=array
		(
			"address"  => $gidecek_mail,
			"charset"  => "ISO-8859-9", 
			"encoding" => "quoted-printable"
		);
		
		$m->Subject=array
		(
			"content"  => "E-Site Mesaj",
			"charset"  => "ISO-8859-9", 
			"encoding" => "quoted-printable"
		);
		
		$m->Text = array
		(
			"content"  => "E-Site Mesaj", 
			"charset"  => "ISO-8859-9", 
			"encoding" => "quoted-printable" 
		);
		
		$icerik="
<html>
<body>				
				<table border='1' cellpadding='2' cellspacing='2'>
					<tr>
						<td colspan='2'><b>Site Yonetimi Tarafindan Size Yeni Bir Mesaj Gonderilmistir.<br>
						<a href='http://www.utopyakonutlari.com/e-site/' target='_blank'>Sisteme girmek icin tiklayiniz</a></b></td>
					</tr>
				</table>
</body>
</html>				

		";
		
		$m->Html=array
		(
			"content"  => $icerik,
			"charset"  => "ISO-8859-9", 
			"encoding" => "quoted-printable"
		);
		
		$c=$m->Connect("mail.utopyakonutlari.com",587,"info@utopyakonutlari.com", "Utpk1799");
		
		$m->Send($c);

}
?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br>
<?echo $daire_no?> Dairesine ( <?echo $mesaj?> ) Mesajı Başarıyla Gönderilmiştir.<br><br>
Yeni İşlem için Lütfen Yukardaki Menüyü Kullanınız.
</font></b><br>
		</td>
	</tr>
</table>
<?php
}
else {
Header("Location: index.php");
}
?>