<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");

$daire_no=$_POST["borc_daireno"];
$borc_turu=$_POST["borc_turu"];
$borc_donemay=$_POST["borc_ay"];
$borc_donemyil=$_POST["borc_yil"];
$borc_tutar=$_POST["borc_tutar"];
$aciklama=$_POST["borc_aciklama"];
$gidecek_mail=$_POST["borc_eposta"];

$borc_tutar=str_replace(',','.',$borc_tutar);

$sql=mysql_query("
insert into 
borclar
(daire_no,borc_turu,borc_donemay,borc_donemyil,borc_tutar,aciklama)
values
('$daire_no','$borc_turu','$borc_donemay','$borc_donemyil','$borc_tutar','$aciklama')",$bagla) or die(mysql_error());

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
						<td colspan='2'><b>Site Yonetimi Tarafindan Size Yeni Bir Borc Tahakkuk Ettirilmistir.<br>
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
<p align="center"><b><font face="Arial" size="2" color="#FF0000"><br><br>

</font><font face="Arial" style="font-size: 11pt"><?echo $daire_no;?></font><font face="Arial" size="2" color="#FF0000"> Numaralı Daireye Borç Kaydı Yapılmıştır.<br><br>

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