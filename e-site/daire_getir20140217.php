<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");
$daire=$_POST["daire"];

$dairesor=("SELECT * FROM sitesakin WHERE daire_no='$daire'");
$dairesor=mysql_query($dairesor) or die("Sorguda Hata : ".mysql_error());
$sayifaal=mysql_num_rows($dairesor);
//echo $daire;
while ($daireci=mysql_fetch_array($dairesor))
{
$daireno=$daireci['daire_no'];
$adsoyad=$daireci['ad_soyad'];
$telefon=$daireci['telefon'];
$eposta=$daireci['eposta'];
$sifre=$daireci['sifre'];
$teb_adres=$daireci['teb_adres'];
$telefon2=$daireci['telefon2'];
$istel=$daireci['istel'];
$evtel=$daireci['evtel'];
}

$query = mysql_query("SELECT SUM(borc_tutar) FROM borclar where daire_no='$daire'");  
$row = mysql_fetch_array($query); 
$b_toplam=$row['SUM(borc_tutar)'];

$queryode = mysql_query("SELECT SUM(tutar) FROM odemeler where daire_no='$daire'");  
$row = mysql_fetch_array($queryode); 
$o_toplam=$row['SUM(tutar)'];

$borc_toplam=$b_toplam - $o_toplam;

$borcsor=("SELECT * FROM borclar WHERE daire_no='$daire' order by id DESC");
$borcsor=mysql_query($borcsor) or die("Sorguda Hata : ".mysql_error());

$odemesor=("SELECT * FROM odemeler WHERE daire_no='$daire' order by id DESC");
$odemesor=mysql_query($odemesor) or die("Sorguda Hata : ".mysql_error());

$kiracisor=("SELECT * FROM kiraci WHERE daire_no='$daire'");
$kiracisor=mysql_query($kiracisor) or die("Sorguda Hata : ".mysql_error());

$oturansor=("SELECT * FROM oturanlar WHERE daire_no='$daire'");
$oturansor=mysql_query($oturansor) or die("Sorguda Hata : ".mysql_error());

$aracsor=("SELECT * FROM aracsayac WHERE daire_no='$daire'");
$aracsor=mysql_query($aracsor) or die("Sorguda Hata : ".mysql_error());

?><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="css/stil.css" type="text/css" rel="stylesheet" />
	<link href="css/tabs.css" type="text/css" rel="stylesheet" />
	<link href="css/modal.css" type="text/css" rel="stylesheet" />
	<link href="ThemeOffice2003/theme.css" type="text/css" rel="stylesheet" />
	<link href="css/redmond/jqueryuiredmond.css" type="text/css" rel="stylesheet" />
	
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<script language="JavaScript" type="text/javascript" src="java/jquery-1.8.3.min.js"></script> <!-- JQUERY -->
	<script language="JavaScript" type="text/javascript" src="java/jquery-ui-1.9.2.custom.min.js"></script> <!-- JQUERYUI -->
	<script language="JavaScript" type="text/javascript" src="java/JSCookMenu.js"></script> <!-- UST MENU --> 
	<script language="JavaScript" type="text/javascript" src="ThemeOffice2003/theme.js"></script> <!-- UST MENU -->
	<script language="JavaScript" type="text/javascript" src="java/modal.js"></script> <!-- MODAL -->		
	
<script language="JavaScript" type="text/javascript">


//Tab tetikleme
$(
	function() 
	{
		$("#Tab01Umut").tabs();
	}
);


</script>
</head>
<div align="center">
  <table width="900" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <th width="450" scope="col"><div align="left">Daire : <? echo $daireno; ?> </div></th>
      <th width="444" scope="col"><div align="right">Toplam Borç <? echo $borc_toplam;?> TL </div></th>
    </tr>
    <tr>
      <td colspan="2">
	  
	  
<table width="900" align="center" cellpadding="2" cellspacing="2">
	<tr>
		<td>
		</td>
	</tr>
	<tr>
		<td colspan="5">
			<div id="Tab01Umut">
				<ul>
					<li><a href="#Div01">Konut Sahibi Bilgileri</a></li>	
					<li><a href="#Div02">Kiracı Bilgileri</a></li>	
					<li><a href="#Div03">Oturanlar</a></li>	
					<li><a href="#Div04">Araç ve Diğer Bilgiler</a></li>	
					<li><a href="#Div05">Mali Bilgiler</a></li>											
				</ul>
				<div id="Div01">
					
