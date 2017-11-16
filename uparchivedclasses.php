<?php
session_start(); 
  include("mysqlconn.php") ;
$update_classes = "UPDATE `classes` SET  `archivedclass`= '".$_GET['archivedclass']."' WHERE class_id = '".$_GET['classid']."' AND facebook_id = '".$_SESSION["strFacebookID"]."'";
$sql1 = mysql_query($update_classes);
 if(!$sql1){
  header("location:class.php");

    }
    else{
   header("location:class.php");

   }
    
    mysql_close();
?>