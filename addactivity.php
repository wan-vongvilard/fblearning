<?php
session_start();
$session['activity_name']=$_POST["activity_name1"];
//INSERT INTO `classes`(`class_id`, `passclassroom`, `class_name`) VALUES (1,2,3)
include("mysqlconn.php") ;
mysql_query("SET NAMES UTF8");
date_default_timezone_set("Asia/Bangkok");
$dateact=date("Y-m-d h:i:sa");
//INSERT INTO `activities`(`activity_id`, `activity_name`, `activity_data`, `activity_std_num`, `activity_dataTime`, `activity_end_date`, `activity_type_id`, `facebook_id`, `max_score`, `class_id`)
        $sql_insert ="INSERT INTO `activities`(
        `activity_id`,
        `activity_name`,
        `activity_data`,
        `activity_dataTime`,
        `activity_end_date`,
        `activity_type_id`, 
        `facebook_id`,
        `max_score`,
        `class_id`) 
        VALUES (
        null,
        '".$_POST["activity_name1"]. "', 
        '".$_POST["activity_data1"]. "',
        '".$dateact."',
        '".$_POST["dd"]. "',
        '".$_POST["activity_type_id1"]. "',
        '".$_SESSION['strFacebookID']."',
        '".$_GET['activity_score']."',
        '".$_GET["classid"]."')";
       
        $sql2 = mysql_query($sql_insert);

        if(!$sql2){

                echo "yes เข้าไม่ได้";//เข้าไม่ได้
               // echo $sql_insert;

                include("fbnotification.php");
              //  header("location:stream.php");                

            }
        else{
                //echo "no";

           // echo $sql_insert;
                include("fbnotification.php");          
                //header("location:stream.php");                      
            }
            mysql_close();
    



?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                         <a class="nav-link active" href="stream.php?classid=<?php echo $_GET["classid"]; ?>&cstudents_id=<?php echo $_GET["cstudents_id"];?>">Stream</a>
                    </div>
                </div>
            </div>

</body>
</html>
