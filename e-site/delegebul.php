
<?php
header ('Content-type: text/html; charset=utf-8');
      session_start();
      if($_SESSION["kullanici_adi"]) {
      include("baglan.php"); 

?>
<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		


<style type="text/css">

/*Credits: Dynamic Drive CSS Library */
/*URL: http://www.dynamicdrive.com/style/ */

.indentmenu{
font: bold 12px Arial;
width: 100%; /*leave this value as is in most cases*/
overflow: hidden;
}

.indentmenu ul{
border-left:0px solid #ab9cc3; border-right:0px solid #ab9cc3; border-top:1px solid #ab9cc3; border-bottom:1px solid #ab9cc3; margin:0; padding:0; float: left;
width: 100%; /*width of menu*/
/*dark purple border*/
background: black url('media/indentbg.gif') repeat-x center;
}

.indentmenu ul li{
display: inline;
}

.indentmenu ul li a{
float: left;
color: #000000; /*text color*/
padding: 5px 5px;
text-decoration: none;
border-right: 1px solid #564c66; /*dark purple divider between menu items*/
}

.indentmenu ul li a:visited{
color: #000000;
}

.indentmenu ul li a:hover, .indentmenu ul li .current{
color: white !important; /*text color of selected and active item*/
padding-top: 6px; /*shift text down 1px for selected and active item*/
padding-bottom: 4px; /*shift text down 1px for selected and active item*/
background: black url('media/indentbg2.gif') repeat-x center;
}

        </style>

<title>TESK</title>

</head>
<body topmargin="0" leftmargin="0">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="800" id="AutoNumber1" bgcolor="#FFFFFF">
    <tr>
  

      <td>
      <p align="center">
            
      
      <div align="center">
  <center>
  <table border="0" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="800" id="AutoNumber1" bgcolor="#DDE5F1">
    <tr>
      <td>
      <p align="center"><b><font face="Arial" color="#000080">TESK Delege Bilgi Sistemi</font></b></td>
    </tr>
    <tr>
      <td>
      <p align="left"><b><font face="Arial" color="#000080" size="2">Kullanıcı: <?echo $_SESSION["kullanici_adi"]?></font></b></td>
    </tr>    
    <tr>
      <td>

<div class="indentmenu">
<ul>
 
<li><a href="delegebul.php"> Delege Bilgi Girişi </a></li>
<li><a href="Javascript:sorgu()"> Delege Sorgula </a></li>
<li><a href="Javascript:sorgu()"> Otel Durum Bilgisi </a></li>
<li><a href="cik.php"> Çıkış </a></li>
</ul>
</div>

</td>
    </tr>

  </table>
  </center>
</div>
      
      
            
      
      </td>
 
    </tr>

    <tr>
 
      <td>

<div id="ekleme" align="center">
  <center>
  <table border="1" cellspacing="1" style="border-collapse: collapse"  width="800" id="AutoNumber2" height="30">
    <tr>
      <td width="790" height="27">
      <form method="POST" action="--WEBBOT-SELF--">
        <!--webbot bot="SaveResults" u-file="fpweb:///_private/form_results.csv" s-format="TEXT/CSV" s-label-fields="TRUE" --><p align="center">&nbsp;<div align="center">
          <center>
          <table border="1" cellpadding="1" cellspacing="1" swidth="489" id="AutoNumber3">
            <tr>
              <td width="150"><b><font face="Arial" size="2">Delegenin Adı:</font></b></td>
              <td width="188">
              <input type="text" name="adi" size="30" style="font-family: Arial; font-size: 11px"></td>
              <td width="151"> 
              <p align="center"> 
              <input type="submit" value="Delegeyi Bul" name="B1"></td>
            </tr>
          </table>
          </center>
        </div>
      </form>
      </td>
    </tr>
    </table>
  </center>
</div>

      </td>
    </tr>
    <tr>
      <td>

<div id="Orta_Yukleniyor" style="display:none;">
&nbsp;</div>
<div id="Orta_Sonuc"></div>

</td>
    </tr>
    <tr>
      <td>
      <p align="center"><? include("alt.php"); ?></td>
    </tr>

      <td>

      </td>
    </tr>
  </table>
  </center>
</div>
</body>
</html>
<?php
}
else {
Header("Location: index.php");
}
?>