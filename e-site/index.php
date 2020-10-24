<?
header ('Content-type: text/html; charset=utf-8');
include("baglan.php");
$sorgumesaj=("SELECT * FROM sitesakin");
$sorgumesaj=mysql_query($sorgumesaj) or die("Sorguda Hata : ".mysql_error());
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
		<meta http-equiv="Content-Language" content="tr">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<script type="text/javascript">
	function git()
	{
		document.form_login.kullanici.focus();
	}
	</script>

<title>E-SİTE ÜTOPYA KONUTLARI SİTESİ</title>
</head>


<body topmargin="0" leftmargin="0" onload="git()">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="800" id="AutoNumber1" height="600">
    <tr>
      <td>
      <form name="form_login" method="POST" action="giris.php">
  <div align="center" style="width: 808; height: 430">
          <center>
          <div align="center">
            <center>
            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="800" id="AutoNumber3">
              <tr>
                <td>
                <p align="center">
                <img border="0" src="logo1.jpg" width="340" height="142"></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>
                <p align="center"><b>
                <font face="Arial" size="5" color="#F69422">ÜTOPYA KONUTLARI</font></b></td>
              </tr>
              <tr>
                <td>
                <p align="center"><b><font face="Arial" size="2">IP Adresiniz : <? echo $_SERVER['REMOTE_ADDR'];?>

                </font></b></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
            </center>
          </div>
          <table border="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="252" id="AutoNumber2">
            <tr>
              <td width="252" colspan="3" align="center" style="border-left-style: solid; border-left-width: 1; border-right-style: solid; border-right-width: 1; border-top-style: solid; border-top-width: 1">
              <u><b><font face="Arial" color="#000080">Güvenli Giriş</font></b></u></td>
            </tr>
            <tr>
              <td width="99" style="border-left-style: solid; border-left-width: 1; border-right-style: none; border-right-width: medium">&nbsp;</td>
              <td width="14" style="border-style: none; border-width: medium">&nbsp;</td>
              <td width="139" align="right" style="border-left-style: none; border-left-width: medium; border-right-style: solid; border-right-width: 1; border-top-style: none; border-top-width: medium; border-bottom-style: none; border-bottom-width: medium">&nbsp;
              </td>
            </tr>
            <tr>
              <td width="99" style="border-left-style: solid; border-left-width: 1; border-right-style: none; border-right-width: medium">
              <b><font face="Arial" color="#000080">Daire No
              <span style="font-size: 9pt">&nbsp; </span></font></b></td>
              <td width="14" style="border-style: none; border-width: medium"><b>
              <font face="Arial" color="#000080">:</font></b></td>
              <td width="139" align="left" style="border-left-style: none; border-left-width: medium; border-right-style: solid; border-right-width: 1; border-top-style: none; border-top-width: medium; border-bottom-style: none; border-bottom-width: medium">
              <select size="1" name="daire">
              <option selected value="Daire No">Daire No</option>
<?
while ($birim=mysql_fetch_array($sorgumesaj))
{
?>
              <option value="<?echo $birim['daire_no'];?>"><?echo $birim['daire_no'];?></option>
<?
}
?>              
              </select></td>
            </tr>
            <tr>
              <td width="99" style="border-left-style: solid; border-left-width: 1; border-right-style: none; border-right-width: medium"><b>
              <font face="Arial" color="#000080">Şifre</font></b></td>
              <td width="14" style="border-style: none; border-width: medium"><b>
              <font face="Arial" color="#000080">:</font></b></td>
              <td width="139" align="left" style="border-left-style: none; border-left-width: medium; border-right-style: solid; border-right-width: 1; border-top-style: none; border-top-width: medium; border-bottom-style: none; border-bottom-width: medium">
              <input type="password" name="sifre" size="10"></td>
            </tr>
            <tr>
              <td width="99" style="border-left-style: solid; border-left-width: 1; border-right-style: none; border-right-width: medium">&nbsp;</td>
              <td width="14" style="border-style: none; border-width: medium">&nbsp;</td>
              <td width="139" align="right" style="border-left-style: none; border-left-width: medium; border-right-style: solid; border-right-width: 1; border-top-style: none; border-top-width: medium; border-bottom-style: none; border-bottom-width: medium">&nbsp;
              </td>
            </tr>
            <tr>
              <td width="252" colspan="3" style="border-left-style: solid; border-left-width: 1; border-right-style: solid; border-right-width: 1; border-bottom-style: solid; border-bottom-width: 1">
              <p align="center"><input type="submit" value="Oturumu Aç" name="B1"></td>
            </tr>
          </table>
          </center>
        </div>
        <p align="center"><b><font color="#ff0000" size="2" face="Arial">!!! 
        Sistem Internet Explorer ve Firefox Tarayıcılarında Çalışmaktadır !!!</font><font size="2" face="Arial"><br>
&nbsp;</font></b></p>
      </form>
      <p align="center"></td>
    </tr>
  </table>
  </center>
</div>


</html>