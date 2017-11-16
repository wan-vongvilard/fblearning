<?php
if (!isset($_SESSION)) {
  session_start();
}

include("mysqlconn.php"); //ตัวเรียกฐานข้อมูล
$users = "SELECT
classes.class_name,
students_in_class.facebook_id
FROM
students_in_class
INNER JOIN classes ON students_in_class.class_id = classes.class_id
WHERE students_in_class.facebook_id = '".$_SESSION["strFacebookID"]."'"; //สั่งเรียกใช้งาน = ตัวดึงค่า 

$Query_students = mysql_query($users); //เรียกข้อมูลจาก php ตัวแปรตัวที่ 1
$Work_students = "SELECT 
*
FROM students_in_class /*เรียกจากตารางที่จะใช้งาน*/
LEFT JOIN activities ON students_in_class.student_in_class_id = activities.facebook_id/*การเชื่อมโยงตาราง*/
WHERE students_in_class.facebook_id = '".$_SESSION["strFacebookID"]."'";/*เงื่อนไขการทำงาน*/

$Work1_students = mysql_query($Work_students); //เรียกข้อมูลจาก php ตัวแปรตัวที่ 2
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
        <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
    </head>

    <body data-ma-theme="green">
        <main class="main">
            <?php Include 'topmenu.php';?>
            <?php Include 'mainmenu.php';?>
            
            <section class="content">
            <div class="content__inner">
             <header class="content__title">
                <div class="card card-inverse widget-profile col-md-12">
                        <h1>Work</h1> </div> </header>
                    
                    <div class="row todo">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="toolbar toolbar--inner">
                                    
                            <div class="dropdown-demo">
                                <div class="btn-group" dropdown>
                                    <button type="button" class="btn btn-secondary">All classes</button>
                                    <button type="button" class="btn btn-secondary dropdown-toggle-split" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu">
                                        <?php
                                        while ($array_users =mysql_fetch_array($Query_students)){
                                        ?>
                                        <li><a class="dropdown-item" href=""><?php echo "$array_users[class_name]<br>"; ?></a></li>
                                         <?php } ?>                                    
                                    </ul>
                                </div>
                            </div>
                                    <div class="toolbar__search">

                                        <input type="text" placeholder="Search...">

                                        <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-ma-action="toolbar-search-close"></i>
                                    </div>
                                </div>
                       
                        <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Deadline</h2>
                        </div>

                        <div class="card-block"
                        <?php
                        while ($Work_students =mysql_fetch_array($Work1_students)){//วนหมุน
                        ?>
                    
                            <div class="alert alert-info" role="alert">
                                <strong><?php echo "$Work_students[class_name]<br>"; ?></strong><?php echo "$Work_students[class_name]<br>"; 
//echo แสดงค่า
                                ?> 
                            </div>
                            <?php }?>
                           </div>
                    </div>
            </section>
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/tether/dist/js/tether.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>