<?php session_start();
Include ("mysqlconn.php");
$users="SELECT * FROM students_in_class LEFT JOIN activities ON students_in_class.student_in_class_id = activities.facebook_id WHERE students_in_class.facebook_id = '".$_SESSION["strFacebookID"]."' order by activity_id DESC
limit 0,5";
$Query_users=mysql_query($users);
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
        <link rel="stylesheet" href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">
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
                        <div class="actions">
                            
                            <a href="classmates.php?classid=<?php echo $_GET["classid"]; ?>&cstudents_id=<?php echo $_GET["cstudents_id"];?>" class="actions__item zmdi zmdi-accounts"></a>

                            <a href="about.php?classid=<?php echo $array_students['class_id']; ?>&cstudents_id=0" class="actions__item zmdi zmdi-alert-circle-o"></a>

                        </div>
                    </header>

                <div class="invoice">
                        <div class="invoice__header">
                            
                        </div>

                        <div class="row invoice__address">
                            <div class="col-6">
                                <div class="text-right">
                                    <div class="jumbotron">
                                <h3 class="display-3">Archivedclasses</h3>
                                <p class="lead">ชั้นเรียนที่เก็บไว้</p>

                                <hr class="my-4">

                                <p> </p>

                                <a href="archivedclasses.php" class="view-more text-left">View Archivedclasses...</a>
                            </div>

                            <br>

                                </div>
                            </div>


                    <div class="col-6">
                        <div class="text-left">
                                     <div class="jumbotron">
                                <h3 class="display-3">Deadline</h3>
                                <p class="lead">ชิ้นงานที่กำลังจะหมดอายุ</p>

                        </div>
                    <?php while ($array_users =mysql_fetch_array($Query_users)) {?>
                        <div class="listview">
                             <div class="listview__item">
                                <label class="custom-control custom-control--char todo__item">
                                    <input class="custom-control-input" type="checkbox" value="">
                                    <span class="custom-control--char__helper"><i class="bg-red">P</i></span>
                                    <div class="todo__info">
                                        <span><?php echo "$array_users[activity_name]"; ?></span>
                                        <small>End to <?php echo "$array_users[activity_end_date]"; ?></small>
                                    </div>
                                    </label>

                                <div class="actions listview__actions">
                                    <div class="dropdown actions__item">
                                        <i class="zmdi zmdi-more-vert" data-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="">Mark as completed</a>
                                            <a class="dropdown-item" href="">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <?php }?>
                            <hr class="my-4">
                             <p> </p>
                            <a href="work.php" class="view-more text-left">View More</a>
                        </div>
                    </div>
              </div>

                            <br>

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
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>

        <script src="vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="vendors/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
        <script src="vendors/jquery.sparkline/jquery.sparkline.min.js"></script>
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

        <!-- Charts and maps-->
        <script src="demo/js/flot-charts/curved-line.js"></script>
        <script src="demo/js/flot-charts/line.js"></script>
        <script src="demo/js/flot-charts/chart-tooltips.js"></script>
        <script src="demo/js/other-charts.js"></script>
        <script src="demo/js/jqvmap.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>