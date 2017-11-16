<?php session_start();
//INSERT INTO `submit_activities`(`submit_activitie`, `details`, `datetime`, `activity_id`) VALUES ([value-1],[value-2],[value-3],[value-4])
if(isset($_POST["sendanwer"])){
include("mysqlconn.php") ;   
date_default_timezone_set("Asia/Bangkok");
$dateact=date("Y-m-d h:i:sa");
$sql_insert ="INSERT INTO `submit_activities`( `details`, `activity_id`, `datetime`) 
VALUES  ('".$_POST["sendanwer"]."','5','".$dateact."')";
 $sql = mysql_query($sql_insert);

        if(!$sql){

                echo "yes";
                //header("location:dashboard.php");

            }
        else{
                //echo "no";
                echo $sql;
                header("location:dashboard.php");
            }
            mysql_close();
}
?>
<!DOCTYPE html>
<html lang="en">
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
<link rel="stylesheet" media="screen" href="dropzone/js/dropzone/dropzone.css" type="text/css" />
<script src="dropzone/js/dropzone/dropzone.js"></script>

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
    </head>

    <body data-ma-theme="green">
        <main class="main">
            <?php Include 'topmenu.php'; ?>
            <?php Include 'mainmenu.php'; ?>
            <section class="content">
                <div class="card">
                <form action="list_flie.php" method="post">
                        <div class="card-header">
                            <h2 class="card-title">งานที่ส่ง</h2>
                        </div>

                         
                        <?php 
                               

                               include("mysqlconn.php");
                               
                                $strSQL = "SELECT
                                            submit_activities.datetime,
                                            submit_activities.details,
                                            users.user_name
                                            FROM
                                            submit_activities
                                            INNER JOIN activities ON activities.activity_id = submit_activities.activity_id
                                            INNER JOIN students_in_class ON students_in_class.student_in_class_id = activities.students_id
                                            INNER JOIN users ON users.facebook_id = students_in_class.facebook_id " ;//WHERE user_id
                               
                                $objQuery = mysql_query($strSQL);
                                while ($row =mysql_fetch_array($objQuery)) {?>
                                <div class="card-block">                      
                            <h3 class="card-block__title"><?php  echo " $row[user_name]"; echo " คำตอบ $row[details] "; ?><?php echo " เวลา $row[datetime]"; ?></h3>
                            <div class="form-group">
                             <label>ให้คะแนน</label>
                             <input class="form-control required" type="text" name="fname" >
                            </div>
                            
                            <br>
  
                        </div>
                        
                        <?php } ?>
                        <button type="submit" class="btn btn-default"> Save </button>
                        </form>
               
                        
                
                    
                        
                </div>
            </section>
        </main>

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/tether/dist/js/tether.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>