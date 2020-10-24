<?
session_start();
if (!session_is_registered("ss_oda_id")) 
{
	header("Location:loginform.php");
	exit;
}

include "fonksiyon.php";
include "connect.php";

switch ($_GET["tip"])
{
	case "B":
		$sorgu=
		("
			UPDATE tbl_belge SET
			tbl_belge.BIRLIK_ONAY=1,
			tbl_belge.BIRLIK_RET=0,
			tbl_belge.BIRLIK_RET_GEREKCE='',
			tbl_belge.TESK_RET=0,
			tbl_belge.TESK_RET_GEREKCE='',
			tbl_belge.BIRLIK_ONAY_ZAMANI=CURRENT_TIMESTAMP,
			tbl_belge.BIRLIK_ONAYLAYAN_ID=".intval($_SESSION["ss_oda_id"])."
			WHERE tbl_belge.ID=".intval($_GET["id"])."
		");
		
		$sorgu=mysql_query($sorgu) or die ("Sorguda Hata : ".mysql_error());
		
		//Birlik Onayi Maili
		$sorgu=
		("
			SELECT
			tbl_belge.TC_KIMLIK_NO,
			tbl_belge.ADI,
			tbl_belge.SOYADI,
			tbl_belge.BASVURU_TARIHI,
			tbl_oda.EMAIL,
			tbl_oda.ADI AS ODA_ADI
			FROM tbl_belge
			LEFT OUTER JOIN tbl_oda ON (tbl_oda.ID=tbl_belge.ODA_ID)
			WHERE tbl_belge.ID=".intval($_GET["id"])."
		");
		$sorgu=mysql_query($sorgu) or die ("Sorguda Hata : ".mysql_error());

		//mail gonderimi
		define("DISPLAY_XPM4_ERRORS", true);
		
		require_once "MAIL5.php";
		
		$m = new MAIL5;
		
		$m->From=array
		(
			"address"  => "info@tesk.org.tr", 
			"name"     => "TESK", 
			"charset"  => "utf-8", 
			"encoding" => "quoted-printable" 
		);
		
		$m->To[]=array
		(
			"address"  => $to=mysql_result($sorgu,0,"EMAIL"),
			"charset"  => "utf-8", 
			"encoding" => "quoted-printable"
		);
		
		$m->AddBcc("tesk1953@gmail.com");
		$m->AddBcc("nbt@nbt.com.tr");
		
		$m->AddBcc("ebru@tesk.org.tr");
		$m->AddBcc("melike@tesk.org.tr");
		
		$m->Subject=array
		(
			"content"  => "Tesk Kapasite Raporu Bilgilendirme - Birlik Onayı",
			"charset"  => "utf-8", 
			"encoding" => "quoted-printable"
		);
		
		$m->Text = array
		(
			"content"  => "Tesk Kapasite Raporu Bilgilendirme - Birlik Onayı", 
			"charset"  => "utf-8", 
			"encoding" => "quoted-printable" 
		);
		
		$icerik="
		<html>
			<body>
				<table border='1' cellpadding='2' cellspacing='2'>
					<tr>
						<td colspan='2'><b>Kapasite Raporu Birlik Onayı</b></td>
					</tr>
					<tr>
						<td><b>Oda</b></td>	
						<td>".mysql_result($sorgu,0,"ODA_ADI")."</td>	
					</tr>
					<tr>
						<td><b>Başvuru Tarihi</b></td>	
						<td>".TarihCevir(mysql_result($sorgu,0,"BASVURU_TARIHI"))."</td>	
					</tr>
					<tr>
						<td><b>TC Kimlik No</b></td>	
						<td>".mysql_result($sorgu,0,"TC_KIMLIK_NO")."</td>	
					</tr>
					<tr>
						<td><b>Adı Soyadı</b></td>	
						<td>".mysql_result($sorgu,0,"ADI")." ".mysql_result($sorgu,0,"SOYADI")."</td>	
					</tr>
					<tr>
						<td colspan='2'><b>Başvurunuz Bağlı Olduğunuz Birlik Tarafından Onaylandı</b></td>
					</tr>
				</table>
			</body>
		</html>
		";
		
		$m->Html=array
		(
			"content"  => $icerik,
			"charset"  => "utf-8", 
			"encoding" => "quoted-printable"
		);
		
		$c=$m->Connect("mail.tesk.org.tr",587,"info@tesk.org.tr", "1");
		
		$m->Send($c);
	break;

	case "T":
		$sorgu=
		("
			UPDATE tbl_belge SET
			tbl_belge.TESK_ONAY=1,
			tbl_belge.TESK_RET=0,
			tbl_belge.TESK_RET_GEREKCE='',
			tbl_belge.TESK_ONAY_ZAMANI=CURRENT_TIMESTAMP,
			tbl_belge.TESK_ONAYLAYAN_ID=".intval($_SESSION["ss_oda_id"]).",
			tbl_belge.TESK_ONAY_NO=".intval($_GET["onay_no"])."
			WHERE tbl_belge.ID=".intval($_GET["id"])."
		");
		$sorgu=mysql_query($sorgu) or die ("Sorguda Hata : ".mysql_error());

		//TESK Onayi Maili
		$sorgu=
		("
			SELECT
			tbl_belge.TC_KIMLIK_NO,
			tbl_belge.ADI,
			tbl_belge.SOYADI,
			tbl_belge.BASVURU_TARIHI,
			tbl_oda.EMAIL,
			tbl_oda.ADI AS ODA_ADI
			FROM tbl_belge
			LEFT OUTER JOIN tbl_oda ON (tbl_oda.ID=tbl_belge.ODA_ID)
			WHERE tbl_belge.ID=".intval($_GET["id"])."
		");
		$sorgu=mysql_query($sorgu) or die ("Sorguda Hata : ".mysql_error());

		//mail gonderimi
		define("DISPLAY_XPM4_ERRORS", true);
		
		require_once "MAIL5.php";
		
		$m = new MAIL5;
		
		$m->From=array
		(
			"address"  => "info@tesk.org.tr", 
			"name"     => "TESK", 
			"charset"  => "utf-8", 
			"encoding" => "quoted-printable" 
		);
		
		$m->To[]=array
		(
			"address"  => $to=mysql_result($sorgu,0,"EMAIL"),
			"charset"  => "utf-8", 
			"encoding" => "quoted-printable"
		);
		
		$m->AddBcc("tesk1953@gmail.com");
		$m->AddBcc("nbt@nbt.com.tr");
				
		$m->Subject=array
		(
			"content"  => "Tesk Kapasite Raporu Bilgilendirme - Tesk Onayı",
			"charset"  => "utf-8", 
			"encoding" => "quoted-printable"
		);
		
		$m->Text = array
		(
			"content"  => "Tesk Kapasite Raporu Bilgilendirme - Tesk Onayı", 
			"charset"  => "utf-8", 
			"encoding" => "quoted-printable" 
		);
		
		$icerik="
		<html>
			<body>
				<table border='1' cellpadding='2' cellspacing='2'>
					<tr>
						<td colspan='2'><b>Kapasite Raporu Tesk Onayı</b></td>
					</tr>
					<tr>
						<td><b>Oda</b></td>	
						<td>".mysql_result($sorgu,0,"ODA_ADI")."</td>	
					</tr>
					<tr>
						<td><b>Başvuru Tarihi</b></td>	
						<td>".TarihCevir(mysql_result($sorgu,0,"BASVURU_TARIHI"))."</td>	
					</tr>
					<tr>
						<td><b>TC Kimlik No</b></td>	
						<td>".mysql_result($sorgu,0,"TC_KIMLIK_NO")."</td>	
					</tr>
					<tr>
						<td><b>Adı Soyadı</b></td>	
						<td>".mysql_result($sorgu,0,"ADI")." ".mysql_result($sorgu,0,"SOYADI")."</td>	
					</tr>
					<tr>
						<td colspan='2'><b>Başvurunuz TESK Tarafından Onaylandı</b></td>
					</tr>
				</table>
			</body>
		</html>
		";
		
		$m->Html=array
		(
			"content"  => $icerik,
			"charset"  => "utf-8", 
			"encoding" => "quoted-printable"
		);
		
		$c=$m->Connect("mail.tesk.org.tr",587,"info@tesk.org.tr", "1");
		
		$m->Send($c);
		
	break;
}
?>
<script language="JavaScript" type="text/javascript">
	Onay_Bekleyenler('<? echo $_GET["tip"]?>');
</script>