<table border="1" cellspacing="1" style="border-collapse: collapse" width="800">		  
          <tr>
            <td width="120" height="21"><font face="Arial" size="2">Ad Soyad </font> </td>
            <td width="280" height="21"><font face="Arial">
            <input type="text" name="T1" id="ubadsoyad" value="<?echo $adsoyad;?>" size="30"></font></td>
            <td width="120" height="21"><font face="Arial" size="2">Telefon </font> </td>
            <td width="280" height="21"><font face="Arial">
            <input type="text" name="T1" id="ubtelefon" value="<?echo $telefon;?>" size="25"></font></td>
          </tr>
          <tr>
            <td width="120" height="21"><font face="Arial" size="2">E-Posta </font> </td>
            <td width="280" height="21"><font face="Arial">
            <input type="text" name="T1" id="ubeposta" value="<?echo $eposta;?>" size="30"></font></td>
            <td width="120" height="21"><font face="Arial" size="2">Şifre</font></td>
            <td width="280" height="21"><font face="Arial">
            <input type="text" name="ubsifre" id="ubsifre" value="<?echo $sifre;?>" size="25"><input type="hidden" name="T1" id="ubdaireno" value="<?echo $daireno;?>" size="25"></font></td>
          </tr>
          <tr>
            <td width="120" height="21"><font face="Arial" size="2">Tebligat Adresi </font> </td>
            <td width="280" height="21"><font face="Arial">
            <input type="text" name="ubteb_adres" id="ubteb_adres" value="<?echo $teb_adres;?>" size="30"></font></td>
            <td width="120" height="21"><font face="Arial" size="2">Telefon 2</font></td>
            <td width="280" height="21"><font face="Arial">
            <input type="text" name="ubtelefon2" id="ubtelefon2" value="<?echo $telefon2;?>" size="25"></font></td>
          </tr>	
          <tr>
            <td width="120" height="21"><font face="Arial" size="2">İş telefonu </font> </td>
            <td width="280" height="21"><font face="Arial">
            <input type="text" name="ubistel" id="ubistel" value="<?echo $istel;?>" size="30"></font></td>
            <td width="120" height="21"><font face="Arial" size="2">Ev Telefonu</font></td>
            <td width="280" height="21"><font face="Arial">
            <input type="text" name="ubevtel" id="ubevtel" value="<?echo $evtel;?>" size="25"></font></td>
          </tr>			  	  
          <tr>
            <td colspan="4" width="890" height="42">
            <p align="center">
            <input type="submit" value="Daireye Ait Bilgileri Güncelle" name="guncelleonu" onClick="return daire_guncelle()"></td>
          </tr>
        </table>					
					
				</div>
				<div id="Div02">
<?
while ($kiraci=mysql_fetch_array($kiracisor))
{
?>

  <table width="800" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="145"><div align="left">İsim</div></td>
      <td width="249"<div align="left"><input type="text" name="kisim" id="kisim" value="<?echo $kiraci['isim'];?>" size="30"></div></td>
      <td width="145"<div align="left">Cep Telefonu </div></td>
      <td width="251"<div align="left"><input type="text" name="kceptel" id="kceptel" value="<?echo $kiraci['ceptel'];?>" size="30"></div></td>
    </tr>
    <tr>
      <td><div align="left">İş Adresi</div></td>
      <td colspan="3"><div align="left"><input type="text" name="kisadres" id="kisadres" value="<?echo $kiraci['isadres'];?>"size="60"></div></td>
    </tr>
    <tr>
      <td><div align="left">E Posta </div></td>
      <td><div align="left"><input type="text" name="keposta" id="keposta" value="<?echo $kiraci['eposta'];?>"size="30"></div></td>
      <td><div align="left">Cep Telefonu 2 </div></td>
      <td><div align="left"><input type="text" name="kceptel2" id="kceptel2" value="<?echo $kiraci['ceptel2'];?>" size="30"></div></td>
    </tr>
    <tr>
      <td><div align="left">Ev Telefonu </div></td>
      <td><div align="left"><input type="text" name="kevtel" id="kevtel" value="<?echo $kiraci['evtel'];?>" size="30"></div></td>
      <td><div align="left">İş Telefonu </div></td>
      <td><div align="left"><input type="text" name="kistel" id="kistel" value="<?echo $kiraci['istel'];?>" size="30"></div></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center"><input type="submit" value="Daireye Ait Kiracı Bilgilerini Güncelle" name="guncellekiraci" onClick="return kiraci_guncelle()"></div></td>
    </tr>
  </table>
<?
}
?>
						
				</div>
				<div id="Div03">
