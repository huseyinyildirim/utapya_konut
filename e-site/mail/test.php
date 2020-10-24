<?
session_start();

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
			"address"  => "umut@tesk.org.tr",
			"charset"  => "utf-8", 
			"encoding" => "quoted-printable"
		);
		
		$m->Subject=array
		(
			"content"  => "Web Başvurunuzun Cevabıı",
			"charset"  => "utf-8", 
			"encoding" => "quoted-printable"
		);
		
		$m->Text = array
		(
			"content"  => "Web Başvurunuzun Cevabı", 
			"charset"  => "utf-8", 
			"encoding" => "quoted-printable" 
		);
		
		$icerik="
		<html>
			<body>
				<table border='1' cellpadding='2' cellspacing='2'>
					<tr>
						<td colspan='2'><b>Web Başvurunuzun Cevabı</b></td>
					</tr>
					<tr>
						<td><b>Oda</b></td>	
						<td>test</td>	
					</tr>
					<tr>
						<td><b>Başvuru Tarihi</b></td>	
						<td>Tarih</td>	
					</tr>
					<tr>
						<td><b>TC Kimlik No</b></td>	
						<td>TC No</td>	
					</tr>
					<tr>
						<td><b>Adı Soyadı</b></td>	
						<td>Ad Soyad</td>	
					</tr>
					<tr>
						<td colspan='2'><b>cevap Web Başvurunuzun Cevabı Selam</b></td>
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

?>