<?php
include("baglan.php");

$id=$_POST["id"];
$konusu=$_POST["konucu"];
$eski_birim=$_POST["birim"];
$birim_tarih=date('Y-m-d H:i');
$notunuz=$_POST["notunuz"];

if($konusu=="Hukuki ��lemler"){ 
$konum_id="3";
$birimi="Hukuk M��avirli�i";
} 
if($konusu=="Vergi D�zenlemeleri ve Uygulamalar�"){ 
$konum_id="4";
$birimi="Vergi Dan��manl���";
} 
if($konusu=="5362 Say�l� Esnaf ve Sanatkarlar Meslek Kurulu�lar� Kanununa �li�kin Konular"){ 
$konum_id="5";
$birimi="Te�kilat ve �lgili Kurulu�lar M�d�rl��� - Sicil Gazetesi M�d�rl���";
} 
if($konusu=="Esnaf ve Sanatkar Sicil ��lemleri"){ 
$konum_id="5";
$birimi="Te�kilat ve �lgili Kurulu�lar M�d�rl��� - Sicil Gazetesi M�d�rl���";
} 
if($konusu=="Esnaf ve Sanatkarlar�n Sosyal G�venlikle �lgili Sorunlar�"){ 
$konum_id="5";
$birimi="Te�kilat ve �lgili Kurulu�lar M�d�rl���";
} 
if($konusu=="Esnaf ve Sanatkarlar�n Muhatap Oldu�u Di�er Yasalardan Kaynaklanan Sorunlar"){ 
$konum_id="5";
$birimi="Te�kilat ve �lgili Kurulu�lar M�d�rl��� - Sicil Gazetesi M�d�rl���";
} 
if($konusu=="5362 Say�l� Kanuna Dayal� E�itim �al��malar�"){ 
$konum_id="6";
$birimi="E�itim ve Planlama M�d�rl���";
} 
if($konusu=="3308 Say�l� ��rakl�k ve Mesleki E�itim Kanununa �li�kin Uygulamalar"){ 
$konum_id="6";
$birimi="E�itim ve Planlama M�d�rl���";
} 
if($konusu=="Mesleki Yeterlilik Kurumu"){ 
$konum_id="6";
$birimi="E�itim ve Planlama M�d�rl���";
} 
if($konusu=="E�itim Burslar�"){ 
$konum_id="6";
$birimi="E�itim ve Planlama M�d�rl���";
} 
if($konusu=="�stihdam - Kay�td��� �stihdamla M�cadele"){ 
$konum_id="6";
$birimi="E�itim ve Planlama M�d�rl���";
} 
if($konusu=="�al��an �ocuklar"){ 
$konum_id="6";
$birimi="E�itim ve Planlama M�d�rl���";
} 
if($konusu=="�� Sa�l��� ve G�venli�i"){ 
$konum_id="2";
$birimi="Arge M�d�rl���";
} 
if($konusu=="Kamu �hale Uygulamalar�"){ 
$konum_id="2";
$birimi="Arge M�d�rl���";
} 
if($konusu=="�hracat Bilgi Sitesi"){ 
$konum_id="2";
$birimi="Arge M�d�rl���";
} 
if($konusu=="Ahilik"){ 
$konum_id="6";
$birimi="E�itim ve Planlama M�d�rl���";
} 
if($konusu=="Ula�t�rma Kanununun �ng�rd��� Belgeler (SRC)"){ 
$konum_id="6";
$birimi="E�itim ve Planlama M�d�rl���";
} 
if($konusu=="Muhasebe Uygulamalar�"){ 
$konum_id="7";
$birimi="Muhasebe M�d�rl���";
} 
if($konusu=="Avrupa Birli�i ve D�� �li�kiler"){ 
$konum_id="8";
$birimi="AB ve D�� �li�kiler M�d�rl���";
} 
if($konusu=="T�keticiler - Esnaf Aras�ndaki Sorunlar"){ 
$konum_id="8";
$birimi="AB ve D�� �li�kiler M�d�rl���";
} 
if($konusu=="Esnaf ve Sanatkarlar�n Finansman�na Y�nelik Uygulamalar"){ 
$konum_id="2";
$birimi="Arge M�d�rl���";
} 
if($konusu=="G�da Sekt�r�nde Faaliyet G�steren Esnaf ve Sanatkarlara Y�nelik Uygulamalar"){ 
$konum_id="2";
$birimi="Arge M�d�rl���";
} 
if($konusu=="Esnaf ve Sanatkarlara Verilen Kapasite Raporlar�"){ 
$konum_id="2";
$birimi="Arge M�d�rl���";
} 
if($konusu=="Esnaf ve Sanatkarlar�n Barkod Ba�vurular�"){ 
$konum_id="2";
$birimi="Arge M�d�rl���";
} 
if($konusu=="Bas�l� Evrak Stok Takip Program�"){ 
$konum_id="1";
$birimi="Bilgi ��lem M�d�rl���";
} 
if($konusu=="Te�kilat Y�neticisi ve �al��anlar�n�n Kimlik Kart� ��lemleri"){ 
$konum_id="1";
$birimi="Bilgi ��lem M�d�rl���";
} 
if($konusu=="E-Kapasite Vergi Kay�t Kimlik Payla��m Sistemleri Hakk�nda Teknik Konular"){ 
$konum_id="1";
$birimi="Bilgi ��lem M�d�rl���";
} 
if($konusu=="Protokol ve Halkla �li�kiler"){ 
$konum_id="9";
$birimi="Protokol ve Halkla �li�kiler M�d�rl���";
} 
if($konusu=="Personel ��lemleri"){ 
$konum_id="11";
$birimi="Personel M�d�rl���";
} 
if($konusu=="�n�aat ve Emlak ��lemleri"){ 
$konum_id="12";
$birimi="�n�aat ve Emlak M�d�rl���";
} 
if($konusu=="�dari Hizmetler"){ 
$konum_id="13";
$birimi="�dari ve sosyal ��ler M�d�rl���";
} 
if($konusu=="Al�m Sat�m Uygulamalar�"){ 
$konum_id="14";
$birimi="Al�m Sat�m M�d�rl���";
} 
if($konusu=="Bas�n Yay�n Uygulamalar�"){ 
$konum_id="15";
$birimi="Bas�n Yay�n M�d�rl���";
} 
if($konusu=="Esnaf ve Sanatkar Sicil ��lemleri"){ 
$konum_id="16";
$birimi="Sicil Gazetesi M�d�rl���";
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

$mail_mesaj="H�zl� Cevap Sistemi �zerinden m�d�rl���n�ze ait yeni bir ba�vuru yap�lm��t�r. Cevaplamak i�in http://www.tesk.org.tr/tr/online/hcs/admin adresine t�klay�n�z.";
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
			"content"  => "HCS Ba�vuru",
			"charset"  => "ISO-8859-9", 
			"encoding" => "quoted-printable"
		);
		
		$m->Text = array
		(
			"content"  => "HCS Ba�vuru", 
			"charset"  => "ISO-8859-9", 
			"encoding" => "quoted-printable" 
		);
		
		$icerik="
		<html>
			<body>
				<table border='1' cellpadding='2' cellspacing='2'>
					<tr>
						<td colspan='2'><b>H�zl� cevap sistemi �zerinden M�d�rl���n�ze ait yeni bir soru sorulmu�tur.<br>
						<a href='http://www.tesk.org.tr/tr/online/hcs/admin' target='_blank'>Sisteme Girmek ��in T�klay�n�z</a></b></td>
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