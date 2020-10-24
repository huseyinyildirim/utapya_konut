<?
header ('Content-type: text/html; charset=utf-8');
session_start();
?>
<?
include("baglan.php");


$otelsor=mysql_query("select * from oteller"); 

$birlik=$_SESSION["birlik_id"];
$gkodu=$_SESSION["kodu"];

$kurumsor=mysql_query("select * from tbl_oda where BIRLIK='$birlik'");

?>


		<head>

		<meta http-equiv="Content-Language" content="tr">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style type="text/css">
.style2 {
				font-weight: bold;
				border-width: 1px;
				background-color: #FFCC99;
}
        </style>
</head>

<form method="POST" action="--WEBBOT-SELF--">
<div align="center">
    <center>
    <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="800" id="AutoNumber1">
      <tr>
        <td width="800" colspan="2" align="center" height="26" class="style2">
        <font face="Arial" size="2">E-Posta ve Şifre İşlemleri</font></td>
      </tr>
       
      <tr>
        <td width="796" height="25" colspan="2" bgcolor="#FFCC99">
        <p align="center"><b><font face="Arial" size="2">Şifre İşlemleri</font></b></td>
      </tr>
       
      <tr>
        <td width="184" height="22"><font face="Arial" size="2">&nbsp;Yeni Şifre</font></td>
        <td width="612" height="22"><input type="text" name="sifre" id="sifre" size="20"><input type="hidden" name="gonderen" id="gonderen" value="<?echo $_SESSION["kullanici_adi"]?>" size="20"></td>
      </tr>
            <tr>
        <td width="184" height="21"><font face="Arial" size="2">&nbsp;Yeni Şifre 
        Tekrar</font></td>
        <td width="612" height="21"><input type="text" name="sifre2" id="sifre2" size="20"></td>
      </tr>
    
      <tr>
        <td width="800" align="center" colspan="2" height="25">
        <font face="Arial">
        <input type="button" value="Şifreyi Değiştir" name="B1" onClick="return sifre_degistir()" ></font></td>
      </tr>
      <tr>
        <td width="796" height="5" colspan="2"></td>
        </tr>
      <tr>
        <td width="796" height="25" colspan="2" bgcolor="#FFCC99">
        <p align="center"><b><font face="Arial" size="2">E-Posta İşlemleri</font></b></td>
        </tr>

    
      <tr>
        <td width="184" height="22"><font face="Arial" size="2">&nbsp;E-Posta 
        Adresiniz</font></td>
        <td width="612" height="22"><input type="text" name="eposta1" id="eposta1" size="20"></td>
      </tr>
            <tr>
        <td width="184" height="21"><font face="Arial" size="2">&nbsp;E-Posta 
        Adresiniz Tekrar</font></td>
        <td width="612" height="21"><input type="text" name="eposta2" id="eposta2" size="20"></td>
      </tr>
    
      <tr>
        <td width="800" align="center" colspan="2" height="25">
        <font face="Arial">
        <input type="button" value="E-Posta Adresimi Sisteme Kayıt Et" name="B1" onClick="return eposta_gir()" ></font></td>
      </tr>


    </table>
    </center>
  </div>
</form>