 <?php 
session_start();//UPDATE `activities` SET `activity_id`=[value-1],`activity_name`=[value-2],`activity_data`=[value-3],`activity_std_num`=[value-4],`activity_dataTime`=[value-5],`activity_end_date`=[value-6],`activity_type_id`=[value-7],`facebook_id`=[value-8],`max_score`=[value-9],`class_id`=[value-10] WHERE 1
    include("mysqlconn.php") ;
        $sql_up ="UPDATE `activities` SET 
        `activity_name`='".$_POST["activity_name1"]. "',
        `activity_data`='".$_POST["activity_data1"]. "',
        `activity_end_date`='".$_POST["dd"]. "',
        `activity_type_id`='".$_POST["activity_type_id1"]. "',
        `max_score`='".$_GET['activity_score']."'
        WHERE  `activity_id`='".$_GET["activity_id"]."')";
       
        $sql2 = mysql_query($sql_up);
        if(!$sql2){
                echo $sql_up;
                echo "yes";
                header("location:stream.php?classid=".$classid."&cstudents_id=".$cstudents_id."");

            }
        else{
                echo $sql_up;
                echo "no";
                header("location:stream.php?classid=".$classid."&cstudents_id=".$cstudents_id."");
            }


    mysql_close();

 ?>