<?
while ($oturan=mysql_fetch_array($oturansor))
{
?>					
					
	<table align="center" width="800" border="1" cellspacing="1" cellpadding="1">
  <tr bgcolor="#CCCCCC">
    <td width="161"><div align="center">İsim</div></td>
    <td width="64"><div align="center">Kan Grubu </div></td>
    <td width="151"><div align="center">Doğum Tarihi </div></td>
    <td width="135"><div align="center">Eğitim</div></td>
    <td width="162"><div align="center">Meslek</div></td>
    <td width="94"><div align="center">Yakınlık</div></td>
  </tr>
  <tr>
    <td><input type="text" name="oisim1" id="oisim1" value="<?echo $oturan['isim1'];?>"size="25"></td>
    <td><input type="text" name="okan1" id="okan1" value="<?echo $oturan['kan1'];?>"size="10"></td>
    <td><input type="text" name="odtarih1" id="odtarih1" value="<?echo $oturan['dtarih1'];?>"size="20"></td>
    <td><input type="text" name="oegitim1" id="oegitim1" value="<?echo $oturan['egitim1'];?>"size="20"></td>
    <td><input type="text" name="omeslek1" id="omeslek1" value="<?echo $oturan['meslek1'];?>"size="20"></td>
    <td><input type="text" name="oderece1" id="oderece1" value="<?echo $oturan['derece1'];?>"size="15"></td>
  </tr>
  <tr>
    <td><input type="text" name="oisim2" id="oisim2" value="<?echo $oturan['isim2'];?>"size="25"></td>
    <td><input type="text" name="okan2" id="okan2" value="<?echo $oturan['kan2'];?>"size="10"></td>
    <td><input type="text" name="odtarih2" id="odtarih2" value="<?echo $oturan['dtarih2'];?>"size="20"></td>
    <td><input type="text" name="oegitim2" id="oegitim2" value="<?echo $oturan['egitim2'];?>"size="20"></td>
    <td><input type="text" name="omeslek2" id="omeslek2" value="<?echo $oturan['meslek2'];?>"size="20"></td>
    <td><input type="text" name="oderece2" id="oderece2" value="<?echo $oturan['derece2'];?>"size="15"></td>
  </tr>
  <tr>
    <td><input type="text" name="oisim3" id="oisim3" value="<?echo $oturan['isim3'];?>"size="25"></td>
    <td><input type="text" name="okan3" id="okan3" value="<?echo $oturan['kan3'];?>"size="10"></td>
    <td><input type="text" name="odtarih3" id="odtarih3" value="<?echo $oturan['dtarih3'];?>"size="20"></td>
    <td><input type="text" name="oegitim3" id="oegitim3" value="<?echo $oturan['egitim3'];?>"size="20"></td>
    <td><input type="text" name="omeslek3" id="omeslek3" value="<?echo $oturan['meslek3'];?>"size="20"></td>
    <td><input type="text" name="oderece3" id="oderece3" value="<?echo $oturan['derece3'];?>"size="15"></td>
  </tr>
  <tr>
    <td><input type="text" name="oisim4" id="oisim4" value="<?echo $oturan['isim4'];?>"size="25"></td>
    <td><input type="text" name="okan4" id="okan4" value="<?echo $oturan['kan4'];?>"size="10"></td>
    <td><input type="text" name="odtarih4" id="odtarih4" value="<?echo $oturan['dtarih4'];?>"size="20"></td>
    <td><input type="text" name="oegitim4" id="oegitim4" value="<?echo $oturan['egitim4'];?>"size="20"></td>
    <td><input type="text" name="omeslek4" id="omeslek4" value="<?echo $oturan['meslek4'];?>"size="20"></td>
    <td><input type="text" name="oderece4" id="oderece4" value="<?echo $oturan['derece4'];?>"size="15"></td>
  </tr>
  <tr>
    <td><input type="text" name="oisim5" id="oisim5" value="<?echo $oturan['isim5'];?>"size="25"></td>
    <td><input type="text" name="okan5" id="okan5" value="<?echo $oturan['kan5'];?>"size="10"></td>
    <td><input type="text" name="odtarih5" id="odtarih5" value="<?echo $oturan['dtarih5'];?>"size="20"></td>
    <td><input type="text" name="oegitim5" id="oegitim5" value="<?echo $oturan['egitim5'];?>"size="20"></td>
    <td><input type="text" name="omeslek5" id="omeslek5" value="<?echo $oturan['meslek5'];?>"size="20"></td>
    <td><input type="text" name="oderece5" id="oderece5" value="<?echo $oturan['derece5'];?>"size="15"></td>
  </tr>
  <tr>
    <td><input type="text" name="oisim6" id="oisim6" value="<?echo $oturan['isim6'];?>"size="25"></td>
    <td><input type="text" name="okan6" id="okan6" value="<?echo $oturan['kan6'];?>"size="10"></td>
    <td><input type="text" name="odtarih6" id="odtarih6" value="<?echo $oturan['dtarih6'];?>"size="20"></td>
    <td><input type="text" name="oegitim6" id="oegitim6" value="<?echo $oturan['egitim6'];?>"size="20"></td>
    <td><input type="text" name="omeslek6" id="omeslek6" value="<?echo $oturan['meslek6'];?>"size="20"></td>
    <td><input type="text" name="oderece6" id="oderece6" value="<?echo $oturan['derece6'];?>"size="15"></td>
  </tr>
  <tr>
    <td colspan="6"><div align="center"><input type="submit" value="Daireye Ait Oturan Bilgilerini Güncelle" name="guncelleoturan" onClick="return oturan_guncelle()"></div></td>
  </tr>
</table>
<?
}
?>				
					
				</div>
				<div id="Div04">
					

