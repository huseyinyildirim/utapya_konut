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
    <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="800" id="AutoNumber1" height="167">
      <tr>
        <td width="800" colspan="2" align="center" height="1" class="style2">
        <font face="Arial" size="2">Yönetime Mesaj Gönder</font></td>
      </tr>
       
      <tr>
        <td width="184" height="56"><font face="Arial" size="2">&nbsp;Mesajınız</font></td>
        <td width="612" height="56"><textarea rows="5" name="mesaj" id="mesaj" cols="40"></textarea><input type="hidden" name="gonderen" id="gonderen" value="<?echo $_SESSION["kullanici_adi"]?>" size="20"></td>
      </tr>
    
      <tr>
        <td width="800" align="center" colspan="2" height="10">
        <font face="Arial">
        <input type="button" value="Mesajı Gönder" name="B1" onClick="return proje_kaydet()" ></font></td>
      </tr>
    </table>
    </center>
  </div>
</form>