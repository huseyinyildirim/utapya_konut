<?php
$bagla = mysql_connect("mysql.baskenthosting.net","utopyakonutlari","b7NbM2eH6o") or mysql_error();
mysql_select_db("utopyakonutlaricom-db1",$bagla) or mysql_error();
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLATION_CONNECTION = 'utf8_turkish_ci'");
?>