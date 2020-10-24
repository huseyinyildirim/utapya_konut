<?php

      session_start();

      if($_SESSION['yonet']) {

            ?>



<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">

<meta http-equiv="Content-Language" content="tr">

<title>3 AS ÖZEL GÜVENLİK HİZMETLERİ OLAY KAYIT SİSTEMİ</title>



	<style type="text/css">

   <!--

   a:link       { text-decoration: none; color: #000000 }

   a:visited    { text-decoration: none; color: #000000 }

   a:active     { text-decoration: none; color: #000000 }

   a:hover      { text-decoration: none; color: #4576C3 }

.theme {background: #003366}

a:link.themeheaderlink {font-weight: bold; color:#FFFFFF;}

body {

	background-color: #f8f7f1;

}

.style18 {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 9px;

}

   -->

    </style>



<script type="text/javascript">



function kontrol(){



a= document.gazete.olay.value

b= document.gazete.sonuc.value

c= document.gazete.date.value

    

       if (a == ""){

        alert('Lütfen Olayı Giriniz.');

        document.gazete.olay.focus();

     return false;

     }     

       if (b == ""){

        alert('Lütfen Sonucu Giriniz.');

        document.gazete.sonuc.focus();

     return false;

     }      

       if (c == ""){

        alert('Lütfen Olay Tarihini Giriniz.');

        document.gazete.date.focus();

     return false;

     } 

}

</script> 



<style type="text/css">



.ds_box {

	background-color: #FFF;

	border: 1px solid #000;

	position: absolute;

	z-index: 32767;

}



.ds_tbl {

	background-color: #FFF;

}



.ds_head {

	background-color: #333;

	color: #FFF;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 13px;

	font-weight: bold;

	text-align: center;

	letter-spacing: 2px;

}



.ds_subhead {

	background-color: #CCC;

	color: #000;

	font-size: 12px;

	font-weight: bold;

	text-align: center;

	font-family: Arial, Helvetica, sans-serif;

	width: 32px;

}



.ds_cell {

	background-color: #EEE;

	color: #000;

	font-size: 13px;

	text-align: center;

	font-family: Arial, Helvetica, sans-serif;

	padding: 5px;

	cursor: pointer;

}



.ds_cell:hover {

	background-color: #F3F3F3;

} /* This hover code won't work for IE */



</style>





</head>

<body topmargin="0" leftmargin="0">



<table class="ds_box" cellpadding="0" cellspacing="0" id="ds_conclass" style="display: none;">

<tr><td id="ds_calclass">

</td></tr>

</table>

<script type="text/javascript">

// <!-- <![CDATA[



// Project: Dynamic Date Selector (DtTvB) - 2006-03-16

// Script featured on JavaScript Kit- http://www.javascriptkit.com

// Code begin...

// Set the initial date.

var ds_i_date = new Date();

ds_c_month = ds_i_date.getMonth() + 1;

ds_c_year = ds_i_date.getFullYear();



// Get Element By Id

function ds_getel(id) {

	return document.getElementById(id);

}



// Get the left and the top of the element.

function ds_getleft(el) {

	var tmp = el.offsetLeft;

	el = el.offsetParent

	while(el) {

		tmp += el.offsetLeft;

		el = el.offsetParent;

	}

	return tmp;

}

function ds_gettop(el) {

	var tmp = el.offsetTop;

	el = el.offsetParent

	while(el) {

		tmp += el.offsetTop;

		el = el.offsetParent;

	}

	return tmp;

}



// Output Element

var ds_oe = ds_getel('ds_calclass');

// Container

var ds_ce = ds_getel('ds_conclass');



// Output Buffering

var ds_ob = ''; 

function ds_ob_clean() {

	ds_ob = '';

}

function ds_ob_flush() {

	ds_oe.innerHTML = ds_ob;

	ds_ob_clean();

}

function ds_echo(t) {

	ds_ob += t;

}



var ds_element; // Text Element...



var ds_monthnames = [

'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran',

'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'

]; // You can translate it for your language.



var ds_daynames = [

'Pz', 'Ptesi', 'S', 'Ç', 'P', 'C', 'Ctesi'

]; // You can translate it for your language.



// Calendar template

function ds_template_main_above(t) {

	return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'

	     + '<tr>'

		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'

		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'

		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Kapat]</td>'

		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'

		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'

		 + '</tr>'

	     + '<tr>'

		 + '<td colspan="7" class="ds_head">' + t + '</td>'

		 + '</tr>'

		 + '<tr>';

}



function ds_template_day_row(t) {

	return '<td class="ds_subhead">' + t + '</td>';

	// Define width in CSS, XHTML 1.0 Strict doesn't have width property for it.

}



function ds_template_new_week() {

	return '</tr><tr>';

}



function ds_template_blank_cell(colspan) {

	return '<td colspan="' + colspan + '"></td>'

}



function ds_template_day(d, m, y) {

	return '<td class="ds_cell" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';

	// Define width the day row.

}



function ds_template_main_below() {

	return '</tr>'

	     + '</table>';

}



// This one draws calendar...

function ds_draw_calendar(m, y) {

	// First clean the output buffer.

	ds_ob_clean();

	// Here we go, do the header

	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));

	for (i = 0; i < 7; i ++) {

		ds_echo (ds_template_day_row(ds_daynames[i]));

	}

	// Make a date object.

	var ds_dc_date = new Date();

	ds_dc_date.setMonth(m - 1);

	ds_dc_date.setFullYear(y);

	ds_dc_date.setDate(1);

	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {

		days = 31;

	} else if (m == 4 || m == 6 || m == 9 || m == 11) {

		days = 30;

	} else {

		days = (y % 4 == 0) ? 29 : 28;

	}

	var first_day = ds_dc_date.getDay();

	var first_loop = 1;

	// Start the first week

	ds_echo (ds_template_new_week());

	// If sunday is not the first day of the month, make a blank cell...

	if (first_day != 0) {

		ds_echo (ds_template_blank_cell(first_day));

	}

	var j = first_day;

	for (i = 0; i < days; i ++) {

		// Today is sunday, make a new week.

		// If this sunday is the first day of the month,

		// we've made a new row for you already.

		if (j == 0 && !first_loop) {

			// New week!!

			ds_echo (ds_template_new_week());

		}

		// Make a row of that day!

		ds_echo (ds_template_day(i + 1, m, y));

		// This is not first loop anymore...

		first_loop = 0;

		// What is the next day?

		j ++;

		j %= 7;

	}

	// Do the footer

	ds_echo (ds_template_main_below());

	// And let's display..

	ds_ob_flush();

	// Scroll it into view.

	ds_ce.scrollIntoView();

}



// A function to show the calendar.

// When user click on the date, it will set the content of t.

function ds_sh(t) {

	// Set the element to set...

	ds_element = t;

	// Make a new date, and set the current month and year.

	var ds_sh_date = new Date();

	ds_c_month = ds_sh_date.getMonth() + 1;

	ds_c_year = ds_sh_date.getFullYear();

	// Draw the calendar

	ds_draw_calendar(ds_c_month, ds_c_year);

	// To change the position properly, we must show it first.

	ds_ce.style.display = '';

	// Move the calendar container!

	the_left = ds_getleft(t);

	the_top = ds_gettop(t) + t.offsetHeight;

	ds_ce.style.left = the_left + 'px';

	ds_ce.style.top = the_top + 'px';

	// Scroll it into view.

	ds_ce.scrollIntoView();

}



// Hide the calendar.

function ds_hi() {

	ds_ce.style.display = 'none';

}



// Moves to the next month...

function ds_nm() {

	// Increase the current month.

	ds_c_month ++;

	// We have passed December, let's go to the next year.

	// Increase the current year, and set the current month to January.

	if (ds_c_month > 12) {

		ds_c_month = 1; 

		ds_c_year++;

	}

	// Redraw the calendar.

	ds_draw_calendar(ds_c_month, ds_c_year);

}



// Moves to the previous month...

function ds_pm() {

	ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.

	// We have passed January, let's go back to the previous year.

	// Decrease the current year, and set the current month to December.

	if (ds_c_month < 1) {

		ds_c_month = 12; 

		ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.

	}

	// Redraw the calendar.

	ds_draw_calendar(ds_c_month, ds_c_year);

}



// Moves to the next year...

function ds_ny() {

	// Increase the current year.

	ds_c_year++;

	// Redraw the calendar.

	ds_draw_calendar(ds_c_month, ds_c_year);

}



// Moves to the previous year...

function ds_py() {

	// Decrease the current year.

	ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.

	// Redraw the calendar.

	ds_draw_calendar(ds_c_month, ds_c_year);

}



// Format the date to output.

function ds_format_date(d, m, y) {

	// 2 digits month.

	m2 = '00' + m;

	m2 = m2.substr(m2.length - 2);

	// 2 digits day.

	d2 = '00' + d;

	d2 = d2.substr(d2.length - 2);

	// YYYY-MM-DD

	return y + '-' + m2 + '-' + d2;

}



// When the user clicks the day.

function ds_onclick(d, m, y) {

	// Hide the calendar.

	ds_hi();

	// Set the value of it, if we can.

	if (typeof(ds_element.value) != 'undefined') {

		ds_element.value = ds_format_date(d, m, y);

	// Maybe we want to set the HTML in it.

	} else if (typeof(ds_element.innerHTML) != 'undefined') {

		ds_element.innerHTML = ds_format_date(d, m, y);

	// I don't know how should we display it, just alert it to user.

	} else {

		alert (ds_format_date(d, m, y));

	}

}



// And here is the end.



// ]]> -->

</script>







<div align="center">

  <center>

  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="800" id="AutoNumber1" bgcolor="#FFFFFF">

    <tr>

      <td align="center" bgcolor="#C0C0C0" colspan="4" width="800"><b>

      <font face="Arial">OLAY KAYIT SİSTEMİ</font></b></td>

    </tr>

    <tr>

      <td align="center" width="116" bgcolor="#EEEEEE">

      <p align="center">&nbsp;</td>

      <td align="center" width="287" bgcolor="#EEEEEE">

      &nbsp;</td>

      <td align="center" width="287" bgcolor="#EEEEEE">

      &nbsp;</td>

      <td align="center" width="110" bgcolor="#EEEEEE">

      <img border="0" src="cik.jpg" align="right" hspace="0" width="19" height="16">

      <font face="Arial" size="2">

      <a href="cik.php">Güvenli Çıkış</a></font></td>

    </tr>

    <tr>

      <td align="center" colspan="4" width="800">

      <p align="center">&nbsp;</td>

    </tr>

    <tr>

      <td align="center" colspan="4" width="800" bgcolor="#EEEEEE">

      <p align="left"><b>

      <font face="Arial" size="2" color="#000080">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      OLAY KAYIT</font></b></td>

    </tr>

<?php
$tur=$_GET['tur'];
if ($tur==1){

?> 

    <tr>

      <td align="center" colspan="4" width="800"><b>
      <font face="Arial" style="font-size: 11pt" color="#FF0000">Olay Başarıyla 
      Eklenmiştir</font></b></td>

    </tr>



<?php

}

?>    

   

    <tr>

      <td align="center" colspan="4" width="800">&nbsp;</td>

    </tr>

    <tr>

      <td align="center" colspan="4" width="800">

      <form method="POST" name="gazete" action="upload.php" enctype="multipart/form-data" onsubmit="return kontrol()">

        <div align="center">

          <center>

          <table border="0" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="600" id="AutoNumber2" bgcolor="#FFFFFF">

            <tr>

              <td width="148"><b><font face="Arial" size="2">Meydana Gelen Olay</font></b></td>

              <td width="7"><b><font face="Arial" size="2">:</font></b></td>

              <td width="435">
              <textarea rows="3" name="olay" cols="35" tabindex="3"></textarea></td>

            </tr>

            <tr>

              <td width="148"><b><font face="Arial" size="2">Sonuç</font></b></td>

              <td width="7"><b><font face="Arial" size="2">:</font></b></td>

              <td width="435"><textarea rows="3" name="sonuc" cols="35"></textarea></td>

            </tr>

            <tr>

              <td width="148"><b><font face="Arial" size="2">Olay Tarihi</font></b></td>

              <td width="7"><b><font face="Arial" size="2">:</font></b></td>

              <td width="435"><input onfocus="ds_sh(this);" name="date" readonly="readonly" style="cursor: text" size="30" /> </td>

            </tr>

            <tr>

              <td width="148">&nbsp;</td>

              <td width="7">&nbsp;</td>

              <td width="435">&nbsp;</td>

            </tr>

            <tr>

              <td width="590" colspan="3" align="center">

              <input type="submit" value="Olayı Kaydet" name="gonder"></td>

            </tr>

          </table>

          </center>

        </div>

      </form>

      </td>

    </tr>

    <tr>

      <td align="center" colspan="4" width="800">
      <div align="center">
        <center>
        <table border="0" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="800" height="70">
          <tr>
            <td colspan="4" align="center" bordercolor="#EEEEEE" bgcolor="#EEEEEE" height="25">
            <b><u><font face="Arial" size="3" color="#000080">Kayıtlı Olaylar</font></u></b></td>
          </tr>
          <tr>
            <td width="120" bgcolor="#000000" height="20"><u><b>
            <font face="Arial" size="2" color="#FFFFFF">Tarih</font></b></u></td>
            <td width="250" bgcolor="#000000" height="20"><u><b>
            <font face="Arial" size="2" color="#FFFFFF">Olay</font></b></u></td>
            <td width="250" bgcolor="#000000" height="20"><u><b>
            <font face="Arial" size="2" color="#FFFFFF">Sonuç</font></b></u></td>
            <td align="center" bgcolor="#000000" height="20"><u><b>
            <font face="Arial" size="2" color="#FFFFFF">İşlem</font></b></u></td>
          </tr>
          
<?php
include("baglan.php");
$ana=mysql_query("select * from ankara");  
while ($vide=mysql_fetch_array($ana))
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
            <td bgcolor="<?=$renk?>" height="16" ><font face="Arial" size="2"><?=$vide['gun']?> <?=$vide['ay']?> <?=$vide['yil']?></font></td>
            <td bgcolor="<?=$renk?>" height="16" ><font face="Arial" size="2"><?=$vide['olay']?></font></td>
            <td bgcolor="<?=$renk?>" height="16" ><font face="Arial" size="2"><?=$vide['sonuc']?></font></td>
            <td bgcolor="<?=$renk?>" align="center" height="16"><font face="Arial" size="2">
            <a OnClick="return confirm('Bu Kayıt Silinecektir. Eminmisiniz?')" href="sil.php?id=<?=$vide['id']?>">Sil</a></font></td>
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

      <td align="center" colspan="4" width="800">&nbsp;</td>

    </tr>

    <tr>

      <td align="center" bgcolor="#C0C0C0" colspan="4" width="800"><b>
      <font face="Arial" style="font-size: 9pt">3 AS Özel Güvenlik Hizmetleri</font></b></td>

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