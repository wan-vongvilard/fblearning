<?php session_start(); 
   include("mysqlconn.php") ;//REPLACE INTO `scores`(`score_id`, `score_date`, `activity_ac_id`, `facebook_id`) VALUES (,,,,)fb
    $sql_insert ="REPLACE INTO `scores`(`score_id`, `score_date`, `activity_ac_id`, `facebook_id`) VALUES (null,'".$_POST["score"]. "','".$_GET["activity_id"]."','".$_GET["fb"]."') " ;
    $classid=$_GET['activity_id'];
 $sql1 = mysql_query($sql_insert);
    echo  $classid;
    echo $cstudents_id;
 if(!$sql1){
  header("location:classmates1.php?activity_id=".$classid."");

    }
    else{
  header("location:classmates1.php?activity_id=".$classid."");

   }
    
    mysql_close();


 ?>