<?
while ($arac=mysql_fetch_array($aracsor))
{
?>						
					
					
  <table width="800" border="1" cellspacing="1" cellpadding="1">
    <tr bgcolor="#CCCCCC">
      <td width="450" valign="top"><div align="center">Araçlar</div></td>
      <td width="337" valign="top"><div align="center">Sayaçlar</div></td>
    </tr>
    <tr>
      <td valign="top"><table width="450" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td width="76"><div align="center">Plaka</div></td>
          <td width="177"><div align="center">Marka Model </div></td>
          <td width="76"><div align="center">Tag No </div></td>
          <td width="108"><div align="center">Tag Seri </div></td>
        </tr>
        <tr>
          <td><div align="center"><input type="text" name="aplaka1" id="aplaka1" value="<?echo $arac['plaka1'];?>"size="15"></div></td>
          <td><div align="center"><input type="text" name="ammodel1" id="ammodel1" value="<?echo $arac['mmodel1'];?>"size="25"></div></td>
          <td><div align="center"><input type="text" name="atagno1" id="atagno1" value="<?echo $arac['tagno1'];?>"size="10"></div></td>
          <td><div align="center"><input type="text" name="atagseri1" id="atagseri1" value="<?echo $arac['tagseri1'];?>"size="20"></div></td>
        </tr>
        <tr>
          <td><div align="center"><input type="text" name="aplaka2" id="aplaka2" value="<?echo $arac['plaka2'];?>"size="15"></div></td>
          <td><div align="center"><input type="text" name="ammodel2" id="ammodel2" value="<?echo $arac['mmodel2'];?>"size="25"></div></td>
          <td><div align="center"><input type="text" name="atagno2" id="atagno2" value="<?echo $arac['tagno2'];?>"size="10"></div></td>
          <td><div align="center"><input type="text" name="atagseri2" id="atagseri2" value="<?echo $arac['tagseri2'];?>"size="20"></div></td>
        </tr>
        <tr>
          <td><div align="center"><input type="text" name="aplaka3" id="aplaka3" value="<?echo $arac['plaka3'];?>"size="15"></div></td>
          <td><div align="center"><input type="text" name="ammodel3" id="ammodel3" value="<?echo $arac['mmodel3'];?>"size="25"></div></td>
          <td><div align="center"><input type="text" name="atagno3" id="atagno3" value="<?echo $arac['tagno3'];?>"size="10"></div></td>
          <td><div align="center"><input type="text" name="atagseri3" id="atagseri3" value="<?echo $arac['tagseri3'];?>"size="20"></div></td>
        </tr>
        <tr>
          <td><div align="center"><input type="text" name="aplaka4" id="aplaka4" value="<?echo $arac['plaka4'];?>"size="15"></div></td>
          <td><div align="center"><input type="text" name="ammodel4" id="ammodel4" value="<?echo $arac['mmodel4'];?>"size="25"></div></td>
          <td><div align="center"><input type="text" name="atagno4" id="atagno4" value="<?echo $arac['tagno4'];?>"size="10"></div></td>
          <td><div align="center"><input type="text" name="atagseri4" id="atagseri4" value="<?echo $arac['tagseri4'];?>"size="20"></div></td>
        </tr>
      </table></td>
      <td valign="top"><table width="337" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td width="111">Elektrik</td>
          <td width="219"><input type="text" name="aelektrik" id="aelektrik" value="<?echo $arac['elektrik'];?>"size="25"></td>
        </tr>
        <tr>
          <td>Su</td>
          <td><input type="text" name="asu" id="asu" value="<?echo $arac['su'];?>"size="25"></td>
        </tr>
        <tr>
          <td>Doğalgaz</td>
          <td><input type="text" name="adogalgaz" id="adogalgaz" value="<?echo $arac['dogalgaz'];?>"size="25"></td>
        </tr>
        <tr>
          <td>Isı Pay Ölçer </td>
          <td><input type="text" name="aisipay" id="aisipay" value="<?echo $arac['isipay'];?>"size="25"></td>
        </tr>
        <tr>
          <td>İnternet Taahhüdü </td>
          <td><input type="text" name="ainternet" id="ainternet" value="<?echo $arac['internet'];?>"size="25"></td>
        </tr>		
      </table></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td valign="top"><div align="center">Acil Durumda İletişime Geçilecek Kişi ve Telefon Numarası </div></td>
      <td valign="top"><div align="center">Evcil Hayvan </div></td>
    </tr>
    <tr>
      <td valign="top"><div align="center"><input type="text" name="aacil" id="aacil" value="<?echo $arac['acil'];?>"size="50"></div></td>
      <td valign="top"><div align="center"><input type="text" name="aevcil" id="aevcil" value="<?echo $arac['evcil'];?>"size="40"></div></td>
    </tr>
    <tr>
      <td height="25px" colspan="2" valign="top"><div align="center"><input type="submit" value="Daireye Ait Araç-Sayaç Bilgilerini Güncelle" name="guncellearac" onClick="return arac_guncelle()"></div></td>
    </tr>
  </table>					
<?
}
?>					
					
					
					
					
					
				</div>
				<div id="Div05">
			
			<table border="1" cellspacing="1" style="border-collapse: collapse" width="800">
          <tr>
            <td width="400" valign="top" align="center" bgcolor="#000080"><b>
            <font face="Arial" size="2" color="#FFFFFF">Daireye Borç Ekle</font></b></td>
            <td width="400" valign="top" align="center" bgcolor="#000080"><b>
            <font face="Arial" size="2" color="#FFFFFF">Daireye Ödeme Yap</font></b></td>
          </tr>
          <tr>
            <td width="400" valign="top">
            <div align="center">
              <center>
              <table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#C0C0C0" width="400" height="144">
                <tr>
                  <td width="175" height="22"><font face="Arial" size="2">&nbsp;Borç Türü</font></td>
                  <td width="200" height="22">
                  
                  <select size="1" name="borc_tur" id="borc_tur" style="font-size: 10pt">
              <option selected value="Borc Türü">Borc Türü</option>            
              <option value="Elektrik">Elektrik</option>
              <option value="Isınma">Isınma Gideri</option>
              <option value="Diğer">Diğer</option>			  
              </select>
              
              </td>
                </tr>
				
                <tr>
                  <td width="175" height="22"><font face="Arial" size="2">&nbsp;Açıklama</font></td>
                  <td width="200" height="22">
                  
