<?php
session_start();
//echo $_POST["hdnFbID"]."<br>";
//echo $_POST["hdnName"]."<br>";
//echo $_POST["hdnEmail"]."<br>";
	include("mysqlconn.php");
	mysql_query("SET NAMES UTF8");
	// Check Exists ID & class_id = '".$_GET["classname"]."'

$sql_delclass="DELETE FROM `activities` WHERE `activity_id`='".$_GET["activity_id"]."' ";
 $sql_delcass = mysql_query($sql_delclass);
 if(!$sql_delcass){
 header("location:stream.php?classid=".$classid."&cstudents_id=".$cstudents_id."");
 }
 else{
 header("location:stream.php?classid=".$classid."&cstudents_id=".$cstudents_id."");
 }




	mysql_close();
?>