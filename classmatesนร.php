 <?php session_start(); ?>
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
            
             <div class="card-block">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link active" href="stream.php">Stream</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="classmates.php">Classmates</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                            </ul>
                </div>
                <h1>Classmates</h1>
                  <br>
                     <?php
                               include("mysqlconn.php");
                                $strSQL = "SELECT * FROM  users  WHERE facebook_id = '".$_SESSION["strFacebookID"]."' " ;//WHERE user_id
                                $objQuery = mysql_query($strSQL);
                                while ($row =mysql_fetch_array($objQuery)) {?>
                  <div class="listview">
                        <div class="toolbar">
                            <img src=<?php "https://graph.facebook.com/".$_SESSION["hdnFbID"]."/picture?type=large" ?> class="listview__img" alt="">

                        <div class="toolbar__label"><?php echo " $row[user_name]<br>"?> <p><small><?php echo " $row[user_surname]<br>"?></small> </p>
                        </div>
                            
                        </div>
 <?php } ?>
                    <?php
                               include("mysqlconn.php");
                                $strSQL = "SELECT users.user_name,users.user_surname FROM students_in_class INNER JOIN users ON students_in_class.facebook_id = users.facebook_id WHERE students_in_class.class_id = 4614102 " ;//WHERE user_id
                                $objQuery = mysql_query($strSQL);
                                while ($row =mysql_fetch_array($objQuery)) {?>

                    <div class="listview__item">
                         <img src=<?php "https://graph.facebook.com/".$row["facebook_id"]."/picture?type=large" ?> class="listview__img" alt="">
                              <div class="listview__content">
                               <div class="listview__heading"><?php echo " $row[user_name]<br>"?><br></div>
                                    <p><?php echo " $row[user_surname]<br>"?></p>
                                    </div>
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