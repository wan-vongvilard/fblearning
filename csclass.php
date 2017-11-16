 <?php 
session_start();
//INSERT INTO `classes`(`class_id`, `passclassroom`, `class_name`) VALUES (1,2,3)

include("mysqlconn.php") ;
$strSQL ="SELECT * FROM `classes`  WHERE passclassroom ='".$_POST["classp"]."' ";
$objQuery = mysql_query($strSQL);
$sql1 = mysql_fetch_array($objQuery);

if($sql1){

		$sql_insert ="INSERT INTO `students_in_class`( `facebook_id`,`class_id`) VALUES ('".$_SESSION["strFacebookID"]."','".$sql1["class_id"]."')";
	 	$sql2 = mysql_query($sql_insert);
		if(!$sql2){

				echo "yes";
				//header("location:dashboard.php");

			}
		else{
				echo "no";
				header("location:dashboard.php");
			}
	}
else{echo "no1";//header("location:dashboard.php");
}		

mysql_close();
 ;?>
