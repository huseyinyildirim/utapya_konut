<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {

include("baglan.php");
$genel_bilgiler=("SELECT * FROM genel_bilgiler");
$genel_bilgiler=mysql_query($genel_bilgiler) or die("Sorguda Hata : ".mysql_error());


?><head>

		<meta http-equiv="Content-Language" content="tr">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style type="text/css">
.style2 {
				font-weight: bold;
				border-width: 1px;
				background-color: #FFCC99;
}
        .style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
        .style4 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
}
        </style>
</head>




		<form method="POST" action="--WEBBOT-SELF--">
<div align="center">
    <center>
    <table border="1" cellspacing="1" style="border-collapse: collapse" width="940" id="AutoNumber1" height="85">
      <tr>
        <td width="940" align="center" height="30" class="style2">
        <font face="Arial" size="2">Yönetim ve Denetim Kurulu İletişim Bilgileri</font></td>
      </tr>
       
      <tr>
        <td width="930" height="19" >
                            <div align="center">
                              <center>
                              <table border="1" cellspacing="1" style="border-collapse: collapse" width="600">
<?
while ($bilgiler=mysql_fetch_array($genel_bilgiler))
{
?>                               
                                <tr>
                                  <td colspan="2"><span class="style4">Yönetim Kurulu İletişim Bilgileri </span></td>
                                </tr>
                                <tr>
                                  <td width="204"><font face="Arial" size="2"><?echo $bilgiler['yon_ad1'];?></font>&nbsp;</td>
                                  <td width="386"><font face="Arial" size="2"><?echo $bilgiler['yon_cep1'];?></font>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td width="204"><font face="Arial" size="2"><?echo $bilgiler['yon_ad2'];?></font>&nbsp;</td>
                                  <td width="386"><font face="Arial" size="2"><?echo $bilgiler['yon_cep2'];?></font>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td width="204"><font face="Arial" size="2"><?echo $bilgiler['yon_ad3'];?></font>&nbsp;</td>
                                  <td width="386"><font face="Arial" size="2"><?echo $bilgiler['yon_cep3'];?></font>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="2"><span class="style4">Denetim Kurulu İletişim Bilgileri </span></td>
                                </tr>
                                <tr>
                                  <td width="204"><font face="Arial" size="2"><?echo $bilgiler['den_ad1'];?></font>&nbsp;</td>
                                  <td width="386"><font face="Arial" size="2"><?echo $bilgiler['den_cep1'];?></font>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td width="204"><font face="Arial" size="2"><?echo $bilgiler['den_ad2'];?></font>&nbsp;</td>
                                  <td width="386"><font face="Arial" size="2"><?echo $bilgiler['den_cep2'];?></font>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td width="204"><font face="Arial" size="2"><?echo $bilgiler['den_ad3'];?></font>&nbsp;</td>
                                  <td width="386"><font face="Arial" size="2"><?echo $bilgiler['den_cep3'];?></font>&nbsp;</td>
                                </tr>								
<?
}
?>                                
                              </table>
                              </center>
                            </div>


</td>
        
      </tr>
    
      <tr>
        <td width="940" align="center" height="30" bgcolor="#FFCC99">
        <b><font face="Arial" size="2">Banka Hesap Bilgileri</font></b></td>
      </tr>
    
      <tr>
        <td width="940" align="center" height="22">
        <div align="center">
          <center>
          <table border="1" cellspacing="1" style="border-collapse: collapse" width="600">
<?
$genel_bilgiler2=("SELECT * FROM genel_bilgiler");
$genel_bilgiler2=mysql_query($genel_bilgiler2) or die("Sorguda Hata : ".mysql_error());
while ($bilgiler2=mysql_fetch_array($genel_bilgiler2))
{
?>             
            <tr>
              <td width="120"><font face="Arial" size="2"><?echo $bilgiler2['banka_ad1'];?></font>&nbsp;</td>
            <td width="122"><span class="style3">Şube <br>
			Hesap No<br>
			IBAN	<br>
			Hesap Adı		</span></td>			  
              <td width="340"><font face="Arial" size="2"><?echo $bilgiler2['banka_sube1'];?><br>
              <?echo $bilgiler2['banka_hesap1'];?><br>
              <?echo $bilgiler2['iban1'];?><br>
			  <?echo $bilgiler2['hesap_ad1'];?></font></td>
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
    </center>
  </div>
</form>
<?php
}
else {
Header("Location: index.php");
}
?>