<input type="text" name="baciklama" id="borc_aciklama" size="30">
              
              </td>
                </tr>				
				
				
                <tr>
                  <td width="168" height="22"><font face="Arial" size="2">&nbsp;Ait Olduğu Dönem ( 
                  Ay )</font></td>
                  <td width="200" height="22">
                  
<select size="1" name="borc_ay" id="borc_ay" style="font-size: 10pt">
              <option selected value="Ay">Ay</option>            
              <option value="Ocak">Ocak</option>
              <option value="Şubat">Şubat</option>
              <option value="Mart">Mart</option>
              <option value="Nisan">Nisan</option>
              <option value="Mayıs">Mayıs</option>
              <option value="Haziran">Haziran</option>
              <option value="Temmuz">Temmuz</option>
              <option value="Ağustos">Ağustos</option>
              <option value="Eylül">Eylül</option>
              <option value="Ekim">Ekim</option>
              <option value="Kasım">Kasım</option>
              <option value="Aralık">Aralık</option>
              </select>                  
                  
                  
                  </td>
                </tr>
                <tr>
                  <td width="168" height="22"><font face="Arial" size="2">&nbsp;Ait Olduğu Dönem ( 
                  Yıl )</font></td>
                  <td width="200" height="22">
                  
              <select size="1" name="borc_yil" id="borc_yil" style="font-size: 10pt">
              <option selected value="Yıl">Yıl</option>            
              <option value="2014">2014</option>
              </select>                  
                  
                  </td>
                </tr>
                <tr>
                  <td width="168" height="22"><font face="Arial" size="2">&nbsp;Borç Tutarı</font></td>
                  <td width="200" height="22">
                  
                  <input type="text" name="bt1" id="borc_tutar" size="8">
                  <font face="Arial" style="font-size: 11pt">TL</font><input type="hidden" name="bbT1" id="borc_daireno" value="<?echo $daireno;?>">
                  
            <input type="hidden" name="cvT1" id="borc_eposta" value="<?echo $eposta;?>" size="30">                  
                  
                  
                  </td>
                </tr>
                <tr>
                  <td width="400" colspan="2" height="37">
                  <p align="center">
                  
            <input type="submit" value="Borcu Ekle" name="borcekle" onClick="return borc_ekle()">                                    
                  
                  
                  </td>
                </tr>
              </table>
              </center>
            </div>
            </td>
            <td width="400" valign="top">
            
            
            <div align="center">
              <center>
              <table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#C0C0C0" width="400" height="144">
                <tr>
                  <td width="175" height="22"><font face="Arial" size="2">&nbsp;Ödeme 
                  Günü</font></td>
                  <td width="200" height="22">
                  
                  
