 <?php 
session_start();
//INSERT INTO `classes`(`class_id`, `passclassroom`, `class_name`) VALUES (1,2,3)

include("mysqlconn.php") ;

//UPDATE `users` SET `facebook_id`=[value-1],`user_name`=[value-2],`user_surname`=[value-3],`user_schoolname`=[value-4],`role_id`=[value-5] WHERE 1
		$sql_up ="UPDATE `users` SET `user_name`= '". $_POST["username"]."' ,`user_surname` = '". $_POST["surnname"]. "',`user_schoolname`= '". $_POST["shoolname"]. "' WHERE facebook_id = '".$_SESSION["strFacebookID"]."'";
	 	$sql2 = mysql_query($sql_up);
		if(!$sql2){
echo $sql_up;
				echo "yes";
				header("location:dashboard.php");

			}
		else{
			echo $sql_up;
				echo "no";
				header("location:dashboard.php");
			}


mysql_close();
 ;?>
