<?php session_start(); 
   include("mysqlconn.php") ;
   mysql_query("SET NAMES UTF8");
//INSERT INTO `classes`(`class_id`, `class_name`, `description`, `passclassroom`, `Max_stdents`, `facebook_id`)  description
    $sql_insert ="INSERT INTO  `classes`(`class_id`, `class_name`,`description`,`passclassroom`,  `facebook_id`)  VALUES (
    '".$_POST["cid"]. "',
    '".$_POST["cname"]. "',
    '".$_POST["description"]."',
    '".$_POST["pclass"]."',
    '".$_SESSION["strFacebookID"]."') " ;
     $sql1 = mysql_query($sql_insert);
    if(!$sql1){
    header("location:class.php");

    }
    else{
    header("location:class.php");

    }
    
    mysql_close();


 ?>