<select size="1" name="odeme_gun" id="odemey_gun">
              <option value="Gün">Gün</option>            
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
              </select>                  
                  
              
              </td>
                </tr>
                <tr>
                  <td width="168" height="22"><font face="Arial" size="2">&nbsp;Ödeme 
                  Ayı</font></td>
                  <td width="200" height="22">
                  
<select size="1" name="borc_ay" id="odemey_ay" style="font-size: 10pt">
              <option selected value="Ay">Ay</option>            
              <option value="Ocak">Ocak</option>
              <option value="Şubat">Şubat</option>
              <option value="Mart">Mart</option>
              <option value="Nisan">Nisan</option>
              <option value="Mayıs">Mayıs</option>
              <option value="Haziran">Haziran</option>
              <option value="Temmuz">Temmuz</option>
              <option value="Ağustos">Ağustos</option>
              <option value="Eylül">Eylül</option>
              <option value="Ekim">Ekim</option>
              <option value="Kasım">Kasım</option>
              <option value="Aralık">Aralık</option>
              </select>                  
                  
                  
                  </td>
                </tr>
                <tr>
                  <td width="168" height="22"><font face="Arial" size="2">&nbsp;Ödeme 
                  Yılı</font></td>
                  <td width="200" height="22">
                  
              <select size="1" name="odeme_yil" id="odemey_yil" style="font-size: 10pt">
              <option selected value="Yıl">Yıl</option>            
              <option value="2014">2014</option>
              </select>                  
                  
                  </td>
                </tr>
                <tr>
                  <td width="168" height="22"><font face="Arial" size="2">&nbsp;Ödeme Tutarı</font></td>
                  <td width="200" height="22">
                  
                  <input type="text" name="bt1" id="odemey_tutar" size="8">
                  <font face="Arial" style="font-size: 11pt">TL</font><input type="hidden" name="bbT1" id="odemey_daireno" value="<?echo $daireno;?>">
                  
                  
                  </td>
                </tr>
                <tr>
                  <td width="400" colspan="2" height="37">
                  <p align="center">
                  
            <input type="submit" value="Ödemeyi Kaydet" name="borcekle" onClick="return odemey_ekle()">                                    
                  
                  
                  </td>
                </tr>
              </table>
			  
			
				</div>	
								
			</div>
			
		</td>
		
