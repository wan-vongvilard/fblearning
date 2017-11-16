 <?php  
session_start();
include("mysqlconn.php");
$strSQL = " SELECT
classes.class_name,
classes.description,
users.user_name as name,
users.user_surname,
users.user_schoolname,
classes.facebook_id as face,
classes.class_id
FROM
classes
LEFT JOIN  users ON classes.facebook_id = users.facebook_id
WHERE classes.class_id = '".$_GET["classid"]."' " ;//WHERE user_id

$objQuery = mysql_query($strSQL);
$row =mysql_fetch_array($objQuery);
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

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
    </head>

    <body data-ma-theme="green">
        <main class="main">
            <?php Include 'topmenu.php'; ?>
            <?php Include 'mainmenu.php'; ?>
            <section class="content">
                <div class="content__inner">
                <h1>About</h1>
                <div class="card-block">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="stream.php?classid=<?php echo $_GET["classid"]; ?>&cstudents_id=<?php echo $_GET["cstudents_id"];?>">Stream</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="classmates.php?classid=<?php echo $_GET["classid"]; ?>&cstudents_id=<?php echo $_GET["cstudents_id"];?>">Classmates</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php?classid=<?php echo $_GET["classid"]; ?>&cstudents_id=<?php echo $_GET["cstudents_id"];?>">About</a>
                                </li>
                            </ul>
                </div>
                <br>
                </header>
                    <div class="contacts row">
                        <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
                            <div class="contacts__item">
                                <a href="" class="contacts__img">
                                    <img src=<?php echo  "https://graph.facebook.com/".$row["face"]."/picture?type=large" ;?>  alt="">
                                </a>

                                <div class="contacts__info">
                                    <strong><?php echo $row["name"]; ?></strong>
                                    <small><?php echo $row["user_surname"]; ?></small>
                                </div>
                            </div>
                        </div>
                    
               

                <div class="card-demo">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="card-title"><?php echo $row["class_name"]; ?></h1>
                        </div>

                        <div class="card-block">
                        <div class="card-footer">
                            <p>Google Drive folder</p>
                             <a href=""><i class="zmdi zmdi-folder"></i> <?php echo $row["class_name"]; ?></a>

                            
                            <p>Calendar</p>
                            <a href="calendar.php"><i class="zmdi zmdi-calendar"></i> View in Classroom </a>
                        </div>
                        </div>
                        </div>
                        </div>
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
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>