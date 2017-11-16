<?php
session_start(); 
include("mysqlconn.php");
$select_users = "SELECT * FROM  users  WHERE facebook_id = '".$_GET["classid"]."' " ;//WHERE user_id

$query_users = mysql_query($select_users);
$row_users =mysql_fetch_array($query_users);
$select_students_in_class = "SELECT * FROM students_in_class INNER JOIN users ON students_in_class.facebook_id = users.facebook_id WHERE students_in_class.class_id = '".$_GET["classid"]."' " ;//WHERE user_id
$query_students_in_class = mysql_query($select_students_in_class);

$select_users = "SELECT
classes.class_id,
classes.class_name,
classes.description,
classes.passclassroom,
classes.archivedclass,
classes.Max_stdents,
classes.facebook_id
FROM
classes  WHERE class_id = '".$_GET["classid"]."' " ;//WHERE user_id

$query_classes = mysql_query($select_classes);
$row_classes =mysql_fetch_array($query_classes);
/*
SELECT
classes.class_id,
classes.class_name,
classes.description,
classes.passclassroom,
classes.archivedclass,
classes.Max_stdents,
classes.facebook_id
FROM
classes 
*/
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
            <?php Include 'topmenu.php';?>
            <?php Include 'mainmenu.php';?>
            <section class="content">
            <div class="content__inner">
            <h1>Classmates</h1>
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
                    <div class="listview">      
                    <button type="button" class="btn btn-secondary">INVITE STUDENTS</button>
                    <button type="button" class="btn btn-secondary">ACTIONS</button>
                </div>
                        <div class="toolbar">
                            <img src=<?php echo  "https://graph.facebook.com/".$_SESSION["strFacebookID"]."/picture?type=large" ;?> class="listview__img" alt="">

                            <div class="toolbar__label"><?php echo " $row_users[user_name]<br>"?> <p><small><?php echo " $row_users[user_surname]<br>"?></small> </p>
                            </div>
                            
                        </div>
                        <?php while ($row1 =mysql_fetch_array($query_students_in_class)) {?>

                        
               
                            
                        <div class="listview">
                        <div class="listview__item">
                                

                                 <img src=<?php echo  "https://graph.facebook.com/".$row1["facebook_id"]."/picture?type=large" ;?> class="listview__img" alt="">
                                 <div class="clearfix mb-3"></div>
                        </div>

                                <div class="listview__content">

                                   

                                <div class="listview__heading"><?php echo " $row1[user_name]<br>"?></div>

                                 

                                    <p><?php echo " $row1[user_surname]<br>"?></p>
                                </div>

                                   <?php if($row_classes["facebook_id"]==$_SESSION["strFacebookID"]){ ?>
                                    <a href="det.php?fbid=<?php echo $row['facebook_id']; ?>&classname=<?php  echo $row['class_id']; ?>" class="price-table__action bg-light-blue">Delete</a>
                                <?php } ?>
                            </div>
                        
                            <?php } ?>
                            <div class="clearfix mb-3"></div>
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