<table border="1" cellspacing="1" style="border-collapse: collapse" width="800">
          <tr>
            <td width="400" bgcolor="#000080" align="center"><b>
            <font face="Arial" size="2" color="#FFFFFF">Borç Listesi</font></b></td>
            <td width="400" bgcolor="#000080" align="center"><b>
            <font face="Arial" size="2" color="#FFFFFF">Ödeme Listesi</font></b></td>
          </tr>
          <tr>
            <td width="400" valign="top">
            
            <div align="center">
              <center>
              <table border="0" cellpadding="0" cellspacing="1" style="border-collapse: collapse" width="400">
                <tr>
                  <td width="90" align="left" bgcolor="#CCCCCC"><b><font face="Arial" size="2">
                  Borç Türü</font></b></td>
                  <td width="160" align="left" bgcolor="#CCCCCC"><b><font face="Arial" size="2">
                  Açıklama</font></b></td>				  
                  <td width="120" align="center" bgcolor="#CCCCCC"><b><font face="Arial" size="2">
                  Dönemi</font></b></td>
                  <td width="80" align="center" bgcolor="#CCCCCC"><b><font face="Arial" size="2">
                  Tutar</font></b></td>
                  <td width="50" align="center" bgcolor="#CCCCCC"><b><font face="Arial" size="2">
                  İşlem</font></b></td>
                </tr>
<?                
while ($borc=mysql_fetch_array($borcsor))
{

$i+=1;
if ($i%2==1)
{
$renk="#FFFFFF";
}
else
{
$renk="#EBEBEB";
}

?>                
                <tr>
                  <td bgcolor="<?echo $renk;?>" width="90" align="left"><font face="Arial" size="2"><?echo $borc['borc_turu'];?>
</font>&nbsp;</td>
                  <td bgcolor="<?=$renk?>" width="160" align="center"><font face="Arial" size="2">
                  <?echo $borc['aciklama'];?></font></td>
                  <td bgcolor="<?=$renk?>" width="120" align="center"><font face="Arial" size="2">
                  <?echo $borc['borc_donemay'];?>-<?echo $borc['borc_donemyil'];?></font></td>				  
                  <td bgcolor="<?=$renk?>" width="80" align="center"><font face="Arial" size="2">
                  <?echo $borc['borc_tutar'];?> TL</font></td>
                  <td bgcolor="<?=$renk?>" width="50" align="center"><font face="Arial" size="2"><input type="submit" value="Sil" name="borcsil" onClick="return borc_sil(<?echo $borc['id'];?>)"></font></td>
                </tr>
<?
}
?>                
              </table>
              </center>
            </div>
            
            
            </td>
            <td width="400" valign="top">
            
            
            <div align="center">
              <center>
              <table border="0" cellpadding="0" cellspacing="1" style="border-collapse: collapse" width="400">
                <tr>

                  <td width="200" align="left" bgcolor="#CCCCCC"><b><font face="Arial" size="2">
                  Ödeme Tarihi</font></b></td>
                  <td width="100" align="center" bgcolor="#CCCCCC"><b><font face="Arial" size="2">
                  Tutar</font></b></td>
                  <td width="57" align="center" bgcolor="#CCCCCC"><b><font face="Arial" size="2">
                  İşlem</font></b></td>
                </tr>
<?                
while ($odemeci=mysql_fetch_array($odemesor))
{
?>                
                <tr>

                  <td width="200" align="left"><font face="Arial" size="2">
                  <?echo $odemeci['gun'];?> <?echo $odemeci['ay'];?> <?echo $odemeci['yil'];?></font>&nbsp;</td>
                  <td width="100" align="center"><font face="Arial" size="2">
                  <?echo $odemeci['tutar'];?> TL</font></td>
                  <td width="57" align="center"><font face="Arial" size="2"><input type="submit" value="Sil" name="odemesil" onClick="return dodeme_sil(<?echo $odemeci['id'];?>)"></font></td>
                </tr>
<?
}
?>                
              </table>
              </center>
            </div>            
            
            
            </td>
          </tr>
        </table>		
		
	</tr>
</table>	  
	  </td>
    </tr>
  </table>

</div> 
<?php
}
else {
Header("Location: index.php");
}
?>