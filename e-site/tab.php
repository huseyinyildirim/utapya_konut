<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>TESK BİM</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="css/stil.css" type="text/css" rel="stylesheet" />
	<link href="css/tabs.css" type="text/css" rel="stylesheet" />
	<link href="css/modal.css" type="text/css" rel="stylesheet" />
	<link href="ThemeOffice2003/theme.css" type="text/css" rel="stylesheet" />
	<link href="css/redmond/jqueryuiredmond.css" type="text/css" rel="stylesheet" />
	
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<script language="JavaScript" type="text/javascript" src="java/jquery-1.8.3.min.js"></script> <!-- JQUERY -->
	<script language="JavaScript" type="text/javascript" src="java/jquery-ui-1.9.2.custom.min.js"></script> <!-- JQUERYUI -->
	<script language="JavaScript" type="text/javascript" src="java/JSCookMenu.js"></script> <!-- UST MENU --> 
	<script language="JavaScript" type="text/javascript" src="ThemeOffice2003/theme.js"></script> <!-- UST MENU -->
	<script language="JavaScript" type="text/javascript" src="java/modal.js"></script> <!-- MODAL -->	
	
<script language="JavaScript" type="text/javascript">


//Tab tetikleme
$(
	function() 
	{
		$("#Tab01Umut").tabs();
	}
);


</script>
</head>
<table width="900" align="center" cellpadding="2" cellspacing="2">
	<tr>
		<td>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<div id="Tab01Umut">
				<ul>
					<li><a href="#Div01">Başlık 01</a></li>	
					<li><a href="#Div02">Başlık 02</a></li>	
					<li><a href="#Div03">Başlık 03</a></li>	
					<li><a href="#Div04">Başlık 04</a></li>						
				</ul>
				<div id="Div01">
					İçerik 01	
				</div>
				<div id="Div02">
					İçerik 02	
				</div>
				<div id="Div03">
					İçerik 013
				</div>
				<div id="Div04">
					İçerik 014
				</div>				
			</div>
		</td>
	</tr>
</table>