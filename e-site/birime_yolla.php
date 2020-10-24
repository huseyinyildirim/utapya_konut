<?php
include("baglan.php");

$id=$_POST["id"];
$konusu=$_POST["konucu"];
$eski_birim=$_POST["birim"];
$birim_tarih=date('Y-m-d H:i');
$notunuz=$_POST["notunuz"];

if($konusu=="Hukuki Ýþlemler"){ 
$konum_id="3";
$birimi="Hukuk Müþavirliði";
} 
if($konusu=="Vergi Düzenlemeleri ve Uygulamalarý"){ 
$konum_id="4";
$birimi="Vergi Danýþmanlýðý";
} 
if($konusu=="5362 Sayýlý Esnaf ve Sanatkarlar Meslek Kuruluþlarý Kanununa Ýliþkin Konular"){ 
$konum_id="5";
$birimi="Teþkilat ve Ýlgili Kuruluþlar Müdürlüðü - Sicil Gazetesi Müdürlüðü";
} 
if($konusu=="Esnaf ve Sanatkar Sicil Ýþlemleri"){ 
$konum_id="5";
$birimi="Teþkilat ve Ýlgili Kuruluþlar Müdürlüðü - Sicil Gazetesi Müdürlüðü";
} 
if($konusu=="Esnaf ve Sanatkarlarýn Sosyal Güvenlikle Ýlgili Sorunlarý"){ 
$konum_id="5";
$birimi="Teþkilat ve Ýlgili Kuruluþlar Müdürlüðü";
} 
if($konusu=="Esnaf ve Sanatkarlarýn Muhatap Olduðu Diðer Yasalardan Kaynaklanan Sorunlar"){ 
$konum_id="5";
$birimi="Teþkilat ve Ýlgili Kuruluþlar Müdürlüðü - Sicil Gazetesi Müdürlüðü";
} 
if($konusu=="5362 Sayýlý Kanuna Dayalý Eðitim Çalýþmalarý"){ 
$konum_id="6";
$birimi="Eðitim ve Planlama Müdürlüðü";
} 
if($konusu=="3308 Sayýlý Çýraklýk ve Mesleki Eðitim Kanununa Ýliþkin Uygulamalar"){ 
$konum_id="6";
$birimi="Eðitim ve Planlama Müdürlüðü";
} 
if($konusu=="Mesleki Yeterlilik Kurumu"){ 
$konum_id="6";
$birimi="Eðitim ve Planlama Müdürlüðü";
} 
if($konusu=="Eðitim Burslarý"){ 
$konum_id="6";
$birimi="Eðitim ve Planlama Müdürlüðü";
} 
if($konusu=="Ýstihdam - Kayýtdýþý Ýstihdamla Mücadele"){ 
$konum_id="6";
$birimi="Eðitim ve Planlama Müdürlüðü";
} 
if($konusu=="Çalýþan Çocuklar"){ 
$konum_id="6";
$birimi="Eðitim ve Planlama Müdürlüðü";
} 
if($konusu=="Ýþ Saðlýðý ve Güvenliði"){ 
$konum_id="2";
$birimi="Arge Müdürlüðü";
} 
if($konusu=="Kamu Ýhale Uygulamalarý"){ 
$konum_id="2";
$birimi="Arge Müdürlüðü";
} 
if($konusu=="Ýhracat Bilgi Sitesi"){ 
$konum_id="2";
$birimi="Arge Müdürlüðü";
} 
if($konusu=="Ahilik"){ 
$konum_id="6";
$birimi="Eðitim ve Planlama Müdürlüðü";
} 
if($konusu=="Ulaþtýrma Kanununun Öngördüðü Belgeler (SRC)"){ 
$konum_id="6";
$birimi="Eðitim ve Planlama Müdürlüðü";
} 
if($konusu=="Muhasebe Uygulamalarý"){ 
$konum_id="7";
$birimi="Muhasebe Müdürlüðü";
} 
if($konusu=="Avrupa Birliði ve Dýþ Ýliþkiler"){ 
$konum_id="8";
$birimi="AB ve Dýþ Ýliþkiler Müdürlüðü";
} 
if($konusu=="Tüketiciler - Esnaf Arasýndaki Sorunlar"){ 
$konum_id="8";
$birimi="AB ve Dýþ Ýliþkiler Müdürlüðü";
} 
if($konusu=="Esnaf ve Sanatkarlarýn Finansmanýna Yönelik Uygulamalar"){ 
$konum_id="2";
$birimi="Arge Müdürlüðü";
} 
if($konusu=="Gýda Sektöründe Faaliyet Gösteren Esnaf ve Sanatkarlara Yönelik Uygulamalar"){ 
$konum_id="2";
$birimi="Arge Müdürlüðü";
} 
if($konusu=="Esnaf ve Sanatkarlara Verilen Kapasite Raporlarý"){ 
$konum_id="2";
$birimi="Arge Müdürlüðü";
} 
if($konusu=="Esnaf ve Sanatkarlarýn Barkod Baþvurularý"){ 
$konum_id="2";
$birimi="Arge Müdürlüðü";
} 
if($konusu=="Basýlý Evrak Stok Takip Programý"){ 
$konum_id="1";
$birimi="Bilgi Ýþlem Müdürlüðü";
} 
if($konusu=="Teþkilat Yöneticisi ve Çalýþanlarýnýn Kimlik Kartý Ýþlemleri"){ 
$konum_id="1";
$birimi="Bilgi Ýþlem Müdürlüðü";
} 
if($konusu=="E-Kapasite Vergi Kayýt Kimlik Paylaþým Sistemleri Hakkýnda Teknik Konular"){ 
$konum_id="1";
$birimi="Bilgi Ýþlem Müdürlüðü";
} 
if($konusu=="Protokol ve Halkla Ýliþkiler"){ 
$konum_id="9";
$birimi="Protokol ve Halkla Ýliþkiler Müdürlüðü";
} 
if($konusu=="Personel Ýþlemleri"){ 
$konum_id="11";
$birimi="Personel Müdürlüðü";
} 
if($konusu=="Ýnþaat ve Emlak Ýþlemleri"){ 
$konum_id="12";
$birimi="Ýnþaat ve Emlak Müdürlüðü";
} 
if($konusu=="Ýdari Hizmetler"){ 
$konum_id="13";
$birimi="Ýdari ve sosyal Ýþler Müdürlüðü";
} 
if($konusu=="Alým Satým Uygulamalarý"){ 
$konum_id="14";
$birimi="Alým Satým Müdürlüðü";
} 
if($konusu=="Basýn Yayýn Uygulamalarý"){ 
$konum_id="15";
$birimi="Basýn Yayýn Müdürlüðü";
} 
if($konusu=="Esnaf ve Sanatkar Sicil Ýþlemleri"){ 
$konum_id="16";
$birimi="Sicil Gazetesi Müdürlüðü";
} 






