 <?php 
session_start();
    include("mysqlconn.php") ;
        $sql_up ="UPDATE `classes` SET 
        `class_name`= '". $_POST["classname"]."' ,
        `description` = '". $_POST["descr"]. "',
        `passclassroom`= '". $_POST["pass"]. "',
        'WHERE class_id = '".$_GET["classid"]."'";
        $sql2 = mysql_query($sql_up);
        if(!$sql2){
                echo $sql_up;
                echo "yes";
                header("location:class.php");

            }
        else{
                echo $sql_up;
                echo "no";
                header("location:class.php");
            }


    mysql_close();

 ?>
