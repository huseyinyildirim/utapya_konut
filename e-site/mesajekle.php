<?
header ('Content-type: text/html; charset=utf-8');
session_start();
      if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$gonderen=$_POST["gonderen"];
$mesaj=$_POST["mesaj"];
$gonderme_tarihi=date('Y-m-d H:i');
$ip=$_SERVER['REMOTE_ADDR'];
$daire_no="Yonetim";

$sql=mysql_query("
insert into 
mesajlar
(gonderen,daire_no,mesaj,tarih,ip_numara)
values
('$gonderen','$daire_no','$mesaj','$gonderme_tarihi','$ip')",$bagla) or die(mysql_error());
$gidecek_mail="utopya.yonetim@hotmail.com";

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
						<td colspan='2'><b>Site Yonetimine Yeni Bir Mesaj Gonderilmistir.<br>
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


?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table width="100%" cellpadding="1" cellspacing="1" border="1">
	<tr>
		<td>
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br><br>
Mesajınız Yönetimimize Başarıyla İletilmiştir.<br><br>
Yeni İşlem için Lütfen Yukardaki Menüyü Kullanınız.
</font></b><br><br>
		</td>
	</tr>
</table>
<?php
}
else {
Header("Location: index.php");
}
?>