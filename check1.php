<?php
session_start();
//echo $_POST["hdnFbID"]."<br>";
//echo $_POST["hdnName"]."<br>";
//echo $_POST["hdnEmail"]."<br>";
	include("mysqlconn.php");
	mysql_query("SET NAMES UTF8");
	// Check Exists ID
	$strSQL = "SELECT * FROM users WHERE facebook_id = '".$_POST["hdnFbID"]."' ";
	$objQuery = mysql_query($strSQL);

	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
		$_SESSION["strFacebookID"] = $objResult["facebook_id"];
		$_SESSION["strFacebookName"] = $_POST["hdnName"];
		header("location:dashboard.php");
		exit();
	}
	else
	{
		// Create New ID
	$sql_insert ="INSERT INTO `users`( `facebook_id`, `user_name`) VALUES 
 		('". $_POST["hdnFbID"]. "','".$_POST["hdnName"]. "')";
echo $sql_insert ;
$_SESSION["strFacebookID"] = $_POST["hdnFbID"];
$_SESSION["strFacebookName"] = $_POST["hdnName"];
	 
	$sql1 = mysql_query($sql_insert);

			//$strPicture = "https://graph.facebook.com/".$_SESSION["hdnFbID"]."/picture?type=large";
			//$strLink = "https://www.facebook.com/app_scoped_user_id/".$_SESSION["hdnFbID"]."/";
header("location:register.php");
			exit();
	}


	mysql_close();
?>