if($konum_id=="1"){ 
$gidecek_mail="bimgenel@tesk.org.tr";
} 
if($konum_id=="2"){ 
$gidecek_mail="ersin@tesk.org.tr";
} 
if($konum_id=="3"){ 
$gidecek_mail="yertekin@tesk.org.tr";
} 
if($konum_id=="4"){ 
$gidecek_mail="cuneyt@tesk.org.tr";
} 
if($konum_id=="5"){ 
$gidecek_mail="nevindag@tesk.org.tr";
} 
if($konum_id=="6"){ 
$gidecek_mail="zehrakaya@tesk.org.tr";
} 
if($konum_id=="7"){ 
$gidecek_mail="soner@tesk.org.tr";
} 
if($konum_id=="8"){ 
$gidecek_mail="disismd@tesk.org.tr";
} 
if($konum_id=="9"){ 
$gidecek_mail="serkan@tesk.org.tr";
} 
if($konum_id=="11"){ 
$gidecek_mail="kabakci@tesk.org.tr";
} 
if($konum_id=="12"){ 
$gidecek_mail="mustafa@tesk.org.tr";
} 
if($konum_id=="13"){ 
$gidecek_mail="selim@tesk.org.tr";
} 
if($konum_id=="14"){ 
$gidecek_mail="satinalma@tesk.org.tr";
} 
if($konum_id=="15"){ 
$gidecek_mail="basin@tesk.org.tr";
} 
if($konum_id=="16"){ 
$gidecek_mail="sicil@tesk.org.tr";
} 

$kaktir=mysql_query("
insert into 
hcs_kaktir
(soru_id,kaktiran_birim,kaktirma_tarihi,notunuz)
values
('$id','$eski_birim','$birim_tarih','$notunuz')",$bagla) or die(mysql_error());

mysql_query("UPDATE umt_hcsdata SET birimi ='$birimi',konu_id='$konum_id',birim_tarih='$birim_tarih',konusu='$konusu',eski_birim='$eski_birim' WHERE id='$id'");

$mail_mesaj="Hýzlý Cevap Sistemi Üzerinden müdürlüðünüze ait yeni bir baþvuru yapýlmýþtýr. Cevaplamak için http://www.tesk.org.tr/tr/online/hcs/admin adresine týklayýnýz.";
$gonderen="TESK";


		//mail gonderimi
		define("DISPLAY_XPM4_ERRORS", true);
		
		require_once "MAIL5.php";
		
		$m = new MAIL5;
		
		$m->From=array
		(
			"address"  => "info@tesk.org.tr", 
			"name"     => "TESK", 
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
			"content"  => "HCS Baþvuru",
			"charset"  => "ISO-8859-9", 
			"encoding" => "quoted-printable"
		);
		
		$m->Text = array
		(
			"content"  => "HCS Baþvuru", 
			"charset"  => "ISO-8859-9", 
			"encoding" => "quoted-printable" 
		);
		
		$icerik="
		<html>
			<body>
				<table border='1' cellpadding='2' cellspacing='2'>
					<tr>
						<td colspan='2'><b>Hýzlý cevap sistemi üzerinden Müdürlüðünüze ait yeni bir soru sorulmuþtur.<br>
						<a href='http://www.tesk.org.tr/tr/online/hcs/admin' target='_blank'>Sisteme Girmek Ýçin Týklayýnýz</a></b></td>
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
		
		$c=$m->Connect("95.0.5.215",587,"info@tesk.org.tr", "1a2c!z*87");
		
		$m->Send($c);

Header("Location: ana.php");
exit;

?>