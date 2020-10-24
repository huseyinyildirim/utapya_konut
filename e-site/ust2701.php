		
        <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style type="text/css">
.style1 {
				border-collapse: collapse;
				background-color: #FFCC99;
}
        </style>
		</head>

<body topmargin="0" leftmargin="0">

<div align="center">
  <center>
  <table border="0" cellspacing="0" bordercolor="#111111" width="950" id="AutoNumber1" class="style1" style="border-collapse: collapse" cellpadding="0">
    <tr>
      <td bgcolor="#FFFFFF" width="220">
      <p align="center">
      <img border="0" src="logo.jpg" align="left" width="200" height="85"></td>
      <td bgcolor="#FFFFFF" width="398">
      <p align="center"><b><font face="Arial" size="5" color="#FF9966">UTOPYA 
      KONUTLARI SİTESİ</font><font face="Arial" size="4" color="#FF9966"><br>
      </font><font face="Arial" color="#000080" style="font-size: 16pt">SİTE BİLGİ SİSTEMİ</font></b></td>
      <td bgcolor="#FFFFFF" width="175">
      <p align="center">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" width="796" height="10">
      </td>
    </tr>    
    <tr>
      <td colspan="3" width="796">
      <p align="left"><b><font face="Arial" color="#000080" size="3">Daire : <?echo $_SESSION["kullanici_adi"]?></font></b></td>
    </tr>    
    <tr>
      <td colspan="3" width="796" height="10">
<p align="right"><font face="Arial" style="font-size: 10pt">IP Adresiniz&nbsp; :&nbsp; 
<? echo $_SERVER['REMOTE_ADDR'];?></font></td>
    </tr>

    <tr>
      <td colspan="3" width="796">

<div class="indentmenu">
<ul>
 
<?php
if($_SESSION["kullanici_adi"]=="Yonetim") {
?>
<li><a href="Javascript:ana_sayfa()"> Ana Sayfa </a></li>
<li><a href="Javascript:sitesakin()"> Site Sakini Bilgileri </a></li>
<li><a href="Javascript:siteodeme()"> Site Ödemeleri </a></li>
<li><a href="Javascript:toplu_borc()"> Toplu Borçlandırma </a></li>
<li><a href="Javascript:mesaj_gonder()"> Daireye Mesaj Gönder </a></li>
<li><a href="Javascript:cevap_bekleyen()"> Cevap Bekleyen Mesajlar </a></li>
<li><a href="Javascript:genel_bilgiler()"> Genel Bilgiler </a></li>
<li><a href="Javascript:raporlar()"> Raporlar </a></li>
<li><a href="cik.php"> Çıkış </a></li>

<?php
}
else{
?>
<li><a href="Javascript:daireana_sayfa()"> Ana Sayfa </a></li>
<li><a href="Javascript:borclar_odemeler()"> Borçlarınız ve Ödemeleriniz </a></li>
<li><a href="Javascript:site_harcama()"> Site Harcamaları </a></li>
<li><a href="Javascript:yonetime_mesaj()"> Yönetime Mesaj Gönder </a></li>
<li><a href="Javascript:mesaj_listele()"> Mesajlarınız </a></li>
<li><a href="Javascript:banka()"> İletişim ve Banka Hesap Bilgileri </a></li>
<li><a href="cik.php"> Çıkış </a></li>
<?
}
?>
</ul>
</div>

</td>
    </tr>

  </table>
  </center>
</div>

</td>
    </tr>

  </table>
  </center>
</div>