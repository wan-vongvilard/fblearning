<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='learning';
$dbname='learning';
$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die("Couldn't connect to server");
mysql_select_db($dbname)or die("Couldn't connect to database");
// Check Exists ID
mysql_set_charset('utf8',$conn);
mysql_query("SET NAMES UTF8");
?>