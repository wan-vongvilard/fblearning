 <?php 
session_start();
//INSERT INTO `classes`(`class_id`, `passclassroom`, `class_name`) VALUES (1,2,3)

   include("mysqlconn.php") ;
   mysql_query("SET NAMES UTF8");
   //SELECT classes.passclassroom,classes.class_id,classes.class_name FROM users INNER JOIN classes ON users.facebook_id = classes.facebook_id INNER JOIN roles ON roles.role_id = users.role_id


 	$sql_insert ="INSERT INTO  `classes`(`class_id`, `class_name`, `passclassroom`,  `facebook_id`)  VALUES ('".$_POST["cid"]. "','".$_POST["pclass"]. "','".$_POST["cname"]."','".$_SESSION["strFacebookID"]."') " ;
	 $sql1 = mysql_query($sql_insert);
 	if(!$sql1){
 	header("location:dashboard.php");

 	}
 	else{
 	header("location:dashboard.php");

 	}
	
mysql_close();
 ;?>
