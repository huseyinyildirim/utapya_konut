<?
header ('Content-type: text/html; charset=utf-8');
session_start();
include("baglan.php");
$odemesor=("SELECT * FROM ank_faaliyet");
$odemesor=mysql_query($odemesor) or die("Sorguda Hata : ".mysql_error());
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
    <table border="1" cellpadding="1" cellspacing="1" style="border-collapse: collapse" width="800" id="AutoNumber1" height="179">
      <tr>
        <td width="800" align="center" height="28" class="style2">
        <font face="Arial" size="2">Faaliyet Bilgisi Giriş ve Düzenleme</font></td>
      </tr>
       
      <tr>
        <td width="790" height="54">
        <div align="center">
          <center>
          <table border="1" cellspacing="1" style="border-collapse: collapse" width="750">
            <tr>
              <td width="60" align="center"><b>
              <font face="Arial" style="font-size: 9pt">Gün</font></b></td>
              <td width="80" align="center"><b>
              <font face="Arial" style="font-size: 9pt">Ay</font></b></td>
              <td width="60" align="center"><b>
              <font face="Arial" style="font-size: 9pt">Yıl</font></b></td>
              <td width="19" align="center">&nbsp;</td>
              <td width="391" align="center"><b>
              <font face="Arial" style="font-size: 9pt">Yapılan Faaliyet</font></b></td>              
              <td width="78" align="center">&nbsp;</td>                              
            </tr>
            <tr>
              <td align="center" width="60"><font face="Arial" size="2">
              
<select size="1" name="odeme_gun" id="odeme_gun">
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
              </select></font></td>
              <td align="center" width="80"><font face="Arial" size="2"><select size="1" name="odeme_ay" id="odeme_ay">
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
              </select></font></td>
              <td align="center" width="60"><font face="Arial" size="2"><select size="1" name="odeme_yil" id="odeme_yil">
              <option selected value="Yıl">Yıl</option>            
              <option value="2013">2013</option>
              </select></font></td>
              <td align="center" width="19"><font face="Arial" size="2">
              
</font></td>
              <td align="center" width="391"><font face="Arial" size="2">
              <input type="text" name="odeme_aciklama" id="odeme_aciklama" size="60"></font></td>              
              <td align="center" width="78"><font face="Arial" size="2">
              <input type="button" value="Kaydet" name="B1" onClick="return odeme_yap()" ></font></td>                            
            </tr>
          </table>
          </center>
        </div>
        </td>
        
      </tr>
    
      <tr>
        <td width="800" align="center" height="1">
        </td>
      </tr>
    
      <tr>
        <td width="800" align="center" height="82">
        <div align="center">
          <center>
          <table border="1" cellpadding="1" cellspacing="1"  style="border-collapse: collapse"  width="700">
            <tr>
              <td colspan="4" align="center" height="10" width="694"><b>
              <font face="Arial" style="font-size: 5pt">.</font></b></td>
            </tr>
            <tr>
              <td colspan="4" align="center" bgcolor="#FFCC99" width="694"><b>
              <font face="Arial" size="2">Yapılan Tüm Faaliyetler</font></b></td>
            </tr>
            <tr>
              <td width="100"><b><font face="Arial" size="2">Tarih</font></b></td>
              <td width="7" align="center">&nbsp;</td>
              <td align="left" width="518">
              <p align="center"><b><font face="Arial" size="2">
              Yapılan İş</font></b></td>
              <td align="center" width="75"><b><font face="Arial" size="2">İşlem</font></b></td>
            </tr>

<?
while ($odemeci=mysql_fetch_array($odemesor))
{
?> 
            
            <tr>
              <td width="100"><font face="Arial" style="font-size: 9pt"><?echo $odemeci['gun'];?> <?echo $odemeci['ay'];?> <?echo $odemeci['yil'];?></font>&nbsp;</td>
              <td width="7" align="center"></td>
              <td align="left" width="518"><font face="Arial" style="font-size: 9pt"><?echo $odemeci['aciklama'];?></font>&nbsp;</td>
              <td align="center" width="75"><font face="Arial" style="font-size: 9pt"><input type="button" value=" Sil " name="odemem_sil" onClick="return odeme_sil(<?echo $odemeci['id'];?>)" ></font></td>
            </tr>
<?
$toplam=$toplam+$odemeci['tutar'];
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