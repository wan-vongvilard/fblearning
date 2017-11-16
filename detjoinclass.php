<?php
session_start();
//echo $_POST["hdnFbID"]."<br>";
//echo $_POST["hdnName"]."<br>";
//echo $_POST["hdnEmail"]."<br>";
	include("mysqlconn.php");
	mysql_query("SET NAMES UTF8");
	// Check Exists ID & class_id = '".$_GET["classname"]."'


$sql_delclass="DELETE FROM `students_in_class` WHERE  class_id = '".$_GET['classid']."' AND facebook_id = '".$_SESSION["strFacebookID"]."' ";
 $sql_delcass = mysql_query($sql_delclass);
 if(!$sql_delcass){
header("location:class.php");
 }
 else{
header("location:class.php");
 }

	mysql_close();
?>