<?php session_start();
//INSERT INTO `submit_activities`(`submit_activitie`, `details`, `datetime`, `facebook_id`) VALUES ([value-1],[value-2],[value-3],[value-4]) 
$_SESSION['activity_id']=$_GET['activityid'];
echo $_SESSION['class_id'];
echo "       ";
echo $_SESSION['activity_id'];
echo "       ";
echo $_SESSION['strFacebookID'];
$c= $_SESSION['class_id'];
$a= $_SESSION['activity_id'];
$f= $_SESSION['strFacebookID'];
echo "       ";
$storeFolder = 'uploads/'.$c.'/'.$a.'/'.$f.'';
echo $storeFolder;
if(isset($_POST["sendanwer"])){
include("mysqlconn.php") ;   
date_default_timezone_set("Asia/Bangkok");
$dateact=date("Y-m-d h:i:sa");
$sql_insert ="INSERT INTO `submit_activities`( `details`, `activity_id`,`facebook_id`, `datetime`) 
VALUES  ('".$_POST["sendanwer"]."',''".$_GET['activityid']."'','".$_SESSION["strFacebookID"]."','".$dateact."')";

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
                <div class="card card-inverse widget-profile col-md-12">

                        <h1>Send Work</h1>
                        </div>
                       
                        <div class="card-block">  
                        <?php 
                               include("mysqlconn.php");
                               
                                $strSQL = "SELECT *
                                            FROM
                                            activities  WHERE activity_id = '".$_GET['activityid']."'" ;//WHERE user_id
                               
                                $objQuery = mysql_query($strSQL);
                                while ($row =mysql_fetch_array($objQuery)) {?>                     
                            <h3 class="card-block__title"><?php echo "$row[activity_data]"; ?></h3>
                            <?php } ?>
                            <br>

                            <div class="form-group">
                                <textarea id="sendanwer" name="sendanwer" class="form-control textarea-autosize" placeholder="Please Enter text"></textarea>
                                <i class="form-group__bar"></i>
                            </div>    
                        </div>
                        <button type="submit" class="btn btn-default">Save</button>
                        </form>

                         <form action="dropzone/js/dropzone/upload.php" class="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" />
                            </div>
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