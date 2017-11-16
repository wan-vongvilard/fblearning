<?php session_start(); 
   include("mysqlconn.php") ;
    $sql_insert ="INSERT INTO `comments`(`commein_id`, `commein`, `activie_id`, `facebook_id`) VALUES (null,'".$_POST["commein"]. "','".$_GET["activity_id"]."','".$_SESSION["strFacebookID"]."') " ;
    $classid=$_GET['classid'];
    $cstudents_id=$_GET["cstudents_id"];
 $sql1 = mysql_query($sql_insert);
    echo  $classid;
    echo $cstudents_id;
 if(!$sql1){
  header("location:stream.php?classid=".$classid."&cstudents_id=".$cstudents_id."");

    }
    else{
  header("location:stream.php?classid=".$classid."&cstudents_id=".$cstudents_id."");

   }
    
    mysql_close();


 ?>
