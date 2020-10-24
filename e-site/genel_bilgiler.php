<?
header ('Content-type: text/html; charset=utf-8');
session_start();
if($_SESSION["kullanici_adi"]) {
include("baglan.php");
$genelsor=("SELECT * FROM genel_bilgiler");
$genelsor=mysql_query($genelsor) or die("Sorguda Hata : ".mysql_error());
?><head>

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

<div align="center">
    <center>
    <table border="1" cellspacing="1" style="border-collapse: collapse" width="940" id="AutoNumber1">
      <tr>
        <td width="900" colspan="2" align="center" height="24" class="style2">
        <font face="Arial" size="2">Site Genel Bilgileri</font></td>
      </tr>
       
      <tr>
        <td>


<?
while ($genel=mysql_fetch_array($genelsor))
{
?>
        
        
<div align="center">
  <center>
  <table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="895">
    <tr>
      <td valign="top" width="450">
      <table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="450" height="122">
        <tr>
          <td colspan="3" bgcolor="#C0C0C0" height="16"><b><font face="Arial" size="2">Site Yönetim ve Denetim Kurulu</font></b></td>
        </tr>
        <tr>
          <td height="24" colspan="3">
            <div align="center"><b><font face="Arial" size="2">Yönetim Kurulu </font></b></div></td>
          </tr>
        <tr>
          <td width="200" height="21">
          <input type="text" name="yon_ad1" id="yon_ad1" value="<?echo $genel['yon_ad1'];?>" size="22"></td>
          <td width="150" height="21">
          <input type="text" name="yon_cep1" id="yon_cep1" value="<?echo $genel['yon_cep1'];?>" size="15"></td>
          <td height="21">
          <input type="text" name="yon_daire1" id="yon_daire1" value="<?echo $genel['yon_daire1'];?>" size="5"></td>
        </tr>
        <tr>
          <td height="21">
          <input type="text" name="yon_ad2" id="yon_ad2" value="<?echo $genel['yon_ad2'];?>" size="22"></td>
          <td height="21">
          <input type="text" name="yon_cep2" id="yon_cep2" value="<?echo $genel['yon_cep2'];?>" size="15"></td>
          <td height="21">
          <input type="text" name="yon_daire2" id="yon_daire2" value="<?echo $genel['yon_daire2'];?>" size="5"></td>
        </tr>
        <tr>
          <td height="21">
          <input type="text" name="yon_ad3" id="yon_ad3" value="<?echo $genel['yon_ad3'];?>" size="22"></td>
          <td height="21">
          <input type="text" name="yon_cep3" id="yon_cep3" value="<?echo $genel['yon_cep3'];?>" size="15"></td>
          <td height="21">
          <input type="text" name="yon_daire3" id="yon_daire3" value="<?echo $genel['yon_daire3'];?>" size="5"></td>
        </tr>
<tr>
          <td height="24" colspan="3">
            <div align="center"><b><font face="Arial" size="2">Denetim Kurulu </font></b></div></td>
          </tr>		
		        <tr>
          <td height="21">
          <input type="text" name="den_ad1" id="den_ad1" value="<?echo $genel['den_ad1'];?>" size="22"></td>
          <td height="21">
          <input type="text" name="den_cep1" id="den_cep1" value="<?echo $genel['den_cep1'];?>" size="15"></td>
          <td height="21">
          <input type="text" name="den_daire1" id="den_daire1" value="<?echo $genel['den_daire1'];?>" size="5"></td>
        </tr>
		
		        <tr>
          <td height="21">
          <input type="text" name="den_ad2" id="den_ad2" value="<?echo $genel['den_ad2'];?>" size="22"></td>
          <td height="21">
          <input type="text" name="den_cep2" id="den_cep2" value="<?echo $genel['den_cep2'];?>" size="15"></td>
          <td height="21">
          <input type="text" name="den_daire2" id="den_daire2" value="<?echo $genel['den_daire2'];?>" size="5"></td>
        </tr>
		
		        <tr>
          <td height="21">
          <input type="text" name="den_ad3" id="den_ad3" value="<?echo $genel['den_ad3'];?>" size="22"></td>
          <td height="21">
          <input type="text" name="den_cep3" id="den_cep3" value="<?echo $genel['den_cep3'];?>" size="15"></td>
          <td height="21">
          <input type="text" name="den_daire3" id="den_daire3" value="<?echo $genel['den_daire3'];?>" size="5"></td>
        </tr>
		
      </table>
      </td>
      <td valign="top" width="445">
      <table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="445" height="222">
        <tr>
          <td colspan="2" bgcolor="#C0C0C0" height="16"><b><font face="Arial" size="2">Site Personel Bilgileri</font></b></td>
        </tr>
        <tr>
          <td width="222" height="24">
          <b><font face="Arial" size="2">İsim</font></b></td>
          <td height="24">
          <b><font face="Arial" size="2">Görevi</font></b></td>
        </tr>
        <tr>
          <td width="222" height="21">
          <input type="text" name="per_ad1" id="per_ad1" value="<?echo $genel['per_ad1'];?>" size="32"></td>
          <td height="21">
          <input type="text" name="per_gorev1" id="per_gorev1" value="<?echo $genel['per_gorev1'];?>" size="25"></td>
        </tr>
        <tr>
          <td height="21">
          <input type="text" name="per_ad2" id="per_ad2" value="<?echo $genel['per_ad2'];?>" size="32"></td>
          <td height="21">
          <input type="text" name="per_gorev2" id="per_gorev2" value="<?echo $genel['per_gorev2'];?>" size="25"></td>
        </tr>
        <tr>
          <td height="21">
          <input type="text" name="per_ad3" id="per_ad3" value="<?echo $genel['per_ad3'];?>" size="32"></td>
          <td height="21">
          <input type="text" name="per_gorev3" id="per_gorev3" value="<?echo $genel['per_gorev3'];?>" size="25"></td>
        </tr>
        <tr>
          <td height="21">
          <input type="text" name="per_ad4" id="per_ad4" value="<?echo $genel['per_ad4'];?>" size="32"></td>
          <td height="21">
          <input type="text" name="per_gorev4" id="per_gorev4" value="<?echo $genel['per_gorev4'];?>" size="25"></td>
        </tr>
        <tr>
          <td height="21">
          <input type="text" name="per_ad5" id="per_ad5" value="<?echo $genel['per_ad5'];?>" size="32"></td>
          <td height="21">
          <input type="text" name="per_gorev5" id="per_gorev5" value="<?echo $genel['per_gorev5'];?>" size="25"></td>
        </tr>
        <tr>
          <td height="21">
          <input type="text" name="per_ad6" id="per_ad6" value="<?echo $genel['per_ad6'];?>" size="30"></td>
          <td height="21">
          <input type="text" name="per_gorev6" id="per_gorev6" value="<?echo $genel['per_gorev6'];?>" size="25"></td>
        </tr>
        <tr>
          <td height="21">
          <input type="text" name="per_ad7" id="per_ad7" value="<?echo $genel['per_ad7'];?>" size="32"></td>
          <td height="21">
          <input type="text" name="per_gorev7" id="per_gorev7" value="<?echo $genel['per_gorev7'];?>" size="25"></td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td colspan="2">
      <div align="center">
        <center>
        <table border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="890" height="135">
          <tr>
            <td colspan="5" height="16" bgcolor="#C0C0C0"><b><font face="Arial" size="2">Site Banka Bilgileri</font></b></td>
          </tr>
          <tr>
            <td width="200" height="27">
            <b><font face="Arial" size="2">Banka Adı</font></b></td>
            <td width="150" height="27">
            <b><font face="Arial" size="2">Şubesi</font></b></td>
            <td width="100" height="27">
            <b><font face="Arial" size="2">Hesap No</font></b></td>
            <td height="27">
            <b><font face="Arial" size="2">IBAN No</font></b></td>
            <td height="27">
            <b><font face="Arial" size="2">Hesap Adı</font></b></td>			
          </tr>
          <tr>
            <td width="200" height="21">
            <input type="text" name="banka_ad1" id="banka_ad1" value="<?echo $genel['banka_ad1'];?>" size="25"></td>
            <td width="150" height="21">
            <input type="text" name="banka_sube1" id="banka_sube1" value="<?echo $genel['banka_sube1'];?>" size="20"></td>
            <td width="100" height="21">
            <input type="text" name="banka_hesap1" id="banka_hesap1" value="<?echo $genel['banka_hesap1'];?>" size="15"></td>
            <td height="21">
            <input type="text" name="iban1" id="iban1" value="<?echo $genel['iban1'];?>" size="30"></td>
            <td height="21"><input type="text" name="hesap_ad1" id="hesap_ad1" value="<?echo $genel['hesap_ad1'];?>" size="30"></td>			
          </tr>
          <tr>
            <td height="21">
            <input type="text" name="banka_ad2" id="banka_ad2" value="<?echo $genel['banka_ad2'];?>" size="25"></td>
            <td height="21">
            <input type="text" name="banka_sube2" id="banka_sube2" value="<?echo $genel['banka_sube2'];?>" size="20"></td>
            <td height="21">
            <input type="text" name="banka_hesap2" id="banka_hesap2" value="<?echo $genel['banka_hesap2'];?>" size="15"></td>
            <td height="21">
            <input type="text" name="iban2" id="iban2" value="<?echo $genel['iban2'];?>" size="30"></td>
            <td height="21"><input type="text" name="hesap_ad2" id="hesap_ad2" value="<?echo $genel['hesap_ad2'];?>" size="30"></td>			
          </tr>
          <tr>
            <td height="21">
            <input type="text" name="banka_ad3" id="banka_ad3" value="<?echo $genel['banka_ad3'];?>" size="25"></td>
            <td height="21">
            <input type="text" name="banka_sube3" id="banka_sube3" value="<?echo $genel['banka_sube3'];?>" size="20"></td>
            <td height="21">
            <input type="text" name="banka_hesap3" id="banka_hesap3" value="<?echo $genel['banka_hesap3'];?>" size="15"></td>
            <td height="21">
            <input type="text" name="iban3" id="iban3" value="<?echo $genel['iban3'];?>" size="30"></td>
            <td height="21"><input type="text" name="hesap_ad3" id="hesap_ad3" value="<?echo $genel['hesap_ad3'];?>" size="30"></td>				
          </tr>
          <tr>
            <td colspan="5" height="31">
            <p align="center"><input type="submit" value="Site genel Bilgilerini Güncelle" name="guncelleonu" onClick="return genel_guncelle()"></td>
          </tr>
        </table>
        </center>
      </div>
      </td>
    </tr>
  </table>
  </center>
</div>
        

<?
}
?>        

        </td>
        
      </tr>
    

    </table>
    </center>
  </div>
<?php
}
else {
Header("Location: index.php");
}
?>